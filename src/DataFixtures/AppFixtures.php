<?php

namespace App\DataFixtures;

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
        $book1 = new BookDetails();
        $book1->setTitle("Harry Potter");
        $book1->setAuthor("JK Rowling");


        $book2 = new BookDetails();
        $book2->setTitle("Game Of Thrones");
        $book2->setAuthor("George R Martin");


        $book3 = new BookDetails();
        $book3->setTitle("Roy Keane Autobiography");
        $book3->setAuthor("Roy Keane");





        UserFactory::createOne([
            'username' => 'matt',
            'password' => 'smith',
            'role' => 'ROLE_ADMIN'
        ]);

        UserFactory::createOne([
            'username' => 'john',
            'password' => 'doe',
            'role' => 'ROLE_ADMIN'
        ]);



        $manager->persist($book1);
        $manager->persist($book2);
        $manager->persist($book3);
        $manager->flush();
    }
}
