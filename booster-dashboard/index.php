<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/booster-dashboard/config.php');

$dash_page = $_GET['page'];
$dash_id = $_GET['id'];

// echo $dash_page;
// echo $dash_id;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neraboost - Booster Dashboard</title>

    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <script src="/template/js/jquery-3.6.0.min.js"></script>
    <script src="/template/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f2f3f7;
        }

        .nera-dashboard-top {
            width: 100%;
            /* min-height: 300px; */
            background: #111841;
            color: #fff;
            padding-top: 20px;
        }

        .nera-dashboard-menu-items {
            display: flex;
            justify-content: center;
        }

        .nera-dashboard-menu-items>.item {
            /* background: ; */
            padding: 10px 20px;
            margin: 0 5px;
            transition: .2s;
            border-radius: 30px;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
        }

        .nera-dashboard-menu-items>.item:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .nera-dashboard-menu-items>.item.active {
            background: rgba(255, 255, 255, 0.1);
        }

        .nera-dashboard-content {
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="nera-dashboard-top">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center" style="padding: 0px 40px;">
                <a class="navbar-brand" href="../booster-dashboard" style="color: #fff; text-decoration: none;">
                    <img src="/template/img/main-logo.svg" style="height: 80px; margin-top: 0px; margin-right: 24px;">
                    <span>New Era of BOOST</span>
                </a>
                <div class="w-100 d-flex justify-content-center">
                    <div class="nera-dashboard-menu-items">
                        <a href="/booster-dashboard" class="item page-">Dashboard</a>
                        <a href="/booster-dashboard/payments" class="item page-payments">Payments</a>
                        <!-- <div class="item"></div> -->
                        <!-- <div class="item">Support</div> -->
                    </div>
                </div>
                <div class="d-flex">
                    <a href="/booster-dashboard/payments" style="display: inline-block; text-decoration: none; color: #fff; padding: 10px 30px; background: rgba(255,255,255,0.1); border-radius: 30px; margin: 0px 5px; cursor: pointer;">
                        <?= $boosterBalance ?>$
                    </a>

                    <div style="display: inline-block; padding: 10px 30px; background: rgba(255,255,255,0.1); border-radius: 30px; margin: 0px 5px; cursor: pointer;">
                        <?= $boosterUsername ?>
                    </div>

                    <a href="/booster-dashboard/api/v1/logout.class.php" style="color: white; text-decoration: none; display: inline-block; padding: 5px 15px; background: rgba(255,255,255,0.1); border-radius: 30px; margin: 0px 5px; cursor: pointer;">
                        <!-- <i class="bi bi-door-open-fill"></i> -->
                        <i style="font-size: 22px;" class="bi bi-box-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center" style="padding: 0px 50px;">
                <div style="margin: 0px 5px;">
                    <img src="https://i.imgur.com/AJm7zVQ.png" style="height: 24px;">
                    <span style="margin-left: 5px;">Not yet rated <b></b></span>
                </div>
                <div class="d-flex align-items-center" style="padding: 5px 20px; background: rgba(255,255,255,0.05); border-radius: 30px; margin-left: 10px;">
                    <div>
                        <span style="opacity: 0.9;">SOLO</span>
                        <img style="height: 20px; filter: drop-shadow(0 0 0.75rem #fff); margin-left: 5px;" src="https://neraboost.com/template/img/lol-diamond.png" alt="">

                        <span style="opacity: 0.9; margin-left: 15px;">DUO</span>
                        <img style="height: 20px; filter: drop-shadow(0 0 0.75rem #fff); margin-left: 5px;" src="https://neraboost.com/template/img/lol-diamond.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 50px;">
            <div class="container">
                <div class="d-flex">
                    <a href="/booster-dashboard" class="page-" style="text-decoration: none; color: #fff; padding: 10px 20px; cursor: pointer;">
                        Avaible orders
                    </a>
                    <a href="/booster-dashboard/my-orders" class="page-my-orders page-order" style="text-decoration: none; color: #fff; position: relative; padding: 10px 20px; background: rgba(255,255,255,0); cursor: pointer;">
                        My orders
                    </a>
                </div>
            </div>
        </div>

        <script>
            $('.page-<?= $dash_page ?>').css('background', 'rgba(255,255,255,0.1)');
        </script>
    </div>

    <div class="nera-dashboard-content">
        <div class="container">
            <?php
            if (empty($dash_page)) {
                require_once($_SERVER['DOCUMENT_ROOT'] . '/booster-dashboard/page/all-orders.php');
            } else {
                require_once($_SERVER['DOCUMENT_ROOT'] . '/booster-dashboard/page/' . $dash_page . '.php');
            }
            ?>
        </div>
    </div>
</body>

</html>