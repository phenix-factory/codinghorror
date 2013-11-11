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
    $cats = sql_allfetsel('id_rubrique, titre', 'spip_rubriques', 'id_parent=2', '', 'titre DESC');
    $categories = array();
    foreach ($cats as $cat) {
        $categories[$cat['id_rubrique']] = supprimer_numero($cat['titre']);
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
    if (empty($sources['on']['name'])) {
        $erreurs['message_erreur'] = 'Vous devez ajouter un screenshot, bordel !';
        $erreurs['logo_on'] = 'Sans image, rien ne va plus !';
    }

    foreach($sources as $etat=>$file) {
        // seulement si une reception correcte a eu lieu
        if ($file AND $file['error'] == 0) {
            if (!in_array(strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)),array('jpg','png','gif','jpeg'))) {
                    $erreurs['logo_'.$etat] = _L('Extension non reconnue');
                    $erreurs['message_erreur'] = 'Fichier non reconnu (format autorisé: jpg png gif)';
                }
        }
    }

    // Valeur par défaut pour le pseudo
    if (!_request('pseudo'))
        set_request('pseudo', 'Anonymous');

    return $erreurs;
}

function formulaires_ajouter_horreur_traiter_dist() {
    // On va créer une nouvelle horreur.
    $set =array(
                'titre' => _request('titre'),
                'descriptif' => _request('descriptif'),
                'pseudo' => _request('pseudo'),
                'email' => _request('email'),
                'site' => _request('site'),
            );

    $id_parent = _request('id_parent');
    include_spip('action/editer_objet');
    $id_objet = objet_inserer('horreur', $id_parent, $set);

    // On passe en proposer à la publication
    autoriser_exception('modifier', 'horreur', $id_objet);
    objet_instituer('horreur', $id_objet, array('statut' => 'prop', 'id_parent' => $id_parent));
    autoriser_exception('modifier', 'horreur', $id_objet, false);

    // Upload du logo
    $objet = objet_type('horreur');
    $_id_objet = id_table_objet($objet);

    // supprimer l'ancien logo puis copier le nouveau
    include_spip('inc/chercher_logo');
    include_spip('inc/flock');
    $type = type_du_logo($_id_objet);
    $chercher_logo = charger_fonction('chercher_logo','inc');

    include_spip('action/iconifier');
    $ajouter_image = charger_fonction('spip_image_ajouter','action');
    $sources = formulaire_editer_logo_get_sources();
    foreach($sources as $etat=>$file) {
        if ($file and $file['error']==0) {
            $logo = $chercher_logo($id_objet, $_id_objet, $etat);
            if ($logo)
                spip_unlink($logo[0]);
            $ajouter_image($type.$etat.$id_objet," ",$file);
            set_request('logo_up',' ');
        }
    }

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