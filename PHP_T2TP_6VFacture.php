 <!--_________________________________________________________________________________________________________Intro & Session Start-->
 <!--
	Maxime DORFFER - LUDUS ACADEMIE F2A
	TP DE PHP/Mysql - Page (6) Visualisation de Factures
	26/01/2017
	Gestion de factures 
-->

	<h3> Web Apps - Facture <br/></h3>
	<h4>- Visualisation des factures -<br/> </h4>
	<a class="reco" href="PHP_T2TP_5Menu.php">Menu</a> -
	<a class="reco" href="PHP_T2TP_4Deconnexion.php">Déconnexion</a><br />

<?php  session_start();	

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

//Afficher les factures

$reponse =$bdd->query('SELECT * FROM facture');	
	/* 	NB
		- on demande à effectuer une requête : récuperer tout le contenu de la table client
	 	- la réponse sera renvoyée dans l'objet $reponse
	*/
while ($donnees = $reponse->fetch()) {		
	/* 	NB
		- $donnees contient champ par champ les valeurs de la première entrée
	 	- pour le champ console, utiliser l'array $donnees['console']
		- on utilise une boucle while pour parcourir les entrées.
	*/ 
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
	<div class="super"> <p>											<!--une déclaration qui utilise les champs de la BDD MySql-->
	<td rowspan="2"><strong> Facture</strong> : <?php echo $donnees['NumFacture']; ?> <br />   </td>
	<td rowspan="2">Date - <?php echo $donnees['DateFacture']; ?> <br /> </td>
	<td rowspan="2">Client n° <?php echo $donnees['NumClient']; ?> <br /> </td>
	<br /> </p></div>
	</tr>
	</table>
	</body>

	<?php
			}
	$reponse->closeCursor();								// Termine le traitement de la requête
	?>	
