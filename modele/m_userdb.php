<?php
$new_bdd="$_POST[project]";
$bdd_password="$_POST[password]";

mysql_close();

mysql_connect('localhost', 'pma', 'plop')  or die('Erreur de connexion '.mysql_error());

$sql = "CREATE USER '$new_bdd'@'localhost' IDENTIFIED BY '$bdd_password'";
mysql_query($sql) or die('Erreur creation user '.mysql_error());

//$sql = "CREATE DATABASE ".$_POST['project']."";
//mysql_query($sql) or die('Erreur creation BDD '.mysql_error());

//$sql = "GRANT ALL PRIVILEGES ON ".$_POST['project'].".* TO '".$_POST['project']."'@'%' IDENTIFIED BY '".$_POST['password']."'";
//mysql_query($sql) or die('Erreur atribution des droits'.mysql_error());

mysql_close();

include('../modele/m_connetion.php');
?>
