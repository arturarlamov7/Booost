<div class="card">
	<div class="card-body">
		<?php
		$my_Activeorders = $sql->getAll("SELECT * FROM `orders` WHERE `status` = 'active' AND `booster_id` = ?s", $boosterId);

		if (count($my_Activeorders) <= 0) {
			// echo 'no active orders found for this booster';

			echo '<div style="text-align: center; font-size: 30px; opacity: 0.5; padding: 30px;">
		You don`t have any active orders right now
	</div>';
		}

		foreach ($my_Activeorders as $keyzz => $valuezz) {
			echo '<a href="/booster-dashboard/order/' . $valuezz['id'] . '">' . $valuezz['id'] . '</a>';
		}
		?>

	</div>
</div>