<?php
    //echo 1111111111111111;
    require_once ('../db.php');
    $db = new Database();
    //insert function
    //$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
    $arajm = $db->query('SELECT * FROM onlinexax  WHERE  text = \'xaxer\'');
?>