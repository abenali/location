<?php
	require_once("inc/init.inc.php");
/*---------------- TRAITEMENTS PHP -----------------*/
	if(isset($_GET['action']) && $_GET['action'] == 'deconnexion') 
		unset($_SESSION['membre']);

	if(internauteEstConnecte()) {
		header("location:profil.php"); // redirection d'URL
		exit();
	}

	if($_POST) {
		$resultat = $pdo->query("SELECT * FROM membre WHERE pseudo = '$_POST[pseudo]'");

		if($resultat->rowCount() >= 1) {
			$membre = $resultat->fetch(PDO::FETCH_ASSOC);
			if(password_verify($_POST['mdp'], $membre['mdp'])) {
				$_SESSION['membre']['id_membre'] = $membre['id_membre'];
				$_SESSION['membre']['pseudo'] = $membre['pseudo'];
				$_SESSION['membre']['nom'] = $membre['nom'];
				$_SESSION['membre']['prenom'] = $membre['prenom'];
				$_SESSION['membre']['email'] = $membre['email'];
				$_SESSION['membre']['civilite'] = $membre['civilite'];
				$_SESSION['membre']['statut'] = $membre['statut'];
				$_SESSION['membre']['date_enregistrement'] = $membre['date_enregistrement'];
				
				header("location:profil.php"); // redirection d'URL
			} else {
				$content .= '<div class="alert alert-danger" role="alert">Erreur sur le mot de passe.</div>';
			}
		} else {
			$content .= '<div class="alert alert-danger" role="alert">Erreur sur le pseudo.</div>';
		}
	}

	require_once("inc/haut.inc.php");
?>
<?= $content; ?>
<!-- Formulaire de connexion
- pseudo - input type="text"
- mdp - input type="password"
- bouton type="submit"
-->
<form action="" method="post">
	<label for="pseudo">Pseudo&nbsp;: </label>
	<input type="text" class="form-control" placeholder="Votre pseudo" name="pseudo" id="pseudo" maxlength="20" pattern="[a-zA-Z0-9.-_]{3, 20}" title="Caractères acceptés : a-z A-Z 0-9 .-_" required /><br /><br />
	
	<label for="mdp">Mot de passe&nbsp;: </label>
	<input type="password" class="form-control" placeholder="Votre mot de passe" name="mdp" id="mdp" required /><br /><br />
	
	<input type="submit" class="btn btn-default" name="" value="Se connecter" />
</form>

<?php require_once("inc/bas.inc.php"); ?>