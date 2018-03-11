<?php
    require_once('../db.php');
    $db3 = new Database();
    //insert function
    //$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
    //$t =SELECT * FROM `onlinexax` WHERE type = 'arkada'
    $araj3 = $db3->query('SELECT * FROM `onlinexax` WHERE type = \'gonka\'');
    //var_dump($araj1);
?>