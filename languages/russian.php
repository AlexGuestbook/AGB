<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//        ������� �������: ������ �������    //
//               several@mail.ru             //
///////////////////////////////////////////////

/* Encodage utilis� dans le script */
$SCRIPT_ENCODAGE = "windows-1251";
$CONTENT_LANGUAGE = "ru";

/* setup */
$f_lang['install_auto'] = "�������������� ���������";
$f_lang['identi_base'] = "���������� � ��";
$f_lang['type_base'] = "��� ��";
$f_lang['user_base'] = "�����";
$f_lang['pass_base'] = "������";
$f_lang['nom_base'] = "��� ��";
$f_lang['nom_table'] = "�������� ������";
$f_lang['name_table_sessions'] = "�������� ������� ������";
$f_lang['name_table_users'] = "�������� ������� �������������";
$f_lang['name_table_messages'] = "�������� ������� ���������";
$f_lang['name_table_censure'] = "�������� ������� ����������� ����";
$f_lang['name_table_ip'] = "�������� ������� ��������� IP";
$f_lang['name_table_smileys'] = "�������� ������� ��� ���������";
$f_lang['extension_script'] = "���������� ��� ����������� ������";
$f_lang['choose_extension'] = "�������� ���������� ��� ����������� ������<br>(�� ��������� \"php\", ����� ��� �������� ������������� ��� ����� �� ��������� ����������)";
$f_lang['identi_acces_admin'] = "��� ID ��� ������� � ������ �����������������";
$f_lang['login_admin'] = "�����";
$f_lang['pass_admin'] = "������";
$f_lang['verif_pass_admin'] = "�������� ������ ��� ���";
$f_lang['email_admin_setup'] = "��� Email";
$f_lang['installer'] = "���������";
$f_lang['erreur_host'] = "�� ������ ������ ��� ������� ��";
$f_lang['erreur_user'] = "�� ������ ������ ���� ������ ��� ���������� � ��";
$f_lang['erreur_nom_base'] = "�� ������ ������ ��� ��";
$f_lang['erreur_log_admin'] = "�� ������ ������ ��� ����� ��� ����� � ���������������� ������";
$f_lang['erreur_pass_admin'] = "�� ������ ������ ��� ������ ��� ����� � ���������������� ������";
$f_lang['erreur_pass_differents'] = "��������, ��������� ������ ��������.";
$f_lang['erreur_first_connexion'] = "<b>ERROR, ���������� � ����� ������ ����������.</b><br><br>����������, ��������� ��������� ������ ��� ��� : <a href=\"javascript:history.go(-1);\"><b>back</b></a>.";
$f_lang['erreur_install'] = "��������� �� ���������";
$f_lang['ok_install'] = "��������� ������ �������";
$f_lang['text_ok_install'] = "<b>������� ! ��������� ������ �������.</b><br><br>�� �������� ������������ ������������ ����������� ������� ������������ ���� (\"setup.php\"), � ��������� ������ ����� ������ ��������� ��������� ����� �������� �����.<br><br>�� ������ ������ ���������������� ���� �������� �����, ������� <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>here</b></a> or<br> ��� ���������� �� ��� ����������: <a href=\"".$chem_absolu."\" target=\"_blank\"><b>here</b></a>.";

/* administration */
$f_lang['page protect'] = "������ �� �������� ���������";
$f_lang['login'] = "�����";
$f_lang['pass'] = "������";
$f_lang['value identif'] = "�������������";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "���������";
$f_lang['script'] = "����������� �����";
$f_lang['graphismes'] = "���� �������� �����";
$f_lang['messages'] = "���������";
$f_lang['gestion'] = "����������";
$f_lang['censure_mots'] = "����������� �����";
$f_lang['smileys'] = "��������";
$f_lang['utilisateurs'] = "��������������";
$f_lang['ajouter'] = "��������";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "About...";
$f_lang['donner_avis'] = "������� ��� ���� ������";
$f_lang['deconnexion'] = "�����";

 /* options */
 $f_lang['options_livre'] = "��������� �������� �����";
