<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2011    //
//         Hercelin Maxime (c) 2005 - 2011   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//   English translation by Pierre Gieling   //
//          http://www.chez-pierre.net/      //
///////////////////////////////////////////////

/* Kodning */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "se";

/* setup */
$f_lang['install_auto'] = "Automatisk installation";
$f_lang['identi_base'] = "Database ID";
$f_lang['type_base'] = "Database type";
$f_lang['user_base'] = "Anv�ndare";
$f_lang['pass_base'] = "L�senord";
$f_lang['nom_base'] = "Databasens namn";
$f_lang['nom_table'] = "Tabellnamn";
$f_lang['name_table_sessions'] = "Name p� sessionslista";
$f_lang['name_table_users'] = "Namn p� anv�ndarlista";
$f_lang['name_table_messages'] = "Namn p� meddelandelista";
$f_lang['name_table_censure'] = "Namn p� lista �ver f�rbjuda ord";
$f_lang['name_table_ip'] = "Namn p� lista �ver bannade IP's";
$f_lang['name_table_smileys'] = "Namn p� lista �ver smileys";
$f_lang['extension_script'] = "Filtyp p� script";
$f_lang['choose_extension'] = "V�lj en filtyp f�r scriptet<br>(vi rekommenderar \"php\", annars m�ste du d�pa om alla filer f�r den valda filtypen)";
$f_lang['identi_acces_admin'] = "Ditt anv�ndarnamn f�r att logga in p� kontrollpanelen";
$f_lang['login_admin'] = "Anv�ndare";
$f_lang['pass_admin'] = "L�senord";
$f_lang['verif_pass_admin'] = "Ange l�senord igen";
$f_lang['installer'] = "Installera";
$f_lang['erreur_host'] = "Du gl�mde ange din databas v�rdserver";
$f_lang['erreur_user'] = "Du gl�mde ange ditt anv�ndarnamn f�r att ansluta till databasen";
$f_lang['erreur_nom_base'] = "Du gl�mde ange namnet p� din databas";
$f_lang['erreur_log_admin'] = "Du gl�mde ange ditt anv�ndarnamn f�r att logga in p� kontrollpanelen";
$f_lang['erreur_pass_admin'] = "Du gl�mde ange ditt l�senord f�r att logga in p� kontrollpanelen";
$f_lang['erreur_pass_differents'] = "FEL, l�senorden st�mmer inte �verens.";
$f_lang['erreur_first_connexion'] = "<b>FEL, det gick inte uppr�tta anslutning till databasen.</b><br><br>v�nligen kontrollera dina anv�ndaruppgifter : <a href=\"javascript:history.go(-1);\"><b>tillbaks</b></a>.";
$f_lang['erreur_install'] = "Installationen misslyckades";
$f_lang['ok_install'] = "Installationen lyckades";
$f_lang['text_ok_install'] = "<b>Tack ! Installationen lyckades.</b><br><br>Av s�kerhetssk�l b�r du nu radera eller d�pa om installationfilen du nyss anv�nde (\"setup.php\"), om inte kan andra personer anv�nda filen f�r att f�rst�ra dina konfigurationsfiler.<br><br>Du kan nu administrera din g�stbok genom att klicka <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>h�r</b></a> eller<br> visa g�stboken som bes�kare ser den <a href=\"".$chem_absolu."\" target=\"_blank\"><b>h�r</b></a>.";

/* administration */
$f_lang['page protect'] = "Inloggning till kontrollpanel";
$f_lang['login'] = "Anv�ndare";
$f_lang['pass'] = "L�senord";
$f_lang['value identif'] = "Logga in";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* meny */
$f_lang['options'] = "Alternativ";
$f_lang['script'] = "Script";
$f_lang['graphismes'] = "G�stboksteman";
$f_lang['messages'] = "Meddelanden";
$f_lang['gestion'] = "Hantering";
$f_lang['censure_mots'] = "Censurerade ord";
$f_lang['bannir_ip'] = "Bannade IP's";
$f_lang['smileys'] = "Uttryckssymboler";
$f_lang['utilisateurs'] = "Administrat�rer";
$f_lang['ajouter'] = "L�gg till";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "Om...";
$f_lang['donner_avis'] = "Ge oss din �sikt";
$f_lang['deconnexion'] = "Logga ut";

 /* Alternativ */
 $f_lang['options_livre'] = "G�stboksalternativ";
