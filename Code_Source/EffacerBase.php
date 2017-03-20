<?php
extract($_POST);
include('./includes/Connect.html');
include('./includes/header.html');
date_default_timezone_set("Europe/Paris");
if (isset($_POST['Effacer'])) 
{
      $delete_request=$bdd_Write->prepare("DELETE FROM donnees_capteurs");   //remet à zéro la table temporaire qui accueille les moyennes
      $alter_request=$bdd_Write->prepare("ALTER TABLE donnees_capteurs AUTO_INCREMENT=1 ");  //remet à 0 l'incrémentation des id de la table
      $delete_request->execute(); 
      $alter_request->execute();
}

		$dateadd=date('Y-m-d H:i');
		$i=1;
		$insert_request = $bdd_Write->prepare("INSERT INTO donnees_capteurs (`DateTime`, Tempe_Out_C, Tempe_Out_F,  Tempe_In_C, Tempe_In_F, Tempe_Ressentie, Tx_Humid_Out, Tx_Humid_In, Press_Atm_hPa, Pluvio, Vitesse_Vent, Sens_Vent) VALUES ( '".$dateadd."', '".$i."', '".$i."', '".$i."', '".$i."', '".$i."', '".$i."', '".$i."', '".$i."', '".$i."', '".$i."', 'Nord')"); 
		$insert_request->execute();


?>
<!DOCTYPE html>
<html>
<head>
	
    <!-- Fichiers Bootstrap -->
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="./bootstrap/ie-emulation-modes-warning.js"></script>

    <!--fichier css pour l'armature de la page -->
    <link href="./css/offcanvas.css" rel="stylesheet">  
</head>
<body>
	<div class="panel panel-default">
		<div class="panel-body">
			<form method="POST" action="">
				<button type="submit" name="Effacer">Effacer la Base</button>
			</form>
		</div>
	</div>
</body>
</html>