$f_lang['options_generales'] = "����� ���������";
$f_lang['langue'] = "����";
$f_lang['send_mail'] = "�������� �������������� Email � ���������� � ����� ������ � �������� ����� ?";
$f_lang['avert_mail'] = "<br>(<b>����������</b> : ������� mail() �� ����� ������� ���������, ������� ���� ���� �� � �������� \"yes\", �� �� ������ �������� ����������� �� Email )";
$f_lang['oui'] = "��";
$f_lang['non'] = "���";
$f_lang['options_modules'] = "��������� ����� � �������� �����";
$f_lang['admin_champ_email'] = "���������� ����������� � Email";
$f_lang['admin_champ_site'] = "���������� ����������� � URL �� �����";
$f_lang['admin_champ_pays'] = "���������� ����������� � ������ � ������";
$f_lang['admin_champ_note'] = "���������� ������ ��������� ������� � ������ ������ �����";
$f_lang['admin_ok_aff_moteur'] = "���������� ������ ������";
$f_lang['options_tech'] = "����������� ���������";
$f_lang['url_recharger'] = "������ �������� ��� �������� �������� �����";
$f_lang['url_variables'] = "���������� ����������, ���������� ��� ��������� (# ������ $ � ����������)";
$f_lang['temps_session'] = "������������ ������ � �������� ��� ���������������� ������";
$f_lang['skin_to_use'] = "������������ ����";
$f_lang['enregistrer'] = "���������";
$f_lang['nb_pages'] = "���������� ��������� �� ��������";
$f_lang['merci_options'] = "�������, ���������� ���� ���������";
$f_lang['erreur_options'] = "ERROR\\n���������� �� ����� ���� ���������, �������� ��-�� ������������� ������ � ���� \\\"config.".$alex_livre_ext."\\\" . ����������, �������������� ��� � ��������� ��������� ����� �������� ���������.";
$f_lang['temps_ip_post'] = "����� ������� ����� ������������ ������ ������� ��������� ���������";
$f_lang['minutes'] = "�����";
$f_lang['cut_mots'] = "���������� ���� � ����� ������� �����";
$f_lang['format_date'] = "������ ����";

/* skins */
$f_lang['ok_ajouter'] = "�������, ���� ������� ������";
$f_lang['erreur_ajouter'] = "ERROR\\n���� �� ����� ���� ������. �������� ��� �������";
$f_lang['text1_2'] = "��������� ���� ����� �������� � ���������� &quot;templates/skins/&quot;. ���� ��������� ������� ��� ����� �������������� ���. �� ����� �� ������ ��� ������ ��� � �������, ���������� html-�����.";
$f_lang['text2'] = "<b>���� �� ������ �������� ���������� ���������������� ������,</b> ����������, �������������� ������� ����� � ����� &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "�������� ����";
$f_lang['ajouter'] = "��������";
$f_lang['gestion_skins'] = "���������� �������";
$f_lang['vous_editez'] = "������ �� ������������ ���� ���� :";
$f_lang['style'] = "������� ������";
$f_lang['ajouter_message'] = "�������� ������ ���������";
$f_lang['nbre_messages_page'] = "���������� ��������� / pages part";
$f_lang['pages_dispos'] = "���� ��������� ������� / next page - previous page part";
$f_lang['texte_corps_messages'] = "���� ���������";
$f_lang['espacement'] = "��������� ����� ����� �����������";
$f_lang['text_assembly'] = "����, ���������� ���������� �������";
$f_lang['ok_edit_skin'] = "�������, ���� ��� ��������";
$f_lang['erreur_edit_skin'] = "ERROR\\n���� ��� ��������� ������ ����� �� ����� ���� ��������. ����������, �������������� ��� ����� �������.";
$f_lang['ajouter'] = "��������";
$f_lang['supprimer'] = "�������";
$f_lang['text_sup_skin'] = "������� ����";
$f_lang['ok_supprimer'] = "�������, ���� ��� ������� ������.";
$f_lang['erreur_supprimer'] = "ERROR\\n���� ��� ��������� ������ ����� �� ����� ���� ������. �������� ��� �������.";

/* page des mots censur�s */
$f_lang['aj_mot'] = "�������� ����� ����� "; 
$f_lang['mot_interdit'] = "����������� ����� :";
$f_lang['remplacer_par'] = "�������� :";
$f_lang['gestion_censure'] = "���������� ������������ �������";
$f_lang['mot'] = "�����";
$f_lang['remplace_by'] = "��������";
$f_lang['liste_jour'] = "�������� ������";
$f_lang['sup_mots'] = "�������� ��������� �����";
$f_lang['erreur_aj_censure1'] = "����������, ������� ����������� �����";
$f_lang['erreur_aj_censure2'] = "����������, ������� ����� ��� ��� ������";
$f_lang['ok_aj_mot'] = "�������, ����������� ����� ���� ���������.";
$f_lang['verif_sup'] = "�� ������ �������� ������� ��������� ����� ?";
$f_lang['merci_modif'] = "�������, ��������� ���������";

