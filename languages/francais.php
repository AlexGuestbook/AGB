<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

/* Encodage utilis� dans le script */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "fr";

/* setup */
$f_lang['install_auto'] = "Installation automatique";
$f_lang['identi_base'] = "Identifiants Base de donn�es";
$f_lang['type_base'] = "Type de base utilis�e";
$f_lang['user_base'] = "Utilisateur";
$f_lang['pass_base'] = "Mot de passe";
$f_lang['nom_base'] = "Nom de la base de donn�es";
$f_lang['nom_table'] = "Nom des tables";
$f_lang['name_table_sessions'] = "Nom de la table des sessions";
$f_lang['name_table_users'] = "Nom de la table des utilisateurs";
$f_lang['name_table_messages'] = "Nom de la table des messages";
$f_lang['name_table_censure'] = "Nom de la table des mots censur�s";
$f_lang['name_table_smileys'] = "Nom de la table des smileys";
$f_lang['extension_script'] = "Extension du script";
$f_lang['choose_extension'] = "Choisissez une extension pour le script<br>(php conseill�, dans le cas contraire vous devrez renommer l'ensemble des fichiers du script avec l'extension choisie)";
$f_lang['identi_acces_admin'] = "Identifiants d'acc�s � la partie administration";
$f_lang['login_admin'] = "Login";
$f_lang['pass_admin'] = "Mot de passe";
$f_lang['verif_pass_admin'] = "Retapez votre mot de passe";
$f_lang['email_admin_setup'] = "Votre adresse �lectronique";
$f_lang['installer'] = "Installer";
$f_lang['erreur_host'] = "Veuillez indiquer le serveur de la base de donn�es";
$f_lang['erreur_user'] = "Veuillez indiquer votre identifiant de connexion � la base de donn�es";
$f_lang['erreur_nom_base'] = "Veuillez indiquer le nom de votre base de donn�es";
$f_lang['erreur_log_admin'] = "Veuillez indiquer votre login pour la partie administration";
$f_lang['erreur_pass_admin'] = "Veuillez indiquer votre mot de passe pour la partie administration";
$f_lang['erreur_pass_differents'] = "ATTENTION, vos mots de passe sont diff�rents.";
$f_lang['erreur_first_connexion'] = "<b>ERREUR, connexion impossible � la base de donn�es.</b><br><br>Veuillez v�rifier vos identifiants d'acc�s : <a href=\"javascript:history.go(-1);\"><b>retour</b></a>.";
$f_lang['erreur_install'] = "Echec de l'installation";
$f_lang['ok_install'] = "Installation r�ussie";
$f_lang['text_ok_install'] = "<b>Merci, l'installation s'est d�roul�e avec succ�s.</b><br><br>Pour des raisons de s�curit� vous devez supprimer le fichier d'installation que vous venez d'ex�cuter (\"setup.php\"). Tant que vous ne l'aurez pas supprim� vous ne pourrez pas avoir acc�s au livre d'or.<br><br>Vous pouvez d�sormais administrer votre livre d'or en cliquant <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>ici</b></a> ou bien<br> consulter l'affichage de ce dernier <a href=\"".$chem_absolu."\" target=\"_blank\"><b>ici</b></a>.";

/* administration */
$f_lang['page protect'] = "Page prot�g�e";
$f_lang['login'] = "Login";
$f_lang['pass'] = "Pass";
$f_lang['value identif'] = "Identification";
$f_lang['texte_lien_retour_livre'] = "Revenir sur le livre d'or";

 /* menu */
$f_lang['options'] = "Options";
$f_lang['script'] = "Options g�n�rales";
$f_lang['graphismes'] = "Skins";
$f_lang['messages'] = "Messages";
$f_lang['gestion'] = "Gestion";
$f_lang['censure_mots'] = "Censurer des mots";
$f_lang['smileys'] = "Smileys";
$f_lang['utilisateurs'] = "Administrateurs";
$f_lang['ajouter'] = "Ajouter";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "A propos de...";
$f_lang['donner_avis'] = "Donnez votre avis";
$f_lang['deconnexion'] = "d�connexion";

 /* options */

$f_lang['options_generales'] = "Options g�n�rales";
$f_lang['langue'] = "Langue";
$f_lang['avert_mail'] = "<br>(<b>information</b> : la fonction mail() de votre h�bergeur est d�sactiv�e, en cons�quence m�me si vous cochez oui vous ne pourrez �tre averti par email)";
$f_lang['oui'] = "oui";
$f_lang['non'] = "non";
$f_lang['options_modules'] = "Options des modules du livre d'or";
$f_lang['admin_champ_email'] = "Les visiteurs peuvent inscrire leur email";
$f_lang['admin_champ_site'] = "Les visiteurs peuvent inscrire leur site web";
$f_lang['admin_champ_pays'] = "Les visiteurs peuvent s�lectionner leur pays";
$f_lang['admin_champ_note'] = "Les visiteurs peuvent noter votre site";
$f_lang['admin_ok_aff_moteur'] = "Afficher le moteur de recherche";
$f_lang['options_tech'] = "Options techniques";
$f_lang['url_recharger'] = "Page � recharger pour le livre d'or";
$f_lang['url_variables'] = "Variables pass�es en param�tre (mettez # pour repr�senter le $ d'une variable)";
$f_lang['temps_session'] = "Temps de validit� en secondes de la session pour la partie admin";
$f_lang['skin_to_use'] = "Skin utilis�";
$f_lang['enregistrer'] = "Enregistrer";
$f_lang['nb_pages'] = "Nombre de messages sur une page du<br>livre d'or";
$f_lang['merci_options'] = "Merci, les informations ont �t� mises � jour";
$f_lang['erreur_options'] = "ERREUR\\nLes informations n'ont pas pu �tre enregistr�es, impossible d'�crire dans le fichier \\\"config.".$alex_livre_ext."\\\", veuillez �diter ce fichier � la main pour modifier les options du livre d'or.";
$f_lang['temps_ip_post'] = "Nombre de minutes avant qu'un visiteur puisse re-poster un message dans le livre";
$f_lang['minutes'] = "minutes";
$f_lang['cut_mots'] = "Nombre de caract�res avant qu'un mot trop long soit coup� en plusieurs parties";
$f_lang['format_date'] = "Format de la date";

