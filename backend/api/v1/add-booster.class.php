<?php

// ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

require $_SERVER['DOCUMENT_ROOT'] . '/backend/config.php';

// print_r($_POST);

$booster_username = $_POST['booster_username'];
$booster_email = $_POST['booster_email'];
$booster_password = $_POST['booster_password'];

    $check = $sql->getAll("SELECT * FROM `booster_accounts` WHERE `email` = ?s", $booster_email);
    if (count($check) != 0) {
        $result = array("result" => "error", "message" => "The entered mail is already taken by someone");
        echo json_encode($result);
        die();
    }

    $insert = array(
        // "username"  => '',
        "email"     => $booster_email,
        "password"  => md5($booster_password),
        "username"  => $booster_username,
        // "date"      => time(),
        "status"    => "active"
        // "session"   => $hash,
        // "info"      => serialize($json_information),
    );

    // $hash = md5($login . ":" . $mail . ":" . md5($pass) . ":" . $sercret);

    $sql->query("INSERT INTO `booster_accounts` SET ?u", $insert);

    $result = array("result" => "success", "booster_id" => $sql->insertId());
    echo json_encode($result);
?>