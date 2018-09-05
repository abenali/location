<?php 
require_once("../inc/init.inc.php");
require_once("../inc/haut.inc.php");

if(!internauteEstConnecteEtEstAdmin()) {
    header("location:../connexion.php");
    exit();
}

//--------------------- Liens produits -------------------------//
$content .= '<a href="?action=affichage">Affichage des membres</a><br>';
$content .= '<a href="?action=ajout">Ajout d\'un membre</a><br><br><hr>';

//--------------------- Supression -------------------------//
if(isset($_GET['action']) && $_GET['action'] == 'suppression') {
    $pdo->exec("DELETE FROM membre WHERE id_membre = $_GET[id_membre]");
}

//--------------------- Affichage -------------------------//
if(isset($_GET['action']) && $_GET['action'] == 'affichage') {
	$resultat = $pdo->query('SELECT * FROM membre');
	$content .= '<h2>Affichage des membres</h2>';
	$content .= 'Nombre de membre(s) : ' . $resultat->rowCount();

$content .= '<table class="table"><tr>';
for($i = 0; $i < $resultat->columnCount(); $i++) { // boucle sur les colonnes
	$colonne = $resultat->getColumnMeta($i); // getColumnMeta récupère les informations sur les colonnes
	$content .= "<th>$colonne[name]</th>";
}
$content .= '<th colspan="2">Actions</th>';
$content .= '</tr>';
while($membres = $resultat->fetch(PDO::FETCH_ASSOC)) { // boucle sur les données
	$content .= '<tr>';
	foreach($membres as $indice => $valeur) {
		if($indice == 'photo')
			$content .= "<td><img src=\"$valeur\" height=\"42\" width=\"42\"></td>";
		else
			$content .= "<td>$valeur</td>";
	}

    $content .= '<td><form action="" method="post">
    <select id="statut" name="statut">
        <option value="0">Membre</option>
        <option value="1">Admin</option>
    </select>

    <button type="submit">Changer le statut</button>
    </form></td>';
	$content .= '<td><a href="?action=suppression&id_membre=' . $membres['id_membre'] . '" onClick="return(confirm(\'En êtes vous certain ?\'))"><span class="glyphicon glyphicon-trash"></span></a></td>'; // lien suppression
}

$content .= '</table><br><hr><br>';
}

//--------------------- Changement Statut du Membre -------------------------//
if(isset($_POST['statut'])){
    $r = $pdo->exec("UPDATE membre SET statut = $_POST[statut] WHERE id_membre = $membres[id_membre]");
	debug($r);
}

echo $content;

require_once("../inc/bas.inc.php");
?>
