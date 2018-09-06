<?php
	require_once("include/header.inc.php");
	$resultat = $pdo->query("SELECT * FROM vehicule");
?>

<!-- Banner
================================================== -->
<div class="main-search-container" data-background-image="images/voiturebanner.jpeg">
	<div class="main-search-inner">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Nos voitures de location</h2>
					<h4>Recherchez un véhicule, en fonction de vos envies</h4>

					<div class="main-search-input">

						<div class="main-search-input-item location">
							<div id="autocomplete-container">
								<input id="autocomplete-input" type="text" placeholder="Votre adresse">
							</div>
							<a><i class="fa fa-map-marker"></i></a>
						</div>

						<div class="main-search-input-item location">
							<div class="autocomplete-container">
								<input type="text" class="autocomplete-input" id="booking-date" data-lang="fr" data-large-mode="true" data-large-default="true" data-min-year="2017" data-max-year="2020" data-lock="from">
							</div>
							<a><i class="fa fa-calendar-o"></i></a>
						</div>

						<div class="main-search-input-item location">
							<div class="autocomplete-container">
								<input type="text" class="autocomplete-input" id="booking-date2" data-lang="fr" data-large-mode="true" data-large-default="true" data-min-year="2017" data-max-year="2020" data-lock="from">
							</div>
							<a><i class="fa fa-calendar-o"></i></a>
						</div>

						<div class="main-search-input-item">
							<select data-placeholder="All Categories" class="chosen-select" >
								<option>Catégories</option>	
								<option>Economique</option>
								<option>Premium</option>
								<option>Luxe</option>
								<option>Utilitaire</option>
							</select>
						</div>

						<button class="button" onclick="window.location.href='listings-half-screen-map-list.html'">Chercher un véhicule</button>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-top-75">
				Categories
				<span>Trouvez la<i> voiture</i> de vos rêves</span>
			</h3>
		</div>

	</div>
</div>


<!-- Categories Carousel -->
<div class="fullwidth-carousel-container margin-top-25">
	<div class="fullwidth-slick-carousel category-carousel">
		<?php
			while ($vehicule = $resultat->fetch()) {
		?>
	    <div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="<?php echo $vehicule['photo']; ?>">
					<div class="category-box-content">
						<h3><?php echo $vehicule['titre']; ?></h3>
						<span>Rajouter nb voiture</span>
					</div>
					<span class="category-box-btn">Découvrir</span>
				</a>
			</div>
		</div>

		<?php } ?>
	</div>
</div>
<!-- Categories Carousel / End -->

<?php
	require_once('include/footer.inc.php');
?>