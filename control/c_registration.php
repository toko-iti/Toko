<?php
// connection a la bdd
include('../modele/m_connection_bdd.php');

// On verifie que le pseudo est libre 
include('../modele/m_verif_log.php');

// si le pseudo est libre on verifie que le mail est libre
if (!$trouver) {
	include('../modele/m_verif_mail.php');
	
	// Si le pseudo et le mail sont libres on verifie que les mdp et le mdp verif corespondent
	if (!$trouver) {
		// si les mdp corespondent on ajoute le membre a la bdd
		if($_POST['password'] == $_POST['password2']) {
			include('../modele/m_add_member.php');
			// Creation de la base de donnee pour le nouveau utilisateur
			exec(./home/toko/master.sh $_POST['project']  $_POST['pwd'];
			include('../modele/m_uderdb.php');
			header('Location: ../vue/v_login.php');
			$_SESSION = array();
		} else {
			echo 'Le mot de passe et la verification ne correspondent pas!<br>';
			header('Location: ../index.php');
			
		}
	} else {
		echo "Ce mail n'est plus disponible<br>";
		header('Location: ../index.php');
	}
} else {
	echo "Ce nom de compte n'est plus disponible<br>";
	header('Location: ../index.php');
}
?>
