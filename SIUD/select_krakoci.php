<?php
    require_once('../db.php');
    $db6 = new Database();
    //insert function
    //$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
    //$t =SELECT * FROM `onlinexax` WHERE type = 'arkada'
    $araj6 = $db6->query('SELECT * FROM `onlinexax` WHERE type = \'krakoci\'');
    //var_dump($araj1);
?>