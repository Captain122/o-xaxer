<?php
    require_once('../db.php');
    $db10 = new Database();
    //insert function
    //$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
    //$t =SELECT * FROM `onlinexax` WHERE type = 'arkada'
    $araj10 = $db10->query('SELECT * FROM `onlinexax` WHERE type = \'str\'');
    //var_dump($araj1);
?>