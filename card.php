<?php require_once "services.php"?>


<div class="card col-3 text-center shadow m-3 <?php echo ($user["lunettes"]==1) ? " border border-danger" :  "" ?>">
    <div class="card-header bg-dark text-white ">
        <h2 class="card-title"><?= ucwords($user["name"]) ?></h2>
    </div>
    <div class="card-body">
        <img src="<?= $user["photo"]?>" alt="">              
    </div>    
</div>
