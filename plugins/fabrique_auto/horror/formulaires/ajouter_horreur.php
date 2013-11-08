<?php
function formulaires_ajouter_horreur_charger_dist() {
    // Contexte du formulaire.
    $contexte = array(
        '' => '',
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