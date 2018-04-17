<?php
require_once('db.php');
$db = new Database();
//insert function
//$db->execute(" INSERT INTO `onlinexax` SET `link` ='a111aa', `img`='vv111v' ");
$arajt = $db->query('SELECT * FROM onlinexax2 WHERE id > 1  AND id < 32');
?>