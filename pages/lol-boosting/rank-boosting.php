<div>
	<div class="row row-cols-1 row-cols-md-2 g-4">
		<div class="col-md-7">
			<div class="nera-league-card">
				<div class="devision">
					<div class="logo">
						<img src="/template/img/lol-iron.png" alt="">
					</div>
					<div class="text">
						<div class="current">Current League</div>
						<div class="description">Select your rank and division</div>
					</div>
				</div>

				<div class="options">
					<div class="rank-select">
						<div class="item">
							<img src="/template/img/lol-iron.png" alt="">
						</div>
						<div class="item">
							<img src="/template/img/lol-bronze.png" alt="">
						</div>
						<div class="item">
							<img src="/template/img/lol-silver.png" alt="">
						</div>
						<div class="item">
							<img src="/template/img/lol-gold.png" alt="">
						</div>
						<div class="item active">
							<img src="/template/img/lol-platinum.png" alt="">
						</div>
						<div class="item">
							<img src="/template/img/lol-diamond.png" alt="">
						</div>
						<div class="item">
							<img src="/template/img/lol-master.png" alt="">
						</div>
					</div>
					<div class="number-select">
						<div class="item">
							IV
						</div>
						<div class="item">
							III
						</div>
						<div class="item">
							II
						</div>
						<div class="item">
							I
						</div>
					</div>
				</div>

				<div class="row row-cols-1 row-cols-md-2 g-3 selects">
					<div class="col">
						<select class="form-select">
							<option value="0">0-20 LP</option>
							<option value="1">21-40 LP</option>
							<option value="2">41-60 LP</option>
							<option value="3">61-80 LP</option>
							<option value="3">81-100 LP</option>
						</select>
					</div>
					<div class="col">
						<select class="form-select">
							<?php
							foreach ($regions as $key => $value) {
								echo '<option value="' . $key . '">' . $value . '</option>';
							}
							?>
						</select>
					</div>
				</div>
			</div>
			<div class="nera-league-card">
				<div class="devision">
					<div class="logo">
						<img src="template/img/lol-master.png" alt="">
					</div>
					<div class="text">
						<div class="current">Desired League</div>
						<div class="description">Select desired rank and division</div>
					</div>
				</div>

				<div class="options">
					<div class="rank-select">
						<div class="item">
							<img src="/template/img/lol-iron.png" alt="">
						</div>
						<div class="item">
							<img src="/template/img/lol-bronze.png" alt="">
						</div>
						<div class="item">
							<img src="/template/img/lol-silver.png" alt="">
						</div>
						<div class="item">
							<img src="/template/img/lol-gold.png" alt="">
						</div>
						<div class="item">
							<img src="/template/img/lol-platinum.png" alt="">
						</div>
						<div class="item">
							<img src="/template/img/lol-diamond.png" alt="">
						</div>
						<div class="item active">
							<img src="/template/img/lol-master.png" alt="">
						</div>
					</div>
					<div class="number-select d-none">
						<div class="item active">
							IV
						</div>
						<div class="item">
							III
						</div>
						<div class="item">
							II
						</div>
						<div class="item">
							I
						</div>
					</div>
					<div class="picker-level">
						<div class="value">50</div>
						<div class="buttons">
							<button>
								<img src="/template/img/arrow-mini-up.svg" alt="">
							</button>
							<button>
								<img src="/template/img/arrow-mini-down.svg" alt="">
							</button>
							<!-- <button disabled>
                                                <img src="img/arrow-mini-down.svg" alt="">
                                            </button> -->
						</div>
						<div class="name">Desired LP</div>
					</div>
				</div>
				<div style="margin-top: 20px;" class="d-flex justify-content-around">
					<div class="form-check">
						<input class="form-check-input nera-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
						<label class="form-check-label" for="flexRadioDefault1">
							Solo/Duo
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input nera-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
						<label class="form-check-label" for="flexRadioDefault1">
							Flex
						</label>
					</div>
				</div>

			</div>
		</div>
		<div class="col-md-5">
			<div class="w-100 h-100 d-flex align-items-start">
				<div class="nera-league-checkout">
					<div class="checkout-top">
						<!-- <div class="nera-pay-card-title">
                                            Checkout
                                        </div> -->
						<div class="name">
							Checkout
						</div>
						<div class="d-flex justify-content-center">
							<div class="fromto">
								<div>
									<div class="logo">
										<img src="/template/img/lol-iron.png" alt="">
									</div>
									<div class="name">Iron IV</div>
								</div>
								<div class="arrow">
									<img src="/template/img/arrow-fromto.svg" alt="">
								</div>
								<div>
									<div class="logo">
										<img src="/template/img/lol-master.png" alt="">
									</div>
									<div class="name">Master</div>
								</div>
							</div>
						</div>
					</div>
					<div class="checkout-center">
						<div class="name">
							Order Additions
						</div>

						<div class="alert alert-info" style="display: block; margin: 20px; border-radius: 25px;">
							You have enabled additional services. You can set them up after creating an order in your personal account.
						</div>

						<div class="check d-flex justify-content-between">
							<div>
								Stream Games
								<span class="additional">25%</span>
							</div>
							<div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
								</div>
							</div>
						</div>
						<div class="check d-flex justify-content-between">
							<div>
								Priority order
								<span class="additional">15%</span>
							</div>
							<div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
								</div>
							</div>
						</div>
						<div onclick="$('#neraRolesChampions').modal('show')" class="check d-flex justify-content-between">
							<div>
								Roles/Champions
								<span class="additional">10%</span>
							</div>
							<div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
								</div>
							</div>
						</div>
						<div class="check d-flex justify-content-between">
							<div>
								Appear offline
								<span class="additional">FREE</span>
							</div>
							<div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
								</div>
							</div>
						</div>
					</div>
					<div class="checkout-bottom">
						<div class="total">
							<!-- <div></div> -->
							Total amount
							<div class="value">$200</div>
						</div>
						<!-- <button>BOOST NOW</button> -->

						<div class="mb-3">
							<label for="input_1" class="form-label">Your Email</label>
							<input type="email" class="form-control" name="email_1">
							<div style="font-size: 14px; margin-top: 10px; display: none;" id="email_alerts_1"></div>
						</div>

						<div class="button">
							<div class="d-flex justify-content-center">
								<button id="go-boost" class="nera-buttons-login w-100">
									BOOST NOW
								</button>
							</div>
						</div>
					</div>
					<!-- <div class="top"></div> -->
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#go-boost').on('click', function() {
			$.post("/auth/api/v1/createOrder.php?t=rank-boosting", {
					"mail": 'mail'
					// "g-recaptcha-response": grecaptcharesponse
				},
				function(e) {
					alert(e);
					// if (e != null) {
					// 	obj = $.parseJSON(e);
					// 	result = obj['result'];
					// 	errors = obj['errors'];

					// 	switch (result) {
					// 		case 'success':
					// 			alert(obj);
					// 			break;
					// 	}
					// } else {
					// 	alert('null');
					// }

				}
			)
		})
	});
</script>