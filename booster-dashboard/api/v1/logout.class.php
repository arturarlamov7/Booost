<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/config.php');

unset($_COOKIE["neraboost_board"]);
setcookie('neraboost_board', null, -1, '/');

header('Location: https://neraboost.com/booster-dashboard');
