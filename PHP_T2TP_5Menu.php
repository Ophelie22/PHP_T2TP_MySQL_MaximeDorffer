 <!--_________________________________________________________________________________________________________Intro & Session Start-->
 <!--
	Maxime DORFFER - LUDUS ACADEMIE F2A
	TP DE PHP/Mysql - Page (3) Menu
	26/01/2017
	Gestion de factures 
-->

<?php session_start(); 	 // on démarre la session 

	//Connexion BDD Mysql
			//cette connexion est à faire sur toutes les pages. Utiliser un include ?
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=facture2', 'root' /*user*/, '' /*mdp*/, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
																				  //à partir de la, cette ligne aide à traquer les erreurs	
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());	//le message d'erreur est généré automatiquement			
												//il précise ce qui cloche et empêche d'avancer jusqu'à que ce soit réparé.
	}


	if (isset($_GET['id']) AND $_GET['id']> 0 ) // verification si l'ID est supérieur à 0
	{
	// récupération des données de l'ID du client 
	$getid = intval($_GET['id']);
	$requser = $bdd-> prepare ('SELECT * FROM client WHERE id =?');
	$requser-> execute (array($getid));
	$userinfo = $requser-> fetch();
}

?> 

<!--_________________________________________________________________________________________________________Doctype HTML/CSS-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Page Web de Maxime Dorffer </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<h3> Web Apps - Facture <br/></h3>
	<h4>- MENU -<br/> </h4>
	<a class="reco" href="PHP_T2TP_4Deconnexion.php">Déconnexion</a><br />

 <!--_________________________________________________________________________________________________________Menu - Visualisation des fiches-->

<body>

<ul class="niveau1">
  <li>
   <strong> Visualiser </strong>
    <ul class="niveau2">
      <li><a href="PHP_T2TP_6VFacture">Facture</li></a>
      <li><a href="PHP_T2TP_7VClient">Client</li></a>      
      <li><a href="PHP_T2TP_8VProduit">Produit</li></a>
      <br />
    </ul>
  </li>
</ul>

<ul class="niveau1">
  <li>
    <ul class="niveau2">
      <strong><a href="PHP_T2TP_9Ajouter">Ajouter</a></strong>
    </ul>
  </li>
</ul>

</body>