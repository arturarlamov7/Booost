<div class="container">

    <div class="card">
        <div class="card-body">
            <h3>Calculator:</h3>

            <div class="accordion" id="calc-accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="calc-heading-1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#calc-collapse-1">
                            Rank-boosting
                        </button>
                    </h2>
                    <div id="calc-collapse-1" class="accordion-collapse collapse show" data-bs-parent="#calc-accordion">
                        <div class="accordion-body" style="padding: 10px;">
                            <div>
                                <div id="calculator" class="card card-body mb-3" style="padding: 20px;">
                                    Current Rank

                                    <select class="form-select" id="start_rank">
                                        <option value="Iron" selected>Iron</option>
                                        <option value="Bronze">Bronze</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Platinum">Platinum</option>
                                        <option value="Diamond">Diamond</option>
                                        <option value="Master">Master</option>
                                    </select>

                                    Current Master LP

                                    <input type="number" class="form-control" id="currentmaster_lp" value="1">

                                    Current Devision

                                    <select class="form-select" id="start_div">
                                        <option value="IV" selected>IV</option>
                                        <option value="III">III</option>
                                        <option value="II">II</option>
                                        <option value="I">I</option>
                                    </select>

                                    Current LP

                                    <select class="form-select" id="start_lp">
                                        <option value="0" selected>0-20</option>
                                        <option value="1">21-40</option>
                                        <option value="2">41-60</option>
                                        <option value="3">61-80</option>
                                        <option value="4">81-100</option>
                                    </select>

                                    Server

                                    <select class="form-select" id="server">
                                        <option value="na">North America</option>
                                        <option value="euw" selected="">Europe West</option>
                                        <option value="eune">Europe Nordic East</option>
                                        <option value="oce">Oceania</option>
                                        <option value="ru">Russia</option>
                                        <option value="tr">Turkey</option>
                                        <option value="lan">Latin America North</option>
                                        <option value="las">Latin America South</option>
                                        <option value="br">Brazil</option>
                                        <option value="jp">Japan</option>
                                    </select>

                                    <hr>

                                    Desired Rank

                                    <select class="form-select" id="end_rank">
                                        <option value="Iron" selected>Iron</option>
                                        <option value="Bronze">Bronze</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Platinum">Platinum</option>
                                        <option value="Diamond">Diamond</option>
                                        <option value="Master">Master</option>
                                    </select>

                                    Desider Master LP

                                    <input type="number" class="form-control" id="desiredmaster_lp" value="50">

                                    Desired Devision

                                    <select class="form-select" id="end_div">
                                        <option value="IV" selected>IV</option>
                                        <option value="III">III</option>
                                        <option value="II">II</option>
                                        <option value="I">I</option>
                                    </select>

                                    Queue Type

                                    <div class="d-flex gap-4">
                                        <label for="solo-duo" class="form-radio rounded checked">
                                            <input type="radio" name="queue_type" id="solo-duo" value="solo_duo" class="form-radio-input custom-radio-input hidden" checked="">
                                            <span class="form-radio-label"></span>Solo - Duo
                                        </label>
                                        <label for="flex" class="form-radio rounded">
                                            <input type="radio" name="queue_type" id="flex" value="flex" class="form-radio-input custom-radio-input hidden">
                                            <span class="form-radio-label"></span>Flex
                                        </label>
                                    </div>

                                    <hr>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="roles">
                                        <label class="form-check-label" for="roles">
                                            Champions & Roles
                                        </label>
                                    </div>

                                    <div class="card card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="lane_top">
                                            <label class="form-check-label" for="lane_top">
                                                Top Lane
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="lane_mid">
                                            <label class="form-check-label" for="lane_mid">
                                                Middle Lane
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="lane_sup">
                                            <label class="form-check-label" for="lane_sup">
                                                Support
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="lane_jungle">
                                            <label class="form-check-label" for="lane_jungle">
                                                Jungle
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="lane_marksman">
                                            <label class="form-check-label" for="lane_marksman">
                                                Marksman
                                            </label>
                                        </div>
                                    </div>

                                    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-5-theme/1.3.0/select2-bootstrap-5-theme.min.css" integrity="sha512-z/90a5SWiu4MWVelb5+ny7sAayYUfMmdXKEAbpj27PfdkamNdyI3hcjxPxkOPbrXoKIm7r9V2mElt5f1OtVhqA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                                    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


                                    <div class="card card-body">
                                        Champions (+%)
                                        <br>
                                        <select class="js-example-basic-multiple" multiple="multiple" id="champions">
                                            <?php
                                            $champions = $sql->getAll("SELECT * FROM `champions` ORDER BY `name`");
                                            foreach ($champions as $key => $value) {
                                                echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <script>
                                        $(document).ready(function() {
                                            $('.js-example-basic-multiple').select2();
                                        });
                                    </script>

                                    <br>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="appear_offline">
                                        <label class="form-check-label" for="appear_offline">
                                            Appear Offline
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="priority_order">
                                        <label class="form-check-label" for="priority_order">
                                            Priority Order (+%)
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="stream_games">
                                        <label class="form-check-label" for="stream_games">
                                            Stream Games (+%)
                                        </label>
                                    </div>





                                    <hr>

                                    <div class="card">
                                        <div class="card-body">
                                            <div style="font-weight: 700;" id="calculator_result">

                                            </div>

                                            <div id="calculator_list">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card card-body">
                                <h3>Settings:</h3>

                                <div style="padding: 20px;">
                                    <b>Cost 20LP in $</b>

                                    <div class="row row-cols-4 g-4">
                                        <?php
                                        $rankCostLp = array(
                                            "Iron IV"     => '1.99',
                                            "Iron III"    => '1.99',
                                            "Iron II"     => '1.99',
                                            "Iron I"      => '1.99',
                                            "Bronze IV"   => '2.5',
                                            "Bronze III"  => '2.5',
                                            "Bronze II"   => '2.5',
                                            "Bronze I"    => '2.5',
                                            "Silver IV"   => '3',
                                            "Silver III"  => '3.25',
                                            "Silver II"   => '3.5',
                                            "Silver I"    => '3.75',
                                            "Gold IV"     => '4.25',
                                            "Gold III"    => '4.5',
                                            "Gold II"     => '4.75',
                                            "Gold I"      => '5.25',
                                            "Platinum IV" => '6.5',
                                            "Platinum III" => '7',
                                            "Platinum II" => '8',
                                            "Platinum I"  => '9.5',
                                            "Diamond IV"  => '11.5',
                                            "Diamond III" => '14.5',
                                            "Diamond II"  => '18.5',
                                            "Diamond I"   => '23.5',
                                            "Master"      => '32.5'
                                        );

                                        foreach ($rankCostLp as $key => $value) {
                                            echo '
                            <div class="col">
                                <label for="username">' . $key . '</label>
                                <input type="text" class="form-control" value="' . $value . '" >
                            </div>
                            ';
                                        }
                                        ?>
                                    </div>

                                    <hr>
                                    <b>Additional % for Regions</b>
                                    <div class="row row-cols-4 g-4">

                                        <?php
                                        foreach ($regions as $key => $value) {
                                            echo '<div class="col">
                                                    <label for="region">' . $value . '</label>
                                                    <input type="text" class="form-control" name="region_' . $key . '" value="0" >
                                                </div>';
                                        }
                                        ?>

                                    </div>

                                    <hr>
                                    <b>Additional % Extra</b>

                                    <div class="row row-cols-4 g-4">
                                        <div class="col">
                                            <label for="extra">Roles</label>
                                            <input type="text" class="form-control" name="appear_offline" value="0">
                                        </div>
                                        <div class="col">
                                            <label for="extra">Champions</label>
                                            <input type="text" class="form-control" name="appear_offline" value="0">
                                        </div>
                                        <div class="col">
                                            <label for="extra">Appear Offline</label>
                                            <input type="text" class="form-control" name="appear_offline" value="0">
                                        </div>
                                        <div class="col">
                                            <label for="extra">Priority Order</label>
                                            <input type="text" class="form-control" name="appear_offline" value="0">
                                        </div>
                                        <div class="col">
                                            <label for="extra">Stream Games </label>
                                            <input type="text" class="form-control" name="appear_offline" value="0">
                                        </div>
                                    </div>

                                    <hr>
                                    <b>% Booster percent of the order</b>

                                    <label for="extra">Give percentage to the booster of the order value</label>
                                    <input type="text" class="form-control" name="appear_offline" value="0">

                                    <hr>
                                    <button class="btn btn-primary">Save Settings for Rank-boosting calculator</button>
                                </div>
                            </div>

                            <script>
                                $('#calculator').click(function() {
                                    // send ajax request to server by sending form data
                                    $.post("/backend/api/v1/boost-calculator.class.php", {
                                            "start_rank": $('#start_rank').val(),
                                            "start_div": $('#start_div').val(),
                                            "start_lp": $('#start_lp').val(),
                                            "end_rank": $('#end_rank').val(),
                                            "end_div": $('#end_div').val(),
                                            "currentmaster_lp": $('#currentmaster_lp').val(),
                                            "desiredmaster_lp": $('#desiredmaster_lp').val(),
                                        },
                                        function(e) {
                                            if (e != null) {
                                                obj = $.parseJSON(e);
                                                result = obj['result'];
                                                list = obj['list'];

                                                $('#calculator_result').html(result);
                                                $('#calculator_list').html('<pre>' + JSON.stringify(list, null, '\t') + '</pre>');



                                            } else {
                                                alert('null');
                                            }
                                            // $('.new-booster-alerts').slideDown();
                                            // this_button.html(this_button_html);
                                        }
                                    );
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="calc-heading-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#calc-collapse-2">
                            Ranked-wins
                        </button>
                    </h2>
                    <div id="calc-collapse-2" class="accordion-collapse collapse" data-bs-parent="#calc-accordion">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card card-body" style="margin: 30px 0;">
        <h2>Champions</h2>

        <input type="text" class="form-control" placeholder="Version">
        <span style="font-size: 12px;">13.4.1</span>
        <input type="text" class="form-control" placeholder="URL File Link">
        <span style="font-size: 12px;">http://ddragon.leagueoflegends.com/cdn/13.4.1/data/en_US/champion.json</span>

        <button class="btn btn-primary">Update</button>

        <div class="card" style="margin: 20px;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $champions = $sql->getAll("SELECT * FROM `champions` ORDER BY `name`");

                    foreach ($champions as $key => $value) {
                        echo '<tr>
                                <th>' . $value['id'] . '</th>
                                <td><img src="' . $value['avatar'] . '" style="width: 24px; height: 24px;"></td>
                                <td>' . $value['name'] . '</td>
                            </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>



    </div>

</div>