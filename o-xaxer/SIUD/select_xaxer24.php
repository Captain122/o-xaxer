<?php
require_once('../db.php');
$db = new Database();
$arajt = $db->query('SELECT * FROM onlinexax2 WHERE id > 60  AND id < 90');
?>