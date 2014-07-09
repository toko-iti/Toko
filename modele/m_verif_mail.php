<?php
$req = mysqli_query($bdd, 'SELECT Mail FROM Users WHERE Mail ="'.$_POST['email'].'"');
$result = mysqli_num_rows($req);
$trouver = false;
if ($result != 0) {
$trouver = true;
}
?>