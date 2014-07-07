<?php

$bdd = mysql_connect ('localhost', 'root', 'plop') or die(mysql_error('Erreur de connexion a la base de donee'));  
mysql_select_db ('toko', $bdd) or die(mysql_error('Erreur de selection de base de donee'));  

?>