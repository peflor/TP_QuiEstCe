<?php


$classMars = [
    ["name" => "Florian" , "lunettes" => false],
    ["name" => "Emmanuel" , "lunettes" => true],
    ["name" => "Hakim" , "lunettes" => false],
    ["name" => "Tristan" , "lunettes" => false],
    ["name" => "Anis" , "lunettes" => false],
    ["name" => "Laurent" , "lunettes" => false],
    ["name" => "Anthony" , "lunettes" => true],
    ["name" => "Nathan" , "lunettes" => false],
    ["name" => "Kevin" , "lunettes" => false],
    ["name" => "William" , "lunettes" => false],
    ["name" => "Daouda" , "lunettes" => false],
    ["name" => "Hajara" , "lunettes" => false],
    ["name" => "Soufiane" , "lunettes" => false],
    ["name" => "Christopher" , "lunettes" => true],
];

$userLunette = [];

    foreach ($classMars as $user) {    
        if($user["lunettes"]==true){      
            array_push($userLunette,$user["name"]);               
        }
    }

echo "<p> Nombre de personne portant des lunettes : " .count($userLunette). "<br>Voici les noms : ".implode(", ",$userLunette)."</p>";







