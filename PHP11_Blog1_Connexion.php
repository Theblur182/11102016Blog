 <!--
	Maxime DORFFER
	TP DE PHP - 2eme ANNEE
	LUDUS ACADEMIE F2A
-->
<?php
session_start();
?>
<?php
/*
1 HTML uniquement avec le formulaire login/mdp (juste ça dessus) on peut déclarer la session (au début) et utiliser la méthode post pour envoyer les données
*/
?>



<!DOCTYPE html>
<html>

	<!--HEAD-->
	<head>
		<meta charset="utf-8"/>
		<title> Page Web de Maxime Dorffer </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<!--/HEAD-->

<?php
//----------------------------------------------------------------------------Section Login
?>

<form action="PHP11_Blog3_Traitement.php" method="POST"> 

 Pseudo : <input name="pseudo" type="text" id="pseudo"/>
 <br/>
 Mot de passe : <input name="password" type="password" id="password"/>
 <br/>

<input name="submit_comment" type="submit" class="btn btn-primary" value="Connexion"/>

</form>