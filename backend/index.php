<?php
include($_SERVER['DOCUMENT_ROOT'] . "/backend/config.php");
// require_once($_SERVER['DOCUMENT_ROOT'] . '/backend/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neraboost Dashboard</title>

    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> -->

    <script src="/template/js/jquery-3.6.0.min.js"></script>

    <!-- data tables  -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/fc-4.2.1/fh-3.3.1/kt-2.8.1/r-2.4.0/sp-2.1.1/datatables.min.css" />
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/fc-4.2.1/fh-3.3.1/kt-2.8.1/r-2.4.0/sp-2.1.1/datatables.min.js">
    </script>

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
    body {
        background: #f3f4fc;
    }

    .btn-primary {
        background: #231780;
        border-color: #231780;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active {
        background: #2f1faa;
        border-color: #2f1faa;
    }

    .btn-secondary {
        background: #4b627a;
        border-color: #4b627a;
    }

    .btn-secondary:hover,
    .btn-secondary:focus,
    .btn-secondary:active {
        background: #708aa6;
        border-color: #708aa6;
    }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark"
        style="background-color: #0D1232 !important; box-shadow: 0 1px 20px 0 rgb(69 90 100 / 8%);">
        <div class="container-xxl">
            <a class="navbar-brand" href="../backend">
                <img src="/template/img/main-logo.svg" style="height: 50px; margin-top: 0px; margin-right: 24px;">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'accounts') {
                                                echo ' active';
                                            } ?>" href="./?page=accounts">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'boosters' or $page == 'booster') {
                                                echo ' active';
                                            } ?>" href="./?page=boosters">Boosters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'orders') {
                                                echo ' active';
                                            } ?>" href="./?page=orders">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'payouts') {
                                                echo ' active';
                                            } ?>" href="./?page=payouts">Payouts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'payments') {
                                                echo ' active';
                                            } ?>" href="./?page=payments">Payments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'accountslol') {
                                                echo ' active';
                                            } ?>" href="./?page=accountslol">Accounts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'settings') {
                                                echo ' active';
                                            } ?>" href="./?page=settings">Settings</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                Main Page
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div style="height: 80px;"></div>

    <?php
    if ($page == '') {
        include($_SERVER['DOCUMENT_ROOT'] . "/backend/page/dashboard.page.php");
        // require_once('dashboard.page.php');
    } else {
        include($_SERVER['DOCUMENT_ROOT'] . "/backend/page/" . $page . ".page.php");
        // require_once($page . '.page.php');
    }
    ?>

    <script src="../template/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

</body>

</html>