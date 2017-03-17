 <!--_________________________________________________________________________________________________________Intro & Session Start-->
 <!--
	Maxime DORFFER - LUDUS ACADEMIE F2A
	TP DE PHP/Mysql - Page (8) Visualisation de Produits
	26/01/2017
	Gestion de factures 
-->

	<h3> Web Apps - Facture <br/></h3>
	<h4>- Visualisation des produits -<br/> </h4>
	<a class="reco" href="PHP_T2TP_5Menu.php">Menu</a> -
	<a class="reco" href="PHP_T2TP_4Deconnexion.php">Déconnexion</a><br />

<?php session_start();					//Connexion BDD Mysql (sur toutes pages. Utiliser un include ?)
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=facture2', 'root' /*user*/, '' /*mdp*/, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
																				  //à partir de la, cette ligne aide à traquer les erreurs	
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());	//le message est généré automatiquement			

	}

//Afficher les Produits

$reponse =$bdd->query('SELECT * FROM produits');	
while ($donnees = $reponse->fetch()) {		
	?>

	<!--_________________________________________________________________________________________________________Doctype HTML/CSS-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Page Web de Maxime Dorffer </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<!--_________________________________________________________________________________________________________Body-->

	<body>
		<table border="4px" cellspacing="1">
<tr>
	<p>														<!--une déclaration qui utilise les champs de la BDD MySql-->
	<td rowspan="2"> <strong>Produit</strong> : <?php echo $donnees['NumProduit']; ?> <br />  </td>
	<td rowspan="2"> Description : <?php echo $donnees['Des']; ?> <br /> </td>
	<td rowspan="2"> Prix unitaire hors taxe - <?php echo $donnees['PUHT']; ?> <br /></td>
	<br /> </p>
</tr>
	</table>
	</body>


	<?php
}
	$reponse->closeCursor();								// Termine le traitement de la requête
	?>	
