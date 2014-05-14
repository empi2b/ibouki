#!/bin/bash

if [ $(id -u) -ne 0 ]
then
  echo "This script requires root privileges for execution..."
  exit 1
fi

echo "preparing script logging"
SELF=$(readlink -f "$0")
SELF_PATH=$(dirname "$SELF")
LOG_FILE="${SELF}.log"
exec &> >(tee "${LOG_FILE}")

echo "begin provisioning"

echo "configuring php"
sed -i 's/;date.timezone.*=/date.timezone = UTC/' "/etc/php.ini"

echo "configuring php-fpm"
sed -i 's/listen\s*=\s*.*/listen = \/var\/run\/php-fpm\/php-fpm.sock/' "/etc/php-fpm.d/www.conf"
sed -i 's/user\s*=.*/user = www-data/' "/etc/php-fpm.d/www.conf"
sed -i 's/group\s*=.*/group = www-data/' "/etc/php-fpm.d/www.conf"

echo "configuring php-xdebug"

# this condition makes it possible to re-run provision without errors!
if ! grep -q "xdebug.remote_log" "/etc/php.d/20-xdebug.ini" &> /dev/null
then
    echo 'xdebug.remote_enable = 1' >> "/etc/php.d/20-xdebug.ini"
    echo 'xdebug.remote_connect_back = 1' >> "/etc/php.d/20-xdebug.ini"
    echo 'xdebug.remote_host=192.168.33.20' >> "/etc/php.d/20-xdebug.ini"
    echo 'xdebug.idekey = "vagrant"' >> "/etc/php.d/20-xdebug.ini"
    echo 'xdebug.remote_log="/tmp/xdebug.log"' >> "/etc/php.d/20-xdebug.ini"
fi

echo "adding hosts record for dev.ibouki.com"
if ! grep -q "dev.ibouki.com" "/etc/hosts" &> /dev/null
then
    echo "127.0.0.1 dev.ibouki.com" >> /etc/hosts
fi

echo "preparing needed directories"
mkdir -p "/usr/share/nginx/www/sites"
mkdir -p "/etc/nginx/conf.d"
mkdir -p "/etc/nginx/sites-enabled"
mkdir -p "/etc/nginx/sites-available"
mkdir -p "/var/log/nginx/ibouki.com"

echo "creating log files"
touch "/var/log/nginx/ibouki.com/access.log"
touch "/var/log/nginx/ibouki.com/error.log"

echo "copying provisioned files"
cp "/vagrant/files/nginx/nginx.conf" "/etc/nginx/nginx.conf"
cp "/vagrant/files/nginx/sites-available/default" "/etc/nginx/sites-available/default"
ln -fs "/etc/nginx/sites-available/default" "/etc/nginx/sites-enabled/default"
cp "/vagrant/files/ssh/known_hosts" "/home/vagrant/.ssh/known_hosts"
cp "/vagrant/files/ssh/sgdeploykey/id_rsa" "/home/vagrant/.ssh/sgprod"
cp "/vagrant/files/ssh/sgdeploykey/id_rsa.pub" "/home/vagrant/.ssh/sgprod.pub"

echo "adjusting file ownership"
chmod 644 "/etc/nginx/nginx.conf"
chmod 644 "/etc/nginx/sites-available/default"
chown -R vagrant:vagrant "/home/vagrant"
chmod 700 "/home/vagrant/.ssh"
chmod -R 600 "/home/vagrant/.ssh/"*
chmod 644 "/home/vagrant/.ssh/known_hosts"
chmod +x "/usr/share/nginx/www/sites/ibouki/phpunit.sh"

echo "rebooting services"
service php-fpm restart
service mysqld restart
service nginx restart

echo "creating databases"
mysql -uroot -e 'CREATE DATABASE IF NOT EXISTS `ibouki`'
mysql -uroot -e 'CREATE DATABASE IF NOT EXISTS `ibouki-dev`'
mysql -uroot -e 'CREATE DATABASE IF NOT EXISTS `ibouki-test`'
mysql -uroot -e 'CREATE DATABASE IF NOT EXISTS `ibouki_dev`'
mysql -uroot -e 'CREATE DATABASE IF NOT EXISTS `ibouki_test`'
mysql -uroot -e 'UPDATE mysql.user SET Host = "%" WHERE User = "root" AND Host = "localhost"'
mysql -uroot -e 'DELETE FROM mysql.user WHERE User = ""'
mysql -uroot -e 'FLUSH PRIVILEGES'

# run any local provisioning the user wants
if [ -f /vagrant/local_provision ]; then
    sh /vagrant/local_provision
fi

echo "grabbing you a copy of the log file (in case of errors)"
cp "/tmp/vagrant-shell.log" "/vagrant/vagrant-shell.log"

echo "Provisioning has completed."
echo "All output has been logged to: ${LOG_FILE}"
echo "If the site does not load please reboot the VM before continuing (vagrant halt && vagrant up)"
