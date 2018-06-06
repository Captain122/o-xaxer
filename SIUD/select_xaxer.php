<?php
    require_once('db.php');
    $db = new Database();
    //insert function
    //$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
    $araj = $db->query('SELECT * FROM onlinexax  WHERE text = \'xaxer\'');
?>