<div class="container">
    <div class="card card-body">
        <?php
            $orders = $sql->getAll("SELECT * FROM `orders` WHERE 1 ORDER BY `id` DESC");

            foreach($orders as $order){
                echo '<a href="?page=order&id='.$order['id'].'">#'.$order['id'].'</a> <br>';
            }
        ?>
    </div>
</div>