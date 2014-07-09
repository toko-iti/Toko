<?php
// connection a la bdd
include('../modele/m_connection_bdd.php');
// si le pseudo est libre on verifie que le domaine est libre
if (!$trouver) {
	include('../modele/m_verif_domain.php');
	include('../modele/m_add_domain.php');
	exec("/usr/bin/sudo /home/toko/add_domain.sh '".$_POST['DNS']."'");
	}
	else {
			echo 'Existe deja<br>';
			header('Location: ../vue/v_user_domain.php');
		}
	?>