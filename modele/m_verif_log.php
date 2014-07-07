<?php
$req = mysqli_query($bdd,'SELECT Login FROM users WHERE Login ="'.$_POST['project'].'"');
$result = mysqli_num_rows($req);
$trouver = false;
if ($result != 0) {
$trouver = true;
}
?>