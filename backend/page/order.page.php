<?php
    $order_id = $_GET['id'];
    $orderMain = $sql->getRow("SELECT * FROM `orders` WHERE `id` = ?s", $order_id);
    $orderInfo = unserialize($orderMain['information']);
?>

<!-- <pre><?= json_encode($orderInfo, JSON_PRETTY_PRINT) ?></pre> -->

<div class="container">
    <div>
        <a href="?page=orders" class="btn btn-primary">Go to orders</a>
    </div>

    <div class="card card-body" style="margin-top: 20px;">
        <div class="card card-body" style="text-transform: uppercase;">
            <h4><b>#<?=$orderMain['text_id']?></b></h4>

            <div>
                <div>
                    User: <?=$orderMain['user_id']?>
                </div>
                <div>
                    Booster: <?=$orderMain['booster_id']?>
                </div>
                <div>
                    Boost: <?=$orderInfo['from_to']['from']?> -> <?=$orderInfo['from_to']['to']?>
                </div>
                <div>
                    Now rank: <?=$orderInfo['from_to']['now']?>
                </div>
                <div>
                    Server: <?=$orderInfo['server']?>
                </div>
            </div>
        </div>
        <div class="row row-cols-2" style="margin-top: 20px;">
            <div class="col">
                <div class="card card-body" style="height: 100%; overflow: auto;">
                    <div>
                        22:54 boostername

                        <div>text</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-body">
                    <pre><?= json_encode($orderInfo['extra'], JSON_PRETTY_PRINT) ?></pre>
                </div>

                <div class="card card-body" style="margin-top: 20px;">
                    <pre><?= json_encode($orderInfo['account'], JSON_PRETTY_PRINT) ?></pre>
                </div>
            </div>
        </div>

        <div style="margin-top: 20px;">
            <button style="width: 300px;" class="btn btn-primary">Save</button>
            <button class="btn btn-danger">Delete</button>
        </div>
    </div>
</div>