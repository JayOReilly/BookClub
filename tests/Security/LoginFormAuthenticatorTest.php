<?php

namespace App\Tests\Security;

use App\Security\LoginFormAuthenticator;
use PHPUnit\Framework\TestCase;
use pq\Result;


class LoginFormAuthenticatorTest extends TestCase
{



    public function test__construct()
    {



    }

    public function testAuthenticate()
    {
        $auth = new LoginFormAuthenticator();
        $authTest = $this->test__construct();

        $auth->authenticate()->getUser()->getUserIdentifier();

        $this->assertEquals($authTest);

    }

    public function testOnAuthenticationSuccess()
    {

        $auth1 = new LoginFormAuthenticator();

        $auth1->onAuthenticationSuccess()->isSuccessful();


    }
}
