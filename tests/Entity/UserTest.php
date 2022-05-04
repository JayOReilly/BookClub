<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testGetPassword()
    {
        $userTest = new User();

        $expectedResult = "";

        $userTest->getPassword();

        $this->assertNotNull($userTest);




    }

    public function testGetRole()
    {

        $userTest1 = new User();

       $userTest1->getRole();

       $this->assertEquals($userTest1->getRole());
    }

    public function testGetUserIdentifier()
    {

    }

    public function testGetRoles()
    {

    }

    public function testGetEmail()
    {

    }

    public function testSetEmail()
    {

    }

    public function testGetId()
    {

    }

    public function testEraseCredentials()
    {

    }

    public function testSetPassword()
    {

    }

    public function testSetRole()
    {

    }
}
