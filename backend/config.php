<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/config.php');

$isAdmin = true;
$page = '';
$section = '';

// if (isset($admins[$login])) {
//     $isAdmin = true;
// }

// $isAdmin = false;

// if (htmlspecialchars($_COOKIE["beta5ai_f4091"]) != '3a206f6f562e') {
//     $isAdmin = false;
// } else {
//     $isAdmin = true;
// }

if ($isAdmin != true) {
    require_once('auth.page.php');
    exit;
}

if (!empty($_GET['page'])) {
    $page = $_GET['page'];
}

if (!empty($_GET['section'])) {
    $section  = $_GET['section'];
}
