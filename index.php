<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

/* ------------------------------------ * ----------------------------------- */

// FORM: username
if (!empty($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];

    // prevent form resubmission on page reload
    header("Location: {$_SERVER['REQUEST_URI']}", true, 303);
    exit();
}

/* ------------------------------------ * ----------------------------------- */

require_once './view.php';
