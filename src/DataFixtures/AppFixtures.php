<?php

namespace App\DataFixtures;

use App\Entity\BookCat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Factory\UserFactory;
use App\Factory\MakeFactory;
use App\Factory\PhoneFactory;
use App\Entity\BookDetails;

class AppFixtures extends Fixture
{


    public function load(ObjectManager $manager): void
    {
        $book1 = new BookCat();
        $book1->setTitle("Harry Potter");
        $book1->setAuthor("JK Rowling");
        $book1->setReviews("Brilliant book, one for the whole family");
        $book1->setRating('4.0');




        $book2 = new BookCat();
        $book2->setTitle("Game Of Thrones");
        $book2->setAuthor("George R Martin");
        $book2->setReviews("Better than the T.V series");
        $book2->setRating('5.0');


        $book3 = new BookCat();
        $book3->setTitle("Roy Keane Autobiography");
        $book3->setAuthor("Roy Keane");
        $book3->setReviews("A irish footballing legend");
        $book3->setRating('4.7');





        UserFactory::createOne([
            'email' => 'matt@matt.com',
            'password' => 'smith',
            'role' => 'ROLE_ADMIN'
        ]);

        UserFactory::createOne([
            'email' => 'john@john.com',
            'password' => 'doe',
            'role' => 'ROLE_ADMIN'
        ]);



        $manager->persist($book1);
        $manager->persist($book2);
        $manager->persist($book3);
        $manager->flush();
    }
}
