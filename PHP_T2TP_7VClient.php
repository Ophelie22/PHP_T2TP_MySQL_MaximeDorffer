 <!--_________________________________________________________________________________________________________Intro & Session Start-->
 <!--
	Maxime DORFFER - LUDUS ACADEMIE F2A
	TP DE PHP/Mysql - Page (7) Visualisation de Clients
	26/01/2017
	Gestion de factures 
-->


	<h3> Web Apps - Facture <br/></h3>
	<h4>- Visualisation des clients -<br/> </h4>
	<a class="reco" href="PHP_T2TP_5Menu.php">Menu</a> -
	<a class="reco" href="PHP_T2TP_4Deconnexion.php">Déconnexion</a><br />

<?php session_start();	

	//Connexion BDD Mysql
			//cette connexion est à faire sur toutes les pages. Utiliser un include ?
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=facture2', 'root' /*user*/, '' /*mdp*/, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
																				  //à partir de la, cette ligne aide à traquer les erreurs	
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());	//le message est généré automatiquement			

	}

//Afficher les Clients

$reponse =$bdd->query('SELECT * FROM client, facture');	
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
	<td rowspan="2"><strong>Client</strong> : <?php echo $donnees['NumClient']; ?> <br />  </td>
	<td rowspan="2">Nom prénom - <?php echo $donnees['NomClient']; ?> <?php echo $donnees['PrenomClient']; ?> <br /> </td>
	<td rowspan="2">Adresse - <?php echo $donnees['AdresseClient']; ?> <?php echo $donnees['Cp']; ?> <?php echo $donnees['VilleClient']; ?>, <?php echo $donnees['PaysClient']; ?>. <br /></td>
	<br /> </p>
</tr>
	</table>
	</body>


	<?php
}
	$reponse->closeCursor();								// Termine le traitement de la requête
	?>	
