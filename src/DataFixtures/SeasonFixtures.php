<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    const SEASONS = [
        ["program_id" => 7,
         "number" => 1,
         "year" => 2007,
         "description" => 'Season 1'],
         ["program_id" => 7,
         "number" => 2,
         "year" => 2008,
         "description" => 'Season 2'],
         ["program_id" => 7,
         "number" => 3,
         "year" => 2009,
         "description" => 'Season 3'],
         ["program_id" => 7,
         "number" => 4,
         "year" => 2010,
         "description" => 'Season 4'],
         ["program_id" => 7,
         "number" => 5,
         "year" => 2011,
         "description" => 'Season 5'],
         ["program_id" => 7,
         "number" => 6,
         "year" => 2012,
         "description" => 'Season 6'],
         ["program_id" => 7,
         "number" => 7,
         "year" => 2013,
         "description" => 'Season 7'],
         ["program_id" => 7,
         "number" => 8,
         "year" => 2014,
         "description" => 'Season 8'],
         ["program_id" => 7,
         "number" => 9,
         "year" => 2015,
         "description" => 'Season 9'],
         ["program_id" => 7,
         "number" => 10,
         "year" => 2016,
         "description" => 'Season 10'],
         ["program_id" => 7,
         "number" => 11,
         "year" => 2017,
         "description" => 'Season 11'],
         ["program_id" => 7,
         "number" => 12,
         "year" => 2018,
         "description" => 'Season 12'],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::SEASONS as $key => $season) {
            $programId = $season['program_id'];
            $number = $season['number'];
            $year = $season['year'];
            $description = $season['description'];

            $newSeason = new Season();
            $newSeason->setProgram($this->getReference('program_' . $programId));
            $newSeason->setNumber($number);
            $newSeason->setYear($year);
            $newSeason->setDescription($description);
            $manager->persist($newSeason);
            $this->addReference('season_' . ($key+1), $newSeason);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont SeasonFixtures dépend
        return [
          ProgramFixtures::class,
        ];
    }
}