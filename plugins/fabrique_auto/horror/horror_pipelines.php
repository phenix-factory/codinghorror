<?php
/**
 * Utilisations de pipelines par CodingHorror
 *
 * @plugin     CodingHorror
 * @copyright  2013
 * @author     Phenix
 * @licence    GNU/GPL
 * @package    SPIP\Horror\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;
	

/*
 * Un fichier de pipelines permet de regrouper
 * les fonctions de branchement de votre plugin
 * sur des pipelines existants.
 */


/**
 * Ajouter les objets sur les vues de rubriques
 *
 * @pipeline affiche_enfants
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function horror_affiche_enfants($flux) {
	if ($e = trouver_objet_exec($flux['args']['exec'])
		AND $e['type'] == 'rubrique'
		AND $e['edition'] == false) {

		$id_rubrique = $flux['args']['id_rubrique'];
		$lister_objets = charger_fonction('lister_objets', 'inc');

		$bouton = '';
		if (autoriser('creerhorreurdans', 'rubrique', $id_rubrique)) {
			$bouton .= icone_verticale(_T("horreur:icone_creer_horreur"), generer_url_ecrire("horreur_edit", "id_rubrique=$id_rubrique"), "horreur-24.png", "new", "right")
					. "<br class='nettoyeur' />";
		}

		$flux['data'] .= $lister_objets('horreurs', array('titre'=>_T('horreur:titre_horreurs_rubrique') , 'id_rubrique'=>$id_rubrique, 'par'=>'titre'));
		$flux['data'] .= $bouton;

	}
	return $flux;
}


?>