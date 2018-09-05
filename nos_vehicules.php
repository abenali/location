<?php
	require_once('include/header.inc.php');?>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Nos véhicules</h2><span>Trouvez la voiture de vos rêves !</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li>Nos véhicules</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<!-- Content
================================================== -->
<div class="container">
			<div class="row">
				<div class="col-md-12">

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
		<!-- Search Section / End -->


		<div class="col-md-12">

			<!-- Sorting - Filtering Section -->
			<div class="row margin-bottom-25 margin-top-30">

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						
					</div>
				</div>

				<div class="col-md-6">
					<div class="fullwidth-filters">
						<!-- Sort by -->
						<div class="sort-by">
							<div class="sort-by-select">
								<select data-placeholder="Default order" class="chosen-select-no-single">
									<option>Prix croissant</option>
									<option>Prix décroissant</option>
									<option>Catégories croissantes</option>
									<option>Catégories décroissantes</option>
								</select>
							</div>
						</div>
						<!-- Sort by / End -->

					</div>
				</div>

			</div>
			<!-- Sorting - Filtering Section / End -->

			<div class="row">

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/clio.jpg" alt="">
								<span class="tag">Economique</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">
								<div class="listing-badge now-open">Now Open</div>

								<div class="listing-item-inner">
									<h3>Tom's Restaurant <i class="verified-icon"></i></h3>
									<span>964 School Street, New York</span>
								</div>
								<div class="listing-item-details">Starting from $59 per night</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/clio.jpg" alt="">
								<span class="tag">Economique</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">

								<div class="listing-item-inner">
								<h3>Sticky Band</h3>
								<span>Bishop Avenue, New York</span>
								</div>
								<div class="listing-item-details">Starting from $59 per night</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/mercedes.jpg" alt="">
								<span class="tag">Premium</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">

								<div class="listing-item-inner">
								<h3>Hotel Govendor</h3>
								<span>778 Country Street, New York</span>
								</div>
								<div class="listing-item-details">Starting from $59 per night</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/porsche.jpg" alt="">
								<span class="tag">Luxe</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">
								<div class="listing-badge now-open">Now Open</div>
								
								<div class="listing-item-inner">
								<h3>Burger House <i class="verified-icon"></i></h3>
								<span>2726 Shinn Street, New York</span>
								</div>
								<div class="listing-item-details">Starting from $59 per night</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/mercedes.jpg" alt="">
								<span class="tag">Premium</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">

								<div class="listing-item-inner">
								<h3>Airport</h3>
								<span>1512 Duncan Avenue, New York</span>
								</div>
								<div class="listing-item-details">Starting from $59 per night</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/clio.jpg" alt="">
								<span class="tag">Economique</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">
								<div class="listing-badge now-closed">Now Closed</div>

								<div class="listing-item-inner">
								<h3>Think Coffee</h3>
								<span>215 Terry Lane, New York</span>
								</div>
								<div class="listing-item-details">Starting from $59 per night</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

			</div>

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-20 margin-bottom-40">
						<nav class="pagination">
							<ul>
								<li><a href="#" class="current-page">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

		</div>

	</div>
</div>

<?php
	require_once('include/footer.inc.php');?>