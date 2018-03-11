<?php
    require_once('../db.php');
    $db9 = new Database();
    //insert function
    //$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
    //$t =SELECT * FROM `onlinexax` WHERE type = 'arkada'
    $araj9 = $db9->query('SELECT * FROM `onlinexax` WHERE type = \'casino\'');
    //var_dump($araj1);
?>