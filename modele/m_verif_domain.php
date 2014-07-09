<?php

$req = mysqli_query($bdd, 'SELECT DNS FROM domaine WHERE DNS ="'.$_POST['DNS'].'"');
$result = mysqli_num_rows($req);
$trouver = false;
if ($result != 0) {
$trouver = true;
}
?>