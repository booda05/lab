<?php 
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>catégorie rongeur</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_categ.css">
	<meta charset="utf-8">
</head>
<body>
	<header>
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
	</header>

	<!-- La PARTIE DES PRODUITS -->
	<div>
		<p class="meuilleur">Nous Sélectionnons le meuilleur pour votre chien</p>

		<div class="divproduits">

			<div style="grid-area: produit1;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;">
				<a href="produit_rongeur1.php">
					<div style="text-align:center;">
						<img src="image/Produits/r1.jpg" style="max-width: 200px; max-height: 200px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> RONGEUR </span> <br>
							<span class="txt2"><a href="" class="txt2">Cachette Timothy Bungalow</a></span>
						</p>
						<p class="txt3">6,400 DA</p>
					</div>
				</a>
			</div>

			<div style="grid-area: produit2;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;width:35vw;">
				<a href="produit_rongeur2.php">
					<div style="text-align:center;">
						<img src="image/Produits/r2.jpg" style="max-width: 200px; max-height: 200px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> RONGEUR </span> <br>
							<span class="txt2"><a href="" class="txt2">Maisonette pour rongeur</a></span>
						</p>
						<p class="txt3">1,800 DA</p>
					</div>
				</a>
			</div>


			<div style="grid-area: produit3;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;">
				<a href="produit_rongeur3.php">
					<div style="text-align: center;">
						<img src="image/Produits/r3.jpg" style="max-width: 200px; max-height:2100px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> RONGEUR </span> <br>
							<span class="txt2"><a href="" class="txt2">Naturaliss Lapin adulte</a></span>
						</p>
						<p class="txt3">2,200 DA</p>
					</div>
				</a>
			</div>


			<div style=" grid-area: produit4;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;width:35vw;">
				<a href="produit_rongeur4.php">									
					<div style="text-align:center;">
						<img src="image/Produits/r4.jpg" style="max-width: 200px; max-height: 200px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> RONGEUR </span> <br>
							<span class="txt2"><a href="" class="txt2">Selective Lapin Adulte </a></span>
						</p>
						<p class="txt3">2.500 DA</p>
					</div>
				</a>
			</div>


			<div style=" grid-area: produit5;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;position: relative;right: 75%; width: 35vw;">
				<a href="produit_rongeur5.php">	
					<div style="text-align:center;">
						<img src="image/Produits/r5.jpg" style="max-width: 200px; max-height: 180px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> RONGEUR </span> <br>
							<span class="txt2"><a href="" class="txt2">Tunnel Carotte</a></span>
						</p>
						<p class="txt3">2,500 DA</p>
					</div>
				</a>
			</div>



		</div>
	</div>


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

		</nav>
	</body>
	</html>