/* skins */
$f_lang['ok_ajouter'] = "Merci, le skin a �t� cr�� avec succ�s";
$f_lang['erreur_ajouter'] = "ERREUR\\nLe skin n'a pas pu �tre cr��, veuillez le cr�er manuellement";
$f_lang['text1_2'] = "Les skins qui vont suivre sont enregistr�s dans le r�pertoire &quot;templates/skins/&quot; de l'arborescence du livre d'or. Cette interface vous permet de les modifier facilement mais vous pouvez �galement �diter manuellement les fichiers html qui les composent.";
$f_lang['text2'] = "<b>Si vous souhaitez �galement modifier les templates de la partie administration</b> veuillez �diter manuellement les fichiers du r�pertoire &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "Ajouter un skin";
$f_lang['ajouter'] = "Ajouter";
$f_lang['gestion_skins'] = "Gestion des skins";
$f_lang['vous_editez'] = "Vous �ditez actuellement le skin";
$f_lang['style'] = "feuille de style";
$f_lang['ajouter_message'] = "partie ajouter un message";
$f_lang['nbre_messages_page'] = "partie nombre de messages / pages";
$f_lang['pages_dispos'] = "partie liste des pages disponibles / page suivante - pr�c�dente";
$f_lang['texte_corps_messages'] = "corps des messages";
$f_lang['espacement'] = "espacement entre 2 messages";
$f_lang['text_assembly'] = "fichier assemblant les diff�rentes parties pr�c�dentes";
$f_lang['ok_edit_skin'] = "Merci, le skin a �t� mis � jour";
$f_lang['erreur_edit_skin'] = "ERREUR\\nUn ou des fichier(s) du skin n'a pas pu �tre mis � jour. Veuillez �diter manuellement ces fichiers.";
$f_lang['ajouter'] = "Ajouter";
$f_lang['supprimer'] = "Supprimer";
$f_lang['text_sup_skin'] = "Supprimer un skin";
$f_lang['ok_supprimer'] = "Merci, le skin a �t� enti�rement supprim� avec succ�s.";
$f_lang['erreur_supprimer'] = "ERREUR\\nUn ou des fichiers(s) du skin n'ont pas pu �tre supprim�s, vous devez le(s) supprimer � la main.";

/* page des mots censur�s */
$f_lang['aj_mot'] = "Ajouter un nouveau mot "; 
$f_lang['mot_interdit'] = "Mot interdit :";
$f_lang['remplacer_par'] = "Le remplacer par :";
$f_lang['gestion_censure'] = "Gestion des mots interdits";
$f_lang['mot'] = "mot";
$f_lang['remplace_by'] = "remplac� par";
$f_lang['liste_jour'] = "Mettre la liste � jour";
$f_lang['sup_mots'] = "Supprimer les mots s�lectionn�s";
$f_lang['erreur_aj_censure1'] = "Veuillez indiquer un mot � censurer";
$f_lang['erreur_aj_censure2'] = "Veuillez indiquer un mot qui remplacera le mot censur�";
$f_lang['ok_aj_mot'] = "Merci, le mot � censurer � �t� ajout�.";
$f_lang['verif_sup'] = "Voulez-vous supprimer d�finitivement les mots s�lectionn�s ?";
$f_lang['merci_modif'] = "Merci, les modifications ont �t� effectu�es";

/* bannissement */
$f_lang['bannir_ip'] = "Bannir des ip";
$f_lang['text_ip1'] = "Chaque internaute naviguant sur le web poss�de une adresse propre � 4 chiffres (201.10.25.14 par exemple). Cette adresse est attribu�e par le fournisseur d'acc�s et change, en th�orie, � chaque re-connexion.";
$f_lang['text_ip2'] = "Si vous souhaitez qu'un utilisateur <b>ne puisse pas poster de message sur votre livre d'or</b>, vous pouvez indiquer son adresse ip ici. Vous pouvez �galement interdire une plage d'adresse ip en utilisant le caract�re d'�chappement * (par exemple 201.15.55.*, ou encore 158.*.*.*).";
$f_lang['ajouter_ip'] = "Ajouter une nouvelle ip � bannir";
$f_lang['gestion_ip'] = "Gestion des ip";
$f_lang['sup_ip'] = "Supprimer les ip s�lectionn�es";
$f_lang['ok_aj_ip'] = "Merci, l'ip est d�sormais bannie";
$f_lang['verif_sup_ip'] = "Voulez-vous vraiment supprimer toutes les ip s�lectionn�es ?";

