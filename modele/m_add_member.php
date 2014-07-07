<?php
$projet = $_POST['project'];
$Pwd = $_POST['password'];
$Pwd = sha1($Pwd);
$email = $_POST['email'];
$sql = "INSERT INTO users VALUES ('','".$projet."','".$email."','".$Pwd."','0')";
echo $sql;
mysqli_query($bdd, $sql)
<<<<<<< HEAD
or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($bdd));

$sql = "INSERT INTO "
=======
or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($sql));
>>>>>>> a9d140ca7fe412dbc0b201d8993fc57b731b18df

?>