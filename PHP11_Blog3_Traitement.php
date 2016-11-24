 <!--
	Maxime DORFFER
	TP DE PHP - 2eme ANNEE
	LUDUS ACADEMIE F2A
-->
<?php
session_start();

$FILE="PHP11_BlogA_User.txt";
$read=file($FILE);
$loginfile=utf8_decode($read[0]);
$mdpfile=utf8_decode($read[1]);
$message="Bonjour";


if ( $loginfile == $_POST['pseudo'] || $mdpfile == $_POST['password'] )		 {

		$_session['pseudo']=$loginfile;

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
		<title> Page Web de Maxime Dorffer </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<!--/HEAD-->

	<body>

<?php
//----------------------------------------------------------------------------Section Blog
?>
<?php
//Section Formulaire
echo "$message $loginfile";
?>
<p>
<?php
//Section Formulaire->
?>
<form action="PHP11_Blog2_EnvoiCommentaire.php" method="POST"> 
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
</p>


</body>

</html>





