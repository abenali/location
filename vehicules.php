<?php
	require_once("include/headeradmin.inc.php");
	?>

<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Navigation</a>
	
	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul>
				<li><a href="administration.php"><i class="sl sl-icon-settings"></i> Résumé</a></li>

				<li><a><i class="sl sl-icon-layers"></i> Véhicules</a>
					<ul>
						<li class="active"><a href="vehicules.php">Gestion des véhicules </a></li>
						<li><a href="ajout_vehicule.php">Ajout d'un véhicule </a></li>
					</ul>	
				</li>
				<li><a><i class="sl sl-icon-layers"></i> Agences</a>
					<ul>
						<li><a href="agences.php">Gestion des agences </a></li>
						<li><a href="ajout_agence.php">Ajout d'une agence </a></li>
					</ul>	
				</li>
				<li><a><i class="sl sl-icon-layers"></i> Membres</a>
					<ul>
						<li><a href="membres.php">Gestion des membres </a></li>
						<li><a href="ajout_membre.php">Ajout d'un membre </a></li>
					</ul>	
				</li>
			</ul>

			<ul data-submenu-title="Account">
				<li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>

		</div>
	</div>
	<!-- Navigation / End -->

<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Véhicules</h2>
					
				</div>
			</div>
		</div>

		<div class="row">
			
			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>Véhicules enregistrés</h4>
					<ul>

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="images/clio.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Référence : 1052</h3>
										<span>Renault</span>
										<span>Clio</span>
										<span>2&nbsp;</span>&nbsp;|&nbsp;<span>&nbsp;Prix/Jour : 200e</span>
										<br>
										<span>Diesel, boite auto, 5 portes, GPS, Auto-Radio, Forfait 1000km (0,5e/km supplémentaire)</span><br>
										
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="sl sl-icon-magnifier"></i> Voir</a>
								<a href="#" class="button gray"><i class="sl sl-icon-note"></i> Modifier</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
							</div>
						</li>

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="images/clio.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Référence : 1052</h3>
										<span>Renault</span>
										<span>Clio</span>
										<span>2&nbsp;</span>&nbsp;|&nbsp;<span>&nbsp;Prix/Jour : 200e</span>
										<br>
										<span>Diesel, boite auto, 5 portes, GPS, Auto-Radio, Forfait 1000km (0,5e/km supplémentaire)</span><br>
										
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="sl sl-icon-magnifier"></i> Voir</a>
								<a href="#" class="button gray"><i class="sl sl-icon-note"></i> Modifier</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
							</div>
						</li>

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="images/clio.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Référence : 1052</h3>
										<span>Renault</span>
										<span>Clio</span>
										<span>2&nbsp;</span>&nbsp;|&nbsp;<span>&nbsp;Prix/Jour : 200e</span>
										<br>
										<span>Diesel, boite auto, 5 portes, GPS, Auto-Radio, Forfait 1000km (0,5e/km supplémentaire)</span><br>
										
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="sl sl-icon-magnifier"></i> Voir</a>
								<a href="#" class="button gray"><i class="sl sl-icon-note"></i> Modifier</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
							</div>
						</li>

					</ul>
				</div>
			</div>

	</div>
	<!-- Content / End -->

	<?php
	require_once('include/footeradmin.inc.php');?>