/* bannir des ip */
$f_lang['bannir_ip'] = "����������� IP";
$f_lang['text_ip1'] = "������, ��� ��������� � ��������� ����� ���� ���������� �������������� ����� ID (�.e. 201.10.25.14). ���� ������������� ������������� ����������� �, ������������, �������� ��� ������ ����� � ��������.";
$f_lang['text_ip2'] = "���� �� ������ <b>��������� ���������� ��������� ��������� � �������� �����</b>, �� ������ ����������� ��� IP ����� �����. �� ������ ��� �� ��������� ����� �������� ������� IP, ��������� ������ <b>*</b> (�.e. 201.15.55.*, ���, ����, 158.*.*.*).";
$f_lang['ajouter_ip'] = "�������� ����� ����������� IP";
$f_lang['gestion_ip'] = "���������� �������� IP";
$f_lang['sup_ip'] = "������� ��������� IP";
$f_lang['ok_aj_ip'] = "�������, ���� IP ������ ��������";
$f_lang['verif_sup_ip'] = "�� ������������� ������ ������� ��������� IP ?";

/* smileys */
$f_lang['gestion_smileys'] = "���������� ����������";
$f_lang['text_smileys'] = "<b>�������� ��������� ����������� ���������� �� ����������</b>. � ������� ����� ���������� �� ������� ����� ������ �� ����� :o)<br><br>�������� ��������� �� ���� �������� ��������� � ����� \"images/smileys\".";
$f_lang['ajouter_smiley'] = "�������� �������";
$f_lang['image_smiley'] = "��������";
$f_lang['car_replace'] = "���������� ���";
$f_lang['gestion_smileys'] = "���������� ����������";
$f_lang['sup_smileys'] = "������� ��������� ��������";
$f_lang['erreur_image'] = "����������, �������� �������";
$f_lang['erreur_car'] = "����������, �������� ���������� ��� ��� ���������� ��������";
$f_lang['ok_aj_smiley'] = "�������, ������� ��� ������� ��������";
$f_lang['no_smiley'] = "������ ������ ���� GIF ��� JPEG �����������";
$f_lang['copy_impossible'] = "ERROR\\n���������� ����������� � ����� \\\"images/smileys\\\". ���������� �������� ����� �������.";
$f_lang['car_replace_exist'] = "ERROR\\n����� ���������� ��� ��� ���������� � ���� ������.";
$f_lang['modif_smileys'] = "�������� ��� ��������";
$f_lang['verif_sup_smileys'] = "������������� ������� ��������� �������� ?";
$f_lang['merci_modif_smileys'] = "�������, �������� ��������.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "�������� �������������� �������� �����";
	$f_lang['add_admin_2'] = "�������� ��������������";
	$f_lang['ajouter_admin'] = "�������� ��������������";
	$f_lang['name_ajouter_admin'] = "��������";
}
else{
	$f_lang['add_admin_texte'] = "�������� �������������� �������� �����";
	$f_lang['add_admin_2'] = "�������� ��������������";
	$f_lang['ajouter_admin'] = "���������";
	$f_lang['name_ajouter_admin'] = "��������";
}

$f_lang['identif_connexion'] = "�����";
$f_lang['passe_admin'] = "������";
$f_lang['email_admin'] = "Email (������ �����, ����� ������������� ������� �������� ����������� �� Email � ������������� ������)";
$f_lang['admin_receive_email'] = "�� ������, ����� ������������� ������� �������� ����������� � ����� ������ � �������� ����� ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;��� ��������� �������� ������� ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;�������� ���������� ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;��������� ����������� ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;��������� ������������ ������� ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;�������� ���������� ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;��������� ������� ���������������� ?";
$f_lang['erreur_name'] = "����������, ������� �����";
$f_lang['erreur_passe'] = "����������, ������� ������";
$f_lang['erreur_email'] = "����������, ������� Email";
$f_lang['ok_aj_admin'] = "�������, ����� ������������ ��� ������� ��������";
$f_lang['ok_modif_admin'] = "�������, ������ ���������";
$f_lang['erreur_aj_admin'] = "ERROR\\n����� ������������ ��� ����������";
$f_lang['revenir'] = "��������� �� ���������� ��������";

