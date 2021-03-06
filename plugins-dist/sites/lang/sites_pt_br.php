<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.net/tradlang_module/sites?lang_cible=pt_br
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'avis_echec_syndication_01' => 'A sindicação falhou: o backend informado é indecifrável ou não propõe nenhuma matéria.',
	'avis_echec_syndication_02' => 'A sindicação falhou: não foi possível acessar o backend deste site.',
	'avis_site_introuvable' => 'Site não encontrado',
	'avis_site_syndique_probleme' => 'Atenção: a sindicação deste site encontrou um problema; no momento, o sistema foi temporáriamente interrompido. Verifique o endereço do arquivo de sindicação deste site (<b>@url_syndic@</b>) e tente uma nova recuperação das informações.',
	'avis_sites_probleme_syndication' => 'Estes sites estão com problema de sindicação',
	'avis_sites_syndiques_probleme' => 'Estes sites sindicados provocaram um problema',

	// B
	'bouton_radio_modere_posteriori' => 'moderação à posteriori', # MODIF
	'bouton_radio_modere_priori' => 'moderação à priori', # MODIF
	'bouton_radio_non_syndication' => 'Sem sindicação',
	'bouton_radio_syndication' => 'Sindicação:',

	// E
	'entree_adresse_fichier_syndication' => 'Endereço do arquivo de sindicação:',
	'entree_adresse_site' => '<b>endereço do site</b> [Obrigatório]',
	'entree_description_site' => 'Descrição do site',

	// F
	'form_prop_nom_site' => 'Nome do site',

	// I
	'icone_modifier_site' => 'Editar este site',
	'icone_referencer_nouveau_site' => 'Referenciar um novo site',
	'icone_voir_sites_references' => 'Ver os sites referenciados',
	'info_a_valider' => '[para validar]',
	'info_bloquer' => 'bloquear',
	'info_bloquer_lien' => 'bloquear este link',
	'info_derniere_syndication' => 'A última sindicação deste site foi efetuada em',
	'info_liens_syndiques_1' => 'links sindicados',
	'info_liens_syndiques_2' => 'aguardam validação.',
	'info_nom_site_2' => '<b>Nome do site</b> [Obrigatório]',
	'info_panne_site_syndique' => 'Site sindicado com problemas',
	'info_probleme_grave' => 'problema de',
	'info_question_proposer_site' => 'Quem pode propôr os sites referenciados?',
	'info_retablir_lien' => 'reabilitar este link',
	'info_site_attente' => 'Website aguardando validação',
	'info_site_propose' => 'Site proposto em:',
	'info_site_reference' => 'Site referenciado online',
	'info_site_refuse' => 'Website recusado',
	'info_site_syndique' => 'Este site está sindicado...', # MODIF
	'info_site_valider' => 'Sites para validar',
	'info_sites_referencer' => 'Referenciar um site',
	'info_sites_refuses' => 'Os sites recusados',
	'info_statut_site_1' => 'Este site está:',
	'info_statut_site_2' => 'Publicado',
	'info_statut_site_3' => 'Proposto',
	'info_statut_site_4' => 'Na lixeira', # MODIF
	'info_syndication' => 'sindicação:',
	'info_syndication_articles' => 'matéria(s)',
	'item_bloquer_liens_syndiques' => 'Bloquear os links sindicados para validação',
	'item_gerer_annuaire_site_web' => 'Gerenciar um diretório de websites',
	'item_non_bloquer_liens_syndiques' => 'Não bloquear os links vindos da sindicação',
	'item_non_gerer_annuaire_site_web' => 'Desativar o diretório de websites',
	'item_non_utiliser_syndication' => 'Não utilizar a sindicação automática',
	'item_utiliser_syndication' => 'Utilizar a sindicação automática',

	// L
	'lien_mise_a_jour_syndication' => 'Atualizar agora',
	'lien_nouvelle_recuperation' => 'Tentar uma nova recuperação dos dados',

	// S
	'syndic_choix_moderation' => 'O que fazer com os próximos links que venham deste site?',
	'syndic_choix_oublier' => 'O que fazer com os links que não constam mais do arquivo de sindicação?',
	'syndic_choix_resume' => 'Alguns sites divulgam o texto completo das matérias. Caso o mesmo esteja disponível, você deseja sindicar:',
	'syndic_lien_obsolete' => 'link obsoleto',
	'syndic_option_miroir' => 'bloqueá-los automaticamente',
	'syndic_option_oubli' => 'apagá-los (após @mois@ mois)',
	'syndic_option_resume_non' => 'O conteúdo completo das matérias ( em formato HTML)',
	'syndic_option_resume_oui' => 'um resumo básico (em formato texto)',
	'syndic_options' => 'Opções de sindicação:',

	// T
	'texte_liens_sites_syndiques' => 'Os links gerados pelos sites sindicados podem ser bloqueados previamente; a configuração abaixo indica a opção padrão para os sites sindicados, após a sua inclusão. É possível, em seguida, desbloquear cada link individualmente, ou escolher, site a site, o bloqueio de links originados de um ou outro site.', # MODIF
	'texte_messages_publics' => 'Mensagens públicas da matéria:',
	'texte_non_fonction_referencement' => 'Você pode preferir não usar esta função automática, e indicar você mesmo os elementos relativos a este site...', # MODIF
	'texte_referencement_automatique' => '<b>Referenciamento automatizado de um site</b><br />Você pode referenciar rapidamente um websites indicando abaixo o URL desejado, ou o endereço do seu arquivo de sindicação. O SPIP recuperará automaticamente as informações relativas ao site (título, descrição...).', # MODIF
	'texte_referencement_automatique_verifier' => 'Por favor, verifique as informações fornecidas em <tt>@url@</tt> antes de se registrar.',
	'texte_syndication' => 'É possível recuperar automaticamente, desde que o site o permita, a lista das suas novidades. Para isso, você deverá ativar a sindicação.
  <blockquote><i>Alguns serviços de hospedagem desativam esta funcionalidade;
neste caso, você não poderá usar a sindicação de conteúdo no seu site.</i></blockquote>', # MODIF
	'titre_articles_syndiques' => 'Matérias sindicadas extraídas deste site',
	'titre_dernier_article_syndique' => 'Últimas matérias sindicadas',
	'titre_page_sites_tous' => 'Os sites referenciados',
	'titre_referencement_sites' => 'Referenciamento de sites e sindicação',
	'titre_site_numero' => 'SITE NÚMERO:',
	'titre_sites_proposes' => 'Os sites propostos',
	'titre_sites_references_rubrique' => 'Os sites referenciados nesta seção',
	'titre_sites_syndiques' => 'Os sites sindicados',
	'titre_sites_tous' => 'Os sites referenciados',
	'titre_syndication' => 'Sindicação de sites'
);

?>
