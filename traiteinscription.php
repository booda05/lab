<?php 
require("connexion.php");

try{
	$bdd-> exec("INSERT INTO user(username,mdp,email)
		VALUES('".$_POST['username']."','".$_POST['mdp']."','".$_POST['email']."')");
		header("Location:identification.php");
	}catch(Exception $e){
		echo "Echec ajout".$e -> getMessage();
	}
 ?>