/* gestion des admins */
$f_lang['gest_admin'] = "���������� ����������������";
$f_lang['sup_admin'] = "�������";
$f_lang['login_admin'] = "�����";
$f_lang['email_admin'] = "Email";
$f_lang['modif_admin'] = "��������";
$f_lang['value_sup_admin'] = "������� ��������� ���������������";
$f_lang['verif_sup_admin'] = "������������� ����� ������� ��������� ��������������� ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "�������� ����������";
$f_lang['erreur_auth'] = "�������� �� ���������";
$f_lang['erreur_droits'] = "�� �� ������ ���� ������� �� ��� ��������.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "������� ������� ����� �� ������ ����������� :";
$f_lang['title_guestbook'] = "��� �������� �����";
$f_lang['note_super'] = " : ���������� !";
$f_lang['note_moyen'] = " : ������";
$f_lang['note_rate'] = " : ������";
$f_lang['nom_pseudo_visiteur'] = "��� ��� ��� :";
$f_lang['email_visiteur'] = "Email :";
$f_lang['site_web_visiteur'] = "URL �����:";
$f_lang['ville_pays_visiteur'] = "����� / ������ :";
$f_lang['note_visiteur'] = "��� �� �������� ��� ���� ?";
$f_lang['message_visiteur'] = "���� ��������� :";
$f_lang['ajouter_message_visiteur'] = "�������� ��� ���������";
$f_lang['erreur_add_nom'] = "����������, ������� ���";
$f_lang['erreur_add_message'] = "����������, �������� ���������";
$f_lang['erreur_mail'] = "������ Email �� ������ !";
$f_lang['messages'] = "���������";
$f_lang['messages_a'] = "��";
$f_lang['page'] = "��������";
$f_lang['nbre_messages'] = "���������� ���������";
$f_lang['message_le'] = "on";
$f_lang['message_note'] = "�������";
$f_lang['send_mail_to'] = "������� Email";
$f_lang['go_home'] = "�������� ����";
$f_lang['precedente'] = "&lt;&lt; ����������";
$f_lang['suivante'] = "��������� &gt;&gt;";
$f_lang['no_message'] = "��������� ���.";
$f_lang['no_ip'] = "��������\\n��� IP ��� �������, ������ � ��� �������� ����� ��� ��������.";
$f_lang['ok_post'] = "������� !  ���� ��������� ������� ���������.";
$f_lang['time_erreur'] = "��������\\n���� ��������� �� ����� ���� �������. �������� ����������� �� ������� �������.";
$f_lang['text_select_search'] = "���������� ������ ���������, ���������� ��������� �����";
$f_lang['text_ok_search'] = "Ok";

/* mail envoy� */
$f_lang['mail_object'] = "[info] - ����� ��������� � ����� �������� ����� - ";
$f_lang['mail_message'] = "������,\n\n����� ��������� ��������� � ���� �������� ����� ";

/* gestion des messages */
$f_lang['gestion_mess'] = "���������� �����������";
$f_lang['selectionner_pages'] = "�������";
$f_lang['messages_gest'] = "���������";
$f_lang['page_gest'] = "��������";
$f_lang['aller_en_page'] = "�� ��������";
$f_lang['supprimer_gest'] = "�������";
$f_lang['auteur_gest'] = "�����";
$f_lang['modifier_gest'] = "�������";
$f_lang['supprimer_mess_selected'] = "������� ���������� ���������";
$f_lang['verif_sup_mess'] = "������������� ����� ������� ?";

/* modifier un message */
$f_lang['modif_mess'] = "������� ���������";
$f_lang['message_modif'] = "���������";
$f_lang['nom_modif'] = "���";
$f_lang['email_modif'] = "Email";
$f_lang['site_web_modif'] = "URL ���-�����";
$f_lang['note_modif'] = "������� �������";
$f_lang['ville_pays_modif'] = "����� / ������";
$f_lang['date_modif'] = "���� ����������";
$f_lang['ip_modif'] = "IP �����";
$f_lang['ok_modif_mess'] = "�������, ��������� ���������";

/* titre des pages */
$f_lang['title identification'] = "�������������";
$f_lang['title administration'] = "�����������������";
$f_lang['title frame gauche'] = "����� �����";
$f_lang['title options'] = "���������";
$f_lang['title skins'] = "����";
$f_lang['title censure'] = "����������� �����";
$f_lang['title censure'] = "���������� ���������� IP";
$f_lang['title smileys'] = "���������� ����������";
$f_lang['title add admin'] = "�������� ��������������";
$f_lang['title gest admin'] = "���������� ���������������� �������� �����";
$f_lang['title erreur'] = "������";
$f_lang['title gestion mess'] = "���������� �����������";
$f_lang['title modif mess'] = "������������� ���������";
$f_lang['title setup'] = "���������";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "���������� ����������� � ����� ������";
$f_lang['erreur_connexion'] = "�� ����� �������� ������";
$f_lang['manque login'] = "����������, �������� ���� �����";
$f_lang['manque pass'] = "����������, �������� ���� ������";
$f_lang['end session'] = "��� ����� ��������";

/* add version 3.11 */
$f_lang['addSignature'] = "�������� ���������";
$f_lang['seeMessages'] = "��������� ��������� ���������";
$f_lang['addMessageBlocAdd'] = "�������� ��������� � �������� �����";

