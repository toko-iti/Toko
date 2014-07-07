<?php
$sql = 'SELECT * FROM users WHERE Login = "'.$_SESSION['Login'].'"';
$req = mysqli_query($BDD, $sql);
$resultat = mysql_fetch_array($req);
?>