$f_lang['options_generales'] = "Allm�nna alternativ";
$f_lang['langue'] = "Spr�k";
$f_lang['send_mail'] = "Skall administrat�rerna informeras via e-post n�r ett nytt inl�gg skrivs ?";
$f_lang['avert_mail'] = "<br>(<b>info.</b> : funktionen mail() �r inaktiverad hos din v�rd, s� �ven om du markerar \"Ja\" kommer du inte informeras via E-post)";
$f_lang['oui'] = "Ja";
$f_lang['non'] = "Nej";
$f_lang['options_modules'] = "Alternativ f�r f�lt";
$f_lang['admin_champ_email'] = "Bes�kare ombeds ange sin e-postadress";
$f_lang['admin_champ_site'] = "Bes�kare ombeds ange URL till sin hemsida";
$f_lang['admin_champ_pays'] = "Bes�kare ombeds ange sin stad och hemland";
$f_lang['admin_champ_note'] = "Bes�kare kan utv�rdera din sida genom po�ng 1-10";
$f_lang['admin_ok_aff_moteur'] = "Visa s�kmotorn";
$f_lang['options_tech'] = "Tekniska alternativ";
$f_lang['url_recharger'] = "Sida att ladda om f�r g�stboken";
$f_lang['url_variables'] = "Variabla instruktioner s�nds som parametrar (skriv # ist�llet f�r $ i en variabel)";
$f_lang['temps_session'] = "Tid i sekunder innan sessionen f�r kontrollpanelen g�r timeout";
$f_lang['skin_to_use'] = "Tema som anv�nds";
$f_lang['enregistrer'] = "Spara";
$f_lang['nb_pages'] = "Antal meddelanden som visas per sida i g�stboken";
$f_lang['merci_options'] = "Tack, informationen har uppdaterats";
$f_lang['erreur_options'] = "FEL\\nInformationen kunde inte lagras, det gick inte skriva till filen \\\"config.".$alex_livre_ext."\\\" , �ndra den h�r filen med en texteditor f�r att justera dina inst�llningar.";
$f_lang['temps_ip_post'] = "Antal minuter som m�ste passera innan en bes�kare kan g�ra ett nytt inl�gg";
$f_lang['minutes'] = "minuter";
$f_lang['cut_mots'] = "Antal tecken i ett ord innan det radbryts";
$f_lang['format_date'] = "Datumformat";

/* Teman */
$f_lang['ok_ajouter'] = "Tack, temat har skapats utan problem";
$f_lang['erreur_ajouter'] = "FEL\\nTemat kunde inte skapas, v�nligen skapa det manuellt";
$f_lang['text1_2'] = "F�ljande teman kommer sparas i katalogen &quot;templates/skins/&quot;. Du kan enkelt modifiera dem h�r eller genom att �ndra direkt i .html-filerna.";
$f_lang['text2'] = "<b>Om du vill �ndra mallarna f�r kontrollpanelen</b> m�ste du manuellt �ndra filerna i katalogen &quot;templates/admin/&quot; .";
$f_lang['text_aj_skin'] = "L�gg till ett tema";
$f_lang['ajouter'] = "L�gg till";
$f_lang['gestion_skins'] = "Temahantering";
$f_lang['vous_editez'] = "Du kan nu redigera detta tema :";
$f_lang['style'] = "stylesheet";
$f_lang['ajouter_message'] = "l�gg till en del till inl�gg";
$f_lang['nbre_messages_page'] = "antal inl�gg / siddelar";
$f_lang['pages_dispos'] = "lista �ver tillg�ngliga sidor / n�sta sida - f�reg�ende siddel";
$f_lang['texte_corps_messages'] = "inl�ggs body";
$f_lang['espacement'] = "avst�nd mellan tv� inl�gg";
$f_lang['text_assembly'] = "konstruera filen fr�n de f�reg�ende delarna";
$f_lang['ok_edit_skin'] = "Tack, temat har uppdaterats";
$f_lang['erreur_edit_skin'] = "FEL\\nEn eller flera av temats filer kunde inte uppdateras. V�nligen redigera dessa filer manuellt.";
$f_lang['ajouter'] = "L�gg till";
$f_lang['supprimer'] = "Radera";
$f_lang['text_sup_skin'] = "Radera tema";
$f_lang['ok_supprimer'] = "Tack, temat har raderats.";
$f_lang['erreur_supprimer'] = "FEL\\nEn eller flera av temats filer kunde inte raderas, du m�ste radera dem manuellt.";

