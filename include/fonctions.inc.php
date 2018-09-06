<?php
	function debug($var, $mode = 1) // Déclaration de la fonction debug() et affectation forcée sur le deuxième argument de la fonction debug().
	{
		echo '<div style="background: orange; padding: 5px; float: right; clear: both; ">';
		$trace = debug_backtrace(); // Génère le contexte de débogage
		$trace = array_shift($trace); // Dépile un élément au début d'un tableau
		echo "<strong>Debug demandé dans le fichier : $trace[file] en ligne : $trace[line]</strong>"; // chemin absolu du fichier d'où est appelé la fonction de débuggage et ligne à laquelle cette fonction debug() est appelée.
		if($mode == true) {
			print '<pre>';
			print_r($var);
			print '</pre>';
		}
		else
			var_dump($var);

		echo'</div>';
	}

 	function internauteEstConnecte(){
        if(!isset($_SESSION['membre']))
            return false;
        else
            return true;
    }

    function internauteEstConnecteEtEstAdmin(){
        if(isset($_SESSION['membre']) && $_SESSION['membre']['statut'] == 1)
            return true;
        else
            return false;
    }
   
?>