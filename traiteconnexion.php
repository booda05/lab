<?php 
// Je teste ma session mais avant on va se connecter
session_start();
require("connexion.php");
// on va recuperer l'email et mdp
//from candidat, candidat on rend le meme nom de la base
$user=$bdd -> query("SELECT * FROM user");
// fetch return true or false pour savoir si y a une autre tuple a parcourir ou pas
$trouv=false;
while ($tuple=$user -> fetch()){

	if ($_POST["username"]==$tuple["username"] && $_POST["mdp"]==$tuple["mdp"]) {
		$trouv=true;
	// et si on trouve on break pour ne pas continuer
		break;
	}
}

	if ($trouv==true) {
		header("Location:index2.php");
		// ici une fois connecter
		$_SESSION["connected"]=true;
		// ici durant notre session quand on passe d'une page a une autre c a dire il va se souvenir de mon email durant toute la connexion on garde le meme name que dans post et post on prend le meme que du script
		$_SESSION["email"]=$_POST["email"];
		$_SESSION["idCli"]=$tuple["id"];


	} else{
		header("Location:identification.php?erreur");
		$_SESSION["connected"]=false;
	}

?>