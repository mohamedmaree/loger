<?php

namespace Logger\Classes;

use Logger\Interfaces\SessionInterface;
class Session implements SessionInterface
{
    public bool $login = false;

    /**
     * @return bool
     * to return user login or not
     */
    public function getLogin(): bool
    {
        return $this->login = (isset($_SESSION['login']))? $_SESSION['login'] : false;
    }

    /**
     * @param bool $session
     * @return void
     * to set login to ture or false
     */
    public function setLogin(bool $session): void
    {
        $_SESSION['login'] = $session;
        $this->login = $session;
    }
}
