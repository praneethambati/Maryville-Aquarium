<?php
ini_set("SMTP","aspmx.l.google.com");
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: ambatisaipraneeth@gmail.com" . "\r\n";
$name=$_GET['name'];
$email=$_GET['email'];
$msg=$_GET['msg'];
mail("ambatisaipraneeth@gmail.com","a","b");
?>