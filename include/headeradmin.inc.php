<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Veville</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="Location de véhicule. Commandez en ligne et découvrez nos dernières nouveautés."> <!-- Description du site -->
<meta name="keywords" content="location, tarif, semaine, week-end, véhicule, paris, utilitaire, peugeot, renault, audi, mercedes, citroen,wolswagen, louer, agence, voiture, essence, diesel, avis, service"/><!-- mot clé pour le référencement-->
<meta name="author" content="Elayache Farouk & Matthieu Rodrigues">
<meta name="copyright" content="&copy; 2018 Location Véville" /> <!--  copyright
 CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/main.css" id="colors">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>
					<a href="index.php" class="dashboard-logo"><img src="images/logo2.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>


				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">
						<li><a class="current" href="index.php">Accueil</a>
						<li><a href="nos_vehicules.php">Nos véhicules</a>
						<li><a href="nos_agences.php">Nos agences</a></li>
						<li><a href="admin.php">Administration</a>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End  -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
				<div class="header-widget">
					<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Connexion	</a>
				</div>
			</div>
			<!-- Right Side Content / End -->

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Sign In</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Log In</a></li>
						<li><a href="#tab2">Register</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
							<form method="post" class="login">

								<p class="form-row form-row-wide">
									<label for="pseudo">Pseudo :
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="pseudo" id="pseudo" value="" />
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="mdp">Mot de passe :
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="mdp" name="mdp" id="mdp"/>
									</label>
									<span class="lost_password">
										<a href="#" >Mot de passe oublié ?</a>
									</span>
								</p>

								<div class="form-row">
									<input type="submit" class="button border margin-top-5" name="login" value="Login" />
									<div class="checkboxes margin-top-10">
										<input id="remember-me" type="checkbox" name="check">
										<label for="remember-me">Se souvenir de moi</label>
									</div>
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form method="post" class="register">
								
							<p class="form-row form-row-wide">
								<label for="pseudo">Votre pseudo&nbsp;:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="pseudo" id="pseudo" maxlength="20" pattern="[a-zA-Z0-9.-_]{3, 20}" title="Caractères acceptés : a-z A-Z 0-9 .-_" required/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="mot_de_passe">Votre mot de passe&nbsp;:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="mdp" id="mot_de_passe" pattern="{3, }" title="Minimum 3 caractères pour votre mot de passe" required/>
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="nom">Votre Nom&nbsp;:
									<input type="text" class="form-control" placeholder="Votre nom" name="nom" id="nom" maxlength="20" required>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="prenom">Votre Prénom&nbsp;:
									<input type="text" class="form-control" placeholder="Votre prénom" name="prenom" id="prenom" maxlength="20" required>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="email">Votre Email&nbsp;:
									<i class="im im-icon-Mail"></i>
									<input type="email" class="form-control" placeholder="Votre email" name="email" id="email" required>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="civilite">Civilité&nbsp;: </label>
								<select name="civilite" size="1">
									<option name="civilite" value="m" checked>Homme</option>
									<option name="civilite" value="f">Femme</option>
								</select>
							</p>
							


							<input type="submit" class="button border fw margin-top-10" name="button" value="Register" />
	
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Sign In Popup / End -->

		</div>
	</div>
</header>
<div class="clearfix"></div>
	<!-- Header / End -->

	