<?php

namespace App\Tests\DataFixtures;

use App\DataFixtures\AppFixtures;
use App\Entity\BookCat;
use PHPUnit\Framework\TestCase;

class AppFixturesTest extends TestCase
{

    public function testLoad()
    {
        $test1 = new BookCat();

        $this->assertNotNull($test1);

    }

    public function bookTitle(){
        $test2 = new BookCat();

        $test2->getTitle();
        $test2->getReviews();
        $test2->getAuthor();
        $test2->getRating();

        $this->assertNotNull($test2);
    }
}
