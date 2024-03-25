<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Panier</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<!-- La partie NAV -->
	<nav>
		<div class="navdiv">
			<a href="index2.php" class="acceuil" style="
			font-size: 30px; order:2; flex: 0.15;margin-top: 25px; font-weight: 900;color: rgb(56, 61, 64);">Acceuil</a> 

			<a href="#" class="apropos" style="font-size: 30px; order: 3; flex: 0.225;margin-top: 25px;font-weight: 900;color: rgb(56, 61, 64);"> Présentation</a> 


			<a href="#categ" class="ap"style="font-size: 30px;order:4; flex: 0.22;margin-top: 25px;font-weight: 900;color: rgb(56, 61, 64);">Nos produits</a> 

			<a href="#" class="contact" style="font-size: 30px; order: 5; flex: 0.13;margin-top: 25px;font-weight: 900;color: rgb(56, 61, 64);"> Contact</a> 

			<a href="index2.php" style="order: 1; flex: 0.15;"><img src="image/logo1.png" style="max-width: 110px;margin-bottom: 20px;"></a>



			<span style="order: 6; flex: 0.26;margin-top: 17.5px;"><input type="search" name="search" id="search" placeholder="  Nouritures chiens,chats...etc" style="border:none; box-shadow: 1px 1px 1px grey; width: 19vw; height: 6vh;"> </span>
			<span style="position : relative;left: 88%; top: 12%;margin-top: 17.5px;"><a href=""> <img src="image/loupe.png" style="width: 25px;"> </a></span>

			<a href="index.php" style="order: 6; flex: 0.06;"><img src="image/deco.png" style="max-width: 40px;margin-top: 20px;"></a>

			<a href="" style="order: 7; flex: 0.05;"><img src="image/panier.png" style="max-width: 40px;margin-top: 20px;"></a>
		</div>
	</nav>

	<?php 
	require("connexion.php");
	$tabpanier = $bdd->query("SELECT * FROM panier WHERE idCli = '".$_SESSION['idCli']."'");

	?>

	<!-- La partie PANIER -->
	<div class="panier">
		<!-- <p style="font-size: 60px;text-align: center;">Le panier est vide</p>
			<img src="image/panier-vide.png" style="max-width: 200px; margin-left: 540px;"> -->

			<?php 
                $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($fullUrl, "delete") == true) {
                    echo "<p style='color:red;'>Produit supprimé du panier</p>";
                }
                if (strpos($fullUrl, "ajoute") == true) {
                    echo "<p style='color:green;'>Commande passée avec succés !</p>";
                }
                ?>

			<?php 
			while ($tuple = $tabpanier->fetch()) {
				echo '<div style="background-color:grey;">
				<p>Nom produit : </p>
				<p>'.$tuple["nom"].'</p>

				<p>quantite produit : </p>
				<p>'.$tuple["qte"].'</p>

				<form action="delete.php" method="POST">
				<input type="text" name="id" value="'.$tuple["id"].'" style="display:none;">
				<input type="submit" name="" value="Supprimer">
				</form>

				</div>
				
				';
			}

			?>


			<form action="commande.php" method="POST">
				<input type="submit" name="" value="Passer la commande">
			</form>

		</div>
		<!-- La partie Footer -->
		<footer class="footerdiv">
			<div style="grid-area: foot1;" class="foot1">
				<h3>Besoin d'aide?</h3>
				<br>
				<p> <img src="image/tel.png" class="imagefoot">0558232340 <br>
					<span class="spanfoot">Du lundi au vendredi de 9h a 18h</span></p>
					<br>
					<p> <img src="image/mail.png" class="imagefoot"> Envoyer un mail
						<span class="spanfoot"><br>Nous te répondrons des que possible</span></p>

					</div>
					<div style="grid-area: foot2;"class="foot2">
						<h3>A propos</h3>
						<br>
						<p><a href="">Le blog</a></p>
						<p><a href="">Plan du site</a></p>
						<p><a href="">Glossaire du web</a></p>
						<p><a href="">Mention legal</a></p>
					</div>
					<div style="grid-area: foot3;" class="foot3">
						<a href=""><img src="image/coeur.png" class="imagefoot2"></a>
						<a href=""><img src="image/instagram.png" class="imagefoot2"></a>
						<a href=""><img src="image/facebook.png" class="imagefoot2"></a>
						<a href=""><img src="image/snapchat.png" class="imagefoot2"></a>
						<a href=""><img src="image/tiktok.png" class="imagefoot2"></a>
						<a href=""><img src="image/youtube.png" class="imagefoot2"></a>
					</div>

					<div style="grid-area: foot4;" class="foot4">
						<p><a href=""> <span class="spanfoot2">condition d'utilisation</span></a> .<a href=""> <span class="spanfoot2">Politique de confidentalité </span></a>. <a href=""> <span class="spanfoot2">Politique de cookies</span></a> .<a href=""> <span class="spanfoot2">configurer les cookies</span></a></p>

					</div>


				</footer>
			</body>
			</html>