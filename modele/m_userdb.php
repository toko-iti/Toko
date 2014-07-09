<?php
mysql_connect('localhost', 'root', 'plop')  or die('Erreur de connexion '.mysql_error());

$sql = "CREATE USER '".$_POST['projet']."'@'localhost' IDENTIFIED BY '".$_POST['password']."'";
mysql_query($sql) or die('Erreur creation user '.mysql_error());

$sql = "CREATE DATABASE ".$_POST['projet']."";
mysql_query($sql) or die('Erreur creation BDD '.mysql_error());

$sql = "GRANT ALL PRIVILEGES ON ".$_POST['projet'].".* TO '".$_POST['projet']."'@'%' IDENTIFIED BY '".$_POST['password']."'";
mysql_query($sql) or die('Erreur atribution des droits'.mysql_error());

header('Location: http://sql.toko.itinet.fr/');
?>