/* smileys */
$f_lang['gestion_smileys'] = "Gestion des smileys";
$f_lang['text_smileys'] = "<b>Les smileys permettent de traduire l'humeur d'une personne</b> au moment ou elle �crit un message. A partir de cette interface vous allez pouvoir en ajouter ou en retirer tr�s facilement pour offrir le plus grand choix possible � vos visiteurs :o)<br><br>Les smileys disponibles sur cette page sont enregistr�s dans le r�pertoire \"images/smileys\".";
$f_lang['ajouter_smiley'] = "Ajouter un smiley";
$f_lang['image_smiley'] = "Image";
$f_lang['car_replace'] = "Caract�re de remplacement";
$f_lang['gestion_smileys'] = "Gestion des smileys";
$f_lang['sup_smileys'] = "Supprimer les smileys s�lectionn�s";
$f_lang['erreur_image'] = "Veuillez choisir un smiley";
$f_lang['erreur_car'] = "Veuillez choisir un caract�re de remplacement pour le smiley s�lectionn�";
$f_lang['ok_aj_smiley'] = "Merci, le smiley a �t� ajout� avec succ�s";
$f_lang['no_smiley'] = "Le smiley doit �tre une image GIF OU JPEG";
$f_lang['copy_impossible'] = "ERREUR\\nCopie impossible du smiley dans le r�pertoire \\\"images/smileys\\\".";
$f_lang['car_replace_exist'] = "ERREUR\\nLe caract�re de remplacement existe d�j� dans la base.";
$f_lang['modif_smileys'] = "Modifier tous les smileys";
$f_lang['verif_sup_smileys'] = "Voulez vous vraiment supprimer tous les smileys s�lectionn�s ?";
$f_lang['merci_modif_smileys'] = "Merci, les smileys ont �t� modifi�s.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Ajouter un administrateur du livre d'or";
	$f_lang['add_admin_2'] = "Ajouter un admin";
	$f_lang['ajouter_admin'] = "Ajouter";
	$f_lang['name_ajouter_admin'] = "ajouter";
}
else{
	$f_lang['add_admin_texte'] = "Modifier un administrateur du livre d'or";
	$f_lang['add_admin_2'] = "Modifier un admin";
	$f_lang['ajouter_admin'] = "Enregistrer";
	$f_lang['name_ajouter_admin'] = "modifier";
}

$f_lang['identif_connexion'] = "Identifiant de connexion";
$f_lang['passe_admin'] = "Mot de passe";
$f_lang['email_admin'] = "Email (important si l'admin doit �tre pr�venu lorsqu'un message est post�)";
$f_lang['admin_receive_email'] = "L'administrateur doit-il �tre pr�venu lorsqu'un message est post� ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;peut-il modifier les options du script ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;modifier les skins ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;g�rer les messages ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;g�rer les mots censur�s ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;g�rer les smileys ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;g�rer les comptes des autres administrateurs ?";
$f_lang['erreur_name'] = "Veuillez indiquer un identifiant de connexion";
$f_lang['erreur_passe'] = "Veuillez indiquer un mot de passe";
$f_lang['erreur_email'] = "Veuillez indiquer un email";
$f_lang['ok_aj_admin'] = "Merci, le compte a �t� cr�� avec succ�s";
$f_lang['ok_modif_admin'] = "Merci, le compte a �t� modifi�";
$f_lang['erreur_aj_admin'] = "ERREUR\\nCe login existe d�j�";
$f_lang['revenir'] = "Revenir � la page pr�c�dente";

/* gestion des admins */
$f_lang['gest_admin'] = "Gestion des administrateurs";
$f_lang['sup_admin'] = "supprimer";
$f_lang['login_admin'] = "login";
$f_lang['email_admin'] = "email";
$f_lang['modif_admin'] = "modifier";
$f_lang['value_sup_admin'] = "Supprimer tous les admins s�lectionn�s";
$f_lang['verif_sup_admin'] = "Voulez vous vraiment supprimer tous les administrateurs s�lectionn�s ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "PAGE INACCESSIBLE";
$f_lang['erreur_auth'] = "Echec d'authentification";
$f_lang['erreur_droits'] = "Vous n'avez pas les droits requis pour afficher cette page.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Note moyenne attribu�e par les visiteurs � ce site :";
$f_lang['title_guestbook'] = "Livre d'Or";
$f_lang['note_super'] = " : Fantastique !";
$f_lang['note_moyen'] = " : Moyen";
$f_lang['note_rate'] = " : Compl�tement rat�";
$f_lang['nom_pseudo_visiteur'] = "Nom ou pseudo :";
$f_lang['email_visiteur'] = "E-mail :";
$f_lang['site_web_visiteur'] = "URL de votre site web :";
$f_lang['ville_pays_visiteur'] = "Ville / pays :";
$f_lang['note_visiteur'] = "Votre note pour ce site :";
$f_lang['message_visiteur'] = "Message :";
$f_lang['ajouter_message_visiteur'] = "Ajouter ce message";
$f_lang['messages'] = "Messages";
$f_lang['messages_a'] = "�";
$f_lang['page'] = "Page";
$f_lang['nbre_messages'] = "Nombre de messages";
$f_lang['message_le'] = "le";
$f_lang['message_note'] = "Note";
$f_lang['send_mail_to'] = "Envoyer un courriel �";
$f_lang['go_home'] = "Visiter le site";
$f_lang['precedente'] = "&lt;&lt; pr�c�dente";
$f_lang['suivante'] = "suivante &gt;&gt;";
$f_lang['no_message'] = "Aucun message � afficher.";
$f_lang['no_ip'] = "ATTENTION\\nVotre ip a �t� bannie, vous n'�tes pas autoris� � poster un message sur ce livre d'or.";
$f_lang['ok_post'] = "Merci !  Votre message a �t� enregistr� avec succ�s.";
$f_lang['time_erreur'] = "ATTENTION\\nVotre message n'a pu �tre enregistr�, vous en avez d�j� post� un trop r�cemment.";
$f_lang['text_select_search'] = "Afficher uniquement les messages comportant le(s) mot(s) suivant(s)";
$f_lang['text_ok_search'] = "Ok";


