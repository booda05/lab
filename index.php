<?php 
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Titre</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>


	<div class="container-1">
		<!-- La partie Nav BAR -->

		<nav>
			<div class="navdiv">
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

		<!-- La partie image -->
		<div class="image">
			<p style="font-size: 70px;color:white;width: 30%; font-family: cursive;margin-left: 100px;top:15%;position: absolute;">
				Le meilleur pour vos animaux domestiques <br> </p> 
			</div>


			<!-- La partie MAIN qui contient les produits -->
			
			<div class="main">
				<div class="top_produits" style="grid-area: top_produits;">
					<h4> TOP PRODUITS </h4>
				</div>
				<a href="#">
					<div class="produit1" style="display:flex; flex-direction: column; grid-area: produit1; border: black 1px;">
						<div class="flex1">
							<img src="image/Produits/chat1.jpg" style="max-width: 100px; max-height: 100px;">
						</div>

						<div class="flex2">
							<p> <span class="txt1"> CHATS </span> <br>
								<span class="txt2"><a href="" class="txt2">Arbre à chat Josefa</a></span>
							</p>
							<p class="txt3">45.000 DA</p>
						</div>
					</div>
				</a>

				<a href="#">
					<div class="produit2" style="display:flex; flex-direction: column; grid-area: produit2; border: black 1px;">

						<div class="flex1">					
							<img src="image/Produits/chat3.jpg" style="max-width: 100px; max-height: 100px;">

						</div>
						<div class="flex2">
							<p> <span class="txt1">CHATS</span> <br>
								<a href="" class="txt2">Croquette Whiskas 1.4 Kg Poulet</p>
									<p class="txt3">1,500 DA</p>
								</div>
							</div>
						</a>

						<a href="#">
							<div class="produit3" style="display:flex; flex-direction: column; grid-area: produit3; border: black 1px  ;">

								<div class="flex1">	
									<img src="image/Produits/chat5.jpg" style="max-width: 100px; max-height: 100px;">

								</div>

								<div class="flex2">
									<p> <span class="txt1"> CHIENS </span> <br>
										<a href="" class="txt2">Cage de transport italienne pour chat – IMAC</a><br> </p>
										<p class="txt3">3,800 DA</p>
									</div>

								</div>
							</a>

							<a href="#">

								<div class="produit4" style="display:flex; flex-direction: column; grid-area: produit4; border: black 1px  ;">

									<div class="flex1">					
										<img src="image/Produits/chien2.jpg" style="max-width: 100px; max-height: 100px;">

									</div>
									<div class="flex2">
										<p> <span class="txt1"> CHIENS </span> <br>
											<a href="" class="txt2">Royal canin Berger Allemand 16KG</a><br> </p>
											<p class="txt3">12,900 DA</p>
										</div>
									</div>
								</a>

								<a href="#">
									<div class="produit5" style="display:flex; flex-direction: column; grid-area: produit5; border: black 1px  ;">

										<div class="flex1"><img src="image/Produits/chien4.jpg" style="max-width: 100px; max-height: 100px;">

										</div>
										<div class="flex2"><p> <span class="txt1"> CHIENS </span> <br>
											<a href="" class="txt2">Niche en plastique pour chiens IMAC</a><br> </p>
											<p class="txt3">8,000 DA</p>
										</div>
									</div>

								</a>
								<a href="#">
									<div class="produit6"style="display:flex; flex-direction: column; grid-area: produit6; border: black 1px  ;">

										<div class="flex1"><img src="image/Produits/r1.jpg" style="max-width: 100px; max-height: 100px;">

										</div>
										<div class="flex2"><p> <span class="txt1"> RONGEURS </span> <br>
											<a href="" class="txt2">Cachette Timothy Bungalow</a><br> </p>
											<p class="txt3">6,400 DA</p>
										</div>
									</div>
								</a>

								<a href="#">
									<div class="produit7"style="display:flex; flex-direction: column; grid-area: produit7; border: black 1px  ;">

										<div class="flex1">					<img src="image/Produits/r3.jpg" style="max-width: 100px; max-height: 100px;">

										</div>
										<div class="flex2"><p> <span class="txt1"> RONGEURS </span> <br>
											<a href="" class="txt2">Naturaliss Lapin adulte</a><br> </p>
											<p class="txt3">2,200 DA</p>
										</div>
									</div>
								</a>
								<a href="#">

									<div class="produit8"style="display:flex; flex-direction: column; grid-area: produit8; border: black 1px  ;">

										<div class="flex1">					<img src="image/Produits/r5.jpg" style="max-width: 100px; max-height: 100px;">

										</div>
										<div class="flex2"><p> <span class="txt1"> RONGEURS </span> <br>
											<a href="" class="txt2">Tunnel Carotte</a><br> </p>
											<p class="txt3">2,500 DA</p>
										</div>
									</div>
								</a>

								<a href="#">
									<div class="produit9"style="display:flex; flex-direction: column; grid-area: produit9; border: black 1px  ;">

										<div class="flex1">					<img src="image/Produits/chien3.jpg" style="max-width: 100px; max-height: 100px;">

										</div>
										<div class="flex2"><p> <span class="txt1"> CHIENS </span> <br>
											<a href="" class="txt2">Royal Canin maxi puppy 15 Kg</a><br> </p>
											<p class="txt3">12,500 DA</p>
										</div>
									</div>
								</a>

								<a href="#">
									<div class="produit10"style="display:flex; flex-direction: column; grid-area: produit10; border: black 1px  ;">
										<div class="flex1">
											<img src="image/Produits/chien5.png" style="max-width: 100px; max-height: 100px;">
										</div>
										<div class="flex2">
											<p> <span class="txt1"> CHIENS </span> <br>
												<a href="" class="txt2">Meradog croquettes pour chien Adult 15 Kg</a><br> </p>
												<p class="txt3">5,500 DA</p>
											</div>
										</div>
									</a>

								</div>
								<!-- LESPACE ENTRE NOS DIV -->

								<div style="grid-area: espace; line-height: 4;">
									<br>
								</div>

								<!-- Notre phrase PUB -->

								<div  style="grid-area: pub1; text-align: center; box-shadow: 1px 0px 1px grey; ">
									<img src="image/cart.png" class="image-pub"> <br>
									<p> <span class="titre-pub">Livraison Express</span> <br>
										<span class="paragraphe-pub">Livraison gratuite à partir de <strong>10.000DA</strong> <br> d’achats sur <strong>BEJAIA</strong>.</span></p>

									</div>

									<div  style="grid-area: pub2; text-align: center;
									box-shadow: 1px 0px 1px grey;">
									<img src="image/return.png" class="image-pub">
									<p><span class="titre-pub">Produit garantie </span><br>
										<span class="paragraphe-pub">Découvrez les marques et un <br> assortiment de produits essentiels pour <br> animaux de compagnie</span></p>

									</div>

									<div  style="grid-area: pub3; text-align: center; box-shadow: 0px 0px 0px grey;">
										<img src="image/living-room.png" class="image-pub">
										<p><span class="titre-pub">E-Boutique</span> <br>
											<span class="paragraphe-pub">Les meilleurs prix et promotions sur les <br>produits et fournitures pour animaux <br> domestiques</span></p>
										</div>



										<!-- Notre phrase Catégorie -->
										<div class="phrase" style="grid-area: phrase">
											<h2 style="text-align:center; color:#455054;">RETROUVEZ NOS 3 CATEGORIES</h2>
										</div>


										<!-- La partie des catégories -->

										<div id="categ" class="content1"><a href="#">
											<span class="span1" style="left: 40%;bottom: 10%; color:white;">Chat</span>
											<img src="image/chat.png" class="chat" >
										</a></div>

										<div class="content2"><a href="#">
											<img src="image/lapins.png" class="lapins" >
											<span class="span1" style="left: -20%; color:black;">Rongeur</span></a></div>

											<div class="content3"><a href="#">
												<span class="span1" style="left: 40%;bottom: 3%; color:white;">Chiens</span>
												<img src="image/chien.png" class="chien" ></a></div>

												<!-- ESPACE 2 ENTRE LES DIV -->

												<div style="grid-area: espace2;line-height: 8;">
													<br>

												</div>



												


												<!-- ESPACE3 ENTRE LES DIV -->





												<!-- Le FOOTER -->


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
												</html>