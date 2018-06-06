<?php
    require_once('../db.php');
    $db2 = new Database();
    //insert function
    //$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
    //$t =SELECT * FROM `onlinexax` WHERE type = 'arkada'
    $araj2 = $db2->query('SELECT * FROM `onlinexax` WHERE type = \'sexan\'');
    //var_dump($araj1);
?>