/* gestion des messages */
$f_lang['gestion_mess'] = "Gestion des messages";
$f_lang['selectionner_pages'] = "S�lectionner";
$f_lang['messages_gest'] = "message";
$f_lang['page_gest'] = "page";
$f_lang['aller_en_page'] = "Aller en page";
$f_lang['supprimer_gest'] = "supprimer";
$f_lang['auteur_gest'] = "auteur";
$f_lang['modifier_gest'] = "modifier";
$f_lang['supprimer_mess_selected'] = "Supprimer les messages s�lectionn�s";
$f_lang['verif_sup_mess'] = "Voulez vous vraiment supprimer tous les messages s�lectionn�s ?";

/* modifier un message */
$f_lang['modif_mess'] = "Modifier un message";
$f_lang['message_modif'] = "Message";
$f_lang['nom_modif'] = "Nom";
$f_lang['email_modif'] = "Email";
$f_lang['site_web_modif'] = "Site web";
$f_lang['note_modif'] = "Note attribu�e � votre site";
$f_lang['ville_pays_modif'] = "Ville / Pays";
$f_lang['date_modif'] = "Date d'ajout";
$f_lang['ip_modif'] = "Adresse ip";
$f_lang['ok_modif_mess'] = "Merci, les informations ont �t� modifi�es";

/* titre des pages */
$f_lang['title identification'] = "identification";
$f_lang['title administration'] = "administration";
$f_lang['title frame gauche'] = "frame gauche";
$f_lang['title options'] = "options";
$f_lang['title skins'] = "skins";
$f_lang['title censure'] = "mots � censurer";
$f_lang['title censure'] = "gestion des ips � bannir";
$f_lang['title smileys'] = "gestion smileys";
$f_lang['title add admin'] = "ajouter un administrateur du livre d'or";
$f_lang['title gest admin'] = "gestion des administrateurs du livre d'or";
$f_lang['title erreur'] = "erreur";
$f_lang['title gestion mess'] = "gestion des messages";
$f_lang['title modif mess'] = "modifier un message";
$f_lang['title setup'] = "installation";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Impossible de se connecter � la base de donn�es";
$f_lang['erreur_connexion'] = "Vos identifiants sont incorrects";
$f_lang['manque login'] = "Veuillez taper votre login";
$f_lang['manque pass'] = "Veuillez taper votre mot de passe";
$f_lang['end session'] = "Votre session est termin�e";

/* add version 3.11 */
$f_lang['addSignature'] = "Ecrire un message";
$f_lang['seeMessages'] = "Voir les messages";
$f_lang['addMessageBlocAdd'] = "Ajouter un message dans le livre d'or";

