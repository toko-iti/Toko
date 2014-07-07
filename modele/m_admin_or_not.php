<?php
	// Verifie que l'utilisateur est admin
	$req = mysql_query('SELECT Login, Userisadmin FROM users WHERE Login ="'.$login.'" AND Userisadmin = 1');
	$result = mysql_num_rows($req);
	$admin = false;
	if ($result != 0) {
		$admin = true;
	}
?>