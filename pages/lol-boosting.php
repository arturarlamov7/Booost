<?php
// if (isset($_GET['boost'])) $type_boost = $_GET['type_boost'];

$typeBoost = isset($_GET['boost']) ? $_GET['boost'] : 'rank-boosting';



$lolBoosting = array('rank-boosting', 'ranked-wins', 'duo-queue', 'promo', 'placements', 'normals', 'leveling', 'champion-mastery');

// echo array_search($typeBoost . '12', $lolBoosting);
// exit;

if (array_search($typeBoost, $lolBoosting) == '') {
    // header();
    header("Location: /lol-boosting");
}

?>

<style>
    .form-control {
        background: rgba(0, 0, 0, 0.33);
        border-radius: 11px;
        border: 0;
        color: #fff;
        padding: 10px 15px;
    }

    .form-control:focus {
        background: rgba(0, 0, 0, 0.5);
        outline: 0;
        color: #fff;
        box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
    }
</style>

<div class="nera-page-header">
    <video autoplay muted loop class="background-video">
        <source src="/template/video/main_bg_top.webm" type="video/webm">
        <source src="/template/video/main_bg_top.mp4" type="video/mp4">
    </video>

    <div class="logo">
        <img class="big-logo" src="/template/img/main-logo.svg" alt="">
    </div>
    <div class="page-name">
        LOL ELO Boosting
    </div>
    <div class="page-description">
        Rank & Division boost service
    </div>

    <div class="nera-page-header-menu">
        <div class="container menu-flex">
            <div class="game active">
                <img class="logo-mini" src="/template/img/main-icon-lol.svg" alt="">
                <div class="text">
                    LOL <br>
                    BOOSTING
                </div>
            </div>
            <div class="game" onclick="$('#comingsoon').modal('show');">
                <img class="logo-mini" src="/template/img/main-icon-lol-acc.svg" alt="">
                <div class="text">
                    BUY LOL
                    ACCOUNT
                </div>
            </div>
            <div class="game" onclick="$('#comingsoon').modal('show');">
                <img class="logo-mini" src="/template/img/main-icon-valorant.svg" alt="">
                <div class="text">
                    VALORANT
                    BOOSTING
                </div>
            </div>
            <div class="game" onclick="$('#comingsoon').modal('show');">
                <img class="logo-mini" src="/template/img/main-icon-tft.svg" alt="">
                <div class="text">
                    TFT
                    BOOSTING
                </div>
            </div>
        </div>
    </div>


</div>

<div class="nera-page-content">
    <div class="container">

        <style>
            .nera-page-menu {
                border: 0;
                background: rgba(48, 60, 132, 0.66);
                /* backdrop-filter: blur(4px); */
                padding: 30px 0px;
                border-radius: 14px;
                border-bottom: 2px solid #49DEFF;
            }

            .nera-page-menu .item {
                border-right: 0;
                text-align: center;
                text-decoration: none;
                color: #fff;
            }
        </style>

        <div class="nera-page-menu">
            <a href="/lol-boosting/rank-boosting" class="item">
                Rank Boosting
            </a>
            <a href="/lol-boosting/ranked-wins" class="item">
                Ranked Wins
            </a>
            <a href="/lol-boosting/duo-queue" class="item">
                Duo Queue
            </a>
            <a href="/lol-boosting/promo" class="item">
                Promo
            </a>
            <a href="/lol-boosting/placements" class="item">
                Placements
            </a>
            <a href="/lol-boosting/normals" class="item">
                Normals
            </a>
            <a href="/lol-boosting/leveling" class="item">
                Leveling
            </a>
            <a href="/lol-boosting/champion-mastery" class="item">
                Champion Mastery
            </a>
        </div>

        <script>
            $('a[href="/lol-boosting/<?= $typeBoost ?>"]').addClass('active');
        </script>

        <?php
        include(ROOT . "/pages/lol-boosting/" . $typeBoost . ".php");
        ?>


    </div>
</div>


