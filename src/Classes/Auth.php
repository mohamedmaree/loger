<?php

namespace Logger\Classes;

use Logger\Interfaces\Authentication;

class Auth implements Authentication
{
    private string $username = '';
    private string $password = '';

    /**
     * @param string $username
     * @param string $pass
     * @return bool
     */
    public function login(string $username = '', string $pass = ''): bool
    {
        $result = $username == \USERNAME && $pass == \PASSWORD;
        if ($result) {
            $session = new Session();
            $session->setLogin(true);

            return true;
        } else {
            return false;
        }
    }

    /**
     * @return void
     */
    public function logout(): void
    {
        $session = new Session();
        $session->setLogin(false);
        session_destroy();
    }
}
