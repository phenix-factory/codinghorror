<?php
function formulaires_ajouter_horreur_charger_dist() {
    // On récupère les catégories
    $cats = sql_allfetsel('id_rubrique, titre', 'spip_rubriques', 'id_parent=2');
    $categories = array();
    foreach ($cats as $cat) {
        $categories[$cat['id_rubrique']] = $cat['titre'];
    }

    // Contexte du formulaire.
    $contexte = array(
        // On envoie la liste des catégorie d'horreur à l'env pour traitement en saisie.
        'rubrique' => $categories
    );

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
    if (!_request('selection')) {
        $erreurs['message_erreur'] = 'Certain champs sont obligatoire...';
        $erreurs['selection'] = _T('info_obligatoire');
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
        $erreurs['message_erreur'] .= 'Votre email est invalide';
        $erreurs['email'] = 'Email invalide';
    }

    return $erreurs;
}

function formulaires_ajouter_horreur_traiter_dist() {
    //Traitement du formualaire.

    // Donnée de retour.
    return array(
            'editable' => true,
            'message_ok' => '',
            'redirect' => ''
    );
}
?>