/* Censur */
$f_lang['aj_mot'] = "L�gg till nytt ord "; 
$f_lang['mot_interdit'] = "F�rbjudet ord :";
$f_lang['remplacer_par'] = "Ers�tt med :";
$f_lang['gestion_censure'] = "Hantering av f�rbjudna ord";
$f_lang['mot'] = "ord";
$f_lang['remplace_by'] = "ersatt med";
$f_lang['liste_jour'] = "Uppdatera listan";
$f_lang['sup_mots'] = "Radera valda ord";
$f_lang['erreur_aj_censure1'] = "V�nligen ange ett ord att censurera";
$f_lang['erreur_aj_censure2'] = "V�nligen ange ett ord att ers�tta de censurerade orden med";
$f_lang['ok_aj_mot'] = "Tack, det censurerade ordet har lagts till.";
$f_lang['verif_sup'] = "Vill du permanent radera de valda orden ?";
$f_lang['merci_modif'] = "Tack, �ndringarna har sparats";

/* Sp�rra ip */
$f_lang['bannir_ip'] = "Sp�rra IP's";
$f_lang['text_ip1'] = "Alla som surfar p� internet har ett specifikt ID best�ende av siffror i 4 grupper (t.ex. 201.10.25.14) och kallas f�r IP-adress. Denna IP-adress utdelas av internetleverant�ren/ISP och �r ofta dynamisk, dvs. �ndras i princip varenda g�ng en anv�ndare ansluter till internet.";
$f_lang['text_ip2'] = "Om du vill <b>f�rhindra en anv�ndare att skriva inl�gg i din g�stbok</b>, kan du kopiera hans/hennes IP-adress hit f�r att sp�rra denna. Du kan ocks� sp�rra ett intervall genom att anv�nda wildcard/asterisk * (t.ex. 201.15.55.*, eller rentav 158.*.*.*).";
$f_lang['ajouter_ip'] = "L�gg till IP att sp�rra";
$f_lang['gestion_ip'] = "Hantera IP's";
$f_lang['sup_ip'] = "Radera valda sp�rrade IP'n";
$f_lang['ok_aj_ip'] = "Tack, detta IP �r tillagt p� listan �ver f�rbjudna IP";
$f_lang['verif_sup_ip'] = "S�kert att du vill radera valda IP's ?";

/* Uttryckssymboler */
$f_lang['gestion_smileys'] = "Hantering av uttryckssymboler";
$f_lang['text_smileys'] = "<b>Uttryckssymboler m�jligg�r f�r bes�karen att uttrycka sig</b> n�r han/hon skriver ett inl�gg. Fr�n denna sida kan du enkelt l�gga till eller ta bort symboler s� att dina bes�kare har ett brett urval :o)<br><br>Uttryckssymboler som finns tillg�ngliga p� denna sida �r lagrade i katalogen \"images/smileys\" .";
$f_lang['ajouter_smiley'] = "L�gg till en uttryckssymbol";
$f_lang['image_smiley'] = "Bild";
$f_lang['car_replace'] = "Tillh�rande kod";
$f_lang['gestion_smileys'] = "Hantering av uttryckssymboler";
$f_lang['sup_smileys'] = "Radera vald(a) uttryckssymbol(er)";
$f_lang['erreur_image'] = "V�nligen v�lj en uttryckssymbol";
$f_lang['erreur_car'] = "V�nligen ange en tillh�rande kod f�r den valda uttryckssymbolen";
$f_lang['ok_aj_smiley'] = "Tack, uttryckssymbolen har lagts till utan problem";
$f_lang['no_smiley'] = "Uttryckssymbolen m�ste vara av filtypen GIF- eller JPEG-bild";
$f_lang['copy_impossible'] = "FEL\\nDet gick inte kopiera uttryckssymbolen i katalogen \\\"images/smileys\\\" .";
$f_lang['car_replace_exist'] = "FEL\\nDen tillh�rande koden �r upptagen.";
$f_lang['modif_smileys'] = "Uppdatera alla uttryckssymboler";
$f_lang['verif_sup_smileys'] = "Vill du verkligen radera vald(a) uttryckssymbol(er) ?";
$f_lang['merci_modif_smileys'] = "Tack, uttryckssymbolderna har redigerats.";

