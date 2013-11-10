<?php

function get_contexte() {
    return array(
        'titre' => _request('titre'),
        'id_parent' => _request('id_parent'),
        'descriptif' => _request('descriptif'),
        'pseudo' => _request('pseudo'),
        'email' => _request('email'),
        'site' => _request('site'),
        'logo_horreur' => _request('logo_horreur')
        );
}

function formulaires_ajouter_horreur_charger_dist() {
    // On récupère les catégories
    $cats = sql_allfetsel('id_rubrique, titre', 'spip_rubriques', 'id_parent=2');
    $categories = array();
    foreach ($cats as $cat) {
        $categories[$cat['id_rubrique']] = $cat['titre'];
    }

    // Contexte du formulaire.
    $contexte = get_contexte();

    // On envoie la liste des catégorie d'horreur à l'env pour traitement en saisie.
    $contexte['rubrique'] = $categories;

    return $contexte;
}

/*
*   Fonction de vérification, cela fonction avec un tableau d'erreur.
*   Le tableau est formater de la sorte:
*   if (!_request('NomErreur')) {
*       $erreurs['message_erreur'] = '';
*       $erreurs['NomErreur'] = '';
*   }
*   Pensez à utiliser _T('info_obligatoire'); pour les éléments obligatoire.
*/
function formulaires_ajouter_horreur_verifier_dist() {
    $erreurs = array();

    // Champ obligatoire:
    if (!_request('titre')) {
        $erreurs['message_erreur'] = 'Certain champs sont obligatoire...';
        $erreurs['titre'] = _T('info_obligatoire');
    }
    if (!_request('id_parent')) {
        $erreurs['message_erreur'] = 'Certain champs sont obligatoire...';
        $erreurs['id_parent'] = _T('info_obligatoire');
    }
    if (!_request('descriptif')) {
        $erreurs['message_erreur'] = 'Certain champs sont obligatoire...';
        $erreurs['descriptif'] = _T('info_obligatoire');
    }
    if (!_request('email')){
        $erreurs['message_erreur'] = 'Certain champs sont obligatoire...';
        $erreurs['descriptif'] = _T('info_obligatoire');
    }

    // Vérifiaction du mail
    include_spip('inc/filtres');
    if (!email_valide(_request('email'))) {
        $erreurs['message_erreur'] = 'Votre email est invalide';
        $erreurs['email'] = 'Email invalide';
    }

    // verifier les extensions
    $sources = formulaire_editer_logo_get_sources();

    foreach($sources as $etat=>$file) {
        // seulement si une reception correcte a eu lieu
        if ($file AND $file['error'] == 0) {
            if (!in_array(strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)),array('jpg','png','gif','jpeg')))
                $erreurs['logo_'.$etat] = _L('Extension non reconnue');
                $erreurs['message_erreur'] = 'Fichier non reconnu (format autorisé: jpg png gif)';
        }
    }

    return $erreurs;
}

function formulaires_ajouter_horreur_traiter_dist() {
    //Traitement du formualaire.

    // Donnée de retour.
    return array(
        'editable' => true,
        'message_ok' => 'Votre horreur à étée proposée, elle sera examiner, un jour, peut être.'
    );
}

/**
 * Extraction des sources des fichiers uploades correspondant aux 2 logos (normal + survol)
 * si leur upload s'est bien passé
 *
 * @return Array
 */
function formulaire_editer_logo_get_sources(){
    if (!$_FILES) $_FILES = $GLOBALS['HTTP_POST_FILES'];
    if (!is_array($_FILES)) return array();

    $sources = array();
    foreach(array('on','off') as $etat) {
        if ($_FILES['logo_'.$etat]['error'] == 0) {
            $sources[$etat] = $_FILES['logo_'.$etat];
        }
    }
    return $sources;
}
?>