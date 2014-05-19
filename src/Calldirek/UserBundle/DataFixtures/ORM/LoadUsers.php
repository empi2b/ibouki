<?php
/**
 * Created by PhpStorm.
 * User: epiard
 * Date: 5/10/14
 * Time: 6:22 PM
 */

namespace Calldirek\UserBundle\DataFixures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Calldirek\UserBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUsers implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setUsername('emeteyer');
        $user1->setEmail('emeteyer@example.com');
        $user1->setPassword('password');
        $user1->setFirstName('Emmanuel');
        $user1->setLastName('Meteyer');
        $user1->setPhoneNumber('9198989796');
        $user1->setAddress('1215 Sunset Drive');
        $user1->setCity('Coral Gables');
        $user1->setState('FL');
        $user1->setZipCode('33143');
        $user1->setCountry('USA');
        $user1->setRoles(array('ROLE_USER'));
        $user1->setEnabled(true);
        $manager->persist($user1);

        $user2 = new User();
        $user2->setUsername('lpiard');
        $user2->setEmail('lpiard@example.com');
        $user2->setPassword('password');
        $user2->setFirstName('Linda');
        $user2->setLastName('Piard');
        $user2->setPhoneNumber('5148989796');
        $user2->setAddress('123 Cote Des Neiges');
        $user2->setCity('Montreal');
        $user2->setState('QC');
        $user2->setZipCode('H32T5Z');
        $user2->setCountry('Canada');
        $user2->setRoles(array('ROLE_USER'));
        $user2->setEnabled(true);
        $manager->persist($user2);


        $manager->flush();
    }
}