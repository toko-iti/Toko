<?php

if (!empty($_POST['pwd']) && !empty($_POST['pwd_verif']) && $_POST['pwd'] == $_POST['pwd_verif']) {
$update = ('UPDATE users SET Passwd = "'.sha1($_POST['pwd']).'" WHERE Login = "'.$_SESSION['Login'].'"');
mysqli_query($bdd,$update) or die ('Erreur modification mdp ' . mysql_error());
}

if (!empty($_POST['mail'])) {
$update = ('UPDATE users SET Mail = "'.$_POST['mail'].'" WHERE Login = "'.$_SESSION['Login'].'"');
mysqli_query($bdd,$update);
}

?>