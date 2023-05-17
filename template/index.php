<?php
$page = (!empty($_GET['page'])) ? $_GET['page'] : '';
$title = (!empty($routes[$page]['title'])) ? "New Era of Busting — " . $routes[$page]['title'] : "New Era of Busting";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <title>New Era of Busting</title>

    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/template/owlcarousel/assets/owl.theme.default.css">
    <link rel="stylesheet" href="/template/css/main.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/template/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/template/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/template/favicons/favicon-16x16.png">
    <link rel="manifest" href="/template/favicons/site.webmanifest">
    <link rel="mask-icon" href="/template/favicons/safari-pinned-tab.svg" color="#192150">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#192150">

    <script src="/template/js/bootstrap.bundle.min.js"></script>
    <script src="/template/js/jquery-3.6.0.min.js"></script>
    <script src="/template/owlcarousel/owl.carousel.min.js"></script>
    <script src="/template/js/main.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6463b853ad80445890ed4dfd/1h0iog17a';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</head>

<body>

    <?php
    include(ROOT . "/template/functions/menu.class.php");
    include(ROOT . "/includes/page.php");
    ?>

    <div class="nera-footer">
        <div class="container">
            <div class="payments">
                <img style="height: 40px;" src="/template/img/pay-visa.svg" alt="">
                <img style="height: 50px;" src="/template/img/pay-apple_pay.svg" alt="">
                <img src="/template/img/pay-mastercard.svg" alt="">
                <img src="/template/img/pay-paypal.svg" alt="">
            </div>
            <div class="information">
                <div class="logo">
                    <img src="/template/img/main-logo.svg" alt="">
                </div>
                <div class="text">
                    <div class="copyright">
                        © Copyright 2022 NEW ERA of Boosting. All rights reserved.
                    </div>

                    LEAGUE OF LEGENDS IS A REGISTERED TRADEMARK OF RIOT GAMES, INC. WE ARE IN NO WAY AFFILIATED
                    WITH, ASSOCIATED WITH OR ENDORSED BY RIOT GAMES, INC. BY USING THIS WEBSITE YOU CONSTITUTE
                    ACCEPTANCE TERMS OF SERVICE AND PRIVACY POLICY. ALL COPYRIGHTS, TRADE MARKS, SERVICE MARKS
                    BELONG TO THE CORRESPONDING OWNERS. © Copyright 2022 NEW ERA of Boosting. All rights
                    reserved.
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="nera-support">
        <img src="/template/img/support-icon.png" alt="">
    </div> -->

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'csrftoken': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let modal_now = 'signin';
            let modal_open;

            let loadingspinner = `<div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>`;

            function registration() {
                // savetext = $('#create_account').html();
                $('#create_account').prop('disabled', true).css('opacity', '0.8');

                mail = $("[name='mail']").val();
                // grecaptcharesponse = $("[name='g-recaptcha-response']").val();

                $.post("/auth/registration.php", {
                        "mail": mail
                        // "g-recaptcha-response": grecaptcharesponse
                    },
                    function(e) {
                        if (e != null) {
                            obj = $.parseJSON(e);
                            result = obj['result'];
                            errors = obj['errors'];

                            switch (result) {
                                case 'captcha':
                                    // showAlert(obj['message']);
                                    // grecaptcha.reset();
                                    break;
                                case 'empty':
                                    // showAlert(obj['message']);
                                    // grecaptcha.reset();
                                    break;
                                case 'error':
                                    showAlert('#modal-login_createalert', obj['message']);
                                    // grecaptcha.reset();

                                    break;
                                case 'email_send':
                                    // $('.send_to').text(obj['message']);
                                    // openModalPage('emailsend');
                                    emailsend();
                                    break;
                            }
                        } else {
                            alert('null');
                        }

                        $('#create_account').prop('disabled', false).css('opacity', 'unset');
                    }
                )
            }
            // $('#emailsend').click(function() {
            //     emailsend();
            // })

            function emailsend() {
                openModalPage('emailsend');
                setInterval(() => {
                    $('.emailsend_circle').addClass('active');
                }, 250);
                // alert(1);
            }

            function showAlert(id, message) {
                $(id).hide("fast");
                $(id).text(message).show("slow");
            }

            function openModalPage(page) {
                open_page = page;
                $('#modal-login_' + modal_now).fadeOut(250, function() {
                    $('#modal-login_' + open_page).fadeIn(250);
                    modal_now = open_page;
                })

            }

            $('#create_account').click(function() {
                // alert(1);
                registration();
            })

            $('#modal_open_create').click(function() {
                // alert(1);
                openModalPage('create');
            });

            $('#modal_open_signin').click(function() {
                openModalPage('signin');
            });

            $('#modal_open_forgot').click(function() {
                openModalPage('forgot');
            });

            $('#update_password').click(function() {
                // alert(1)
                // mail = $("[name='mail']").val();
                // grecaptcharesponse = $("[name='g-recaptcha-response']").val();
                password_1 = $("[name='password_1']").val();
                password_2 = $("[name='password_2']").val();

                $.post("/auth/updatepassword.php", {
                        "password_1": password_1,
                        "password_2": password_2
                        // "g-recaptcha-response": grecaptcharesponse
                    },
                    function(e) {
                        if (e != null) {
                            obj = $.parseJSON(e);
                            result = obj['result'];
                            errors = obj['errors'];

                            switch (result) {
                                case 'captcha':
                                    // showAlert(obj['message']);
                                    // grecaptcha.reset();
                                    break;
                                case 'empty':
                                    // showAlert(obj['message']);
                                    // grecaptcha.reset();
                                    break;
                                case 'error':
                                    // showAlert('#profile-updatepassword', obj['message']);
                                    // alert(obj['errors']);
                                    $('#profile_updatepassword_alerts').html('').hide('fast');
                                    obj['errors'].forEach(element => {
                                        $('#profile_updatepassword_alerts').append(element +
                                            '<br>');
                                    });
                                    $('#profile_updatepassword_alerts').show('slow');
                                    // grecaptcha.reset();

                                    break;
                                case 'success':
                                    // $('.send_to').text(obj['message']);
                                    // openModalPage('emailsend');
                                    // alert(obj['message'])
                                    location.reload();
                                    break;
                            }
                        } else {
                            alert('null');
                        }

                        // $('#create_account').prop('disabled', false).css('opacity', 'unset');
                    }
                )
            });

            $('#modal-login-resetpassword').click(function() {
                $('#modal-login-resetpassword').prop('disabled', true).css('opacity', '0.8');
                email = $("[name='forgot_email']").val();

                $.post("/auth/forgot.php", {
                        "email": email,
                        // "password": password
                        // "g-recaptcha-response": grecaptcharesponse
                    },
                    function(e) {
                        if (e != null) {
                            obj = $.parseJSON(e);
                            result = obj['result'];
                            errors = obj['errors'];

                            switch (result) {
                                case 'captcha':
                                    // showAlert(obj['message']);
                                    // grecaptcha.reset();
                                    break;
                                case 'empty':
                                    // showAlert(obj['message']);
                                    // grecaptcha.reset();
                                    break;
                                case 'error':
                                    showAlert('#modal-login-forgotalert', obj['message']);
                                    break;
                                case 'email_send':
                                    openModalPage('forgotemailsend');
                                    break;
                            }
                        } else {
                            alert('null');
                        }

                        $('#modal-login-signin').prop('disabled', false).css('opacity', 'unset');
                    }
                )
            })

            $('#modal-login-signin').click(function() {
                $('#modal-login-signin').prop('disabled', true).css('opacity', '0.8');

                login = $("[name='login']").val();
                password = $("[name='password']").val();

                $.post("/auth/signin.php", {
                        "login": login,
                        "password": password
                        // "g-recaptcha-response": grecaptcharesponse
                    },
                    function(e) {
                        if (e != null) {
                            obj = $.parseJSON(e);
                            result = obj['result'];
                            errors = obj['errors'];

                            switch (result) {
                                case 'captcha':
                                    // showAlert(obj['message']);
                                    // grecaptcha.reset();
                                    break;
                                case 'empty':
                                    // showAlert(obj['message']);
                                    // grecaptcha.reset();
                                    break;
                                case 'error':
                                    showAlert('#modal-login-signupalert', obj['message']);
                                    break;
                                case 'success':
                                    location.href = '/profile';
                                    break;
                            }
                        } else {
                            alert('null');
                        }

                        $('#modal-login-signin').prop('disabled', false).css('opacity', 'unset');
                    }
                )
            })

        });

        $(document).on('scroll', function() {
            if ($(document).scrollTop() > 200) {
                $('.nera-topmenu').css('backdrop-filter', 'blur(5px)');
            } else {
                $('.nera-topmenu').css('backdrop-filter', 'unset');
            }
            // alert($(document).scrollTop());
        });
    </script>

    <div class="modal fade" id="comingsoon" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nera-modal-content" style="border-radius: 50px;">
                <div data-bs-dismiss="modal" style="position: absolute; cursor: pointer; top: 20px; right: 20px; padding: 5px; border-radius: 50%; border: 2px solid #49DEFF; z-index: 5;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
                <div class="modal-body nera-modal-body" style="padding: 20px 30px; text-align: center;">
                    <div style="font-size: 24px;">We will be providing <br> services soon</div>

                    <div style="margin: 15px 0;">Subscribe to our social networks to be the first to know about it!</div>

                    <a href="" style="margin: 15px 0; color: #fff; text-decoration: none; padding: 15px 25px; margin-top: 15px; font-size: 18px; background: linear-gradient(to left, #0084B4, #1DCAFF);" class="nera-modal-button">
                        Follow twitter
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="cookies-info-block" style="display: none; position: fixed; bottom: 10px; left: 10px; border-radius: 10px; background: #111841; border: 2px solid #49DEFF; padding: 10px 25px; z-index: 1001;">
        <div class="d-flex align-items-center">
            <img src="https://i.imgur.com/g0onnDG.png" style="height: 64px; widht: 64px; margin-right: 10px;">
            We use cookies to make your experience better.
        </div>

        <div class="d-flex justify-content-between align-items-center" style="margin-top: -20px; margin-bottom: -10px;">
            <div>
                <a style="color: #fff;" href="https://neraboost.com/cookies-policy">
                    Cookies
                    info
                </a>
            </div>
            <button id="cookies-info-button" style="display: inline-block; width: auto; padding: 5px 30px; font-size: 16px; background: transparent; border: 2px solid #49DEFF;" class="nera-modal-button">
                Okay
            </button>
        </div>
    </div>

    <script>
        function getCookie(name) {
            let matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }

        function setCookie(name, value, options = {}) {
            if (options.expires instanceof Date) {
                options.expires = options.expires.toUTCString();
            }

            let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

            for (let optionKey in options) {
                updatedCookie += "; " + optionKey;
                let optionValue = options[optionKey];
                if (optionValue !== true) {
                    updatedCookie += "=" + optionValue;
                }
            }

            document.cookie = updatedCookie;
        }

        function acceptCookie() {
            setCookie('cookie_accept', 'true', {
                secure: true,
                'max-age': 3600000
            });

            $('#cookies-info-block').fadeOut(300);
        }

        $(document).ready(function() {
            if (getCookie('cookie_accept') != 'true') {
                $('#cookies-info-block').fadeIn(300);
            }

            $('#cookies-info-button').click(function() {
                acceptCookie();
            });
        });
    </script>
</body>

</html>