/* add version 3.2 */
$f_lang['version'] = "Version";
$f_lang['new_version_dispo'] = "Une nouvelle version du livre d'or est disponible";
$f_lang['version_courrante'] = "Version actuelle du script";
$f_lang['info_version'] = "Information sur votre version";
$f_lang['version_txt_ok'] = "Vous disposez de la version ".$alex_livre_version.",<br/>cette version est la derni�re version, aucune mise � jour n'est n�cessaire.";
$f_lang['version_txt_erreur'] = "Vous disposez de la version ".$alex_livre_version.".<br/><b>Une erreur s'est produite lors de la recherche de nouvelle version.</b> Nous vous invitons � consulter le site http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "Vous disposez de la version ".$alex_livre_version.", <b>une nouvelle version est disponible</b>";
$f_lang['version_down'] = "T�l�charger la nouvelle version";
$f_lang['help_update'] = "Aide pour la mise � jour";
$f_lang['spam'] = "Le USER AGENT de votre navigateur n'a pas pu �tre d�termin�, visiblement un robot a tent� de poster automatiquement un message. Si ce n'est pas le cas, veuillez changer de navigateur puis renouvellez l'op�ration.";
$f_lang['avis_spammeurs'] = "Avis aux spammeurs";
$f_lang['txt_spammeurs'] = "<b>Ce livre d'or est prot�g� contre le spam</b>.<br>Les adresses emails et les urls sont encod�es dans le code source des pages g�n�r�es, par cons�quent il est inutile de l'inonder de messages publicitaires : ils n'auront aucune utilit� puisque votre url ne sera pas prise en compte par les moteurs de recherche.  Votre site ne sera pas mieux r�f�renc�, le message sera effac�, et nous serons f�ch�s...";
$f_lang['fermer'] = "Fermer cette fen�tre";
$f_lang['valider_messages'] = "Souhaitez vous valider les messages avant leur int�gration dans le livre d'or ?";
$f_lang['valide'] = "Valid� ?";
$f_lang['mess_valide'] = "Ce message est valid�";
$f_lang['mess_invalide'] = "Ce message est en attente de validation";
$f_lang['info_mess_valide'] = "Message valid� ?";
$f_lang['ok_post_valid'] = "Merci ! Votre message a �t� enregistr� avec succ�s, il sera visible sur le livre d'or d�s que le webmestre du site l'aura valid�.";
$f_lang['see_skin'] = "Visualiser le livre d'or en utilisant ce skin";
$f_lang['maxi_car'] = "Nombre maxi de caract�res dans un message (0 = illimit�)";
$f_lang['il_reste'] = "";
$f_lang['caracteres'] = "caract�re(s) encore disponible(s)";
$f_lang['sup_copyright'] = "Supprimer le copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Nom de la table pour le code de s�curit�";
$f_lang['t_chem_dossier_fonts'] = "Chemin d'acc�s complet vers le dossier des polices de caract�res";
$f_lang['t_color_txt_code'] = "Couleur du texte du code, en hexa";
$f_lang['t_color_background_code'] = "Couleur du fond de l'image, en hexa";
$f_lang['a_quoi_ca_sert'] = "� quoi ca sert ?";
$f_lang['why_code'] = "Pourquoi un \"code de s�curit�\" ?";
$f_lang['txt_why_code'] = "Cette saisie nous permet de v�rifier que le message va �tre post� par une personne r�elle et non par un programme automatis�.<br><br><b>Les messages publicitaires sont proscrits sur ce livre d'or !</b>";
$f_lang['erreur_code_securite'] = "Veuillez saisir le code de s�curit�";
$f_lang['erreur_saisie_code_securite'] = "Le code de s�curit� saisi �tait incorrect, vous pouvez renouveler l'op�ration";

