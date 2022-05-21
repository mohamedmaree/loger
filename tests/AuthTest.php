<?php
namespace Tests;

use Logger\Classes\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{

    /**
     * @return void
     */
    public function testLogin(): void
    {
        $user = new Auth();
        $result = $user->login('admin', 'admin');
        $this->assertEquals(true, $result);
    }

    /**
     * @return void
     */
    public function testLogout(): void
    {
        $user = new Auth();
        $result = $user->logout();
        $this->assertEquals(null, $result);
    }

}
