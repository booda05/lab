<?php 
require("connexion.php");

try{
	$bdd-> exec("INSERT INTO panier(nom,qte,idCli)
		VALUES('".$_POST['prodt']."','".$_POST['nombre']."','".$_POST['idclit']."')");
		header("Location:index2.php");;
	}catch(Exception $e){
		echo "Echec ajout".$e -> getMessage();
	}

 ?>