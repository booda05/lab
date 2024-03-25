<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style_identification.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"> </script>
	<script src="script.js" defer></script>
	<title>Mon site - Connexion</title>
</head>


<body>
	<!-- LA PARTIE NAV -->
	<nav>
		<div class="navdiv" style="background-color: white;">
			<a href="index.php" class="acceuil" style="
			font-size: 30px; order:2; flex: 0.15;margin-top: 25px; font-weight: 900;color: rgb(56, 61, 64);">Acceuil</a> 

			<a href="" class="apropos" style="font-size: 30px; order: 3; flex: 0.225;margin-top: 25px;font-weight: 900;color: rgb(56, 61, 64);"> Présentation</a> 


			<a href="#categ" class="ap"style="font-size: 30px;order:4; flex: 0.22;margin-top: 25px;font-weight: 900;color: rgb(56, 61, 64);">Nos produits</a> 

			<a href="" class="contact" style="font-size: 30px; order: 5; flex: 0.13;margin-top: 25px;font-weight: 900;color: rgb(56, 61, 64);"> Contact</a> 

			<a href="index.php" style="order: 1; flex: 0.15;"><img src="image/logo1.png" style="max-width: 110px;margin-bottom: 20px;"></a>



			<span style="order: 6; flex: 0.26;margin-top: 17.5px;"><input type="search" name="search" id="search" placeholder="  Nouritures chiens,chats...etc" style="border:none; box-shadow: 1px 1px 1px grey; width: 19vw; height: 6vh;"> </span>
			<span style="position : relative;left: 88%; top: 12%;margin-top: 17.5px;"><a href=""> <img src="image/loupe.png" style="width: 25px;"> </a></span>

			<a href="identification.php" style="order: 6; flex: 0.06;"><img src="image/utilisateur.png" style="max-width: 40px;margin-top: 20px;"></a>

			<a href="" style="order: 7; flex: 0.05;"><img src="image/panier.png" style="max-width: 40px;margin-top: 20px;"></a>
		</div>
	</nav>
	<!-- LA PARTIE D'INSCRIPTION -->

	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" style="color:white;">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" style="color:white;">Sign Up</label>
			<div class="login-form">

				

				<!-- Connexion -->
				<form action="traiteconnexion.php" method="POST">
					<div class="sign-in-htm">
						<div class="group">
							<?php 
							$fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							if (strpos($fullUrl, "erreur") == true) {
								echo "<p style='color:red;'>Email ou MDP incorrect</p>";
							}
							?>
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="username">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="mdp">
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign In">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot" style="color:white;">Forgot Password?</a>
						</div>
					</div>
				</form>

				<!-- Inscription -->
				<form action="traiteinscription.php" method="POST">
					<div class="sign-up-htm">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="username">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="mdp">
						</div>
						<div class="group">
							<label for="pass" class="label">Repeat Password</label>
							<input id="pass" type="password" class="input" data-type="password">
						</div>
						<div class="group">
							<label for="pass" class="label">Email Address</label>
							<input id="pass" type="text" class="input" name="email">
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign Up">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-1">Already Member?</a>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>


<!-- LA PARTIE FOOTER -->

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
		</html>