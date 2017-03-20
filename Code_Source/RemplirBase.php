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
<?php
extract($_POST);
include('./includes/Connect.html');
include('./includes/header.html');
date_default_timezone_set("Europe/Paris");

if (!empty($nblignes)) 
{
 

	for ($i=0; $i < $nblignes ; $i++) 
	{ 
		$select_request=$bdd_Read->prepare("SELECT `DateTime` FROM donnees_capteurs ORDER BY id Desc LIMIT 0,1");
		$select_request->execute();

		while ($donnees= $select_request->fetch())
		{
			$dateadd=date('Y-m-d H:i:s', strtotime($donnees['DateTime'])+60);
		}
			$j=$i+5;
			$k=$i+10;
			$l=$i+15;
			$m=$i+20;
			$n=$i+25;
			$o=$i+30;
			$p=$i+35;
			$q=$i+40;
			$r=$i+45;
		$insert_request = $bdd_Write->prepare("INSERT INTO donnees_capteurs (`DateTime`, Tempe_Out_C, Tempe_Out_F,  Tempe_In_C, Tempe_In_F, Tempe_Ressentie, Tx_Humid_Out, Tx_Humid_In, Press_Atm_hPa, Pluvio, Vitesse_Vent, Sens_Vent) VALUES ( '".$dateadd."', '".$i."', '".$j."', '".$k."', '".$l."', '".$m."', '".$n."', '".$o."', '".$p."', '".$q."', '".$r."', 'Nord')"); 
		$insert_request->execute();
	}
}

$select_request=$bdd_Read->prepare("SELECT `DateTime` FROM donnees_capteurs ORDER BY id ASC LIMIT 0,1");
$select_request->execute();
while ($donnees= $select_request->fetch())
{
	echo '<div class="panel panel-default"><div class="panel-body">
	  Date Mini : '.$donnees['DateTime'].'<br>';
}

$select_request=$bdd_Read->prepare("SELECT `DateTime` FROM donnees_capteurs ORDER BY id Desc LIMIT 0,1");
$select_request->execute();
while ($donnees= $select_request->fetch())
{
	echo 'Date Max : '.$donnees['DateTime'].'</div></div>';
}






?>

<body>
	<div class="panel panel-default">
		<div class="panel-body">
			<form method="POST" action="">
				<input type="text" name="nblignes" placeholder="Nombre enrengistrements">Nombre enrengistrements<br>
				<button type="submit" name="Valider">Valider</button>
			</form>
		</div>
	</div>
</body>
</html>