 <!--
	Maxime DORFFER
	TP DE PHP - 2eme ANNEE
	LUDUS ACADEMIE F2A
-->

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


//Section Blog
echo '<h2><strong>Blog</strong></h2>';

echo '<h1>C\'est dur le code, mais bienvenue sur mon blog</h1>';
echo '<br/>';

//ARTICLE 1
echo '<i>Ecrit par Noobcodeur</i> ';
echo '<br/>';

echo '-12 Novembre 2016';
echo '<br/>';

echo 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.  Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker. ';
echo '<br/>';
echo '<br/>';

//ARTICLE 2
echo '<i>Ecrit par Noobcodeur</i> ';
echo '<br/>';

echo '-13 Novembre 2016';
echo '<br/>';

echo 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.  ';
echo '<br/>';
echo '<br/>';
echo '<br/>';


// Section Formulaire

echo '<h2><strong>Formulaire - Ecrivez un commentaire</strong></h2>';

echo 'Pseudo ';
echo '<input type="text" />';
echo '<br/>';

echo 'Titre ';
echo '<input type="text" />';
echo '<br/>';

echo 'Message ';
echo '<input type="text" />';
echo '<br/>';
echo '<input name="submit_comment" type="submit" class="btn btn-primary" value="Répondre"/>';


?>



