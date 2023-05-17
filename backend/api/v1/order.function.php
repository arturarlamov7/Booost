<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

require $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

// $textid = 3;
// $hash = substr(strtolower(preg_replace('/[0-9_\/]+/','',base64_encode(sha1($textid)))),0,8);
// echo 'lol-'.$hash;
// exit;

$maxid = $sql->getOne("SELECT `id` FROM `orders` ORDER BY `id` DESC LIMIT 0, 1");
$order_id = $maxid++;
$game_type = 'lol';

$hash = substr(strtolower(preg_replace('/[0-9_\/]+/','',base64_encode(sha1($order_id)))),0,8);
$text_id = $game_type.'-'.$hash;

    $order_information = [
        "progress" => 0,
        "from_to" => [
            "from" => "Iron IV",
            "now" => "Bronze III",
            "to" => "Bronze I",
        ],
        "server" => "NA",
        "options" => [
            "" => ""
        ],
        "extra" => [
            "vpn_country" => "NA",
            "flash_position" => "none",
            "roles" => [
                "mid", "top"
            ],
            "champions" => [
                "champion1", "champion2", "champion3"
            ],
            "offline_mode" => false,
            "priority" => false,
            "streaming" => false,
            "coaching" => false,
        ],
        "account" => [
            "ign" => "",
            "login" => "",
            "password" => "",
        ]
    ];

    $insert = array(
        // "username"  => '',
        "text_id"   => $text_id,
        // "password"  => md5($booster_password),
        "user_id"  => 7,
        "game"  => "lol",
        "type"  => 1,
        "date"      => time(),
        "status"    => "unpaid",
        "price"    => 25.57,
        // "information"   => $hash,
        "information"      => serialize($order_information),
    );

    // $hash = md5($login . ":" . $mail . ":" . md5($pass) . ":" . $sercret);

    $sql->query("INSERT INTO `orders` SET ?u", $insert);

    echo 'done';

exit;

$championsjson = file_get_contents('http://ddragon.leagueoflegends.com/cdn/13.4.1/data/en_US/champion.json');
$championsjson = json_decode($championsjson, true);

// var_dump($championsjson['data']);

// $url = "http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Aatrox.png";
// $img = $_SERVER['DOCUMENT_ROOT'] . '/assets/champion/Aatrox.png';
// file_put_contents($img, file_get_contents($url));

// exit('done');

$gameversion = '13.4.1';
$urlimage = 'http://ddragon.leagueoflegends.com/cdn/'.$gameversion.'/img/champion';

// $nerachampions = [];

foreach ($championsjson['data'] as $champion) {
    // $nerachampions[$champion['key']] = [
    //     'name' => $champion['name'],
    //     'img' => $urlimage.'/'.$champion['image']['full'],
    // ];
    
    $sql->query("INSERT INTO `champions` SET ?u", array("id" => $champion['key'], "name" => $champion['name'], "avatar" => $urlimage.'/'.$champion['image']['full']));
}

// var_dump($nerachampions);

exit;

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