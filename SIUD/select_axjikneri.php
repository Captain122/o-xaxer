<?php
    require_once('../db.php');
    $db8 = new Database();
    //insert function
    //$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
    //$t =SELECT * FROM `onlinexax` WHERE type = 'arkada'
    $araj8 = $db8->query('SELECT * FROM `onlinexax` WHERE type = \'axjik\'');
    //var_dump($araj1);
?>