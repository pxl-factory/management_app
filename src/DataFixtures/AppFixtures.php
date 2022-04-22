<?php

namespace App\DataFixtures;

use App\Entity\Departement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
    
        // $departement = new Departement();
        // $departement->setManagerLastName('GOUMENT');
        // $departement->setManagerFirstName('Yann');
        // $departement->setDepartmentName('Architecture');
        // $departement->setManagerMail('yann.goument@venture-orbital.com');
        // $manager->persist($departement);

        // $departement = new Departement();
        // $departement->setManagerLastName('DELIRY');
        // $departement->setManagerFirstName('Nicolas');
        // $departement->setDepartmentName('Propulstion');
        // $departement->setManagerMail('nicolas.deliry@venture-orbital.com');
        // $manager->persist($departement);

        // $departement = new Departement();
        // $departement->setManagerLastName('BATICLE');
        // $departement->setManagerFirstName('Nicolas');
        // $departement->setDepartmentName('ESS');
        // $departement->setManagerMail('bastien.baticle@venture-orbital.com');
        // $manager->persist($departement);

        // $departement = new Departement();
        // $departement->setManagerLastName('BOURASSEAU');
        // $departement->setManagerFirstName('Adrien');
        // $departement->setDepartmentName('Systems');
        // $departement->setManagerMail('adrien.bourasseau@venture-orbital.com');
        // $manager->persist($departement);

        // $departement = new Departement();
        // $departement->setManagerLastName('POURCEL');
        // $departement->setManagerFirstName('Arthur');
        // $departement->setDepartmentName('Prduction and integration');
        // $departement->setManagerMail('arthur.pourcel@venture-orbital.com');
        // $manager->persist($departement);

        $manager->flush();
    }
}
