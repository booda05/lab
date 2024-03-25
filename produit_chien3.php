<?php 
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Produit1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_produit.css">
	<meta charset="utf-8">
</head>


<body>
	<div class="container-1">
		<!-- La partie Nav BAR -->

		<nav>
			<div class="navdiv">
				<a href="index2.php" class="acceuil" style="
				font-size: 30px; order:2; flex: 0.15;margin-top: 25px; font-weight: 900;color: rgb(56, 61, 64);">Acceuil</a> 

				<a href="" class="apropos" style="font-size: 30px; order: 3; flex: 0.225;margin-top: 25px;font-weight: 900;color: rgb(56, 61, 64);"> Présentation</a> 


				<a href="#categ" class="ap"style="font-size: 30px;order:4; flex: 0.22;margin-top: 25px;font-weight: 900;color: rgb(56, 61, 64);">Nos produits</a> 

				<a href="" class="contact" style="font-size: 30px; order: 5; flex: 0.13;margin-top: 25px;font-weight: 900;color: rgb(56, 61, 64);"> Contact</a> 

				<a href="index2.php" style="order: 1; flex: 0.15;"><img src="image/logo1.png" style="max-width: 110px;margin-bottom: 20px;"></a>



				<span style="order: 6; flex: 0.26;margin-top: 17.5px;"><input type="search" name="search" id="search" placeholder="  Nouritures chiens,chats...etc" style="border:none; box-shadow: 1px 1px 1px grey; width: 19vw; height: 6vh;"> </span>
				<span style="position : relative;left: 88%; top: 12%;margin-top: 17.5px;"><a href=""> <img src="image/loupe.png" style="width: 25px;"> </a></span>

				<a href="index.php" style="order: 6; flex: 0.06;"><img src="image/deco.png" style="max-width: 40px;margin-top: 20px;"></a>

				<a href="panier.php" style="order: 7; flex: 0.05;"><img src="image/panier.png" style="max-width: 40px;margin-top: 20px;"></a>
			</div>
		</nav>

		<!-- La partie titre -->


		<div class="divproduit">
			<div style="grid-area: titre; text-align: center;">
				<h2>Royal Canin maxi puppy 15 Kg</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/chien3.jpg">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">Royal Canin maxi puppy 15 Kg</p>
				<p class="desc2">12.500DA</p>
				<p class="desc3">
					Même les grands chiens ont été petits une fois dans leur vie ! Pour que votre chiot devienne grand et beau, il est essentiel de lui offrir une alimentation équilibrée et complète. C’est pendant la première phase de croissance que la plus grande partie du squelette est formée. Durant cette période, il est primordial de fournir à votre chiot tous les nutriments dont il a besoin pour être en parfaite santé tout au long de sa vie.
				</p>
				<p class="idclif" style="display: none;"><?php echo $_SESSION['idCli']; ?></p>

				<form action="traitajout.php" method="POST">
					<input type="text" name="prodt" class="prodt" style="display: none;">
					<input type="number" name="nombre" id="nombre" class="nombre" min="0" max="10">

					<input type="text" name="idclit" class="idclit" style="display: none;">

					<input type="submit" name="" value="Ajouter au panier">
				</form>
			</div>
		</div>


		<!-- LE FOOTER -->
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



			</div>


		</body>
		<script type="text/javascript" src="ajout.js"></script>
		</html>