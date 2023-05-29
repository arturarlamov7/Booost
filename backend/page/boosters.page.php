<div class="container">
    <div style="margin: 15px 0;">
        <button id="new-booster-button" class="btn btn-primary">
            <i class="bi bi-person-fill-add"></i>
            New booster account
        </button>
    </div>
    <!-- Add booster account -->
    

    <?php
        $all_boosters = $sql->query("SELECT * FROM `booster_accounts` WHERE `status` = 'active' ORDER BY `id` DESC");
    ?>

    <div class="card">
        <div class="card-body">
            <div style="margin-bottom: 15px;">
                <div style="font-weight: 700; font-size: 22px; color: #333;">Active Boosters</div>
                <div style="opacity: .5;">Showing all active boosters</div>
            </div>
            <table id="boosters-table" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Status</th>
                        <!-- <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($all_boosters as $booster) {
                            echo '
                                <tr>
                                    <td>'.$booster['id'].'</td>
                                    <td>'.$booster['username'].'</td>
                                    <td>'.$booster['email'].'</td>
                                    <td>'.$booster['status'].'</td>
                                </tr>
                                ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="new-booster-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Booster account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="display: none;" class="new-booster-alerts">

                </div>
                <form action="">
                    <div class="form-group mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="new-booster-username" name="new-booster-username">

                        <div>
                            Not required to be filled out. If left blank, then at the first login, the owner himself
                            will set the desired username without the possibility of changing it in the future
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="new-booster-email" name="new-booster-email">

                        <div>
                            Booster will receive a message about the activation of his account by mail
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="new-booster-password">Password</label>
                        <input type="text" class="form-control" id="new-booster-password" name="new-booster-password">

                        <div class="d-flex justify-content-end">
                            <span style="color: blue; cursor: pointer;" id="generate-booster-password">
                                Generate <i class="bi bi-sliders"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="new-booster-submit">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $("#boosters-table").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
    });

    // $(".table-boosters-here").on('click', 'button', function() {
    //     var booster_id = $(this).data('id');
    //     $.ajax({
    //         type: "POST",
    //         url: "/api/v1/booster/delete",
    //         data: JSON.stringify({
    //             booster_id: booster_id
    //         }),
    //         contentType: "application/json; charset=utf-8",
    //         dataType: "json",
    //         success: function(data) {
    //             if (data.status) {
    //                 window.location.reload();
    //             }
    //         }
    //     });
    // });

    function openModal(id) {
        $('#' + id).modal('show');
    }

    $('#new-booster-button').on('click', function() {
        $('#new-booster-username').val('');
        $('#new-booster-email').val('');
        $('#new-booster-password').val('');
        $('.new-booster-alerts').slideUp();

        openModal('new-booster-modal');
    });

    $('#generate-booster-password').on('click', function() {
        $('#new-booster-password').val(generatePassword());
    });

    // # password generation function
    function generatePassword() {
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var password = '';
        for (var i = 0; i < 20; i++) {
            password += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        return password;
    }

    function validateEmail(email) {
        var re =
            /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    loading = `<span class="spinner-border spinner-border-sm"></span>`;

    $('#new-booster-submit').on('click', function() {
        $('.new-booster-alerts').slideUp().html(``);

        this_button = $(this);
        this_button_html = this_button.html();

        this_button.html(loading);

        if (!validateEmail($('#new-booster-email').val())) {
            $('.new-booster-alerts').html(`<div class="alert alert-warning">
                Please enter a valid email address
            </div>`);

            $('.new-booster-alerts').slideDown();

            this_button.html(this_button_html);
            return;
        }

        if ($('#new-booster-password').val() == '') {
            $('#generate-booster-password').click();
        }

        $.post("/backend/api/v1/add-booster.class.php", {
                "booster_username": $('#new-booster-username').val(),
                "booster_email": $('#new-booster-email').val(),
                "booster_password": $('#new-booster-password').val()
            },
            function(e) {
                if (e != null) {
                    obj = $.parseJSON(e);
                    result = obj['result'];
                    message = obj['message'];

                    switch (result) {
                        case 'error':
                            $('.new-booster-alerts').html(`<div class="alert alert-danger">
                                ${obj['message']}
                            </div>`);
                            break;
                        case 'success':
                            $('.new-booster-alerts').html(`<div class="alert alert-success">
                                <b>Successfully!</b> New booster added and activated <br><br>
                                <a href="/backend/?page=booster&id=${obj['booster_id']}" class="btn btn-light">Open Booster Profile</a>
                            </div>`);
                            break;
                    }
                } else {
                    alert('null');
                }
                $('.new-booster-alerts').slideDown();
                this_button.html(this_button_html);
            }
        );

        // setTimeout(() => {
        //     this_button.html(this_button_html);
        //     $('#new-booster-modal').modal('hide');
        // }, 1000);

        // console.log('submit');
    });

});
</script>
