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