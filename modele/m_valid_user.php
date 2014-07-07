<?php
	// Rempalcer les donnes
	$req = mysql_query('SELECT Login, Passwd FROM users WHERE Login ="'.$login.'" AND Passwd ="'.$password.'"');
	$result = mysql_num_rows($req);
	$trouver = false;
	if ($result != 0) {
		$trouver = true;
	}
?>