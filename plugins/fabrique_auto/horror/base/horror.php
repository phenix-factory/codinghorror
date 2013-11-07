<?php
/**
 * Déclarations relatives à la base de données
 *
 * @plugin     CodingHorror
 * @copyright  2013
 * @author     Phenix
 * @licence    GNU/GPL
 * @package    SPIP\Horror\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Déclaration des alias de tables et filtres automatiques de champs
 *
 * @pipeline declarer_tables_interfaces
 * @param array $interfaces
 *     Déclarations d'interface pour le compilateur
 * @return array
 *     Déclarations d'interface pour le compilateur
 */
function horror_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['horreurs'] = 'horreurs';

	return $interfaces;
}


/**
 * Déclaration des objets éditoriaux
 *
 * @pipeline declarer_tables_objets_sql
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function horror_declarer_tables_objets_sql($tables) {

	$tables['spip_horreurs'] = array(
		'type' => 'horreur',
		'principale' => "oui",
		'field'=> array(
			"id_horreur"         => "bigint(21) NOT NULL",
			"id_rubrique"        => "bigint(21) NOT NULL DEFAULT 0", 
			"id_secteur"         => "bigint(21) NOT NULL DEFAULT 0", 
			"titre"              => "text NOT NULL DEFAULT ''",
			"descriptif"         => "text NOT NULL DEFAULT ''",
			"pseudo"             => "text NOT NULL DEFAULT ''",
			"email"              => "text NOT NULL DEFAULT ''",
			"site"               => "text NOT NULL DEFAULT ''",
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_horreur",
			"KEY id_rubrique"    => "id_rubrique", 
			"KEY id_secteur"     => "id_secteur", 
			"KEY statut"         => "statut", 
		),
		'titre' => "titre AS titre, '' AS lang",
		 #'date' => "",
		'champs_editables'  => array('titre', 'descriptif', 'pseudo', 'email', 'site'),
		'champs_versionnes' => array('titre', 'descriptif', 'pseudo', 'email', 'site'),
		'rechercher_champs' => array("titre" => 8, "descriptif" => 7, "pseudo" => 6, "email" => 6, "site" => 2),
		'tables_jointures'  => array(),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date', 
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'horreur:texte_changer_statut_horreur', 
		

	);

	return $tables;
}



?>