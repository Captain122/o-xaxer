<?php
    require_once('../db.php');
    $db4 = new Database();
    //insert function
    //$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
    //$t =SELECT * FROM `onlinexax` WHERE type = 'arkada'
    $araj4 = $db4->query('SELECT * FROM `onlinexax` WHERE type = \'sport\'');
    //var_dump($araj1);
?>