/* l�gg till administrat�rer */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "L�gg till en g�stboksadministrat�r";
	$f_lang['add_admin_2'] = "L�gg till en administrat�r";
	$f_lang['ajouter_admin'] = "L�gg till";
	$f_lang['name_ajouter_admin'] = "L�gg till";
}
else{
	$f_lang['add_admin_texte'] = "�ndra en g�stboksadministrat�r";
	$f_lang['add_admin_2'] = "�ndra en administrat�r";
	$f_lang['ajouter_admin'] = "Spara";
	$f_lang['name_ajouter_admin'] = "�ndra";
}

$f_lang['identif_connexion'] = "Inloggningsnamn";
$f_lang['passe_admin'] = "L�senord";
$f_lang['email_admin'] = "E-post (vikigt om administrat�ren skall kunna meddelas via e-post n�r ett nytt inl�gg skrivs)";
$f_lang['admin_receive_email'] = "Skall administrat�ren meddelas via e-post n�r ett nytt inl�gg skrivs ?";
$f_lang['admin_modif_options'] = "F�r �ndra inst�llningar f�r script ?";
$f_lang['admin_gestion_skins'] = "F�r �ndra teman ?";
$f_lang['admin_gestion_messages'] = "F�r hantera meddelanden ?";
$f_lang['admin_gestion_censure'] = "F�r hantera censurerade ord ?";
$f_lang['admin_gestion_smileys'] = "F�r hantera uttryckssymboler ?";
$f_lang['admin_gestion_admin'] = "F�r hantera andra administrat�rskonton ?";
$f_lang['erreur_name'] = "V�nligen ange ett inloggningsnamn";
$f_lang['erreur_passe'] = "V�nligen ange ett l�senord";
$f_lang['erreur_email'] = "V�nligen ange en e-postadress";
$f_lang['ok_aj_admin'] = "Tack, kontot skapades utan problem";
$f_lang['ok_modif_admin'] = "Tack, kontot har uppdaterats";
$f_lang['erreur_aj_admin'] = "FEL\\nDetta inloggningsnamn existerar redan";
$f_lang['revenir'] = "Tillbaka till f�reg�ende sida";

/* Hantering av administrat�rer */
$f_lang['gest_admin'] = "Hantering av administrat�rer";
$f_lang['sup_admin'] = "Markering";
$f_lang['login_admin'] = "Inloggningsnamn";
$f_lang['email_admin'] = "E-post";
$f_lang['modif_admin'] = "Redigera";
$f_lang['value_sup_admin'] = "Radera alla markerade administrat�rer";
$f_lang['verif_sup_admin'] = "Vill du verkligen radera alla valda administrat�rer ?";

/* Felmeddelanden */
$f_lang['erreur_texte'] = "SIDAN EJ TILLG�NGLIG";
$f_lang['erreur_auth'] = "Inloggningen misslyckades";
$f_lang['erreur_droits'] = "Du har inte tillr�ckliga r�ttigheter f�r att se denna sida.";

