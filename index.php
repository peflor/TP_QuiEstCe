<?php  require_once "services.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TP Qui Est-ce ?</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Qui a des lunettes ?</h1>
        <div class="row ">            
                <?php foreach($classMars as $user ):?>
                    <?php require "card.php" ?>
                <?php endforeach;?>            
        </div>
    </div>
</body>
</html>