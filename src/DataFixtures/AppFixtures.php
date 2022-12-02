<?php

namespace App\DataFixtures;

use App\Entity\Pilote;
use App\Entity\Qualification;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $qualification = new Qualification();
        $qualification
            ->setCode('COPIL')
            ->setLibelle('Copilote');
        $manager->persist($qualification);

        $pilote = new Pilote();
        $pilote
            ->setNom('Sardoux')
            ->setPrenom('Michel')
            ->setEmail('michelsardoux@gmail.com')
            ->setQualification($qualification);
        $manager->persist($pilote);

        $manager->flush();

    }
}
