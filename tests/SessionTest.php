<?php
namespace Tests;

use Logger\Classes\Session;
use PHPUnit\Framework\TestCase;

class SessionTest extends TestCase
{

    /**
     * @return void
     */
    public function testGetLogin(): void
    {
        $session = new Session();
        $result = $session->getLogin();
        $this->assertEquals(false, $result);
    }

    /**
     * @return void
     */
    public function testSetLogin(): void
    {
        $session = new Session();
        $session->setLogin(true);
        $result = $session->login;
        $this->assertEquals(true, $result);
    }

}
