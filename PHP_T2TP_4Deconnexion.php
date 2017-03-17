 <!--_________________________________________________________________________________________________________Intro & Session Start-->
 <!--
	Maxime DORFFER - LUDUS ACADEMIE F2A
	TP DE PHP/Mysql - Page (?) Deconnexion
	26/01/2017
	Gestion de factures 
-->

<?php
session_start();

$_session = array();

session_destroy();

header('Location:PHP_T2TP_1Connexion.php')

?>


<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css"/>

        <title>Tp facture</title>

    </head>

    <body>
	<a class="reco" href="PHP_T2TP_4Deconnexion.php">Se déconnecter?</a>
		<h1>Merci de votre visite</h1>
			</br>
			</br>
				<h3> à bientot</h3>
			</br>
			</br>
				
	
    </body>

</html>