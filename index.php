<?php

use Logger\Classes\Session;

require __DIR__ . '/init.php';

$session = new Session();
if (isset($_REQUEST['q']) && $_REQUEST['q'] == 'logout') {
    $session->setLogin(false);
}

include_once __DIR__ . '/views/layouts/header.php';

if (!$session->getLogin()) {
    include_once __DIR__ . '/views/login.php';
} else {
    include_once __DIR__ . '/views/table.php';
}

include_once __DIR__ . '/views/layouts/footer.php';
