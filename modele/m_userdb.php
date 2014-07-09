<?php
$sql = "CREATE USER '".$_POST['project']."'@'localhost' IDENTIFIED BY '".$_POST['password']."'";
mysql_query($sql) or die('Erreur creation user '.mysql_error());

$sql = "CREATE DATABASE ".$_POST['project']."";
mysql_query($sql) or die('Erreur creation BDD '.mysql_error());

$sql = "GRANT 2ALL PRIVILEGES ON ".$_POST['project'].".* TO '".$_POST['project']."'@'%' IDENTIFIED BY '".$_POST['password']."'";
mysql_query($sql) or die('Erreur atribution des droits'.mysql_error());
?>
