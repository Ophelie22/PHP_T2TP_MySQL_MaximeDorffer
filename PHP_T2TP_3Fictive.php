 <!--_________________________________________________________________________________________________________Intro & Session Start-->
 <!--
	Maxime DORFFER - LUDUS ACADEMIE F2A
	TP DE PHP/Mysql - Page (3) Fictive
	26/01/2017
	Gestion de factures 
-->

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
?>