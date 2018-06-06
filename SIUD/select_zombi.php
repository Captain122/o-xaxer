<?php
    require_once('../db.php');
    $db5 = new Database();
    //insert function
    //$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
    //$t =SELECT * FROM `onlinexax` WHERE type = 'arkada'
    $araj5 = $db5->query('SELECT * FROM `onlinexax` WHERE type = \'zombi\'');
    //var_dump($araj1);
?>