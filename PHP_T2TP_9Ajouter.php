 <!--_________________________________________________________________________________________________________Intro & Session Start-->
 <!--
	Maxime DORFFER - LUDUS ACADEMIE F2A
	TP DE PHP/Mysql - Page (4) Ajouter
	26/01/2017
	Gestion de factures 
-->

<?php session_start(); 	 // on démarre la session 

$bdd = new PDO('mysql:host=localhost;dbname=facture2', 'root' /*user*/, '' /*mdp*/, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

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
	<h4><br />- AJOUTER -<br/> </h4>
	<a class="reco" href="PHP_T2TP_5Menu.php">Menu</a> -
	<a class="reco" href="PHP_T2TP_4Deconnexion.php">Déconnexion</a><br />

 <!--_________________________________________________________________________________________________________Menu - Ajouter-->


<!-- Formulaire FACTURE -->
<br/><form method="post" action="PHP_T2TP_5Menu.php" method="POST"> <fieldset>
<h1>Facture</h1>
<label> Date : <input name="fnum" type="date" id="num" placeholder="Ex : 10" required /></label> <br/>
<label> Numéro client : <input name="fnum" type="text" id="num" placeholder="Ex : 10" autofocus required /></label> <br/>
<br/>	<input name="submit_facture" type="submit" class="btn btn-primary" value="Ajouter"/>	<br/>
<input name="reset" type="reset" class="btn btn-primary" value="Vider les champs"/>	
</form> </fieldset>

<!-- Formulaire CLIENT -->
<form method="post" action="PHP_T2TP_5Menu.php" method="POST"> <fieldset>
<h1>Client</h1>
<label>Nom : <input name="cnom" type="text" id="Nom" placeholder="Ex : Schmidt" required /></label> <br/>
<label>Prénom : <input name="cprenom" type="text" id="prenom" placeholder="Ex : Martin" required /></label> <br/>
<label>Adresse : <input name="cadresse" type="text" id="Adresse" placeholder="Ex : 3, rue des bergers" required /></label> <br/>
<label>Code Postal : <input name="ccode" type="text" id="code Postal" placeholder="Ex : 67000" required /></label> <br/>
<label>Ville : <input name="cville" type="text" id="ville" placeholder="Ex : Strasbourg" required /></label> <br/>
<label>Pays : <input name="cpays" type="text" id="Pays" placeholder="Ex : France" required /></label> <br/>
<br/>	<input name="submit_client" type="submit" class="btn btn-primary" value="Ajouter"/>	<br/>
<input name="reset" type="reset" class="btn btn-primary" value="Vider les champs"/>	
</form> </fieldset>

<!-- Formulaire PRODUIT -->
<form method="post" action="PHP_T2TP_5Menu.php" method="POST"> <fieldset>
<h1>Produit</h1>
<label>Description : <input name="pdes" type="text" id="Description" placeholder="Ex : TV" required/></label> <br/>
<label>Prix unitaire HT : <input name="pprix" type="text" id="prix" placeholder="Ex : 500€" required /></label> <br/>
<br/>	<input name="submit_produit" type="submit" class="btn btn-primary" value="Ajouter"/>	<br/>
<input name="reset" type="reset" class="btn btn-primary" value="Vider les champs"/>	
</form> </fieldset>


