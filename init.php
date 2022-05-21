<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/src/config/config.php';
if(!isset($_SESSION))
{
    session_start();
}
