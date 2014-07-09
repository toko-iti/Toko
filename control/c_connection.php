<?php
	if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {
		include_once '../modele/m_connetion_bdd.php';
		$login = $_POST['login'];
		$pwd = $_POST['password'];
		$pwd = sha1($pwd);
		
		// On verifie que le login et le mot de pass sont valides
		include_once '../modele/m_valid_user.php';

		if ($trouver) {
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['password'] = $pwd;

			// On verifie si l'utilisateur est un admin ou un simple utilisateur
			include_once '../modele/m_admin_or_not.php';

			if ($admin) {
				header('Location: ../vue/v_admin_index.php'); // Remplacer par la page admin
			} else {
				header('Location: ../vue/v_user_index.php'); // Remplacer par page utilisateur
			}
			
		} else {
			header('Location: ../../index.php'); // Redirection a la page index
		}
	} else {
		header('Location: ../../index.php'); // Redirection a la page index
	}
	
?>