/* add version 4.0 */
$f_lang['reponse_auto'] = "R�ponse automatique";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;g�rer les r�ponses automatiques ?";
$f_lang['text_reponse_auto'] = "<b>Vous pouvez d�finir sur cette page le texte de remerciement automatique</b> qui sera envoy� aux personnes ayant post� un message sur votre livre d'or. Ce message sera envoy� si vous activez la fonctionnalit� dans les options du script.<br><br>Chaque langue peut disposer d'un message personnalis� et la chaine de caract�res [PSEUDO] est remplac�e par le pseudo de l'utilisateur ayant post� le message.";
$f_lang['name_table_rep_auto'] = "Nom de la table pour les messages de r�ponse automatique";
$f_lang['gestion_reponses'] = "Gestion des messages";
$f_lang['msg_remerciement'] = "Message de remerciement";
$f_lang['txt_remerciement'] = "Bonjour [PSEUDO],\n\nMerci d'avoir laiss� un message sur notre livre d'or !";
$f_lang['ok_save_msg_rem'] = "Merci, le texte de remerciement a �t� enregistr�.";
$f_lang['remerciement'] = "Remerciements";
$f_lang['titre_guestbook'] = "Titre du livre d'or";
$f_lang['text_titre_guestbook'] = "<b>Vous pouvez modifier le titre du livre d'or</b> et le d�finir pour chacune des langues disponibles.";
$f_lang['titre'] = "Titre";
$f_lang['parametrage'] = "Param�trage";
$f_lang['ok_save_titre'] = "Merci, le titre a �t� enregistr�.";
$f_lang['ville_visiteur'] = "Ville :";
$f_lang['pays_visiteur'] = "Pays :";
$f_lang['flag'] = "Drapeau";
$f_lang['ville_modif'] = "Ville";
$f_lang['pays_modif'] = "Pays";
$f_lang['action'] = "Action";
$f_lang['repondre'] = "R�pondre";
$f_lang['votre_reponse'] = "Votre r�ponse";
$f_lang['ok_reponse_mess'] = "Merci, votre r�ponse a �t� enregistr�e";
$f_lang['defaut_titre_rep'] = "R�ponse du Webmestre";
$f_lang['annuler'] = "Annuler";
$f_lang['num_appari'] = "Num�ro d'apparition";
$f_lang['plus_smileys'] = "Afficher plus de smilies";
$f_lang['liste_all_smilies'] = "Liste de tous les smilies";
$f_lang['boite_java'] = "Bo�te Javascript";
$f_lang['text_boite_java'] = "<b>Cette fonctionnalit� vous permet d'afficher les derniers messages publi�s dans votre livre d'or</b> sur la page de votre choix.";
$f_lang['parametrage_modele'] = "Param�trage du mod�le";
$f_lang['ok_save_boite'] = "Merci, votre param�trage a �t� enregistr�";
$f_lang['format_date_boite'] = "Format de la date (identique � la fonction <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> de PHP)";
$f_lang['nbre_maxi_pseudo_boite'] = "Nombre de caract�res maxi affich�s pour le pseudo";
$f_lang['nbre_maxi_message_boite'] = "Nombre de caract�res maxi affich�s pour le message";
$f_lang['modele_affichage_donnees'] = "Mod�le d'affichage des donn�es";
$f_lang['url_dossier_livre_boite'] = "URL compl�te vers le dossier de votre livre d'or";
$f_lang['url_livre_boite'] = "URL compl�te vers la page d'affichage de votre livre d'or";
$f_lang['generation_code'] = "G�n�ration du code Javascript";
$f_lang['nom_msg_afficher'] = "Nombre de messages � afficher";
$f_lang['generer_code'] = "G�n�rer le code d'appel Javascript";
$f_lang['code_a_copier'] = "Code HTML � copier/coller sur la ou les pages de votre choix";
$f_lang['erreur_boite_java'] = "Veuillez indiquer un nombre de messages affich�s valide";
$f_lang['erreur_par_boite'] = "Erreur de param�trage, impossible d'isoler la cha�ne [BOUCLE] ... [/BOUCLE] dans votre mod�le.";
$f_lang['saut_ligne_msg_boite'] = "Afficher les sauts de ligne dans les messages";
$f_lang['message_a'] = "�";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;g�rer la base de donn�es ?";
$f_lang['bdd'] = "Base de donn�es";
$f_lang['optimisation'] = "Optimisation";
$f_lang['sauvegarde'] = "Sauvegarde";
$f_lang['restauration'] = "Restauration";
$f_lang['optimisation_txt'] = "<b>Au fil des enregistrements et suppressions, les tables de votre base de donn�es accumulent des espaces inutilis�s et vides.</b> Ces derniers nuisent � la performance de votre BDD, cette page vous permet de rem�dier � ce probl�me en optimisant les tables.";
$f_lang['liste_tables'] = "Liste des tables de votre base de donn�es";
$f_lang['lancer_optimisation'] = "Lancement de l'optimisation";
$f_lang['tables'] = "TABLES";
$f_lang['pertes'] = "PERTES";
$f_lang['octets'] = "octets";
$f_lang['ok_optimise'] = "Merci, les tables qui avaient des pertes ont �t� optimis�es";
$f_lang['txt_sauvegarde'] = "<b>Si vous souhaitez conserver longtemps les messages �crits dans votre livre d'or, une sauvegarde p�riodique est grandement conseill�e.</b> Un plantage disque pourrait en effet d�truire toutes vos donn�es. Une sauvegarde pourra �galement vous �tre utile si vous souhaitez transf�rer vos messages sur un autre serveur.";
$f_lang['lancer_sauvegarde'] = "Lancer la sauvegarde";
$f_lang['lancer_restauration'] = "Lancer la restauration";
$f_lang['txt_restauration'] = "<b>Si vous avez effectu� une sauvegarde, vous pouvez effecuer une restauration compl�te de la base de donn�es de votre livre d'or.</b> S�lectionnez simplement le fichier correspondant sur votre disque dur.<br><br><b><u>ATTENTION</u></b>, si votre fichier est tr�s volumineux (plusieurs m�gas), la restauration pourrait poser probl�me selon la configuration du serveur de votre h�bergeur (activation ou non de la commande set_time_limit() et taille maxi autoris�e en upload).";
$f_lang['select_file'] = "S�lectionnez un fichier de sauvegarde sur votre disque dur (.ZIP ou .SQL)";
$f_lang['confirm_restauration'] = "Confirmez-vous le lancement d'une restauration et l'�crasement d�finitif de toutes les donn�es actuelles ?";
$f_lang['select_file_restau'] = "Veuillez s�lectionner un fichier sur votre disque dur";
$f_lang['erreur_ext_restau'] = "L'extension du fichier s�lectionn� n'est pas .ZIP ou .SQL, la restauration n'a pas pu �tre effectu�e";
$f_lang['conseil_zip'] = "(d�compressez l'archive ZIP sur votre disque dur pour r�cup�rer le fichier SQL)";
$f_lang['erreur_ext_zip'] = "L'extension PHP_ZIP n'est pas disponible sur votre serveur, la restauration via un fichier ZIP n'est pas possible. Veuillez s�lectionner un fichier .SQL sur votre disque ".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Une erreur est survenue pendant la lecture de votre archive ZIP, impossible d'effectuer la restauration. Vous pouvez essayer avec un fichier .SQL ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Le fichier SQL � traiter ne correspond pas � un fichier de sauvegarde du script @lex Guestbook. Impossible d'effectuer la restauration.";
$f_lang['restauration_terminee'] = "Merci, la restauration s'est termin�e avec succ�s.";

							/* V5 */
$f_lang['name_table_ban'] = "Nom de la table des ip, pseudos et emails bannis";
$f_lang['ok_validation'] = "Merci, la validation a �t� effectu�e";
$f_lang['selectionner_tous_messages'] = "Tout cocher / Tout d�cocher";
$f_lang['admin_send_mail'] = "Souhaitez vous que les admins recoivent un courriel lorsqu'un nouveau message est post� ?";

