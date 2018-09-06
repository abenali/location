<?php
	require_once("include/headeradmin.inc.php");
	?>

<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
	
	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul>
				<li><a href="administration.php"><i class="sl sl-icon-settings"></i> Résumé</a></li>
				<li class="active"><a href="gestion_commandes.php"><i class="sl sl-icon-settings"></i>Gestion des commandes</a></li>
				<li><a><i class="sl sl-icon-layers"></i> Véhicules</a>
					<ul>
						<li><a href="vehicules.php">Gestion des véhicules </a></li>
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
					<h2>Gestion des commandes</h2>
				</div>
			</div>
		</div>

		<div class="row">
			
			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">

					<!-- Sort by -->
					<div class="sort-by">
						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single">
								<option>Numero</option>	
								<option>Prénom</option>
								<option>Date</option>
							</select>
						</div>
					</div>

					<h4>Liste commandes</h4>
					<ul>

						<li class="pending-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Numero de commande | Nom Prénom Email</h3>

										<div class="inner-booking-list">
											<h5>Date Commande:</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Date Départ :</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Date Arrivée :</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Agence :</h5>
											<ul class="booking-list">
												<li class="highlighted">Vaugirard</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Prix total :</h5>
											<ul class="booking-list">
												<li class="highlighted">1200e</li>
											</ul>
										</div>

									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="sl sl-icon-magnifier"></i> Voir</a>
								<a href="#" class="button gray"><i class="sl sl-icon-note"></i> Modifier</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Supprimer</a>
							</div>
						</li>

						<li class="pending-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Numero de commande | Nom Prénom Email</h3>

										<div class="inner-booking-list">
											<h5>Date Commande:</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Date Départ :</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Date Arrivée :</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Agence :</h5>
											<ul class="booking-list">
												<li class="highlighted">Vaugirard</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Prix total :</h5>
											<ul class="booking-list">
												<li class="highlighted">1200e</li>
											</ul>
										</div>

									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="sl sl-icon-magnifier"></i> Voir</a>
								<a href="#" class="button gray"><i class="sl sl-icon-note"></i> Modifier</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Supprimer</a>
							</div>
						</li>

						<li class="pending-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Numero de commande | Nom Prénom Email</h3>

										<div class="inner-booking-list">
											<h5>Date Commande:</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Date Départ :</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Date Arrivée :</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Agence :</h5>
											<ul class="booking-list">
												<li class="highlighted">Vaugirard</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Prix total :</h5>
											<ul class="booking-list">
												<li class="highlighted">1200e</li>
											</ul>
										</div>

									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="sl sl-icon-magnifier"></i> Voir</a>
								<a href="#" class="button gray"><i class="sl sl-icon-note"></i> Modifier</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Supprimer</a>
							</div>
						</li>

						<li class="pending-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Numero de commande | Nom Prénom Email</h3>

										<div class="inner-booking-list">
											<h5>Date Commande:</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Date Départ :</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Date Arrivée :</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Agence :</h5>
											<ul class="booking-list">
												<li class="highlighted">Vaugirard</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Prix total :</h5>
											<ul class="booking-list">
												<li class="highlighted">1200e</li>
											</ul>
										</div>

									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="sl sl-icon-magnifier"></i> Voir</a>
								<a href="#" class="button gray"><i class="sl sl-icon-note"></i> Modifier</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Supprimer</a>
							</div>
						</li>

						<li class="pending-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Numero de commande | Nom Prénom Email</h3>

										<div class="inner-booking-list">
											<h5>Date Commande:</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Date Départ :</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Date Arrivée :</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Agence :</h5>
											<ul class="booking-list">
												<li class="highlighted">Vaugirard</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Prix total :</h5>
											<ul class="booking-list">
												<li class="highlighted">1200e</li>
											</ul>
										</div>

									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="sl sl-icon-magnifier"></i> Voir</a>
								<a href="#" class="button gray"><i class="sl sl-icon-note"></i> Modifier</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Supprimer</a>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
	<!-- Content / End -->

<?php
	require_once('include/footeradmin.inc.php');?>