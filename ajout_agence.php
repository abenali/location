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
						<li><a href="vehicules.php">Gestion des véhicules </a></li>
						<li><a href="ajout_vehicule.php">Ajout d'un véhicule </a></li>
					</ul>	
				</li>
				<li><a><i class="sl sl-icon-layers"></i> Agences</a>
					<ul>
						<li><a href="agences.php">Gestion des agences </a></li>
						<li class="active"><a href="ajout_agence.php">Ajout d'une agence </a></li>
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
					<h2>Ajouter Agence</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i> Informations</h3>
						</div>

						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Nom de l'agence</i></h5>
								<input type="text" value=""/>
							</div>
						</div>

						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Adresse</i></h5>
								<input type="text" value=""/>
							</div>
						</div>

						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Ville</i></h5>
								<input type="text" value=""/>
							</div>
						</div>

						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Code Postal</i></h5>
								<input type="text" value=""/>
							</div>
						</div>

						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Description</i></h5>
								<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
							</div>
						</div>

						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Ajouter photo (JPG, PNG ou GIF | max. 15 Ko)</h5>
     							<input type="file"/>
							</div>
						</div>

					<a href="#" class="button">Envoyer <i class="fa fa-arrow-circle-right"></i></a>

				</div>
			</div>


		</div>

	</div>
	<!-- Content / End -->

	<?php
	require_once('include/footeradmin.inc.php');?>