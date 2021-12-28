<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    const PROGRAMS = [
        [
            "title" => 'Walking Dead',
            "summary" => 'Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants.',
            "poster" => "https://m.media-amazon.com/images/M/MV5BZmFlMTA0MmUtNWVmOC00ZmE1LWFmMDYtZTJhYjJhNGVjYTU5XkEyXkFqcGdeQXVyMTAzMDM4MjM0._V1_.jpg",
            "category_id" => 1,
            "slug" => 'Walking Dead',
            "actors" => [1, 2, 3, 4],
            "owner" => 0
        ],
        [
            "title" => 'The Haunting Of Hill House',
            "summary" => 'Plusieurs frères et sœurs qui, enfants, ont grandi dans la demeure qui allait devenir la maison hantée la plus célèbre des États-Unis, sont contraints de se réunir pour finalement affronter les fantômes de leur passé.',
            "poster" => "https://m.media-amazon.com/images/M/MV5BMTU4NzA4MDEwNF5BMl5BanBnXkFtZTgwMTQxODYzNjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg",
            "category_id" => 1,
            "slug" => 'The Haunting Of Hill House',
            "actors" => [],
            "owner" => 1
        ],
        [
            "title" => 'American Horror Story',
            "summary" => 'A chaque saison, son histoire. American Horror Story nous embarque dans des récits à la fois poignants et cauchemardesques, mêlant la peur, le gore et le politiquement correct.',
            "poster" => "https://m.media-amazon.com/images/M/MV5BODZlYzc2ODYtYmQyZS00ZTM4LTk4ZDQtMTMyZDdhMDgzZTU0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg",
            "category_id" => 1,
            "slug" => 'American Horror Story',
            "actors" => [],
            "owner" => 0
        ],
        [
            "title" => 'Love Death And Robots',
            "summary" => 'Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons assoiffés de sang : tout ce beau monde est réuni dans 18 courts métrages animés déconseillés aux âmes sensibles.',
            "poster" => "https://m.media-amazon.com/images/M/MV5BMTc1MjIyNDI3Nl5BMl5BanBnXkFtZTgwMjQ1OTI0NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg",
            "category_id" => 1,
            "slug" => 'Love Death And Robots',
            "actors" => [],
            "owner" => 1
        ],
        [
            "title" => 'Penny Dreadful',
            "summary" => 'Dans le Londres ancien, Vanessa Ives, une jeune femme puissante aux pouvoirs hypnotiques, allie ses forces à celles d Ethan, un garçon rebelle et violent aux allures de cowboy, et de Sir Malcolm, un vieil homme riche aux ressources inépuisables.  Ensemble, ils combattent un ennemi inconnu, presque invisible, qui ne semble pas humain et qui massacre la population.',
            "poster" => "https://m.media-amazon.com/images/M/MV5BNmE5MDE0ZmMtY2I5Mi00Y2RjLWJlYjMtODkxODQ5OWY1ODdkXkEyXkFqcGdeQXVyNjU2NjA5NjM@._V1_SY1000_CR0,0,695,1000_AL_.jpg",
            "category_id" => 1,
            "slug" => 'Penny Dreadful',
            "actors" => [],
            "owner" => 0
        ],
        [
            "title" => 'Fear The Walking Dead',
            "summary" => 'La série se déroule au tout début de l épidémie relatée dans la série-mère The Walking Dead et se passe dans la ville de Los Angeles, et non à Atlanta. Madison est conseillère dans un lycée de Los Angeles. Depuis la mort de son mari, elle élève seule ses deux enfants : Alicia, excellente élève qui découvre les premiers émois amoureux, et son grand frère Nick qui a quitté la fac et a sombré dans la drogue.',
            "poster" => "https://m.media-amazon.com/images/M/MV5BYWNmY2Y1NTgtYTExMS00NGUxLWIxYWQtMjU4MjNkZjZlZjQ3XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg",
            "category_id" => 1,
            "slug" => 'Fear The Walking Dead',
            "actors" => [1],
            "owner" => 0
        ],
        [
            "title" => 'The Big Bang Theory',
            "summary" => "Leonard Hofstadter et Sheldon Cooper vivent en colocation à Pasadena, ville de l\'agglomération de Los Angeles. Ce sont tous deux des physiciens surdoués, « geeks » de surcroît. C\'est d\'ailleurs autour de cela qu\'est axée la majeure partie comique de la série. Ils partagent quasiment tout leur temps libre avec leurs deux amis Howard Wolowitz et Rajesh Koothrappali pour jouer à des jeux vidéo comme Halo, organiser un marathon de la saga Star Wars, jouer à des jeux de société comme le Boggle klingon ou de rôles tel que Donjons et Dragons, voire discuter de théories scientifiques très complexes.Leur univers routinier est perturbé lorsqu\'une jeune femme, Penny, s\'installe dans l\'appartement d\'en face. Leonard a immédiatement des vues sur elle et va tout faire pour la séduire ainsi que l\'intégrer au groupe et à son univers, auquel elle ne connaît rien.",
            "poster" => "https://upload.wikimedia.org/wikipedia/fr/6/69/BigBangTheory_Logo.png",
            "category_id" => 5,
            "slug" => 'The Big Bang Theory',
            "actors" => [],
            "owner" => 0
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PROGRAMS as $key => $program) {
            $title = $program['title'];
            $summary = $program['summary'];
            $poster = $program['poster'];
            $categoryId = $program['category_id'];
            $slug = $program['slug'];
            $actors = $program['actors'];
            $owner = $program['owner'];

            $newProgram = new Program();
            $newProgram->setTitle($title);
            $newProgram->setSummary($summary);
            $newProgram->setPoster($poster);
            $newProgram->setCategory($this->getReference('category_' . $categoryId));
            $newProgram->setSlug($slug);
            foreach ($actors as $actor) {
                $newProgram->addActor($this->getReference('actor_' . $actor));
            }
            $newProgram->setOwner($this->getReference('user_' . $owner));
            $manager->persist($newProgram);
            $this->addReference('program_' . ($key+1), $newProgram);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
            ActorFixtures::class,
            CategoryFixtures::class,
        ];
    }
}
