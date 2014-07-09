<?php

include_once 'm_connection_bdd.php';

	//Recuperations des projets
	$sql = "SELECT Login, Mail FROM users LIMIT 10";
	$req = mysql_query($sql);

	//Affichage des resultats
	$i = 0;
	while ($res = mysql_fetch_assoc($req)) {
		$j = $i++;
		echo "    
		<tbody>
                <tr>
                	<td>"echo $j;"</td>
                	<td>"echo $res['Login'];"</td>
                	<td>"echo $res['Mail'];"</td>
                	<td><a href=" echo 'v_admin_modify.php?nb='$i;">modifier</td>
                </tr>
            </tbody>";
        $i++;
	}
?>
