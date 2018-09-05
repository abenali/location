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
						<li class="active"><a href="membres.php">Gestion des membres </a></li>
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
					<h2>Membres</h2>
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
								<option>Nom</option>	
								<option>Prénom</option>
								<option>Date enregistrement</option>
							</select>
						</div>
					</div>

					<h4>Liste des membres</h4>
					<ul>

						<li class="pending-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Nom Prénom <span class="booking-status pending">Membre</span></h3>

										<div class="inner-booking-list">
											<h5>Date inscription:</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Pseudo :</h5>
											<ul class="booking-list">
												<li class="highlighted">Nomprenom</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Email :</h5>
											<ul class="booking-list">
												<li class="highlighted">nomprenom@hello.com</li>
											</ul>
										</div>

									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="sl sl-icon-magnifier"></i> Voir</a>
								<a href="#" class="button gray"><i class="sl sl-icon-note"></i> Modifier</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
							</div>
						</li>

						<li class="approved-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Nom Prénom 2 <span class="booking-status approved">Admin</span></h3>

										<div class="inner-booking-list">
											<h5>Date inscription:</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Pseudo :</h5>
											<ul class="booking-list">
												<li class="highlighted">Nomprenom2</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Email :</h5>
											<ul class="booking-list">
												<li class="highlighted">nomprenom2@hello.com</li>
											</ul>
										</div>

									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="sl sl-icon-magnifier"></i> Voir</a>
								<a href="#" class="button gray"><i class="sl sl-icon-note"></i> Modifier</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
							</div>
						</li>

						<li class="pending-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Nom Prénom <span class="booking-status pending">Membre</span></h3>

										<div class="inner-booking-list">
											<h5>Date inscription:</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Pseudo :</h5>
											<ul class="booking-list">
												<li class="highlighted">Nomprenom</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Email :</h5>
											<ul class="booking-list">
												<li class="highlighted">nomprenom@hello.com</li>
											</ul>
										</div>

									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="sl sl-icon-magnifier"></i> Voir</a>
								<a href="#" class="button gray"><i class="sl sl-icon-note"></i> Modifier</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
							</div>
						</li>

						<li class="pending-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Nom Prénom <span class="booking-status pending">Membre</span></h3>

										<div class="inner-booking-list">
											<h5>Date inscription:</h5>
											<ul class="booking-list">
												<li class="highlighted">12.12.2017 at 15:30 P.M</li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Pseudo :</h5>
											<ul class="booking-list">
												<li class="highlighted">Nomprenom</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Email :</h5>
											<ul class="booking-list">
												<li class="highlighted">nomprenom@hello.com</li>
											</ul>
										</div>

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
	<!-- Content / End -->

<?php
	require_once('include/footeradmin.inc.php');?>