/* add version 3.2 */
$f_lang['version'] = "������";
$f_lang['new_version_dispo'] = "�������� ����������";
$f_lang['version_courrante'] = "������� ������";
$f_lang['info_version'] = "���������� �� ������������� � ��� ������";
$f_lang['version_txt_ok'] = "������������� � ��� ������ ".$alex_livre_version.",<br>��� ������ ���������, ���������� �� ���������.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "������������� � ��� ������ ".$alex_livre_version.", <b>�������� ����� �����</b>";
$f_lang['version_down'] = "��������� ����������";
$f_lang['help_update'] = "������ �� ����������";
$f_lang['spam'] = "���������� ���������� ��� ������ ��������. ��������, ��� ��������� �������� �������� �����. ���� ��� �� ���, ���������� ��������������� ������ ��������� (MsIe, ��������).";
$f_lang['avis_spammeurs'] = "������� ��� ��������-���������";
$f_lang['txt_spammeurs'] = "<b>��� �������� ����� �������� �� �����</b>, Email � URL �� �������� ������������ ����� �������, ��� ��� ��������� ����� ��� ���������� ������������ (����� ����, ���� ���� ��� ����� ����� ������...)";
$f_lang['fermer'] = "������� ����";
$f_lang['valider_messages'] = "�� ������ ��������� ���������� ��������� ����� �� ����������� � �������� �����?";
$f_lang['valide'] = "���������?";
$f_lang['mess_valide'] = "��������� ���������";
$f_lang['mess_invalide'] = "��� ��������� ������� ��������";
$f_lang['info_mess_valide'] = "��������� ���������?";
$f_lang['ok_post_valid'] = "�������! ���� ���������� ������� ���������, ��� ����� ������������ ����� ��������� ��������������.";
$f_lang['see_skin'] = "��������������� �������� ���������� �����";
$f_lang['maxi_car'] = "������������ ���������� ������ � ��������� (0 = ��� �����������)";
$f_lang['il_reste'] = "�� ������ ���������� ��";
$f_lang['caracteres'] = "������ ������ � ����� ���������";
$f_lang['sup_copyright'] = "��� ������ copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Name of the security codes table";
$f_lang['add_code_securite'] = "��������� ����������� ������� �������� ��� ����� ��������� ���������?";
$f_lang['t_chem_dossier_fonts'] = "������ URL-����� ���������� �������";
$f_lang['t_color_txt_code'] = "Hexadecimal-��� ����� ������";
$f_lang['t_color_background_code'] = "Hexadecimal-��� ����";
$f_lang['veuillez_taper_code'] = "����������, ���������� �������� ��� � ������ ������";
$f_lang['a_quoi_ca_sert'] = "����� ���?";
$f_lang['why_code'] = "������ \"�������� ���\" ?";
$f_lang['txt_why_code'] = "��� ��������� ��������� ��� ���������, ��� ��������� ���������� �������� ���������, � �� ����-����������.<br><br><b>������������ � ������ ������������� ���� � ���� �������� ����� ��������!</b>";
$f_lang['erreur_code_securite'] = "���������� ������� �������� ���";
$f_lang['erreur_saisie_code_securite'] = "�������� ���, ������� �� ����� ����������, ����������, ���������";

