 <!--_________________________________________________________________________________________________________Intro & Session Start

	Maxime DORFFER - LUDUS ACADEMIE F2A
	TP DE PHP/Mysql - Page (2) Traitement
	26/01/2017
	Gestion de factures 																							-->


<?php session_start();					 //Formulaire HTML qui utilise la méthode GET pour récupérer ID/Mdp de l'user et recevoir les données ?>


<!--_________________________________________________________________________________________________________Doctype HTML/CSS-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Page Web de Maxime Dorffer </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	
	<h3> Web Apps - Facture <br/></h3>
	<h4>- TRAITEMENT -<br/> </h4>
	

 <!--_________________________________________________________________________________________________________Section Traitement-->

<?php 
																						//à compléter
// echo password_hash($_POST ['password'], PASSWORD_DEFAULT )."\n";
//on teste le post avec les Is Set (voir cours)

echo $_POST['pseudo'];											//récupérer les infos de la page connexion
echo $_POST['password'];

try
																//connexion à la BDD MySQL
	{
		$bdd = new PDO('mysql:host=localhost;dbname=facture2', 'root' /*user*/, '' /*mdp*/, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
																//à partir de la, cette ligne aide à traquer les erreurs	
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$reponse = $bdd->query('SELECT * FROM user WHERE user=\'Maxime\'');			//requete SQL pour trouver l'utilisateur			

	while ($donnees = $reponse->fetch())										 

/*
	- afficher la requete (en mode Debug) printr+fetch all
*/

{
   print_r($reponse);																
	echo '<br/>';																
	print_r($donnees);															
}

/*
	- printr invoque l'affichage en mode debug, un tableau
	- $reponse contient toute la réponse de MySQL sous forme d'objet
	- $donnees est un array renvoyé par fetch. Il organise les données renvoyées par $reponse à chaque boucle pour afficher les champs.
*/

	$reponse->closeCursor(); 											// Termine le traitement de la requête																		
?>
  
   <strong> <br/>
   <br/> En attendant d'être redirigé, cliquez <a class="reco" href="PHP_T2TP_5Menu.php">ici</a> pour accéder au menu. <br />
   </strong>
