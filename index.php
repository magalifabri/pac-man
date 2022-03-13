<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

/* ------------------------------------ * ----------------------------------- */

if (!empty($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}

/* ------------------------------------ * ----------------------------------- */

require_once './view.php';
