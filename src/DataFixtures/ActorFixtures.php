<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    const ACTORS = [
        ["firstname" => 'Andrew', "lastname" => 'Lincoln', "birthdate" => '14/09/1973'],
        ["firstname" => 'Norman', "lastname" => 'Reedus', "birthdate" => '06/01/1969'],
        ["firstname" => 'Lauren', "lastname" => 'Cohan', "birthdate" => '07/01/1982'],
        ["firstname" => 'Danai', "lastname" => 'Gurira', "birthdate" => '14/02/1978'],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::ACTORS as $actor) {
            $firstname = $actor['firstname'];
            $lastname = $actor['lastname'];
            $day = substr($actor['birthdate'], 0, 2);
            $month = substr($actor['birthdate'], 3, 2);
            $year = substr($actor['birthdate'], 6, 4);
            $birthdate = new DateTime();
            $birthdate->setdate($year, $month, $day);
            $newActor = new Actor();
            $newActor->setFirstname($firstname);
            $newActor->setLastname($lastname);
            $newActor->setBirthDate($birthdate);
            $manager->persist($newActor);
        }

        $manager->flush();
    }
}
