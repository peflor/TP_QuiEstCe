<?php


$classMars = [
    ["name" => "Florian" , "lunettes" => 0, "photo" =>0],
    ["name" => "Emmanuel" , "lunettes" => 0, "photo" =>0],
    ["name" => "Hakim" , "lunettes" => 0, "photo" =>0],
    ["name" => "Tristan" , "lunettes" => 0, "photo" =>0],
    ["name" => "Anis" , "lunettes" => 0, "photo" =>0],
    ["name" => "Laurent" , "lunettes" => 0, "photo" =>0],
    ["name" => "Anthony" , "lunettes" => 0, "photo" =>0],
    ["name" => "Nathan" , "lunettes" => 0, "photo" =>0],
    ["name" => "Kevin" , "lunettes" => 0, "photo" =>0],
    ["name" => "William" , "lunettes" => 0, "photo" =>0],
    ["name" => "Daouda" , "lunettes" => 0, "photo" =>0],
    ["name" => "Hajara" , "lunettes" => 0, "photo" =>0],
    ["name" => "Soufiane" , "lunettes" => 0, "photo" =>0],
    ["name" => "Christopher" , "lunettes" => 0, "photo" =>0],
];



// $rand = mt_rand(0,99);
$genre = mt_rand(0,1) ? "men" : "women";

for ($i=0; $i < count($classMars) ; $i++) { 
    $classMars[$i]['lunettes']=mt_rand(0,1);
    $classMars[$i]['photo']= 'https://randomuser.me/api/portraits/'.$genre.'/'.mt_rand(0,99).'.jpg';
}

// var_dump($classMars);