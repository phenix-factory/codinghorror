<?php

/**
 *  Fichier généré par la Fabrique de plugin v5
 *   le 2013-11-11 00:56:18
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined("_ECRIRE_INC_VERSION")) return;

$data = array (
  'fabrique' => 
  array (
    'version' => 5,
  ),
  'paquet' => 
  array (
    'nom' => 'CodingHorror',
    'slogan' => 'Horreur de code',
    'description' => 'Objet horreur',
    'prefixe' => 'horror',
    'version' => '1.0.0',
    'auteur' => 'Phenix',
    'auteur_lien' => 'http://p.henix.be',
    'licence' => 'GNU/GPL',
    'categorie' => 'divers',
    'etat' => 'dev',
    'compatibilite' => '[3.0.11;3.0.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'options',
      3 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Horreurs',
      'nom_singulier' => 'Horreurs',
      'genre' => 'feminin',
      'logo_variantes' => 'on',
      'table' => 'spip_horreurs',
      'cle_primaire' => 'id_horreur',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'horreur',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => 'Titre de votre horreur',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'descriptif',
          'champ' => 'descriptif',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '7',
          'saisie' => 'textarea',
          'explication' => 'Explication de l\'horreur',
          'saisie_options' => 'li_class=haut, class=inserer_barre_edition, rows=4',
        ),
        2 => 
        array (
          'nom' => 'Pseudo',
          'champ' => 'pseudo',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '6',
          'saisie' => 'input',
          'explication' => 'Votre pseudo, sinon ce sera anonyme',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'email',
          'champ' => 'email',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '6',
          'saisie' => 'input',
          'explication' => 'Pour être tenu au courant !',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Site web ?',
          'champ' => 'site',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '2',
          'saisie' => 'input',
          'explication' => 'Si vous avez un site web, un lien sera fait sur votre pseudo. Sinon, bah on s\'en fou',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre',
      'rubriques' => 
      array (
        0 => 'id_rubrique',
        1 => 'id_secteur',
        2 => 'vue_rubrique',
      ),
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Horreurs',
        'titre_objet' => 'Horreurs',
        'info_aucun_objet' => 'Aucune horreurs',
        'info_1_objet' => 'Une horreurs',
        'info_nb_objets' => '@nb@ horreurs',
        'icone_creer_objet' => 'Créer une horreurs',
        'icone_modifier_objet' => 'Modifier cette horreurs',
        'titre_logo_objet' => 'Logo de cette horreurs',
        'titre_langue_objet' => 'Langue de cette horreurs',
        'titre_objets_rubrique' => 'Horreurs de la rubrique',
        'info_objets_auteur' => 'Les horreurs de cet auteur',
        'retirer_lien_objet' => 'Retirer cette horreurs',
        'retirer_tous_liens_objets' => 'Retirer toutes les horreurs',
        'ajouter_lien_objet' => 'Ajouter cette horreurs',
        'texte_ajouter_objet' => 'Ajouter une horreurs',
        'texte_creer_associer_objet' => 'Créer et associer une horreurs',
        'texte_changer_statut_objet' => 'Cette horreurs est :',
      ),
      'table_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'echafaudages' => 
      array (
        0 => 'prive/squelettes/contenu/objets.html',
        1 => 'prive/objets/infos/objet.html',
        2 => 'prive/squelettes/contenu/objet.html',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAM4AAAC3CAIAAADVUPaaAAAKymlDQ1BJQ0MgUHJvZmlsZQAASA2tlndUU8kXx+e9l15oCaFICb0J0gkgvQYQkCrYCEkgoYQQCCKiWFhcgbWgIgKKoIsiCq5KkbUAFiyIYsO+IIuCui4WbKj8HiBxz+/89r/fvDMzn/edO3fuzJk55wJA6eaIxSmwAgCpokxJmJ8nc0FMLBP/CJCACsADa+DA4WaIPUJDg8C/lvd3ADQ5eNN80te/mv3vAUUeP4MLABSKDsfzMripKB9H61GuWJIJACJAdb1lmeJJLkaZLkEDRHnPJCdOM2oP6PHTfHHKJiLMC7V5CACBwuFIEgEgD6M6M4ubiPqhEFC2FPGEIpRZKLtyBRweytkoz05NTZvkfSgbx//DT+I/mMOJl/nkcBJlPL0XdCa6sLcwQ5zCWT718/9sUlOk6HlNFR20pQgk/mFoz0DPrDI5LVDGovjgkBldiO5ohgVS/8gZ5mZ4oWc5PZfH8Q6cYWlypMcMcyQofbcRZrIjZliSFibzL0oJnrwfUzEI+GwZ8zN8wmf0BKEve4ZzBBHRM5wljAqe4YzkcFkMOQIvmS6RhsliTpD4yvaYmoHO/L4ul/NjrUxBhP+MzuN7+8wwXxQpi0ec6SnzI06Zut9T8fNT/GR6Rla4bG6mJEKmJ3ECJu/rlL04M1R2JsAb+IAg9GOC8Mm3A2yBJfoHMvnZ6L0DwCtNvFwiTBRkMj3Ql8JnskVci9lMa0srGwAm392kDQBv7069J4hB+KGloBeJhd5JeMcPLX4AgKZmAORjf2hGuQAo1gLQMZcrlWRN+8NMdlj0RcsDOlADWkAPGANzND574Azc0YgDQAiIADFgCeACAUgFErAM5II1oAAUgc1gOygHVWAvOAAOg6OgBZwEHeACuAKug9vgAegHQ+AFGAXvwTgEQXiICtEgNUgbMoDMIGuIBblCPlAQFAbFQHFQIiSCpFAutA4qgkqgcqgaqoN+g05AHdAlqBe6Bw1AI9Ab6DOMwBSYDmvChvAcmAV7wIFwBLwYToTT4Rw4H94Il8E18CG4Ge6Ar8C34X74BTyGAISMMBAdxBxhIV5ICBKLJCASZBVSiJQiNUgD0oZ0ITeRfuQl8gmDw9AwTIw5xhnjj4nEcDHpmFWYYkw55gCmGXMOcxMzgBnFfMNSsRpYM6wTlo1dgE3ELsMWYEuxtdgm7HnsbewQ9j0Oh2PgjHAOOH9cDC4JtwJXjNuFa8S143pxg7gxPB6vhjfDu+BD8Bx8Jr4AvxN/CH8GfwM/hP9IIBO0CdYEX0IsQURYSyglHCScJtwgPCOMExWIBkQnYgiRR1xO3ETcR2wjXiMOEcdJiiQjkgspgpREWkMqIzWQzpMekt6SyWRdsiN5PllIXk0uIx8hXyQPkD9RlCimFC/KIoqUspGyn9JOuUd5S6VSDanu1FhqJnUjtY56lvqY+lGOJmchx5bjyeXJVcg1y92QeyVPlDeQ95BfIp8jXyp/TP6a/EsFooKhgpcCR2GVQoXCCYU+hTFFmqKVYohiqmKx4kHFS4rDSnglQyUfJZ5SvtJepbNKgzSEpkfzonFp62j7aOdpQ3Qc3YjOpifRi+iH6T30UWUlZVvlKOVs5QrlU8r9DIRhyGAzUhibGEcZdxifVTRVPFT4KhtUGlRuqHxQnaXqrspXLVRtVL2t+lmNqeajlqy2Ra1F7ZE6Rt1Ufb76MvXd6ufVX86iz3KexZ1VOOvorPsasIapRpjGCo29Gt0aY5pamn6aYs2dmmc1X2oxtNy1krS2aZ3WGtGmabtqC7W3aZ/Rfs5UZnowU5hlzHPMUR0NHX8dqU61To/OuK6RbqTuWt1G3Ud6JD2WXoLeNr1OvVF9bf15+rn69fr3DYgGLAOBwQ6DLoMPhkaG0YbrDVsMh41UjdhGOUb1Rg+NqcZuxunGNca3THAmLJNkk10m101hUztTgWmF6TUz2MzeTGi2y6x3Nna242zR7JrZfeYUcw/zLPN68wELhkWQxVqLFotXc/TnxM7ZMqdrzjdLO8sUy32WD6yUrAKs1lq1Wb2xNrXmWldY37Kh2vja5Nm02ry2NbPl2+62vWtHs5tnt96u0+6rvYO9xL7BfsRB3yHOodKhj0VnhbKKWRcdsY6ejnmOJx0/Odk7ZToddfrb2dw52fmg8/Bco7n8ufvmDrrounBcql36XZmuca57XPvddNw4bjVuT9z13Hnute7PPEw8kjwOebzytPSUeDZ5fvBy8lrp1e6NePt5F3r3+Cj5RPqU+zz21fVN9K33HfWz81vh1+6P9Q/03+Lfx9Zkc9l17NEAh4CVAecCKYHhgeWBT4JMgyRBbfPgeQHzts57GGwQLApuCQEh7JCtIY9CjULTQ3+fj5sfOr9i/tMwq7DcsK5wWvjS8IPh7yM8IzZFPIg0jpRGdkbJRy2Kqov6EO0dXRLdv2DOgpULrsSoxwhjWmPxsVGxtbFjC30Wbl84tMhuUcGiO4uNFmcvvrREfUnKklNL5Zdylh6Lw8ZFxx2M+8IJ4dRwxuLZ8ZXxo1wv7g7uC547bxtvhO/CL+E/S3BJKEkYTnRJ3Jo4InATlApeCr2E5cLXSf5JVUkfkkOS9ydPpESnNKYSUuNST4iURMmic2laadlpvWIzcYG4P90pfXv6qCRQUpsBZSzOaM2kowlOt9RY+pN0IMs1qyLr47KoZceyFbNF2d3LTZdvWP4sxzfn1xWYFdwVnbk6uWtyB1Z6rKxeBa2KX9WZp5eXnze02m/1gTWkNclrrq61XFuy9t266HVt+Zr5q/MHf/L7qb5ArkBS0LfeeX3Vz5ifhT/3bLDZsHPDt0Je4eUiy6LSoi/F3OLLv1j9UvbLxMaEjT2b7Dft3ozbLNp8Z4vblgMliiU5JYNb521t3sbcVrjt3fal2y+V2pZW7SDtkO7oLwsqa92pv3Pzzi/lgvLbFZ4VjZUalRsqP+zi7bqx2313Q5VmVVHV5z3CPXer/aqbawxrSvfi9mbtfboval/Xr6xf62rVa4tqv+4X7e8/EHbgXJ1DXd1BjYOb6uF6af3IoUWHrh/2PtzaYN5Q3choLDoCjkiPPP8t7rc7RwOPdh5jHWs4bnC8sonWVNgMNS9vHm0RtPS3xrT2ngg40dnm3Nb0u8Xv+0/qnKw4pXxq02nS6fzTE2dyzoy1i9tfdiR2DHYu7XxwdsHZW+fmn+s5H3j+4gXfC2e7PLrOXHS5ePKS06UTl1mXW67YX2nututuump3tanHvqf5msO11uuO19t65/aevuF2o+Om980Lt9i3rtwOvt17J/LO3b5Fff13eXeH76Xce30/6/74g9UPsQ8LHyk8Kn2s8bjmD5M/Gvvt+08NeA90Pwl/8mCQO/jiz4w/vwzlP6U+LX2m/axu2Hr45IjvyPXnC58PvRC/GH9Z8JfiX5WvjF8d/9v97+7RBaNDryWvJ94Uv1V7u/+d7bvOsdCxx+9T349/KPyo9vHAJ9anrs/Rn5+NL/uC/1L21eRr27fAbw8nUicmxBwJZyoXQNAWTkgA4M1+AKgxANCuA0CSm86Lpyyg6VweZeh7nZT/i6dz58kBNIcAe9sBiFoNQCjaV6G9IdoruKP/aI1wB7CNjayC6ZKRYGM9RRC5BU1NSicm3qL5IN4EgK99ExPjLRMTX9EcBrkPQPv76Xx80lrhEAB7Nlo6BgZdzesYnfb0o/0PKOADcEgh64gAAAGdaVRYdFhNTDpjb20uYWRvYmUueG1wAAAAAAA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJYTVAgQ29yZSA1LjQuMCI+CiAgIDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+CiAgICAgIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiCiAgICAgICAgICAgIHhtbG5zOmV4aWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vZXhpZi8xLjAvIj4KICAgICAgICAgPGV4aWY6UGl4ZWxYRGltZW5zaW9uPjIwNjwvZXhpZjpQaXhlbFhEaW1lbnNpb24+CiAgICAgICAgIDxleGlmOlBpeGVsWURpbWVuc2lvbj4xODM8L2V4aWY6UGl4ZWxZRGltZW5zaW9uPgogICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KICAgPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KCzw6lQAALaJJREFUeAHtPQ14FNW1ZyW7G0jWDCS4RRJLSdSgCQV9EEFq+CtpgPJEJBYID6xIQYVSXlGhqAVpgYLIjy2CIFAUNSpYVDAIxPAngSegiQWURSQLdCSBSbNIdnZx37nzszu7O3+72TQJmftB5s6955x77rlnz70zc889pvT0dGiw1LZt23PnzrVp06bBWmg2hFugKEK6fEOzGSuDUUMChgQMCeiRgCnzjq5SuCdnTPvLoqXSEiNvSCAmEjAm0JiI0SCiLQFD1bRlZEDERAKGqsVEjAYRbQlEr2q9sn80fUDa9HtTusb7tNsRISaM6vn51NvSIQIUEdW4Nm8JxEXBvo9KKRqfmXWjoKaPDGC3vHVo9skf9JCyWMxxtvibABx6oA2Y60gCuqya76YO7z/Z8+mbBFOU3Lkd6tmFb76d+vLhv1a4ACzDh2ZEYqh+uHIdSdDoik4JaFu1oQPunHNvcjxc2y+SvHTkq2EXv3VUurFg5+YvemT07mmRMVQ+uCGDugEYjwNMImrQNZ2KgzqPo06mVhM3iJBx0xwkoKZqPrAuerT7kA4W7MjpE2dWfxfoEK9n5D69Y5d4gH9fPSlWTii4e/LNnl3nIS8TVQnTDxWfn3joH1ViPRZAz3szlvXteFMrUnbh228KNpy9xKmjNm6AipFrZhJQnEDbpad99Icc1DPvv5kX1+37ZdE5Xhuk/fPd1HHXmB/b4NqW7Q5/raW1Of5GakgmddF5cccJpg5uyPrpHevutYqI18Dc7ncDOrauZT75+tLla9Dhxz95IcfM12rhijSMazOUgLxVS7/rtq1DfwTg2b//5MRdl2T75YN2H0xK7wDhzwQ4IbJvvX5oroM8KPhuT//ioY53ZXeE/ac5Olj7w6H9FQ/vYvC23V1d9g5t3yWzPZRdEGtVcDkQ40/zlICSVePmNvBdqfMq9eunfVM7A5zc/3nYs+cN4HG957gmIJ68fPYaxLVN7CW84LgBrjHzdl3ma6tPM5gzt/KzoY6rxItR3gwk4B/jIF4dR47/7HXHyTrLoAHdPpt651jx2VMK9Pmxs2v3f/3HXd9LC4V8EFXv98S6BT11JgRwbgi1q1q4AVQj16wkEDSwUs4vOc4N/8u+Fz9n4qnkpyflvvXfP2oX/N71p52T7vpx+4cHJEuxuPwP0KpVe7H0p/fekmWGOvryFwrPoSIgf60PbjAl466JSSDUpkjZM8EPa/7xxSufprz+q8zuP73tiU8vzJU8hBb0SuuefAN0gF67qj8NUiN8/Za0fGaPT47QdELbEVkUmrRd+/mlmJS8bL4+uLIEjcKmIgE1VeN5NH1XVbh839h7f/S5RM+w6rzLC8kWfDEWXIw1uPC/duGqtW/OTzgKnk92HXsy8C3hB3zZIUk/4GLw6lVxYaeBK8Ezss1NAtqqxvdo4/5/cToU6N9fNxw6mm79zvF92BtaXNozv1laAWltOlngqON7/3sQRP7bhk//RmigOnIX5kKfuVKDp4bLoxh/m6kE9KpaePdwev3UcdWvNEEAN5hw4f9F5VXuQ6egVUEAKjf1wVUha1Q1tgQUHwuiZizeYsLHAskzZgSU6oMbQTMGaGNIIHqrpsTtP3b/82Ibr/87lRKYbHl9cGUJGoVNRwKxVzWH41I08yYnkvrgNh2ZGpzISsCU9mP+OVG21ig0JBAzCcR+rRYz1gxC15cEDFW7vsazCffGULUmPDjXF2u6VI2dsaGy5H02K8j3xGfKrv1gb+2EbFmBGLVSsRjSQGloqxqKyd2/C8Al+FIqPcw7IcHKCJsaQ6qM2hCBGLIC7SdQX97zztl5UDo/bfYWXn7srCI6vy0cOw1Z3aHOCXQ8pIN9fL7FQT4MGLWGNGR1Q/u9muf+PgBXqDc3B75BfecE6ATduhPNS0yFRAD6KJBNtVwyag1pyOmGhlXzmYY798wEusQ+8kmLL/A1E2dV1+a1TAqnW9ufS/vzdkHPuItRa0gjXDc01mqeR4YSqe3aItUzUnLfUEKrhvODuqsvawp6YjBqiYj8yZAVJwo1VfOZ2roH4gOm0/7yp3658RnPrwaD95T9l/n21WVg7+cemSEFMGoNaYTrhtoE6sua6lxZCCdeS3t0uVR2mPeZ0j3tTlmqueeArHRLBffZUwQyakVJkKshDV4aaqrGPreZHphKLcqzbRUcnKQSNPKGBCKSgOIESl6n3ZMKdeXW9+X9QCNqxgA2JKCoap5BhQy+xSj7IPSBwJCZIYGoJKCoau77e4qv06IibCAZEgiWgLyq4es0JisB6H3W0I9RwdjGnSEB3RKQVzXPb0ciBWpXkTF76pakAaghAaUPU/+ijjmsL38R+BilQceoNiSgIQG1lx0aqEa1IYFIJCA/gUZCwYA1JKBLAoaq6RKTAVR/CRiqVn8ZGhR0SUBG1Tp0wPMijWRIIMYSkFG1CxfwJBgjGRKIsQRkVE2nVcOPpCpuLPVhEzcvsTn3sDnZodvg6kO0gXGbI88xEQk7dkXl3gNK3kzSJmTeq+m2aoJrhk1Kr955dtoKekSOSMYNB962P72Mf5PMrviY7pYkVgG4aGr3q7ZFosfDyhIav3Bg8nohju+Xl1o01raVbHBSxw3QjCqnwnNU9IKQ2IKp7purrMteb6Kv061tAOIYc4KmGkRj1dBRpXLvx87lC4g7wbA5leu3Ve7dxqYHb8QNEpfeG3bYQk7P3HC4hCo9Cl4r9C6kJ4kRS4kCeaHiKHW4jHI4IdHODJtZOStfoH66Ak4cJ+UErAYqysHxNWBMBT6p44pQUVw1eI6CYjCK+4FCZgS3Fzq4vNndRWXV1B1V6iODfPzGD9Tq8baNxBQlJg93Le8f/NHCbZ89kd+SmZg70zlvOPR7kJ2/DX/xlkVT0nAfYvJE5r0JUPF62uT1YYwo4oZBRlKgzbMGNZx8PZ3bAXPJUh26LxC3VQIeNlyH59gpJjY9HessjqDdqTw0m042UVscl7kmECaUvgquYntcBc8zadQtfwZ8OGUZVcO1mvocalkzPXVtuBtLwMlFnUvtWrewQ85UvcU2BufHIMruDmCp5mjsKaJcw5mQHlCcHYu7UbYVDVxZHJ2FcjyzY5fQv+5BbXvWtqiEJ4Mj5FpdxNjK7aN+hz8P4u+z/BmmWyehEVcVtbvIungdqUof71w8BsxxgB2My6a37cQLxFmhfH3a9NU8PFvwHP1wHiRyIvDWUEV/tq0kDRHclwrAeQ0y7WjgqXePMCP6EZRjr6VNETZUK+HylNX/svM20bkZBMZbA9X+iUNAUqIsM4Gq65lAT901QwCK/PLZacRhpmytXPIcm9VWHj/wC+9KdtSRodCd6oOr1Igyz+bX9qJyMIMfDTzf9JzEZCZB3UV+4eX5/UyiZ/RxausWqrQMIIUZNgba8S2x1PeXoeoy6R+OKH0R6AvwnZOqwfhxJBE9njIEEq/B4WJqJ+ImMaMX1hYQCwdwIySmED07cYqUo545jkMdQDfB4UgVlyOg/Idd+D6nZzXUgRLqWw/YrVJYFcoy46Rp1ZC06KgyCgpfoicSNxZLkYwBlzKhJ29e+3t7x8U0+s70GEL3GAL0Kerv821byyW4ViicVVvDQsptTA7niHqkhB82CYxStj64SjRBhWeTb4t951h6YAb9215pSw8iCU9hf1Qc6o2XBXKdO5BM2Zu2RdvxiitrNr0tvzwwOTbZxmxKRCu4rZiJO21/eKK0mzixukejf26V/f58YTkxd7RzzzTm50NsRaIjyIH5qU9/4tpRzNSUpI1/inswau++E8xf6sAV+Au9+JLH073RUlZRk/NtFWS2sc7YRA/jLBznRaHClYyq6bFq5sfG29GNBT1DN06xHw11YwllUPe9yXfZMueR1Lnpnt9OpAf2BnsGM2Mt0/mptKX8BITLggRm4HCBXl0Vtb3IOn9dyAyr0Fp9cBVIcsXqPJvnboSBMyHvUXbZp2Z4gDxBV+2z7sAVAhkn8/otsKCQPFoNmwVnT1PHSnD2DO5OKtdI2DB1HsBZdIr+q/AADvwTUMbdaEGFwy2+PgXAoV8+R4jwD0aYUcWVKjTXdPCfDtzK5OwuXs9I3eXATKFOOawPAHqsmsnn4H9M2FaIu1Qwa9HcEeJLUb2AnbyCHp0D9/RnTbs5ESC3V6jf90081M7TDhfR/BqO/6vZUH1wNYmDEs/EsJWOpXOz3SPbQfL9SIjaQZZiPEVT2fLU/hs9j0xy53RnMrowt3SBYeOoeQ/YikPX7/IceK9Q588BapbHAmYWzjug6rMApOJxKhyIOm6ASnBOolfBFZI7BcoyqqbHqkkIxzLLzlrhvryZX9siXfOOrwFVLRGDbEjSFRzXy6KeScr5LIbqw+Tl/oZVgioumzeTnjYY6k7bn/kfCzc7hBMIL9Hk2fzMRtgzkylYCq26oPOs9IGazeoHF3Zb1sy3rOFmz8mr6NHdmQfH2orFSRASuLVo2DCd/oKqAybeY/3TE2GiCPH/DmNZFTcMWq4g6Ta0ncIP5iac9sWkSjmsD/qsmkg7lleyDsjPAchhBpyijpRDm07CauwAeZeh2RI7baH7dlRK7mEibWDtkrvBzFiXPskfWqOJjgDuBwdDohUSu9D5/dMq+ClbA08Pz6Jhw9OcAErf9vcFd9XTK2einYbD++xHj6Pg3X06E5hvviZ/uWTyHYTvvHBLF3rdi9SuE9A5G9p8bSXvtA9aPzwOI7rQ731Cle6wnqx2357D5GZTq0fx74lEAjJXpBk1LpzeSJ37FdOxO73579SOz+CuXzCZ/GkapCF1yjKq1lhWzVS9PnUy65r9MNMxg8nP4ITkhtKN9vnbhOULfgZQSbf3JP4QfErqxPToRLKDeqWtJOtx8glBK1k/PgCZ/QgUjijoUjVtnrlGiWHbPRPiquzrNvuXYkQFV2TSowZBjzy6R57A3YmSQH+5osRnX2KWPQHpfZj0PqSgBuxcuWXpOLt7CV3Qh8kdDrlcUc0p+ApXgdLkBOGBFQtRAsJw68OV0hHyOJ8kPv48rJrF2Lswo/HHc4U6fJzp0YWqvshDqFCW2YWrZ60mw0XsisiLx1T8rVyFPZ/6bUDsyKtR8uU+75yXB5umCgqqBhtUp86zL+855+wh4HgrbfwLQWjcjS8925OSAvFXoeLTsNlQAGdz8TdwFZwnZV7D5vQjuHJV4W2FlLDR4gqIygMUTllG1UK4aTm3bM5EesEEYnvEs+Lq33c2Nx+S7qB/9xDEuanZfWyl2iuB+jfaNCnITKCNbtUaRVK+5NH04glkRlg0Rf/yTp1VX/pEeh7S5NL2JS1Zz1AEhlUTNAEv7NiJcGBVrPQMCZKDYQoHgJWFg+v0P9IGGLq+cjKq1jKt2vU1rE2xN9F+A22KfTF4atISkFE1tGpNmmWDueYpARlVa6z3as1TgAbXeiUgo2qGVdMrPAMuEgnIqJpOq9ZwbiyR8G/ANhsJyKiabqumHmGk2YjAYPQ/IwGZlx2aDavHW9FENwBapgSismrEjSWJRGPBbw0YjSU9BejKQDSWlilIo9daEojGqiFN4n+hHI1Fq1GjviVKICqrhoJqIDeWljgELaXPMqqm5wlUdGORj8bSUoRn9DMSCchMoHq+gapHGImEAQO2pUhARtVaSteNfv5nJSAzgep+r/af5dRorZlLQEbV9KzVmnmvDfYbQQIyqmZYtUYYhxbQpIyqGVatBYx7I3RRRtUMq9YI49ACmpRRNcOqtYBxb4QuyqiaYdUaYRxaQJMyqmZYtRYw7o3QRRlVM6xaI4xDC2hSRtUMq9YCxr0RuiijaoZVa4RxaAFNyqiaYdWa47j7ktMDJ+7q6AB3+LcOuNiByKiaTqvWoG4seDgPCciSxR8iHLvu1o8SO2MtRh6pXDhePxl2ybbKd5ZEpAT6ifsh8XAQ53tv0Jtf1NkQOUxk/drKV/B0t/9cwi3boUm3VWuQaCw+Uz/XuhkMbiLnU80p+6LHLaX6DuwM7UqM79134olicdCzH2sKHDKq0UZrGyRj5AG1VM94Kz7TPa6X8BAaN/WGbq5Ov01V3M9kDa+cdyJttv80XTUm/XUkYsGzC+ged+CBlnCFoXa+alsaRMGXPtz1p0cZOwVeN5S9kTZbOPo+GqvWcNFYfKZ857aFRM/qaGrnh5SjCpIy6Kfn6vyx+sXRQBnr5ncpx3Hq1ZURnvqmcYpgPeOteBb8gRzBvPVZW5H0KHQ1GZAT+R6bQlUB5E6tzfGpgQbXEUOwuZge2B0S6uA8A0l2ZoQkIA56AiSPdq6fyXREdxN0QEmA3AmVK/+XpyGjatpWrcHcWDwLHgOUWlWZfdBQ25w5tvGD7aVHqaXPSocWf1UY6QMPXQ8WQuBOANA6ETaAEJZTom/Z+oJt/DjbRu4YymAsPY0Sssmh46on3kpwU0F3wunuVfvsi3cHVYg3ZA0n1y6eE524AK1RAjN5lgir5xrP4HxD77P3H5g25peps98iOBgQR5S25w+FpOTA0rRfFaQOeoqcWZl1P6/NMlsjca2mqW0N4cZCaG5byyReoSb3DZxVThgPJHbWWjofTw/lUs0patHjNnFuZRdupm+rpb4Cpjd36iyex7nzpbQ5mxBUV1SUt//GnFhpfz+F/mMhUXdM54rto2aboavr7eWMcPIpd8bn8Q1p09dzEMIfXMPRw3iuvFDFgLk1WF323w3Fg67YlXvpjK/sb52nx+QJx4NWvGV/bDH+eALxVhK4s5VdNWR2Do63Im1FNs9O20SPyKDm9bAVhx4S6MsazZ32miQgni2zP/tEyJFeLIkBd9Uf/EC2iZBCNicfTm3zn25Z++YhJrncPujXpEfCCJ6x3zeStw7shFX0uO5QOh+n6aisGjbeEG4sd/YjEwF9yPplSO+EW3beZk7PaqjSYuoEjXMrM6+oNku0EzfaIKUL0bMTZdQBPMU4DgZO44MHakZFIQ0kWeHuQnox6lkNHCujzlbB+UpOXk6r4zRcugD0WbgSB4kJYOPO7hd5ZAtWED1znaE2vUU5GMCjRpO8VPkxuMBD1EF8Nj0uD6qPU4fLyXm0WQ+5CzO4Oo14K2ILald3Nwysdca6IxTGlzXVuXIa0zGJhHrZWUKWIrfk0NMeDoUjoWRS3MO7hpYr31vKtvv1DHWL/CxJRAQ+pTIYBshRZoZ27LSZtcOyzSXcWNqRSeGHJkJyVz1WTXRjiWk0lqvcCfAXHfwPIognsggYT+emkvgj4umh1ueK6IGdmMd/Y5vMLzyxwzXU7ALeziXmPe+cncf0e8C2plw7Kgo2hkqAwXJw7n7gCZ4BG8cBObj+qUeIqIhL4njnnse4bOCP++dZZEk+YyRaYt/L+5k9y6Gq3Db9GfF4ZeTKS737vG3pdsSxol5OyWF6D8BzuNXjrQQaUM6Rke5ohbracBDXzJGkcOdS3q5j1pqXDzvEA6z9CJXnAbL1hFj0Y0gznpkzGTSax/YLQ3bnrUShaqs9hYvpEdngzbT2XwneQh4lSqtGorE8OAobsGA0lsmjbLGI+gOt8ReBys/9lXaIz/NxQBy7/FOAee46oh+dcsSFQhzUnbXuEY+43nGE1N7Uma8lUVEwYVQUk4+c4k6iohzkoqJIW3L69UxaGsh3DrJnfLm19iqOI9yRwd1ygXwSk0SWsCwOvMety3CMSTJ/xq3cg/qYytXgEEWbaqpCMIkKtkMVPG6f+7q/ylK8Pfw3bD5V6QeINEMmRzyI3VVun7pKwEVJYIoD81dnSYb5FznbX+yZjKrpea/WINFYvuS6ndlHMk6EYSHx3QiKMHKZKJPYEwImzaO7PdZy//HCBQ/AEKIkKopnUmhUFIKLqe4yf43or/nVvQjPTHmj8s3Nzj3cm6oPXwsfVJGmwg9JrI7wyi0hk8QXQ6HIpP8aKSVZA0Chmp22lizC6s7YC8kqTYA6fQgDd0D7dFPZnLSf9Uwb/pT5zjv8BGRUTfOZwI8c2wxqA3XiCpopevlv/ZTZvKm1E/pxt9z0erPfhoFn0qMkrtKZf4pdxeDGrf2InkcKudrPxVogwQNQJwqW0oP8UVH84NFnPD/LJAqNy8eLl6nDxfbZeWJELJ00FeKt6MAmATTOeSE+/GHciYE3cI3ontTLT8aXfk94eGDPXcg8UB6EjiCx84rI/FiDTwMj/es2Dv8kVHvB3sf/AsUzti+WU2Ul+DfIDnDQumJM8ZAx/5u4YAOz/jHoVlj5zt1U2Qm4pTsXK7PKumW3xbHafmwk3a0Tve1tautO6Hgvk4tPmm7qnVdFNvBHnEHv+IDa8QkkdeVqvdQ7RL34xBk2DPfEPZ9KoqKI9dFeb21PxNjGC5+XWc3x7u6/dt96wbpWb/xr5XgroqlQ5ct67GtI7+J+pKtlDTc1c8C4vrS+Ugy4VB29nOm6j/rsDNx6N3lgqtmXNnS6lJ4791Z8ELNu+UJcWUorZfL4asa1+mUSZxLTNzXuF1a7cZ7Bx4LTH2Bkc9Lu5oMwpQ+z4AN4/V24dTCDYfbqjlvXEvoyqtZYVg2ZNznWp45nXQvxXXMXZhinEy4ntfQR/qdjnlpAvbAKw6wwoyeQrmLkvFeekkT+wr64wUUxwx4itXgs/IaZklpSJBsVhVTwyf29mFO6cpa19t9B1Ucd0CMFo0oyPSTFY+63P8j/4r3iHM7XylBQirciIaeYNS97D8P/MA/NtK4lS2c/nKX4GXuSlwSmzerDZPUh5TVnqNXr/ACYYceuYDrGQcXHwZZJChKWx6h7vJ5hTbc+jL/+6l7+KcpSNN1+8yp6RHdmHPf85Dplf+J/eMaifK/mb6KBMmzWPZDcGpXJUhb4sfJt+ZKzPVn4OSG0inuD9U/7oInQsxeZOuUChahHRYmiL/hRyLl7OdQdtRc+DR1SCYWrCe6Fyxm72ttB2YZU4q3IwvsL2Wkb6BH4iuettEdf8Bf6M/gpGeJbQ/XZkACH+ETvfA+1wWm/f3gEquanq5ohY5RBvltJh69pWTU//5aKg/58SMZUXW4pDSkTb7kXPJYyHjfwE8dqMSrKEDLnrlusc74Q6apcO5A1yDUWLgmR19ms4XxkThUc2SpLKVnQRJEwrBN1ZwmT+VDlSkibHKptojSCCOMzuPMd1DMvtWJGzPUMWyJjVB3UIt7IqJqe92qhZJrAvbt1K+ljgZSjhouKQh5lKh5jsnLoPYfBdQXiEjg981Jb/6L0wUPKWKzyiRMnwN8WMdVhw6vYAENVV8FHc2PzlkqxlaAKmQk0qL753LAYQC6Jgff5ILVBfDd0VBR22ET3vdlwYxvwfg9ny62vrmoIUxHUpWZ4I6NqzdSqNUPhtyyWm9B7tZYl+JbXWxlV0/O1oOUJyuhxfSUgo2qN+F6tvr0x8JuwBGRUzbBqTXi8mjFrMqqm06rh9oHaD/byG8KasQAiZx1fsqMzS3PpeBSuN5GLRBeGjKrptmoNFY2FLVhSufdQ5fa18ls8dPWrIYGsbfB9JO7x0myD+zUeqty7zb9/k32uCLsWQzVFF5jaaaNVBCVxvfFpMhwrANkRlFE1TavWcG4sfFfd/bJJJrGLe1C7WHW+0ei0wpZTmIH98YKv99w9OmGGCdoKhQXRJ00XmGhdb6JnCTFlR1BG1bStWoO5sSCX6DRFPuiiXxdajqH/rdJjJWcTRJF13OBJkaqo3Et5RxVCxI1bSCJMPe4jCPitmtsSQXlC0fVwFd5fPS4wKq43PBMqsgrlUt+90gjKfJjStGqWNdNT14ZHYwn65qiPKxkoz8jB5GvZzveoex5isoI8LnE+cik4m+DeAeLGkn7G/tGVcIcRbAY/ALuemMb0yRY+UHprqNefsa0hX0s5ssuZC1vSpiznGeLcXrKpFyfZtjqEknmb6NwMkvfWQDV+zI8w3fJfZI77ZV9uqyaZfG0cARWusF6lv+bODzsXjwEzur3gTzKb3raTfGMUXWCEHgkzPP4w4iDY9UZdVhH2LRRcaQSjsmpIvCHcWDieua36XuqjxdYz+Emxi/uXwXOoorMJwI1tcVOegsMIeJ5cwgzMBreTOlBCHTsDcUnMuPn+HXyQlABZdwdWPNYkAtARN6KRxC58n9OzGoL7rQfsVr5c119UhSoawO4e2YvMnnVBmxA1uMIGFPur7gKj4XqjLitd/VIGUhpBlERo0rRqiNAgbizC7JkArqPWQ2CmDkFWP+bnI21bBfdowij+ROWcTcQ+yDuMYK35L8/Y/+uKpVjYkiS4wPTqZeO3gZApkfwPT4KjJVRRk/P5L+jWGZvoYZyFC4eWLXEeoK4NZwqmgz0Odh6EgXl+KA2uEE6hv+ouMJquNxwDirLysxdFhps95UdQRtVwraapbcSNpd0psuUN3ViOpofshYqCRR7FUziYZOLau5+d527DuSll9mVNq6Sb/sgWK9GpKbghv8MImco5h5Ecv1OMqfogWKfWvjKHyUglkw6fcEGomXj3mbO7Ajs1LvNuDpqYIkDcBetH5TAOn3XO2N+tpAeK5WSzjR6ulPqLdFI5Wv7+BCgHcnKuN2RKFZxrZGQVwI08pzKCMlxq6hky0CBuLLjgvg8d3VAOP2IGohC5/avxGTiHWrZeDvRar7NJ0IqKrE56p5LzGQ59aN1fDLdPpvldvgG6kpx04R+hXkmoiNk4i3ntB0TVTuw0fykWclddXOntbxDlCG+CZBUhbhC4yghGu1YLoh+bG9yvx2QmQF25vX8v4m/zs972lWVImskfWc8GcJns7oq6W0XOZ3hqjmXrQfAEv2+Q/OLwSdN9X+fQFpNuC6zkbuLX9KEgyvfxxK1h3nz706ugc2BQtblSpijWRO8CI1JQvLJ5Myu3763csoH1O3UrwgoV6iMokbFISI9VE2FjefUU/oKQK9/rny7Nb++GKTkgM4dG166Nfn6W/Qzr7jMgcNIRofQ9OVoiJZte9yJ1rIbJzYMUiVhOb6TO/Yrp2J3e/Hdqx2dw1y+YTCVnODWuLMVbyGTQIRxGiatwyNCSerrAhJILvnc/OBgSrfh2k87vn1aha4ew+gg2IasGvdGWeKnif/i7LLjrxaW5uddSQrmis4miw4jJV25d+SFxDM4dTo97iEkHqvSopBWHFY9twgV4eh9mxBBIdFIbirGWd1nDJXbi489TtJuc0jC6kMlsTR0+TmqrL/opRJC5EHAPVucqQFOxvwQEXWCgxks4nziBGZjDoH95aJJxnBEWJwFIGRjrxweE+s7cG/UAsHJOdQRltkYqU2reNTgzeu7rFu7/wveK7NS97xalWoRhc/pB/FVZ75j6yEWdK52Uo3aBUafvy33eOS8PNk1NW3lQHVJPrYyq6XkC1UPagGnWEmBzJtILJkBc4JCUenZHsigRKTXWWk1s37g2vgTwRD568QTiS7toiv+QlHqy1SqJCnXDR6vmcuE62UgtVwKmq+WtvabEFVPaHJS8ZqqfPGQm0PoRNLANCchLoCk9gcpzaJReJxKQUTVjrXadjG0T64aMqmnvV2tifTDYaRYSkFE1w6o1i5FrdkzKqJpOq4af8FqmG0uzG+MmwrCMqum2ag3lxtJERGOwEVsJyLzs0PxagG4sdH5bOHYasvA0VCfQ8ZAO/oO3Y8ufQe26kUBUXwuIG0sn6NadSCExlZxcTx/FU46NZEhARQLRWDUkRxwlNq8lMWAwbX8u7c/buZzxx5CAogSiXas1mBuLIqdGRTOXgIyq6XkCFd1Y8u2ry8Dezz0yo5nLwWC/wSUgM4HqaZPs7kI3lmriBIEevLFyY9HTtAHTTCUQpVVrIDeWZipEg209EpBRNd3v1fTQN2AMCQgSkFE1PWs1Q36GBCKVgIyqGVYtUiEa8HokIKNqhlXTIzgDJlIJyKiaYdUiFaIBr0cCMqpmWDU9gjNgIpWAjKoZVi1SIRrweiQgo2qGVdMjOAMmUgnIqJph1SIVogGvRwIyqmZYNT2CM2AilYCMqhlWLVIhGvB6JCCjaoZV0yM4AyZSCcgcpKDzFAWyO/KDd9k2/2c98l2krWrC+9KzPbd1vtbW2uq7mDnyazZqADSoBGQ2fKNV0zeHCm4skZ6hqN4fn6mfa92MwFF7Nafsix63lBoKpy62plWLMWLcN1dZl73uP5UR+Ytmv1rDubHg+dDObXOIswIeWrvv/+AnOUTnXGX2wU9ImW5acjW4CZNA7ZuHmI6n7PeNko5aVGu1BovG4lnwGNGzqjJyaO2cObbxg+2lR6mlz0o5xn5xcUnSwzqoq4APqhI42FYOKTzuCUIJiOmhBzfxBPSQRUhZykK5QowYNj2b5RrlmghtXb1WbDFKWanIWehvcig/2KJSjJhorBpHLvZuLGTxt20tk3iFmtw3cHI7NiZJbMFz9MN5kMjN+xhRpejPtpW6jmklZ2nfVkt9BUzvLhw9L+x8KW3OJp42aVo5zgvCsLPW0vniOZ01p6hFj9skczpGp6OH8bVeqGLA3BqsLvvvhloqTOqUVaKx+NLHO18qAOc1yLQD1FDvHmFG9CPcHnsNo8ao1/KdilpWpL/KciY9Wv4M060T3wq4qqjdRdbF69AcEK74GDEJ3HnQrhpyar0YIyYqq4aNNIQby539GOLnd8gafOK60CXs/9gl9BQ8q/YaHC6mduLh30nM6IW1Bfp+sjfayGG2qGcnyqgDeJhtHAycFhTBTjHuCbDzNnN6VkOVFlMnaEjKYOYVBYLhFawgeuY6Q216i3IwkJICSV6q/BhcEBlXpqwajeVGEgwE9ezEKdJT1DPHccAza7thIAeMgadeWy9ZqcvZ8/uZRM/o49TWLVQpjkIKM2wMCDFz1GLEyDwW6HkmEN1YRkHhS/RE4sZiKRLCMYkCjvx6lTv896IjZLrkCaFZdo/uQw6Evz+f92lInDvauWca8/MhtiIhNpRqk9jTGmp2AW+NEvOed87OY/o9YFsjxGdRintCorHkcgfRj8/nz08UIrk8/hvbZBImhotz46ZmjERL7Ht5P7NnOVSV26Y/g+tggR880Fkhgox2NJYD81Of/sS1o5ipKUkb/xS74mO6W3v3nWC+ytFWqv0yellpy7kzd0p52Zu2RcQjEx8KcX7nR0Q9RoyMqul5Am2QaCytuTP94wIn+wtDxV8w7BzaPKDov24RyznIDBIbSlY7RTD+Ggd1p617LgkasOMIPJ0HN3UOxpWLe8JHY3Hs8p/TaZ67DvrOgU45fJgYay0OewrckQEV+GPjhiExKZgsMiBHGVnRjMbyNZo0VHSAy+fI3zgcL9RcMSnV1kdWWrjm9VtgQSEMm1M5bBacPU0dK8HZM/C7IqxxDAdi3gjcyqiaHqvWIG4sX1YSpjL7sKZliqrjvUKdPwcY38JjATML5x1Q9ZnQFc1LUF8Zbsgkw4bosnFPePsRFFHjMsEVqZlf3Qs9hjNT3mAecEJHTsofvhbKvyxltAeaMWKC2g3roXptfWSljGsqW57af6PnkUnunO5MRhfmli4wbBw17wFbscYLKVFgkl7osWoS8JhluSgFU5nMTvTy3wbiJeZNdaeV29aUwOkvqDpg4j3WPz3Bm2tJw+JUJSkKy3ohrrW/0PNIIYnWeOLzUJ3wQwQy3LR+M9owwXZ6Jj3K4f6Tx/X8LJNYmtJdVNLNcP5L6z+W6HwLiOtrf4wYnhQ7bWqg2frk6iMrLVw2qx9c2G1ZM9+yhps9J6+iR3dnHhxrK/YvY+RjxMiomh6rVh85qOAmLtjArH8MuhVWvnM3VXYCbunOPelUWbfstlQftH54HEZ0od/7hCrdYT1Z7b49h8nNplaPsm3Us0xEQ5RB7/iA2vEJJHVlcvE51Eu9s1GFGb7K5FhtPzaS7taJ3vY2tXUndLyXw3VT77wq4N7anpi4Nl74vMxqjnd3/7X71gvWtUFvL1VbiT4aixJZjNIStazUcTG0D71yJp78DYf32Y8exwWDu09nwsY3X/uZUYoRI6NqjWXVkFeTY33qeNa18FHG3oXhw425nNTSR3gzZlk6zu5eQhf0YXKHQy7XtZpT8BUuv/Qk7KkbXBQz7CEO+gq1YWaozVeIe2KeWkC9sIrp0YkZPYHg1lVRrzwVwD3qgB4p0GMI00PCxpj77Q+ODFhfOcpCNJYZQ0iMGNKdKowRw+R2l1Dhs04Sl0hIkplbKJGvrY+sVHBJsKwVmfSoQdAjj+4hRps8UWKfv026XMMYMcyyJ0iMmPQ+hM0asGN12o9/IvDclC5s1j2Q3FopNooQGMV50uLQWB/4+8Su3Etn/NM+aCL07EWmvz2f6pg6/dgkg+/APFkpISz5TPc4dy+HuqP2wqehQyqBu5rgXricsau9HSRgYsJ3oSoxYkSo6K9RyMrfmAou+UiNr3UwPE3Fp4FflB+Ty4TEiGlaVs3PqqXioD8fnrGUlYQXapeQxzew8LFm/W8itNEECFN1uaU0HLoDeT64xsKlS5Zqovds1nAhZnc4rFwJCRNbGlV35KiFl0UpK46QCq7JUW4Rli2KC+WQfsmoWiOu1cIlFasSd+tW0seCWJEljzIVjzFZOfSew+DCCOAJnJ55qa1/UfrgEaummx0dmU1EuFbTuY+oGfXWdPlS4mcH4KtvWkVuz9S7af1wY+tqk9nkib/qiv/uTPyhj5Kemtxm5yl1rBZY20TXai1wJK77Lkf7DfS6F4zRwVhLQEbVrsu1WqzlZtCLWAIyqoZrtYjJGAiGBLQkIKNqhlXTEppRH40EZFRNp1XDT3hGNBYihC17Kz/m/pWU6N08F81IaeCwY1dU7j0QtANPA0Nvdawo1+e9WuzdWLj9WEkBGbhoavertkVbAiVNLucE5wWyMbBVInRMYZLb20DPB9kG6Ia1DX6KZcwJuIEsxilyyrJuLDKqpvkNNODGgn3CfUs5sYvGwu/HqiinrrLQriOTnsoMm8mY65psXAR812+bUoCj60ue6HxvQozHuNmScz9QSNxYlr0u7YHMBKq9VmswNxaOM7d99kTb9Cm28Q+kzubsWb8HcQOPn2nBgULBncQPpp5RcidRxxKaljATgKfww2qUScUlRJMij0vA3PglXiapuKLIQEuKoqas5MYSjVWzrJmeujbcjUXxW5iEf11ZdwewVHOQe4oo13BGwqOSOwnxrXh7OXNhS2CjGzoi/DqbenGSbSuZ0TiAvzEnVtrfT6H/WEj8sjCdK7aPmq353V3dBYYjJP9HF1cKLiHyFINL2Xmb6NwMUuatgepQXVdxRQkmI3MXHeWAGwsOWVw2vW0n2V6l4saibdWQt4ZwY/F3md/4Sm67cpu8BV1TdyeBpATIIpu/BTLWJIhLYjriZjIxKbuTiBAKV00XGAU8UqzKlapLiApRUsUufJ/TsxrqQAn1rQfsVimCuiuKFDI8Xw/KEbqxaK7VkLkGcWMROm2Fwlm1NSyk3MbkcJu3jpSg4dF0J5HZwB0iRZxhFNxJQgDDblHXVV1gwhACBWRak5/aCIyyS0iAglyOSKM37gGroibn89/1rTM20cM4C8d5Ykbt8lMfyhG7seixag3ixkJkiqOSwAwcLogXNyFuL7LOX0e23am6k6hvspcMlrw7iQRANqvHBUYWUaNQh0uIAgVeGmd3BfaPXA7MBaDliqJAlCuOAeVUjpAwF/nb+n+ltW4D20JkkwAAAABJRU5ErkJggg==',
          ),
        ),
      ),
    ),
  ),
);

?>