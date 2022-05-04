<?php

$users = [  ["name" => "Adèle", "lunettes" => true],
            ["name" => "Aurélie", "lunettes" => false],
            ["name" => "Antoine", "lunettes" => true],
            ["name" => "Bernard", "lunettes" => false],
            ["name" => "Béatrice", "lunettes" => false],
            ["name" => "Cédric", "lunettes" => false],
            ["name" => "Charles", "lunettes" => true],
            ["name" => "Claude", "lunettes" => false],

];

var_dump ($users);

foreach ($users as $user) {
    // echo $user["name"]." ".$user["lunettes"];
    if($user["lunettes"]==true){        
        echo $user["name"]."<br>";
        $userLunette = $user["name"];
        var_dump($userLunette);
    }
}

