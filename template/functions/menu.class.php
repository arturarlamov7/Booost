<?php
if ($auth) { ?>

    <div class="nera-topmenu" style="z-index: 1000; padding: 20px 0;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- <div class="lang">
                        En
                        <img src="img/carret-icon.svg" alt="">
                    </div> -->
                <a href="/" style="color: #fff; text-decoration:none; font-size: 26px;">
                    <!-- <img src="https://neraboost.com/template/img/main-logo.svg" style="height: 80px;"> -->
                    NERABOOST
                </a>
                <a href="/profile" class="nera-buttons-login">
                    Profile
                </a>
            </div>
        </div>
    </div>

<?php } else { ?>

    <div class="nera-topmenu" style="z-index: 1000;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- <div class="lang">
                        En
                        <img src="img/carret-icon.svg" alt="">
                    </div> -->
                <a href="/" style="color: #fff; text-decoration:none; font-size: 26px;">
                    <!-- <img src="https://neraboost.com/template/img/main-logo.svg" style="height: 80px;"> -->
                    NERABOOST
                </a>
                <button class="nera-buttons-login" id="open_login_modal">
                    Sign in
                </button>
            </div>
        </div>
    </div>

<?php } ?>

<div class="modal fade" id="neraLoginModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content nera-modal-content" style="border-radius: 50px;">
            <div data-bs-dismiss="modal" style="position: absolute; cursor: pointer; top: 20px; right: 20px; padding: 5px; border-radius: 50%; border: 2px solid #49DEFF; z-index: 5;">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>
            <div class="modal-body nera-modal-body" style=" padding: 20px 30px;">
                <div id="modal-login_signin">
                    <div class="nera-modal-title" style="margin-bottom: 30px;">
                        Sign in
                    </div>

                    <div class="mb-3">
                        <label for="input_1" class="form-label">Email</label>
                        <input type="text" class="form-control" name="login">
                    </div>
                    <div class="mb-3">
                        <label for="input_2" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="d-flex justify-content-end" id="modal_open_forgot" style="margin-bottom: 10px; margin-top: -5px;">
                        <a href="#" class="forgot" style="font-size: 16px;">forgot password</a>
                    </div>

                    <div id="modal-login-signupalert"></div>

                    <button id="modal-login-signin" class="nera-modal-button">
                        Sign in
                    </button>

                    <div class="or" style="margin-top: -5px; margin-bottom: 5px; opacity: 0.75;">or</div>

                    <button style="padding: 5px 0; margin-top: 15px; font-size: 18px; background: transparent; border: 2px solid #49DEFF;" class="nera-modal-button" id="modal_open_create">
                        Create an account
                    </button>
                    <!-- 
                    <div class="or" style="margin-top: -5px; margin-bottom: 25px;">or</div> -->

                    <div class="nera-modal-social" style="opacity: 0.5;">
                        <a href="" class="item facebook">
                            <img src="template/img/login-facebook.svg" alt="">
                        </a>
                        <a href="" class="item google">
                            <img src="template/img/login-google.svg" alt="">
                        </a>
                        <a href="" class="item discord">
                            <img src="template/img/login-discord.svg" alt="">
                        </a>
                    </div>
                </div>

                <div id="modal-login_create" style="display: none;">
                    <div class="nera-modal-title" style="margin-bottom: 25px;">
                        Create account
                    </div>

                    <div class="mb-3">
                        <label for="input_1" class="form-label">Email</label>
                        <input type="text" class="form-control" name="mail">
                    </div>

                    <div id="modal-login_createalert" style="display: none; margin-bottom: 0;"></div>

                    <button class="nera-modal-button" id="create_account">
                        Continue
                    </button>

                    <div class="or" style="margin-top: -5px; margin-bottom: 5px; opacity: 0.75;">or</div>

                    <button style="padding: 5px 0; margin-top: 15px; font-size: 18px; background: transparent; border: 2px solid #49DEFF;" class="nera-modal-button" id="modal_open_signin">
                        Sign in
                    </button>
                </div>

                <div id="modal-login_forgot" style="display: none;">
                    <div class="nera-modal-title" style="margin-bottom: 30px; font-size: 26px;">
                        Reset password
                    </div>

                    <div class="mb-3">
                        <label for="input_1" class="form-label">Email</label>
                        <input type="text" class="form-control" name="forgot_email">
                    </div>

                    <div id="modal-login-forgotalert"></div>

                    <button class="nera-modal-button" id="modal-login-resetpassword">
                        Reset
                    </button>

                    <div class="or" style="margin-top: -5px; margin-bottom: 5px; opacity: 0.75;">or</div>

                    <button style="padding: 5px 0; margin-top: 15px; font-size: 18px; background: transparent; border: 2px solid #49DEFF;" class="nera-modal-button" id="modal_open_signin">
                        Sign in
                    </button>
                </div>

                <div id="modal-login_emailsend" style="display: none; text-align: center;">
                    <p style="font-size: 28px;">Confirm your email</p>

                    <style>
                        .emailsend_circle {
                            transition: 1s;
                            transform: rotate(1080deg) scale(1.5);
                            width: 70px;
                            height: 70px;
                            border-radius: 50%;
                            background: #00B67A;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        .emailsend_circle.active {
                            transform: rotate(0deg) scale(1);
                        }
                    </style>

                    <div style="display: flex; justify-content: center; margin-bottom: 30px; margin-top: 25px;">
                        <div class="emailsend_circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                            </svg>
                        </div>
                    </div>

                    <p>Your account has been successfully registered. To complete the process please check your email for a validation request</p>

                    <div>

                    </div>
                </div>

                <div id="modal-login_forgotemailsend" style="display: none; text-align: center;">
                    <div style="margin-top: 5px; font-size: 24px; margin-bottom: 25px;">Confirm your email</div>
                    <div style="margin-top: 15px;">Check your email and follow the instructions to reset your password</div>
                </div>

                <script>

                </script>

                <!-- <div class="nera-modal-social">
                        <a href="" class="item facebook">
                            <img src="template/img/login-facebook.svg" alt="">
                        </a>
                        <a href="" class="item google">
                            <img src="template/img/login-google.svg" alt="">
                        </a>
                        <a href="" class="item discord">
                            <img src="template/img/login-discord.svg" alt="">
                        </a>
                    </div> -->
            </div>
        </div>
    </div>
</div>