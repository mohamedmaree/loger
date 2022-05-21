<?php
use Logger\Classes\Session;
require __DIR__ . '/../init.php';

$session = new Session();
if (isset($_REQUEST["username"])) {
    $user = new \Logger\Classes\Auth();
    $login = $user->login($_REQUEST['username'], $_REQUEST['password']);
}

if (!$session->getLogin()) {
    include __DIR__ . '/login.php';
} else {
    include __DIR__ . '/table.php';
}
