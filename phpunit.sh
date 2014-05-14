#!/bin/bash

# look for phpunit
if [ -x "bin/phpunit" ]
then
    PHPUNIT="./bin/phpunit"
elif which phpunit &> /dev/null
then
    PHPUNIT=phpunit
else
    echo "Please install phpunit via composer install --dev"
    exit 1
fi

# run phpunit passes arguments through to PHPUnit
$PHPUNIT -c app/ $1 $2

echo "Coverage report is now available at dev.sgmarketplace.com/coverage/index.html"
