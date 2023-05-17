<?php

function boostCost($startRank, $startDiv, $startLp, $endRank, $endDiv, $currentLpMaster = 0, $desiredLpMaster = 0)
{

    // if($startRank <= $endRank AND $startDiv <= $endDiv) {
    //     return 'error, rank and divisors must be higher';
    // }

    $numberGame = 0;

    $rankOrder = array(
        "Iron IV"     => 1,
        "Iron III"    => 2,
        "Iron II"     => 3,
        "Iron I"      => 4,
        "Bronze IV"   => 5,
        "Bronze III"  => 6,
        "Bronze II"   => 7,
        "Bronze I"    => 8,
        "Silver IV"   => 9,
        "Silver III"  => 10,
        "Silver II"   => 11,
        "Silver I"    => 12,
        "Gold IV"     => 13,
        "Gold III"    => 14,
        "Gold II"     => 15,
        "Gold I"      => 16,
        "Platinum IV" => 17,
        "Platinum III" => 18,
        "Platinum II" => 19,
        "Platinum I"  => 20,
        "Diamond IV"  => 21,
        "Diamond III" => 22,
        "Diamond II"  => 23,
        "Diamond I"   => 24,
        "Master"      => 25
    );

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

    $extraCosts = array(
        "roles"     => "0",
        "champions" => "10",
        "stream_games" => "25",
        "priority_order" => "15",
        // "" => "",
        // "" => "",
    );

    $extraRegions = array(
        'euw' => '0',
        'eune' => '0',
        'oce' => '0',
        'na' => '0',
        'ru' => '0',
        'tr' => '0',
        'lan' => '0',
        'las' => '0',
        'br' => '0',
        'jp' => '0',
    );

    $boosterPercent = 0.50;

    $gameTable = array();

    $game = 1;
    foreach ($rankOrder as $key => $value) {
        for ($i = 0; $i < 5; $i++) {
            $gameTable[$game] = $rankCostLp[$key];
            $game++;
        }
    }

    // var_dump($gameTable);

    $startGame = ($rankOrder[$startRank . ' ' . $startDiv] * 5) - 5 + $startLp;
    $endGame = ($rankOrder[$endRank . ' ' . $endDiv] * 5) - 5;

    $boostingList = array();
    $boostingCost = 0;
    $boostingGame = 1;

    for ($i = $startGame; $i < $endGame; $i++) {
        $boostingCost += $gameTable[$i];
        $boostingList[$boostingGame] = $gameTable[$i] . ', ' . $boostingCost . ', ' . round(($boostingCost * $boosterPercent), 2);
        $boostingGame++;

        // echo $i;
        // echo "\n";

    }

    if ($startRank == "Master") {
        $pricelp = 1.625;
        $multiplayer = 1;
        $multiplayerOdd = 0.00025;

        $gamecount = 1;
        $gamenumber = 1;
        $lastCost = 0;

        for ($i = $currentLpMaster; $i < $desiredLpMaster; $i++) {
            $boostingCost += $pricelp * $multiplayer;
            $multiplayer += $multiplayerOdd;
            $currentLpMaster++;

            $gamecount++;
            if ($gamecount == 20) {
                $boostingList[$gamenumber] = round(($boostingCost - $lastCost), 2) . ', ' . round($boostingCost, 2) . ', ' . round(($boostingCost * $boosterPercent), 2);
                $lastCost = $boostingCost;
                $gamenumber++;
                $gamecount = 1;
            }
        }

        // $boostingList = [];

        return array("result" => $boostingCost . '$, booster reward: ' . $boostingCost * $boosterPercent . '$', "list" => $boostingList);
    } else {
        return array("result" => $boostingCost . '$, booster reward: ' . $boostingCost * $boosterPercent . '$', "list" => $boostingList);
    }

    // return $boostingCost;


    // return 'id rank: '. $rankOrder[$startRank.' '.$startDiv].', game start: '. $startGame.', game end: '. $endGame;




    // $lpCost = array(
    //     "Iron 4" => '1.99',
    //     "Iron 3" => '1.99',
    //     "Iron 2" => '1.99',
    //     "Iron 1" => '1.99',
    //     "Bronze 4" => '2.5',
    //     "Bronze 3" => '2.5',
    //     "Bronze 2" => '2.5',
    //     "Bronze 1" => '2.5',
    //     "Silver 4" => '3',
    //     "Silver 3" => '3.25',
    //     "Silver 2" => '3.5',
    //     "Silver 1" => '3.75',
    //     "Gold 4" => '4.25',
    //     "Gold 3" => '4.5',
    //     "Gold 2" => '4.75',
    //     "Gold 1" => '5.25'
    // );

}

function calculateBoostCost($currentRank, $currentLp, $desiredRank)
{
    $rankOrder = array("Iron", "Bronze", "Silver", "Gold", "Platinum", "Diamond", "Master", "Grandmaster", "Challenger");
    $currentRankIndex = array_search(explode(" ", $currentRank)[0], $rankOrder);
    $desiredRankIndex = array_search(explode(" ", $desiredRank)[0], $rankOrder);

    if ($currentRankIndex >= $desiredRankIndex) {
        return 0; // Ставка невозможна
    }

    $costPerDivision = array(
        "Iron" => array(0, 5, 10, 15),
        "Bronze" => array(18, 22, 25, 28),
        "Silver" => array(30, 35, 40, 45),
        "Gold" => array(60, 65, 70, 75),
        "Platinum" => array(100, 110, 120, 130),
        "Diamond" => array(200, 210, 220, 230),
        "Master" => array(300, 310, 320, 330),
        "Grandmaster" => array(400, 410, 420, 430),
        "Challenger" => array(500, 510, 520, 530),
    );

    $cost = 0;
    for ($i = $currentRankIndex; $i < $desiredRankIndex; $i++) {
        $divisions = 4;
        if ($i == $currentRankIndex) {
            $divisions = 4 - ceil(($currentLp + 1) / 25);
        }
        for ($j = 0; $j < $divisions; $j++) {
            $divisionCost = $costPerDivision[$rankOrder[$i]][$j];
            if ($j == $divisions - 1) {
                // Стоимость последнего дивизиона зависит от оставшегося LP
                $divisionCost *= ($currentLp % 25 + 1) / 25;
            }
            $cost += $divisionCost;
        }
    }

    return max(0, $cost);
}

// $_POST['currentrank'], $_POST['currentdiv'], $_POST['currentlp'], $_POST['desiredrank'], $_POST['desirediv']

// $currentRank = $_POST['currentrank']. ' '. $_POST['currentdiv'];
// $currentLp = $_POST['currentlp'];
// $desiredRank = $_POST['desiredrank']. ' '. $_POST['desirediv'];

// $boostCost = calculateBoostCost($currentRank, $currentLp, $desiredRank);

//     $result = array("result" => "( '$currentRank' to '$desiredRank' ) Boost cost: $".$boostCost);
//     echo json_encode($result);
// $boostCost = boostCost($_POST['start_rank'], $_POST['start_div'], $_POST['start_lp'], $_POST['end_rank'], $_POST['end_div']);
// echo $boostCost;
$result = boostCost($_POST['start_rank'], $_POST['start_div'], $_POST['start_lp'], $_POST['end_rank'], $_POST['end_div'], $_POST['currentmaster_lp'], $_POST['desiredmaster_lp']);
echo json_encode($result);
