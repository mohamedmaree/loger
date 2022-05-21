<?php

namespace Logger\Interfaces;

interface Authentication
{
    /**
     * @param string $username
     * @param string $pass
     * @return bool
     */
    public function login(string $username = '', string $pass = ''): bool;

    /**
     * @return void
     */
    public function logout(): void;

}
