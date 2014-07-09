<?php
$DNS = $_POST['DNS'];
$sql = "INSERT INTO domaine VALUES ('".$DNS."')";
echo $sql;
mysqli_query($bdd, $sql)
or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($bdd));

$sql = "INSERT INTO "
or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($sql));
?>