/* add version 4.0 */
$f_lang['reponse_auto'] = "�������������� �����";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;������������� �������������� ������?";
$f_lang['text_reponse_auto'] = "<b>����� �� ������ �������� ����� �������������� �������,</b> ������� ����� ���������� �����������, ���������� ��������� � ����� �������� �����. ������������, ���� �� �������������� ��� ������� � ���������� �������.<br><br>��� ������� ����� ����� �������� ���� �����, � ��� [PSEUDO] ����� ������� �� ��� ����������, ������� ������� ���������.";
$f_lang['name_table_rep_auto'] = "��� ������� MySQL, ��� ����� ����������� ������������� ���������� ������";
$f_lang['gestion_reponses'] = "���������� �����������";
$f_lang['msg_remerciement'] = "������� �� ���������";
$f_lang['txt_remerciement'] = "������ [PSEUDO],\n\n�������, ��� �������� ��������� � ����� �������� �����!";
$f_lang['ok_save_msg_rem'] = "�������, ������������� ���������� �����-������������� ��������.";
$f_lang['envoyer_remerciement'] = "�� ������, ����� ������������� ���������� ������������� �� ���������?";
$f_lang['remerciement'] = "����������";
$f_lang['titre_guestbook'] = "���������";
$f_lang['text_titre_guestbook'] = "<b>�� ������ �������� ��������� �������� �����</b> � �������� ��������� ��������� ��� ���� ��������� ������.";
$f_lang['titre'] = "���������";
$f_lang['parametrage'] = "���������";
$f_lang['ok_save_titre'] = "�������, ��������� ��������.";
$f_lang['ville_visiteur'] = "����� :";
$f_lang['pays_visiteur'] = "������ :";
$f_lang['flag'] = "����";
$f_lang['ville_modif'] = "�����";
$f_lang['pays_modif'] = "������";
$f_lang['action'] = "��������";
$f_lang['repondre'] = "�����";
$f_lang['votre_reponse'] = "��� �����";
$f_lang['ok_reponse_mess'] = "�������, ��� ����� ��������";
$f_lang['defaut_titre_rep'] = "����� ��������������";
$f_lang['annuler'] = "������";
$f_lang['num_appari'] = "�������� ����������";
$f_lang['nb_max_smileys'] = "�������� ��� ��������, ������� ����";
$f_lang['plus_smileys'] = "�������� ������ ���������";
$f_lang['liste_all_smilies'] = "������ ���������";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>��� ������� �������� ��� ���������� ��������� ���������, ����������� � �������� �����</b> �� ������ �������� �� ������ ������.";
$f_lang['parametrage_modele'] = "��������� ��������";
$f_lang['ok_save_boite'] = "�������, ���� ��������� ���������";
$f_lang['format_date_boite'] = "������ ���� (��� � ������� PHP <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a>)";
$f_lang['nbre_maxi_pseudo_boite'] = "������������ ���������� ������, ������������ ��� �����";
$f_lang['nbre_maxi_message_boite'] = "������������ ���������� ������, ������������ ��� ���������";
$f_lang['modele_affichage_donnees'] = "������ ��� �������";
$f_lang['url_dossier_livre_boite'] = "������ URL ����� ����� �������� �����";
$f_lang['url_livre_boite'] = "������ URL ������ �������� �������� �����";
$f_lang['generation_code'] = "������� Javascript-���";
$f_lang['nom_msg_afficher'] = "���������� ������������ ��������� �� ��������";
$f_lang['generer_code'] = "�������� Javascript call code";
$f_lang['code_a_copier'] = "HTML-���, ������� ���� �������� �� ���� ��������";
$f_lang['erreur_boite_java'] = "����������, ������� ���������� ���������� ������������ ���������";
$f_lang['erreur_par_boite'] = "������ � ����������: ���������� ���������� �����������-����������� ���� [BOUCLE] ... [/BOUCLE] � �������.";
$f_lang['saut_ligne_msg_boite'] = "��������� ������ ��������� �� ���������";
$f_lang['message_a'] = "��";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;��������� ����� ������ ?";
$f_lang['bdd'] = "���� ������";
$f_lang['optimisation'] = "�����������";
$f_lang['sauvegarde'] = "����������";
$f_lang['restauration'] = "��������������";
$f_lang['optimisation_txt'] = "<b>�� ����� ������ � ��������, ������� ����� ��� ������ ����������� ���������������� ������ �����.</b> ��� ������������ ����������� �� ����� ������������������ �, �������������, ���-����� � �����. ��� �������� ������� ��� ������ �������� � ������������ ������.";
$f_lang['liste_tables'] = "������ ������ ����� ���� ������";
$f_lang['lancer_optimisation'] = "������ �����������";
$f_lang['tables'] = "�������";
$f_lang['pertes'] = "������";
$f_lang['octets'] = "����";
$f_lang['ok_optimise'] = "�������, ������� � �������� ��������������";
$f_lang['txt_sauvegarde'] = "<b>���� ������, ����� ������ ����������� ����� � ������ �� ��������, ������� ��������� ��������� ����������� ����� ������.</b> �������� ������ ����� �������� � ������ ������ ������. �ackup ����� ���� ������� � ��� �������� �������� ����� �� ������ ������... �� ��� ��� �����������? ��� �����, ��� backup - ��� ������!";
$f_lang['lancer_sauvegarde'] = "������ ���������� ����";
$f_lang['lancer_restauration'] = "������ ��������������";
$f_lang['txt_restauration'] = "<b>���� �� ����� ������ ��������� �����������, �� ������ ��������� ������������ ���� ���� ������ �������� �����.</b> ������ �������� ���� � ������������ ������� �� ������� ����� - � ���!.<br><br><b><u>��������</u></b>, ���� ���� ���� ������� ������� (��������� ��������), ������� �������������� ����� ���� ���������� ��-�� ��������� �� ������� ������ ���������� (set_time_limit() � ������������ ������ ����������� ������).";
$f_lang['select_file'] = "������� ���� � ������� ���������� ����������� (backup) �� ����� ������� ����� ��� �� ������� (.ZIP or .SQL)";
$f_lang['confirm_restauration'] = "�� �������������, ��� ������ ������ ������� �������������� ������ �, ����� �������, ������� ��� ������� ������?";
$f_lang['select_file_restau'] = "����������, �������� ���� �� ������� �����";
$f_lang['erreur_ext_restau'] = "���������� ���������� ����� �� .ZIP ou .SQL, �������������� ����������.";
$f_lang['conseil_zip'] = "(��������� ZIP-���� �� ������� �����, ����� �������� SQL-����)";
$f_lang['erreur_ext_zip'] = "������ PHP_ZIP �� ������� ������ ���������� �� ���������, ������� �������������� �� ZIP-����� ����������. ����������, ������� .SQL-���� �� ����� ������� �����".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "������ ������ ZIP-������, �������������� ����������. �� ������ ���������� ������������ ������ �� .SQL-����� ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "��������� SQL-����, ������, ����... ��� ������, �� �� @lex Guestbook-script ���� (��� ������� ������).  �� ���� ��������� ��������������.";
$f_lang['restauration_terminee'] = "�������! �������������� ������ ���� ������ �������!";

							/* V5 */