/* G�stbok */
$f_lang['note_moyenne'] = "Medelbetyg som bes�kare gett den h�r sidan :";
$f_lang['title_guestbook'] = "Min g�stbok";
$f_lang['note_super'] = " : fantastisk !";
$f_lang['note_moyen'] = " : medel";
$f_lang['note_rate'] = " : botten";
$f_lang['nom_pseudo_visiteur'] = "Namn:";
$f_lang['email_visiteur'] = "E-post  :";
$f_lang['site_web_visiteur'] = "Hemsida URL :";
$f_lang['ville_pays_visiteur'] = "Stad / Land :";
$f_lang['note_visiteur'] = "Ditt betyg :";
$f_lang['message_visiteur'] = "Ditt meddelande :";
$f_lang['ajouter_message_visiteur'] = "Skicka inl�gget";
$f_lang['erreur_add_nom'] = "V�nligen skriv ditt namn";
$f_lang['erreur_add_message'] = "V�nligen skriv ett meddelande";
$f_lang['erreur_mail'] = "Din e-postadress �r ogiltig";
$f_lang['messages'] = "Inl�gg";
$f_lang['messages_a'] = "till";
$f_lang['page'] = "Sida";
$f_lang['nbre_messages'] = "Antal inl�gg";
$f_lang['message_le'] = "den";
$f_lang['message_note'] = "Betyg";
$f_lang['send_mail_to'] = "Skicka e-post till";
$f_lang['go_home'] = "Bes�k sidan";
$f_lang['precedente'] = "&lt;&lt; F�reg�ende";
$f_lang['suivante'] = "N�sta &gt;&gt;";
$f_lang['no_message'] = "Det finns inga inl�gg att visa.";
$f_lang['no_ip'] = "OBS!\\nDitt IP har blivit sp�rrat, du kan ej skriva inl�gg";
$f_lang['ok_post'] = "Tack! Ditt inl�gg har skickats.";
$f_lang['time_erreur'] = "FEL\\nDitt inl�gg kunde ej sparas, du m�ste v�nta en stund innan du kan skicka ett nytt.";
$f_lang['text_select_search'] = "Visa bara meddelanden som inneh�ller f�ljande ord";
$f_lang['text_ok_search'] = "Ok";

/* e-postmeddelning */
$f_lang['mail_object'] = "[info] - Nytt Inl�gg i din g�stbok - ";
$f_lang['mail_message'] = "Hej,\n\nVi informerar dig om att du har ett nytt inl�gg i din g�stbok ";

/* Hantera inl�gg */
$f_lang['gestion_mess'] = "Hantera inl�gg";
$f_lang['selectionner_pages'] = "V�lj";
$f_lang['messages_gest'] = "Inl�gg";
$f_lang['page_gest'] = "sida";
$f_lang['aller_en_page'] = "G� till sida";
$f_lang['supprimer_gest'] = "Radera";
$f_lang['auteur_gest'] = "skrivet av";
$f_lang['modifier_gest'] = "redigera";
$f_lang['supprimer_mess_selected'] = "Radera valda meddelanden";
$f_lang['verif_sup_mess'] = "Vill du verkligen radera valda meddelanden ?";

/* redigera ett inl�gg */
$f_lang['modif_mess'] = "Redigera ett inl�gg";
$f_lang['message_modif'] = "Meddelande";
$f_lang['nom_modif'] = "Namn";
$f_lang['email_modif'] = "E-post";
$f_lang['site_web_modif'] = "Hemsida URL";
$f_lang['note_modif'] = "Po�ng som gavs till din sida";
$f_lang['ville_pays_modif'] = "Stad / Land";
$f_lang['date_modif'] = "Skrivet den";
$f_lang['ip_modif'] = "IP address";
$f_lang['ok_modif_mess'] = "Tack, �ndringarna har sparats";

/* sidtitlar */
$f_lang['title identification'] = "Logga in";
$f_lang['title administration'] = "Administration";
$f_lang['title frame gauche'] = "v�nster ram";
$f_lang['title options'] = "alternativ";
$f_lang['title skins'] = "teman";
$f_lang['title censure'] = "ord att censurera";
$f_lang['title censure'] = "Hantering av sp�rrade IP's";
$f_lang['title smileys'] = "Hantering av uttryckssymboler";
$f_lang['title add admin'] = "L�gg till en g�stboksadministrat�r";
$f_lang['title gest admin'] = "Hantering av g�stboksadministrat�rer";
$f_lang['title erreur'] = "Fel";
$f_lang['title gestion mess'] = "Hantering av inl�gg";
$f_lang['title modif mess'] = "Redigering av inl�gg";
$f_lang['title setup'] = "Installation";

