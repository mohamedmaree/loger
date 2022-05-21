<?php

namespace Logger\Interfaces;

interface SessionInterface
{
    /**
     * @return bool
     * to return user login or not
     */
    public function getLogin(): bool;

    /**
     * @param bool $session
     * @return void
     * to set login to ture or false
     */
    public function setLogin(bool $session): void;
}
