 <!--_________________________________________________________________________________________________________Intro & Session Start-->
 <!--
	Maxime DORFFER - LUDUS ACADEMIE F2A
	TP DE PHP/Mysql - Page (1) Connexion
	26/01/2017
	Gestion de factures 

-->

<?php session_start();					 //Formulaire HTML qui utilise la méthode Post pour récupérer ID/Mdp de l'user et envoyer les données ?>


<!--_________________________________________________________________________________________________________Doctype HTML/CSS-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Page Web de Maxime Dorffer </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	
	<h3> Web Apps - Facture <br/></h3>
	<h4>- CONNEXION -<br/> </h4>
	

 <!--_________________________________________________________________________________________________________Section Login-->

<form action="PHP_T2TP_2Traitement.php" method="POST"> 												
<br/>
 Pseudo : <input name="pseudo" type="text" id="pseudo"/>
 <br/>
 Mot de passe : <input name="password" type="password" id="password"/><br/>
 <br/>

<?php 																						//à compléter
 //echo password_hash($_POST ['password'], PASSWORD_DEFAULT )."\n";
 ?>

<input name="submit_comment" type="submit" class="btn btn-primary" value="Connexion"/><br/>
