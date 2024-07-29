<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $movie = new Movie();
        $movie->setTitle("The dark Knight");
        $movie->setReleaseYear(2020);
        $movie->setDescription("this is the description of the dark knight");
        $movie->setImagePath("");

        // add data to pivot table 
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));

        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle("The Ninja");
        $movie2->setReleaseYear(2020);
        $movie2->setDescription("this is the description of the Ninja");
        $movie2->setImagePath("");

        // add data to pivot table 
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));

        $manager->persist($movie2);

        $manager->flush();
    }
}