$f_lang['name_table_ban'] = "Name of the banished IP, nicknames and E-mails table";
$f_lang['ok_validation'] = "Thanks, the validation has been performed";
$f_lang['selectionner_tous_messages'] = "Check/uncheck all";
$f_lang['admin_send_mail'] = "Do you wish the admins to receive an E-mail when a new message is posted ?";

//ajout bannissement
$f_lang['bannissement'] = "Banishment";
$f_lang['admin_gestion_bannissement'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;manage the banishment ?";
$f_lang['interdit_de_message'] = "Your message hasn't been saved. To see the reason of this refusal (forbidden word, required field not filled in...) Javascript must be activated in your Internet navigator. You may want to try to modify your message.";
$f_lang['valider_mess'] = "Apply the above validation choices";
$f_lang['erreur_ip'] = "IP address is not valid";
$f_lang['erreur_ip1'] = "Please enter part 1 of the ip with a number between 0 and 255 or a *";
$f_lang['erreur_ip2'] = "Please enter part 2 of the ip with a number between 0 and 255 or a *";
$f_lang['erreur_ip3'] = "Please enter part 3 of the ip with a number between 0 and 255 or a *";
$f_lang['erreur_ip4'] = "Please enter part 4 of the ip with a number between 0 and 255 or a *";
$f_lang['explication_bannir_mot'] = "You have two options to ban words in the messages. Either you censor them (these words will be replaced by the text or symbols you choose), or the message is refused.";
$f_lang['bannir_mot'] = "Would you like the messages containing words you have censored (see \"Censoring words\" in the menu) to be refused ?<br/>If you check \"no\", these words will just be replaced by the text or symbols you have chosen.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Banishing (nick)names";
$f_lang['admin_text_pseudo'] = "If you wish a user <b>not to be able to post a message on your guestbook</b>, you can enter his/her name/nickname here. You can also use the wildcard *, which will take any letter or number into account.";
$f_lang['ajouter_pseudo'] = "Add a new banished (nick)name";
$f_lang['gestion_pseudo'] = "Nicknames management";
$f_lang['sup_pseudo'] = "Delete the selected nicknames";
$f_lang['erreur_pseudo'] = "Please enter the nickname to add";
$f_lang['ok_aj_pseudo'] = "Thanks, the nickname is  banished from now on";
$f_lang['verif_sup_pseudo'] = "Do you really wish to delete all the selected nicknames ?";

/* bannir des emails */
$f_lang['bannir_emails'] = "Banishing E-mail addresses";
$f_lang['admin_text_email'] = "If you wish a user <b>not to be able to post a message on your guestbook</b>, you can enter his/her E-mail address here. You can also use the wildcard *, i.e. to banish a whole domain name, like this : *@spamdomain.com.";
$f_lang['ajouter_email'] = "Add a new banished E-mail address";
$f_lang['gestion_email'] = "E-mail addresses management";
$f_lang['sup_email'] = "Delete the selected E-mail addresses";
$f_lang['erreur_email'] = "Please enter the E-mail address to add";
$f_lang['ok_aj_email'] = "Thanks, the E-mail address is  banished from now on";
$f_lang['verif_sup_email'] = "Do you really wish to delete all the selected E-mail addresses ?";

$f_lang['no_pseudo'] = "ATTENTION\\nYour (nick)name has been banished, you are not allowed to post a message on this guestbook.";
$f_lang['no_email'] = "ATTENTION\\nYour E-mail address has been banished, you are not allowed to post a message on this guestbook.";
$f_lang['no_ville'] = "ATTENTION\\nThe city you entered isn't correct, you are not allowed to post a message on this guestbook.";
$f_lang['no_mot'] = "ATTENTION\\nYou have entered a censored word, you are not allowed to post this message on the guestbook.\\nPlease edit your message !";

// interdiction des URL
$f_lang['url_interdite'] = "ATTENTION\\nURL are forbidden in messages";
$f_lang['url_interdites'] = "Would you like the messages containing URL to be refused ?";
$f_lang['url_cliquables'] = "Would you like the URL in the messages to be clickable (active) ?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "Name of the config parameters table";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "You can adjust the time difference between the server and your country's time. Leave 0 if you do not need to adjust the time.";
$f_lang['heures'] = "hours";
$f_lang['secondes'] = "seconds";
$f_lang['admin_erreur_decalage_horaire'] = "You must enter a time difference value between -12 and +12";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "You may not delete the last administrator";

// d�sactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Would you like to allow the smileys ?";

// pour emp�cher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "ATTENTION\\nThe session validity value you entered is too short !\\nYou must enter a value above 300 seconds";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "Do you wish to include the guestbook into a PHP file ?";
$f_lang['admin_inclure_livre_code'] = "Here is the PHP code that you will need to insert into your PHP file between the &lt;?php and ?&gt; tags.\n\nYou'll also need to change the \$chem_absolu array in the /index.php file of the guestbook and to add the stylesheet in the calling page (check the FAQ for further explanation)";
$f_lang['admin_fichier_inclusion'] = "Enter here the absolute path to the file in which you want to include the guestbook (this way : /folder1/folder2/file_where_the_include_takes_place.php). You must click on the \"Save\" button in order to see the entered path taken into account in the code";
$f_lang['admin_fichier_inclusion_erreur'] = "ATTENTION\\nYou haven't entered a valid path to the include file\\nThe path must be entered i.e. as /folder1/folder2/file_where_the_include_takes_place.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "Do not propose";
$f_lang['admin_champ_obligatoire'] = "Mandatory";
$f_lang['admin_champ_prive'] = "Private";
$f_lang['admin_champ_pseudo'] = "Visitors can enter their (nick)name";
$f_lang['admin_champ_ville'] = "Visitors can enter their city";
$f_lang['admin_donner_focus'] = "Would you like the 'Nickname' field to be selected (to have the focus) when the page is loaded ?";
$f_lang['champ_obligatoire_vide'] = "At least one required field (identified by a *) is empty. Please fill it in.";
$f_lang['erreur_add_nom'] = "Please enter your name";
$f_lang['erreur_add_email'] = "Please enter your E-mail address";
$f_lang['erreur_add_site'] = "Please enter your website address";
$f_lang['erreur_add_ville'] = "Please enter your city";
$f_lang['erreur_add_pays'] = "Please select your country";
$f_lang['erreur_add_note'] = "Please select a score";
$f_lang['erreur_add_message'] = "Please enter your message";
$f_lang['erreur_url'] = "The address of your website doesn't seem to be valid";

// code de s�curit� : v�rification de la pr�sence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">You cannot use the security code option !<br/>\n Your server does not include the GD2 library and/or the options necessary for the security code to work</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Would you like to post a link to the administration part at the bottom of the guestbook ?";
$f_lang['admin_lien_accueil'] = "Would you like to post a link back to your website homepage or to another one&nbsp;?";
$f_lang['admin_chemin_lien_accueil'] = "If you leave this field empty, the link will lead to this site homepage. You could alternatively enter the absolute path to the page of your choice (i.e. /folder1/page1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "The path you entered isn't valid. Please use an absolute path (i.e. /mypage.php).";
$f_lang['texte_lien_accueil'] = "Back to the homepage";
$f_lang['texte_lien_admin'] = "Guestbook administration";

$f_lang['admin_retour_livre'] = "See the guestbook";

// symboles champs priv�s/obligatoires sur le formulaire
// /!\ Attention, maximum 90 caract�res
$f_lang['information_champ_prive'] = "This field content will be viewable by the guestbook administrator only.";
$f_lang['information_champ_obligatoire'] = "This field is required to post a message.";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Server (usually : localhost)";

$f_lang['name_table_txt_lang'] = "Name of the table containing the customized texts (i.e. guestbook title)";

$f_lang['erreur_host'] = "Please enter the database server";

$f_lang['erreur_ecriture'] = "<b>ERROR</b>, unable to write in the \"config/\" folder.<br><br>Please modify the Unix rights of the \"config\" folder (chmod 777), then try again the installation : <a href=\"./setup.php\"><b>back</b></a>.";

$f_lang['options_livre'] = "Guestbook options";

$f_lang['text1'] = "<b>Censored words will be automatically replaced</b> in the messages posted by the visitors. You can i.e. replace all \"bad words\" by a text like \"**censored word**\".<br/>If you have chosen to refuse messages containing \"censored words\", <u>you still need to enter a replacement text</u>. This measure allows you to switch mode (word replacement or message refusal).";

/* Erreur si fichier install present */
$f_lang['erreur_fic_install_present'] = "For security reasons, to use your guestbook you have to delete file setup.php and folder update/";
?>