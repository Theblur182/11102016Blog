 <!--
	Maxime DORFFER
	TP DE PHP - 2eme ANNEE
	LUDUS ACADEMIE F2A
-->
<?php
session_start();
?>


<?php
$FILE="PHP11_BlogA_User.txt";
$read=file($FILE);
$loginfile=utf8_decode($read[0]);
$mdpfile=utf8_decode($read[1]);
$message="Bonjour";


if ( $loginfile == $_session['pseudo'] )		 {

		  /*
		  echo $loginfile;
		  echo '<br/>';
		  echo $_POST['pseudo'];
		  echo '<br/>';
		  echo $mdpfile;
		  echo '<br/>';
		  echo $_POST['password'];
		  echo '<br/>';
		  */
			}
		else {
			header ('location:PHP11_Blog1_Connexion.php')  ;
			}
			
?>



<!DOCTYPE html>
<html>

	<!--HEAD-->
	<head>
		<meta charset="utf-8"/>
		<title> Blog PHP de Maxime Dorffer </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<!--/HEAD-->
<?php
//----------------------------------------------------------------------------Section Login
?>



<?php
//----------------------------------------------------------------------------Section Blog
?>
 <h2><strong>Blog</strong></h2>

 <h1>C'est dur le code, mais bienvenue sur mon blog</h1>
 <br/>


 <i>Ecrit par Noobcodeur</i> 
<br/>

 -12 Novembre 2016
 <br/>

 Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.  Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker. 
 <br/>



 <i>Ecrit par Noobcodeur</i> 
 <br/>

 -13 Novembre 2016
<br/>

 On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.  
 <br/>



<?php
//Section Formulaire->
?>
<form action="111016blog_traitement.php" method="POST"> 
 <h2><strong>Formulaire - Ecrivez un commentaire</strong></h2>

 Pseudo 
 <input name="pseudo" type="text" id="pseudo"/>
 <br/>

 Titre 
<input type="text" />
 <br/>

Message
<input type="textarea" id="message"/>
<br/>
<input name="submit_comment" type="submit" class="btn btn-primary" value="Répondre"/>
</form>
</html>



