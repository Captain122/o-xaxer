<?php
    require_once('../db.php');
    $db7 = new Database();
    //insert function
    //$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
    //$t =SELECT * FROM `onlinexax` WHERE type = 'arkada'
    $araj7 = $db7->query('SELECT * FROM `onlinexax` WHERE type = \'kriv\'');
    //var_dump($araj1);
?>