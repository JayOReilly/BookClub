<?php

namespace App\Tests\Controller;

use App\Controller\BookCatController;
use PHPUnit\Framework\TestCase;
/**
 * @dataProvider additionProvider
 */

class BookCatControllerTest extends TestCase
{

    public function testNew()
    {
        $test1 = new BookCatController();

        $test1->new()->isSuccessful();

        self::assertEquals($test1);

    }

    public function testName()
    {

    }

    public function testIndex()
    {

    }

    public function testShow()
    {

    }

    public function testDelete()
    {

    }

    public function testEdit()
    {

    }
}
