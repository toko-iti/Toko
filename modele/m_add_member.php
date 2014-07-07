<?php
$projet = $_POST['project'];
$Pwd = $_POST['password'];
$Pwd = sha1($Pwd);
$email = $_POST['email'];
$id = "";
$sql = "INSERT INTO users VALUES ('','".$projet."','".$email."','".$Pwd."','0')";
mysqli_query($bdd, $sql)
or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($bdd));;

$sql = "INSERT INTO "

?>