<!-- Formulaire d'inscription
- pseudo - input type="text"
- mot_de_passe - input type="password"
- nom - input type="text"
- prenom - input type="text"
- email - input type="email"
- civilite - input type="radio"
- ville - input type="text"
- code_postal - input type="text"
- adresse - textarea

- bouton submit - input type="submit"

Norme accessiweb
http://www.i-consult.fr/gestion-web-accessibilite/norme-accessiweb
-->
<?php
	require_once("inc/init.inc.php");
	

	if($_POST) { // Traitements de sécurité PHP sur les champs du formulaire
		// debug($_POST);
		// debug($pdo);
		$erreur = ''; // initialisation de la variable avec la chaîne de caractère vide '' ou "".
		if(strlen($_POST['pseudo']) < 3 || strlen($_POST['pseudo']) > 20)
		{
			$erreur .= '<div class="alert alert-danger" role="alert">Erreur sur la taille du pseudo.</div>';
		}

		if(!preg_match('#^[a-zA-Z0-9.-_]+$#', $_POST['pseudo']))
		{
			$erreur .= '<div class="alert alert-danger" role="alert">Erreur sur le format du pseudo.</div>';
		}

		// préparation de la requête SQL
		$req = $pdo->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
		// lien entre le paramètre nommé :pseudo et sa valeur
		// fonction bindValue(label, valeur, type)
		$req->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
		// exécution de la requête SQL
		$req->execute();

		if($req->rowCount() >= 1) {
			$erreur .= '<div class="alert alert-danger" role="alert">Pseudo indisponible !</div>';
		}

		// boucle pour échapper les ' " 
		foreach($_POST as $indice => $valeur)
		{
			$_POST[$indice] = addslashes($valeur);
		}

		$_POST['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

		if(empty($erreur)) {
			$req = $pdo->prepare("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite,  date_enregistrement) VALUES (?, ?, ?, ?, ?, ?, ?)");
			$req->execute(array($_POST['pseudo'], $_POST['mdp'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['civilite'], $_POST['date_enregistrement']));
			$content .= '<div class="alert alert-success" role="alert">Inscription validée !</div>';
		}
		$content .= $erreur;
	}

	require_once("inc/haut.inc.php");
?>
<?= $content; ?> <!-- affichage de $content -->
<!-- ou bien <?php // <?php echo $content; ?> -->
<form action="" method="post" class="form-vertical col-md-3">
	<fieldset>
		<div class="form-group">
		<label for="pseudo">Pseudo&nbsp;: </label>
		<input type="text" class="form-control" placeholder="Votre pseudo" name="pseudo" id="pseudo" maxlength="20" pattern="[a-zA-Z0-9.-_]{3, 20}" title="Caractères acceptés : a-z A-Z 0-9 .-_" required><br>
		</div>

		<label for="mot_de_passe">Mot de passe&nbsp;: </label>
		<input type="password" class="form-control" placeholder="Votre mot de passe" name="mdp" id="mot_de_passe" pattern="{3, }" title="Minimum 3 caractères pour votre mot de passe" required><br>

		<label for="nom">Nom&nbsp;: </label>
		<input type="text" class="form-control" placeholder="Votre nom" name="nom" id="nom" maxlength="20" required><br>

		<label for="prenom">Prénom&nbsp;: </label>
		<input type="text" class="form-control" placeholder="Votre prénom" name="prenom" id="prenom" maxlength="20" required><br>

		<label for="email">Email&nbsp;: </label>
		<input type="email" class="form-control" placeholder="Votre email" name="email" id="email" required><br>

		<label for="civilite">Civilité&nbsp;: </label><br>
		<input type="radio"  name="civilite" value="m" checked>Femme<br>
		<input type="radio"  name="civilite" value="f">Homme<br><br>

		<label for="date_enregistrement">Date d'enregistrement&nbsp;: </label>
		<input type="date" class="form-control" name="date_enregistrement" id="date_enregistrement" required><br>

		<button class="btn btn-secondary"  type="submit" name="button">S'incrire</button><br><br>
	</fieldset>
</form>
<?php
	require_once("inc/bas.inc.php");
?>