/* felmeddelanden */
$f_lang['erreur_mysql_connect'] = "Det gick inte ansluta till databasen";
$f_lang['erreur_connexion'] = "Dina inloggningsuppgifter �r felaktiga";
$f_lang['manque login'] = "V�nligen ange ditt anv�ndarnamn";
$f_lang['manque pass'] = "V�nligen ange ditt l�senord";
$f_lang['end session'] = "Din session gjorde timeout";

/* add version 3.11 */
$f_lang['addSignature'] = "Skriv ett inl�gg";
$f_lang['seeMessages'] = "L�s inl�gg";
$f_lang['addMessageBlocAdd'] = "Skriv ett inl�gg i g�stboken";

/* add version 3.2 */
$f_lang['version'] = "Version";
$f_lang['new_version_dispo'] = "En uppdaterad version av g�stboken finns tillg�nglig";
$f_lang['version_courrante'] = "Nuvarande scriptversion";
$f_lang['info_version'] = "Information om den versionen du har";
$f_lang['version_txt_ok'] = "Din version �r ".$alex_livre_version.",<br>detta �r den senaste versionen, uppgradering ej �r n�dv�ndigt.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website htt://www.alexguestbook.net"
$f_lang['version_txt_update'] = "Din version �r ".$alex_livre_version.", <b>en ny version finns tillg�nglig.</b>";
$f_lang['version_down'] = "Ladda ned den uppgraderade versionen";
$f_lang['help_update'] = "Hj�lp om uppgraderingen";
$f_lang['spam'] = "USER AGENT i din webbl�sare kunde ej fastsl�s, det verkar som en robot f�rs�kte att automatiskt skriva ett inl�gg. Om detta inte �r fallet, f�rs�k igen med en annan webbl�sare.";
$f_lang['avis_spammeurs'] = "Note to spammers";
$f_lang['txt_spammeurs'] = "<b>This Guestbook is protected against spamming</b>, Email adresses and URLs are encoded in the source code of the generated pages, therefore it's absolutely useless to post commercials links, they will not be seen by search engines (furthermore your message will be deleted anyway...)";
$f_lang['fermer'] = "St�ng f�nster";
$f_lang['valider_messages'] = "Vill du granska inl�gg innan de blir synliga f�r allm�nheten ?";
$f_lang['valide'] = "Granskat ?";
$f_lang['mess_valide'] = "Detta inl�gg har granskats och godk�nts";
$f_lang['mess_invalide'] = "Detta inl�gg v�ntar p� att bli granskat";
$f_lang['info_mess_valide'] = "Granskat inl�gg ?";
$f_lang['ok_post_valid'] = "Tack ! Ditt inl�gg har sparats utan problem, det kommer bli synligt s� snart webmaster har granskat och godk�nt det.";
$f_lang['see_skin'] = "F�rhandsgranska g�stboken med detta tema";
$f_lang['maxi_car'] = "Max antal tecken som till�ts per inl�gg (0 = o�ndligt)";
$f_lang['il_reste'] = "Du kan skriva upp till";
$f_lang['caracteres'] = "fler tecken i ditt inl�gg";
$f_lang['sup_copyright'] = "Ta bort copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Namn listan �ver s�kerhetskoder";
$f_lang['add_code_securite'] = "Anv�ndare m�ste ange s�kerhetskod f�r att kunna skriva ett inl�gg ?";
$f_lang['t_chem_dossier_fonts'] = "Full URL till katalogen med typsnitt";
$f_lang['t_color_txt_code'] = "Hexadecimal kod f�r den kodade textens f�rg";
$f_lang['t_color_background_code'] = "Hexadecimal kod f�r bakgrundsf�rg";
$f_lang['veuillez_taper_code'] = "Skriv av s�kerhetskoden till den h�gra rutan.";
$f_lang['a_quoi_ca_sert'] = "Varf�r detta?";
$f_lang['why_code'] = "Varf�r en \"s�kerhetskod\" ?";
$f_lang['txt_why_code'] = "S�kerhetskoden g�r s� att vi kan verifiera att det �r en riktig anv�ndare som skriver inl�gget och inte ett automatiskt program/robot.<br><br><b>Reklam och liknande l�nkar/spam �r f�rbjudet i denna g�stbok!</b>";
$f_lang['erreur_code_securite'] = "V�nligen ange s�kerhetskoden";
$f_lang['erreur_saisie_code_securite'] = "S�kerhetskoden du angav �r inte giltig, v�nligen f�rs�k p� nytt.";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatiskt svar";
$f_lang['admin_gestion_reponse_auto'] = "F�r hantera automatiska svar?";
$f_lang['text_reponse_auto'] = "<b>P� den h�r sidan kan du skriva ett automatiskt svar</b> som kommer skickas till bes�kare som skrivit ett inl�gg i din g�stbok. Detta meddelande kommer skickas om du aktiverar motsvarande funktion i scriptets inst�llningar.<br><br>Varje spr�k kan ha sitt eget automatiska svar och koden [PSEUDO] kommer ers�ttas med namnet p� bes�karen som skrev inl�gget.";
$f_lang['name_table_rep_auto'] = "Namn p� listan i MySQL som kommer inneh�lla meddelanden f�r automatiska svar.";
$f_lang['gestion_reponses'] = "Redigera meddelande";
$f_lang['msg_remerciement'] = "Tack-meddelande";
$f_lang['txt_remerciement'] = "Hej [PSEUDO],\n\nTack f�r att du skrev ett inl�gg i g�stboken!";
$f_lang['ok_save_msg_rem'] = "Tack, det automatiska tack-meddelandet har sparats.";
$f_lang['envoyer_remerciement'] = "Skall tack-meddelandet skickas automatiskt?";
$f_lang['remerciement'] = "Tack";
$f_lang['titre_guestbook'] = "G�stbokens titel";
$f_lang['text_titre_guestbook'] = "<b>Du kan �ndra g�stbokens titel</b> och ha olika titlar f�r varje spr�k.";
$f_lang['titre'] = "Titel";
$f_lang['parametrage'] = "Inst�llningar";
$f_lang['ok_save_titre'] = "Tack, titeln har sparats.";
$f_lang['ville_visiteur'] = "Stad :";
$f_lang['pays_visiteur'] = "Land :";
$f_lang['flag'] = "Flagga";
$f_lang['ville_modif'] = "Stad";
$f_lang['pays_modif'] = "Land";
$f_lang['action'] = "�tg�rd";
$f_lang['repondre'] = "Svara";
$f_lang['votre_reponse'] = "Ditt svar";
$f_lang['ok_reponse_mess'] = "Tack, ditt svar har sparats";
$f_lang['defaut_titre_rep'] = "Webmasters svar";
$f_lang['annuler'] = "Avbryt";
$f_lang['num_appari'] = "Visar nummer";
$f_lang['nb_max_smileys'] = "Maximalt antal uttryckssymboler som visas";
$f_lang['plus_smileys'] = "Visa flera uttryckssymbolder";
$f_lang['liste_all_smilies'] = "Lista �ver alla uttryckssymboler";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Den h�r funktionen g�r s� att du kan visa de senaste inl�ggen som skrivits i din g�stbok</b> p� en annan valfri sida.";
$f_lang['parametrage_modele'] = "Inst�llningar f�r mall";
$f_lang['ok_save_boite'] = "Tack, dina inst�llningar har sparats";
$f_lang['format_date_boite'] = "Datumformat (identisk med <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP funktionen)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maximalt antal tecken som visas f�r namn";
$f_lang['nbre_maxi_message_boite'] = "Maximalt antal tecken som visas i inl�gg";
$f_lang['modele_affichage_donnees'] = "Datapostmall";
$f_lang['url_dossier_livre_boite'] = "Full URL till katalogen med din g�stbok";
$f_lang['url_livre_boite'] = "Full URL index-sidan f�r din g�stbok";
$f_lang['generation_code'] = "Skapa Javascript-kod";
$f_lang['nom_msg_afficher'] = "Antal meddelanden att visa";
$f_lang['generer_code'] = "Skapa kod f�r �beropning av Javascript";
$f_lang['code_a_copier'] = "HTML kod som skall kopieras till den/de sida/sidor du v�ljer";
$f_lang['erreur_boite_java'] = "V�nligen ange ett giltigt nummer f�r antal meddelanden att visa";
$f_lang['erreur_par_boite'] = "Inst�llningsfel, kan inte isolera [BOUCLE] ... [/BOUCLE] -kedjan i din mall.";
$f_lang['saut_ligne_msg_boite'] = "Beh�ll radbrytningar i inl�ggen";
$f_lang['message_a'] = "@";
$f_lang['admin_gestion_bdd'] = "F�r hantera databasen ?";
$f_lang['bdd'] = "Databas";
$f_lang['optimisation'] = "Optimering";
$f_lang['sauvegarde'] = "Spara";
$f_lang['restauration'] = "�terskapning";
$f_lang['optimisation_txt'] = "<b>Vid lagring och radering samlas oanv�nda och tomma listor.</b> Dessa inverkar prestandam�ssigt negativt p� din databas och f�ljdaktligen din webserver, den h�r sidan g�r s� du kan undvika problemet genom att optimera databasen och listorna.";
$f_lang['liste_tables'] = "Listor i din databas";
$f_lang['lancer_optimisation'] = "P�b�rja optimering";
$f_lang['tables'] = "LISTA";
$f_lang['pertes'] = "F�RLORAT";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Tack, listor som hade f�rlorade bytes har optimerats.";
$f_lang['txt_sauvegarde'] = "<b>Om du vill spara inl�ggen en l�ngre tid s� rekommenderas du att med j�mna mellanrum g�ra en s�kerhetskopia.</b> En h�rddiskkrasch kan f�rst�ra alla dina data. En s�kerhetskopia kan ocks� vara anv�ndbar om du vill flytta dina inl�gg till en annan server.";
$f_lang['lancer_sauvegarde'] = "P�b�rja s�kerhetskopiering";
$f_lang['lancer_restauration'] = "P�b�rja �terskapning";
$f_lang['txt_restauration'] = "<b>Om du har genomf�rt en s�kerhetskopiering s� kan du �terskapa hela din g�stboks databas.</b> V�lj d� motsvarande fil p� din h�rddisk.<br><br><b><u>OBS</u></b>, om filen �r v�ldigt stor (flertalet megabytes), s� kan �terskapningsprocessen skapa problem med serverinst�llningarna f�r din hemsida (set_time_limit() och maximalt till�tna storlek f�r uppladdning ).";
$f_lang['select_file'] = "V�lj en s�kerhetskopia p� din h�rddisk eller server (.ZIP eller .SQL)";
$f_lang['confirm_restauration'] = "Bekr�fta att du vill p�b�rja �terskapningsprocessen och d�rmed radera nuvarande data?";
$f_lang['select_file_restau'] = "V�nligen v�lj en fil p� din h�rddisk";
$f_lang['erreur_ext_restau'] = "Den valda filens �r inte av typen .ZIP eller .SQL, �terskapning kunde ej genomf�ras.";
$f_lang['conseil_zip'] = "(Packa upp ZIP-filen p� din h�rddisk f�r att komma �t SQL-filen)";
$f_lang['erreur_ext_zip'] = "Till�gget f�r PHP_ZIP  �r ej tillg�ngligt p� din server, �terskapning via en ZIP-fil �r d�rf�r inte m�jligt. V�lj ist�llet en fil av typen .SQL p� din h�rddisk".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Problem vid l�sning fr�n ZIP-arkivet, kan inte genomf�ra �terskapning.  F�rs�k �terskapa fr�n en fil av filtypen .SQL ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Den valda SQL-filen verkar inte vara @lex Guestbook scriptfil.  Kunde inte genomf�ra �terskapningen.";
$f_lang['restauration_terminee'] = "Tack ! �terskapningen genomf�rdes utan problem !";

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
?>