//ajout bannissement
$f_lang['bannissement'] = "Bannissement";
$f_lang['admin_gestion_bannissement'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;g�rer le bannissement ?";
$f_lang['interdit_de_message'] = "Votre message n'a pas �t� enregistr�. Pour que la raison de ce refus (mot interdit, champ obligatoire non rempli...) s'affiche, Javascript doit �tre activ� dans votre navigateur internet.";
$f_lang['valider_mess'] = "Appliquer les choix de validation ci dessus";
$f_lang['erreur_ip'] = "Adresse IP invalide";
$f_lang['erreur_ip1'] = "Veuillez renseigner la partie 1 de l'ip avec un nombre de 0 � 255 ou une *";
$f_lang['erreur_ip2'] = "Veuillez renseigner la partie 2 de l'ip avec un nombre de 0 � 255 ou une *";
$f_lang['erreur_ip3'] = "Veuillez renseigner la partie 3 de l'ip avec un nombre de 0 � 255 ou une *";
$f_lang['erreur_ip4'] = "Veuillez renseigner la partie 4 de l'ip avec un nombre de 0 � 255 ou une *";
$f_lang['explication_bannir_mot'] = "Vous avez deux possibilit�s pour interdire des mots dans les messages. Soit vous les censurez (remplacement du mot par celui que vous avez indiqu�), soit le message est refus�.";
$f_lang['bannir_mot'] = "Souhaitez vous refuser les messages contenant des mots que vous avez censur�s (voir \"Censurer des mots\" dans le menu) ?<br/>Si vous choisissez \"non\", les mots seront remplac�s par celui que vous aurez choisi.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Bannir des pseudos";
$f_lang['admin_text_pseudo'] = "Si vous souhaitez qu'un utilisateur <b>ne puisse pas poster de message sur votre livre d'or</b>, vous pouvez indiquer son pseudo ici. Vous pouvez �galement interdire un pseudo de fa�on g�n�rique avec des * qui signifient n'importe quel caract�re.";
$f_lang['ajouter_pseudo'] = "Ajouter un nouveau pseudo � bannir";
$f_lang['gestion_pseudo'] = "Gestion des pseudos";
$f_lang['sup_pseudo'] = "Supprimer les pseudos s�lectionn�s";
$f_lang['erreur_pseudo'] = "Veuillez renseigner le pseudo � ajouter";
$f_lang['ok_aj_pseudo'] = "Merci, le pseudo est d�sormais banni";
$f_lang['verif_sup_pseudo'] = "Voulez-vous vraiment supprimer toutes les pseudos s�lectionn�s ?";

/* bannir des emails */
$f_lang['bannir_emails'] = "Bannir des adresses courriels";
$f_lang['admin_text_email'] = "Si vous souhaitez qu'un utilisateur <b>ne puisse pas poster de message sur votre livre d'or</b>, vous pouvez indiquer son adresse courriel ici. Vous pouvez �galement interdire des noms de domaines avec une * comme ceci *@ledomaine.com.";
$f_lang['ajouter_email'] = "Ajouter une nouvelle adresse courriel � bannir";
$f_lang['gestion_email'] = "Gestion des adresses courriel";
$f_lang['sup_email'] = "Supprimer les adresses courriel s�lectionn�es";
$f_lang['erreur_email'] = "Veuillez renseigner l'adresse courriel � ajouter";
$f_lang['ok_aj_email'] = "Merci, l'adresse courriel est d�sormais bannie";
$f_lang['verif_sup_email'] = "Voulez-vous vraiment supprimer toutes les adresses courriel s�lectionn�es ?";

$f_lang['no_pseudo'] = "ATTENTION\\nVotre pseudo a �t� banni, vous n'�tes pas autoris� � poster un message sur ce livre d'or.";
$f_lang['no_email'] = "ATTENTION\\nVotre adresse courriel a �t� bannie, vous n'�tes pas autoris� � poster un message sur ce livre d'or.";
$f_lang['no_mot'] = "ATTENTION\\nVous avez saisi un mot qui est interdit, vous n'�tes pas autoris� � poster un message sur ce livre d'or.\\nVeuillez corriger votre message !";

// interdiction des URL
$f_lang['url_interdite'] = "ATTENTION\\nLes URL sont interdites dans le corps du message";
$f_lang['url_interdites'] = "Souhaitez-vous interdire les messages contenant des URL ?";
$f_lang['url_cliquables'] = "Souhaitez-vous rendre les URL cliquables dans les messages ?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "Nom de la table des param�tres de configuration";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "Vous pouvez ajuster le d�calage horaire entre le serveur et l'heure de votre pays. Laissez 0 pour ne pas modifier l'heure.";
$f_lang['heures'] = "heures";
$f_lang['secondes'] = "secondes";
$f_lang['admin_erreur_decalage_horaire'] = "Vous devez indiquer un d�calage horaire compris entre -12 et +12";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "Vous ne pouvez pas supprimer le dernier administrateur";

// d�sactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Souhaitez-vous autoriser les smileys ?";

// pour emp�cher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "ATTENTION\\nVous avez saisi une valeur de validit� de la session de la partie admin trop petite !\\nVous devez indiquer une valeur sup�rieure � 300 secondes";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "Souhaitez-vous inclure le livre dans un fichier PHP ?";
$f_lang['admin_inclure_livre_code'] = "Voici le code PHP que vous devez ins�rer dans votre fichier PHP entre les balises &lt;?php et ?&gt;.\n\nIl vous reste � modifier la variable \$chem_absolu dans le fichier /index.php du livre et � ajouter la feuille de style du livre dans la page appelante (pour plus de d�tails, voir la FAQ)";
$f_lang['admin_fichier_inclusion'] = "Indiquer ici le chemin absolu du fichier dans lequel vous souhaitez inclure le livre d'or (sous la forme /dossier1/dossier2/fichier_ou_a_lieu_linclusion.php). Vous devez cliquer sur le bouton \"Enregistrer\" pour que le chemin indiqu� soit pris en compte dans le code";
$f_lang['admin_fichier_inclusion_erreur'] = "ATTENTION\\nVous n'avez pas indiqu� un chemin valide pour le fichier � inclure\\nLe chemin doit �tre de la forme /dossier1/dossier2/fichier_ou_a_lieu_l_inclusion.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "Ne pas proposer";
$f_lang['admin_champ_obligatoire'] = "Obligatoire";
$f_lang['admin_champ_prive'] = "Priv�";
$f_lang['admin_champ_pseudo'] = "Les visiteurs peuvent inscrire leur pseudo";
$f_lang['admin_champ_ville'] = "Les visiteurs peuvent inscrire leur ville";
$f_lang['admin_donner_focus'] = "Souhaitez-vous que le champ 'Pseudo' soit s�lectionn� (qu'il ait le focus) au chargement de la page ?";
$f_lang['champ_obligatoire_vide'] = "Au moins un champ obligatoire (rep�r� par une *) est vide. Veuillez le remplir.";
$f_lang['erreur_add_nom'] = "Veuillez indiquer votre nom";
$f_lang['erreur_add_email'] = "Veuillez indiquer votre adresse de courriel";
$f_lang['erreur_add_site'] = "Veuillez indiquer l'adresse de votre site";
$f_lang['erreur_add_ville'] = "Veuillez indiquer votre ville";
$f_lang['erreur_add_pays'] = "Veuillez s�lectionner votre pays";
$f_lang['erreur_add_note'] = "Veuillez s�lectionner une note";
$f_lang['erreur_add_message'] = "Veuillez �crire votre message";
$f_lang['erreur_url'] = "L'adresse de votre site ne semble pas valide";

// code de s�curit� : v�rification de la pr�sence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">Vous ne pouvez pas utiliser le code de s�curit� !!!<br/>\n Votre serveur n'inclut pas la librairie GD2 et/ou les options n�cessaires au bon fonctionnement du code de s�curit�</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Souhaitez-vous afficher un lien en bas de page vers l'interface d'administration&nbsp;?";
$f_lang['admin_lien_accueil'] = "Souhaitez-vous afficher un lien de retour vers l'accueil ou vers une page de votre site&nbsp;?";
$f_lang['admin_chemin_lien_accueil'] = "Si vous laissez le champ suivant libre, le lien redirigera le visiteur vers la page d'accueil du site. Vous pouvez �galement indiquer le chemin absolu vers une page de votre choix (par exemple /dossier1/page1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "Le chemin donn� pour le lien vers la page d'accueil est incorrect ! Veuillez utiliser un chemin absolu (par exemple /mapage.php).";
$f_lang['texte_lien_accueil'] = "Retour � l'accueil du site";
$f_lang['texte_lien_admin'] = "Administration du livre d'or";

$f_lang['admin_retour_livre'] = "Voir le livre d'or";

// symboles champs priv�s/obligatoires sur le formulaire
// /!\ Attention, maximum 90 caract�res
$f_lang['information_champ_prive'] = "La valeur de ce champ ne sera visible que par l'administrateur du livre d'or.";
$f_lang['information_champ_obligatoire'] = "Ce champ est obligatoire pour poster un message";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Serveur (g�n�ralement localhost)";

$f_lang['name_table_txt_lang'] = "Nom de la table contenant les messages personnalis�s";

$f_lang['erreur_ecriture'] = "<b>ERREUR</b>, impossible d'�crire dans le r�pertoire \"config/\".<br><br>Veuillez modifier les droits unix du r�pertoire \"config\" (chmod 777), puis re-tentez l'installation : <a href=\"./setup.php\"><b>retour</b></a>.";

$f_lang['options_livre'] = "Options du livre d'or";

$f_lang['text1'] = "<b>Les mots censur�s seront automatiquement remplac�s</b> dans les messages post�s par les visiteurs. Vous pouvez par exemple remplacer tous les mots \"grossiers\" par une chaine de caract�res du type \"**mot censur�**\".<br/>Si vous avez choisi de refuser les messages qui contiennent des mots \"interdits\", <u>vous devez tout de m�me ajouter un texte de remplacement</u>. Cette mesure vous permet de passer d'un mode � l'autre (remplacement du mot ou refus du message).";

$f_lang['erreur_mail'] = "Il doit y avoir une erreur dans votre adresse de courriel ?";

$f_lang['add_code_securite'] = "Souhaitez vous imposer la saisie d'un code de s�curit� (\"captcha\") aux visiteurs lors de l'ajout de message ?";

$f_lang['veuillez_taper_code'] = "Veuillez copier ce code de 4 lettres dans la case de droite";

$f_lang['envoyer_remerciement'] = "Souhaitez vous qu'un courriel de remerciement automatique soit envoy� ? (attention, l'adresse �lectronique de l'administrateur sera utilis�e pour l'envoi des courriels)";

$f_lang['nb_max_smileys'] = "Nombre max. de smilies affich�s sur le formulaire (les autres seront visibles en cliquant sur le sigle \"+\")";

/* mail envoy� */
$f_lang['mail_object'] = "[info] - Nouveau message post� sur votre livre d'or - ";
$f_lang['mail_message'] = "Nouveau message dans le livre d'or ";

/* Erreur si fichier install present */
$f_lang['erreur_fic_install_present'] = "Pour utiliser le livre d'or et pour des raisons de s�curit�, vous devez supprimer le fichier setup.php et le dossier update/ dans le r�pertoire Alex Guestbook"; 

?>
