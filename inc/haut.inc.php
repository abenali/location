<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo URL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo URL; ?>css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
    <meta name="description" content="Location de véhicule. Commandez en ligne et découvrez nos dernières nouveautés."> <!-- Description du site -->
    <meta name="keywords" content="location, tarif, semaine, week-end, véhicule, paris, utilitaire, peugeot, renault, audi, mercedes, citroen,wolswagen, louer, agence, voiture, essence, diesel, avis, service"/><!-- mot clé pour le référencement-->
    <meta name="author" content="Elayache Farouk & Matthieu Rodrigues">
    <meta name="copyright" content="&copy; 2018 Location Véville" /> <!--  copyright -->
    <title>Accueil - Véville Location</title>
    <meta property="og:title" content="Véville Location" /> <!-- Titre du site -->
    <meta property="og:url" content=" A REMPLACER !!!!!!!! " /> <!-- Adresse du site -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL;?>css/style.css">
    <title>Véville Location</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
    <header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between" role="navigation">
        <a class="navbar-brand" href="#" title="Mon Site">Véville Location</a>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <a href="#" class="btn btn-info btn-sm">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
        </a>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>
    <!--<header class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
                <a class="navbar-brand" href="#" title="Mon Site">Véville Location</a>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?= URL; ?>index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= URL;?>inscription.php">Inscription</a></li>
                    <?php if(internauteEstConnecteEtEstAdmin()): ?>
                    <li class="nav-item"><a class="nav-link" href="<?= URL;?>connexion.php">Connexion</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= URL; ?>admin/gestion_des_produits.php">Gestion des produits</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= URL; ?>admin/gestion_des_vehicules.php">Gestion des véhicules</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= URL; ?>admin/gestion_des_agences.php">Gestion des agences</a></li>
						        <li class="nav-item"><a class="nav-link" href="<?= URL; ?>admin/gestion_des_commandes.php">Gestion des commandes</a></li>
                                <?php endif; ?>
                                <?php if(internauteEstConnecte()): ?>
						        <li class="nav-item"><a class="nav-link" href="<?= URL; ?>panier.php">Panier</a></li>
						      <div class="dropdown">
							     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Membre</button>
							     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								      <a class="dropdown-item" href="#"></a>
								      <a class="dropdown-item" href="<?= URL; ?>profil.php">Profil</a></li>
                            <a class="dropdown-item" href="<?= URL; ?>connexion.php?action=deconnexion">Déconnexion</a></li>		  
                            <?php else: ?>
                            <li class="nav-item"><a class="nav-link" href="<?= URL; ?>panier.php">Panier</a></li>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Membre</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-item" ><a class="dropdown-item" href="<?= URL; ?>inscription.php">Inscription</a>
                                    <li class="dropdown-item" ><a class="dropdown-item" href="<?= URL; ?>connexion.php">Connexion</a>	
                                 </div>
                            </div>
                        <?php endif; ?>				
                    </ul>
                </nav> 
        </header>-->
            <section>
            <div class="container">