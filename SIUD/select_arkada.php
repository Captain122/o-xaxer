<?php
    require_once('../db.php');
    $db1 = new Database();
    //insert function
    //$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
    //$t =SELECT * FROM `onlinexax` WHERE type = 'arkada'
    $araj1 = $db1->query('SELECT * FROM `onlinexax` WHERE type = \'arkada\'');
    //var_dump($araj1);
?>