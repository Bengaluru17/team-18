<?php
session_destroy();
$ch = curl_init("../login.php");
curl_exec($ch);
?>
