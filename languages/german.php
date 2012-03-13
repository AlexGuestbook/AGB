<?php
///////////////////////////////////////////////
//               @lex Guestbook              //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
//   German translation by Daniel Maier      //
//                      and Michael Kefeder  //
///////////////////////////////////////////////

/* Encodage utilis� dans le script */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "de";

/* Installation */
$f_lang['install_auto'] = "Automatische Installation";
$f_lang['identi_base'] = "Datenbank ID";
$f_lang['type_base'] = "Datenbank-Typ";
$f_lang['user_base'] = "Benutzername";
$f_lang['pass_base'] = "Passwort";
$f_lang['nom_base'] = "Datenbank Name";
$f_lang['nom_table'] = "Name der Tabellen";
$f_lang['name_table_sessions'] = "Name der Sitzungs-Tabelle";
$f_lang['name_table_users'] = "Name der Benutzer-Tabelle";
$f_lang['name_table_messages'] = "Name der Mitteilungen-Tabelle";
$f_lang['name_table_censure'] = "Name der Tabelle mit zensurierten W&ouml;rtern";
$f_lang['name_table_ip'] = "Name der Tabelle mit gesperrten IP's";
$f_lang['name_table_smileys'] = "Name der Smileys-Tabelle";
$f_lang['extension_script'] = "Endung des Script (Suffix)";
$f_lang['choose_extension'] = "Bitte w&auml;hlen Sie eine Endung f�r die Script-Dateien<br/>(in der Regel \".php\", andernfalls m&uuml;ssen alle Dateien angepasst werden!)";
$f_lang['identi_acces_admin'] = "Ihre ID f&uuml;r den Zugang zum Administrations-Menu";
$f_lang['login_admin'] = "Login";
$f_lang['pass_admin'] = "Passwort";
$f_lang['verif_pass_admin'] = "Passwort wiederholen";
$f_lang['email_admin_setup'] = "Ihre E-Mailadresse";
$f_lang['installer'] = "Installieren";
$f_lang['erreur_host'] = "Sie haben keinen Datenbank Server Host angegeben";
$f_lang['erreur_user'] = "Sie haben keine ID f�r Verbindung zur Datenbank angegeben";
$f_lang['erreur_nom_base'] = "Sie haben keinen Datenbank-Namen angegeben";
$f_lang['erreur_log_admin'] = "Sie haben keinen Benutzernamen f�r Login zum Administrationsmenu eingegeben";
$f_lang['erreur_pass_admin'] = "Sie haben kein Passwort f�r Login zum Administrationsmenu eingegeben";
$f_lang['erreur_pass_differents'] = "ACHTUNG, Sie haben zwei verschiedene Passw�rter eingegeben.";
$f_lang['erreur_first_connexion'] = "<b>FEHLER, konnte keine Verbindung zur Datenbank erstellen.</b><br/><br/>Bitte &uuml;berpr&uuml;fen Sie die Verbindungsangaben : <a href=\"javascript:history.go(-1);\"><b>Zur&uuml;ck</b></a>.";
$f_lang['erreur_install'] = "Installation misslungen!";
$f_lang['ok_install'] = "Installation erfolgreich";
$f_lang['text_ok_install'] = "<b>Vielen Dank! Die Installation wurde erfolgreich abgeschlossen.</b><br/><br/>Aus Sicherheitsgr&uuml;nden ist es UNERL&Auml;SSLICH, die Installations-Datei (\"setup.php\") zu l&ouml;schen, andernfalls k&ouml;nnen Fremde die Installationsdateien &uuml;berschreiben.<br/><br/>Sie erreichen das Administrations-Menu Ihres G&auml;stebuches <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>hier</b></a> oder<br/> die normale Anzeige des G&auml;stebuches <a href=\"".$chem_absolu."\" target=\"_blank\"><b>hier</b></a>.";

/* Administration */
$f_lang['page protect'] = "Passwortgesch&uuml;tzte Seite";
$f_lang['login'] = "Login";
$f_lang['pass'] = "Passwort";
$f_lang['value identif'] = "Identifikation";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* Menu */
$f_lang['options'] = "Einstellungen";
$f_lang['script'] = "Script";
$f_lang['graphismes'] = "Guestbook Skins";
$f_lang['messages'] = "Mitteilungen";
$f_lang['gestion'] = "Management";
$f_lang['censure_mots'] = "Zensierte W&ouml;rter";
$f_lang['smileys'] = "Smileys";
$f_lang['utilisateurs'] = "Administratoren";
$f_lang['ajouter'] = "Hinzuf&uuml;gen";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "Info";
$f_lang['donner_avis'] = "Teilen Sie uns Ihre Meinung mit";
$f_lang['deconnexion'] = "Verbindung trennen";

 /* Einstellungen */
 $f_lang['options_livre'] = "G&auml;stebuch Einstellungen";
$f_lang['options_generales'] = "Allgemeine Einstellungen";
$f_lang['langue'] = "Sprache";
$f_lang['send_mail'] = "Soll der Administrator bei neuen Eintr&auml;gen benachrichtigt werden!";
$f_lang['avert_mail'] = "<br/>(<b>Information</b> : die mail() Funktion Ihres Servers ist nicht verf&uuml;gbar, d.h. Sie erhalten keine Benachrichtigung, auch wenn aktiviert!)";
$f_lang['oui'] = "Ja";
$f_lang['non'] = "Nein";
$f_lang['options_modules'] = "G&auml;stebuch-Felder Einstellungen";
$f_lang['admin_champ_email'] = "Bitte geben Sie Ihre E-Mailadresse an";
$f_lang['admin_champ_site'] = "Bitte geben Sie die URL Ihrer Website an";
$f_lang['admin_champ_pays'] = "Bitte geben Sie Stadt und Land an";
$f_lang['admin_champ_note'] = "Sie k&ouml;nnen diese Seite beurteilen";

$f_lang['admin_ok_aff_moteur'] = "Zeige Suchmaschine";
$f_lang['options_tech'] = "Technische Einstellungen";
$f_lang['url_recharger'] = "Seite zum reload f&uuml;r das G&auml;stebuch";
$f_lang['url_variables'] = "Variablen Instruktionen als Parameter gesendet (bitte # anstatt $ in Variablen verwenden)";
$f_lang['temps_session'] = "Session-Dauer des Administrationsmenu in Sekunden";
$f_lang['skin_to_use'] = "Skin benutzen:";
$f_lang['enregistrer'] = "Sichern";
$f_lang['nb_pages'] = "Anzahl Mitteilungen auf jeder G�stebuchseite";
$f_lang['merci_options'] = "Danke, Informationen wurden aktualisiert";
$f_lang['erreur_options'] = "FEHLER\\nDie Informationen konnten nicht gespeichert werden, konnte nicht Schreiben in Datei \\\"config.".$alex_livre_ext."\\\", bitte &auml;ndern Sie diese Datei mit einem Texteditor.";
$f_lang['temps_ip_post'] = "Anzahl Minuten bis ein Besucher wieder Eintr&auml;ge verfassen kann";
$f_lang['minutes'] = "Minuten";
$f_lang['cut_mots'] = "Max. Anzahl Buchstaben pro Wort";
$f_lang['format_date'] = "Datumsformat";

/* skins */
$f_lang['ok_ajouter'] = "Danke, die Skin wurde erfolgreich erstellt";
$f_lang['erreur_ajouter'] = "FEHLER\\nDie Skin konnte nicht erstellt werden, bitte manuell erstellen";
$f_lang['text1_2'] = "Die folgenden Skins wurden im Verzeichnis &quot;templates/skins/&quot; gespeichert. Mit diesem Interface k&ouml;nnen Sie die Dateien &auml;ndern.";
$f_lang['text2'] = "<b>Wenn Sie das Template des Administrationsmenus &auml;ndern m&ouml;chten,</b> bearbeiten Sie die Dateien im Verzeichnis &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "Skin hinzuf&uuml;gen";
$f_lang['ajouter'] = "Hinzuf&uuml;gen";
$f_lang['gestion_skins'] = "Skins verwalten";
$f_lang['vous_editez'] = "Sie bearbeiten folgende Skin :";
$f_lang['style'] = "Stylesheet";
$f_lang['ajouter_message'] = "Teil-Mitteilung hinzu&uuml;gen";
$f_lang['nbre_messages_page'] = "Anzahl Mitteilungen / Seiten";
$f_lang['pages_dispos'] = "Liste der verf&uuml;gbaren Seiten / n&auml;chste Seite - letzte Seite-Teil";
$f_lang['texte_corps_messages'] = "Mitteilungen Body";
$f_lang['espacement'] = "Platz zwischen 2 Mitteilungen";
$f_lang['text_assembly'] = "Datei setzt letzte Teile zusammen";
$f_lang['ok_edit_skin'] = "Danke, Skin wurde aktualisiert";
$f_lang['erreur_edit_skin'] = "FEHLER\\nEine oder mehrere Dateien der Skin konnten nicht aktualisiert werden. Bitte manuell bearbeiten.";
$f_lang['ajouter'] = "Hinzuf&uuml;gen";
$f_lang['supprimer'] = "L&ouml;schen";
$f_lang['text_sup_skin'] = "Skin l&ouml;schen";
$f_lang['ok_supprimer'] = "Skin wurde gel&ouml;scht.";
$f_lang['erreur_supprimer'] = "FEHLER\\nEine oder mehrere Dateien der Skin konnten nicht gel&ouml;scht werden, bitte manuell l&ouml;schen.";

/* Seite mit zensurierten W�rtern */
$f_lang['aj_mot'] = "Neues Wort hinzuf&uuml;gen"; 
$f_lang['mot_interdit'] = "Verbotenes Wort :";
$f_lang['remplacer_par'] = "Ersetzen mit :";
$f_lang['gestion_censure'] = "Zensierte W&ouml;rter verwalten";
$f_lang['mot'] = "Wort";
$f_lang['remplace_by'] = "ersetzen mit";
$f_lang['liste_jour'] = "Liste aktualisieren";
$f_lang['sup_mots'] = "Ausgew&auml;hlte W&ouml;rter entfernen";
$f_lang['erreur_aj_censure1'] = "Bitte geben Sie ein Wort ein";
$f_lang['erreur_aj_censure2'] = "Bitte geben Sie einen Ersatz f&uuml;r die zensierten W&ouml;rter ein";
$f_lang['ok_aj_mot'] = "Die W&ouml;rter wurden hinzugef&uuml;gt.";
$f_lang['verif_sup'] = "Wollen Sie die ausgew&auml;hlten W&ouml;rter wirklich dauerhaft entfernen!";
$f_lang['merci_modif'] = "&Auml;nderungen wurden gespeichert";

/* Ip sperren */
$f_lang['bannir_ip'] = "Gesperrte Ip's";
$f_lang['text_ip1'] = "Jeder Internetbenutzer hat eine ID (z.B. 201.10.25.14). Diese ID wird vom Internetprovider vergeben und &auml;ndert, theoretisch, jedes Mal wenn der Benutzer eine neue Verbindung erstellt.";
$f_lang['text_ip2'] = "Wenn Sie verhindern m&ouml;chten,<b>dass bestimmte Benutzer Eintr&auml;ge machen,</b>, k&ouml;nnen Sie dessen IP-Adresse sperren. Sie k&ouml;nnen auch eine Gruppe von IP-Adressen sperren mithilfe des * (z.B. 201.15.55.*, oder auch 158.*.*.*).";
$f_lang['ajouter_ip'] = "Neue IP hinzuf&uuml;gen";
$f_lang['gestion_ip'] = "Gesperrte IP's verwalten";
$f_lang['sup_ip'] = "Markierte IP's entfernen";
$f_lang['ok_aj_ip'] = "Die eingegebene IP wurde gesperrt";
$f_lang['verif_sup_ip'] = "Wollen Sie die markierten IP's wirklich entfernen!";

/* Smileys */
$f_lang['gestion_smileys'] = "Smileys verwalten";
$f_lang['text_smileys'] = "<b>Smileys erlauben dem Besucher Gef&uuml;hle auszudr&uuml;cken.</b>  Mit diesem interface k&ouml;nnen Sie Smileys hinzuf&uuml;gen oder entfernen :o)<br/><br/>Smileys auf dieser Seite sind im Verzeichnis \"images/smileys\" gespeichert.";
$f_lang['ajouter_smiley'] = "Smiley hinzuf&uuml;gen";
$f_lang['image_smiley'] = "Bild";
$f_lang['car_replace'] = "Entsprechender Code";
$f_lang['gestion_smileys'] = "Smileys verwalten";
$f_lang['sup_smileys'] = "Ausgew&auml;hlte Smileys entfernen";
$f_lang['erreur_image'] = "Bitte w&auml;hlen Sie einen Smiley";
$f_lang['erreur_car'] = "Bitte w&auml;hlen Sie den entsprechenden Code f&uuml;r den gew&auml;hlten Smiley";
$f_lang['ok_aj_smiley'] = "Das Smiley wurde erfolgreich hinzugef&uuml;gt";
$f_lang['no_smiley'] = "Die Smiley's m&uuml;ssen als GIF oder JPEG Datei verwendet werden";
$f_lang['copy_impossible'] = "FEHLER\\nKonnte Smiley nicht in das Verzeichnis \\\"images/smileys\\\" kopieren.";
$f_lang['car_replace_exist'] = "FEHLER\\nDer entsprechende Code existiert bereits in der Datenbank.";
$f_lang['modif_smileys'] = "Alle Smileys aktualisieren";
$f_lang['verif_sup_smileys'] = "Wollen Sie die ausgew&auml;hlten Smileys wirklich l&ouml;schen!";
$f_lang['merci_modif_smileys'] = "Die Smileys wurden ge&auml;ndert.";

/* admin bearbeiten */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "G&auml;stebuch Administrator hinzuf&uuml;gen";
	$f_lang['add_admin_2'] = "Admin hinzuf&uuml;gen";
	$f_lang['ajouter_admin'] = "Hinzuf&uuml;gen";
	$f_lang['name_ajouter_admin'] = "hinzuf&uuml;gen";
}
else{
	$f_lang['add_admin_texte'] = "G&auml;stebuch Administrator &auml;ndern";
	$f_lang['add_admin_2'] = "Admin &auml;ndern";
	$f_lang['ajouter_admin'] = "Sichern";
	$f_lang['name_ajouter_admin'] = "&auml;ndern";
}

$f_lang['identif_connexion'] = "Benutzername";
$f_lang['passe_admin'] = "Passwort";
$f_lang['email_admin'] = "E-Mail (Benachrichtigung wird an diese Adresse gesendet)";
$f_lang['admin_receive_email'] = "Soll der Administrator benachrichtigt werden, wenn eine neue Mitteilung gepostet wurde!";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;darf der Admin Script-Optionen &auml;ndern!";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;Skins &auml;ndern!";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;Mitteilungen verwalten!";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;zensierte W&ouml;rter verwalten!";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;Smileys verwalten!";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;andere Administrators' Accounts verwalten!";
$f_lang['erreur_name'] = "Bitte geben Sie eine Verbindungs ID ein";
$f_lang['erreur_passe'] = "Bitte geben Sie ein Passwort ein";
$f_lang['erreur_email'] = "Bitte geben Sie eine E-Mail Adresse an";
$f_lang['ok_aj_admin'] = "Der Account wurde erfolgreich erstellt";
$f_lang['ok_modif_admin'] = "Der Account wurde aktualisiert";
$f_lang['erreur_aj_admin'] = "FEHLER\\nDieser Benutzername wurde bereits vergeben";
$f_lang['revenir'] = "Zur&uuml;ck zur vorhergehenden Seite";

/* admin einstellungen */
$f_lang['gest_admin'] = "Administratoren verwalten";
$f_lang['sup_admin'] = "entfernen";
$f_lang['login_admin'] = "Login";
$f_lang['email_admin'] = "E-Mail";
$f_lang['modif_admin'] = "&auml;ndern";
$f_lang['value_sup_admin'] = "Alle ausgew&auml;hlten Admins entfernen";
$f_lang['verif_sup_admin'] = "Wollen Sie die ausgew&auml;hlten Admins wirklich entfernen!";

/* Fehlerseiten */
$f_lang['erreur_texte'] = "Seite unerreichbar";
$f_lang['erreur_auth'] = "Authentifikation Fehler";
$f_lang['erreur_droits'] = "Sie haben nicht das Recht um diese Seite zu besuchen.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Durchschnittliche Bewertung der Besucher dieser Website :";
$f_lang['title_guestbook'] = "G&auml;stebuch";
$f_lang['note_super'] = " : fantastisch!";
$f_lang['note_moyen'] = " : mittel";
$f_lang['note_rate'] = " : schlecht";
$f_lang['nom_pseudo_visiteur'] = "Name oder Nickname :";
$f_lang['email_visiteur'] = "E-Mail Adresse :";
$f_lang['site_web_visiteur'] = "Website URL :";
$f_lang['ville_pays_visiteur'] = "Stadt / Land :";
$f_lang['note_visiteur'] = "Wie bewerten Sie diese Seite!";
$f_lang['message_visiteur'] = "Ihre Mitteilung :";
$f_lang['ajouter_message_visiteur'] = "Mitteilung hinzuf�gen";
$f_lang['erreur_add_nom'] = "Bitte geben Sie Ihren Namen an";
$f_lang['erreur_add_message'] = "Bitte geben Sie Ihre Mitteilung ein";
$f_lang['erreur_mail'] = "Ihre E-Mailadresse ist ung�ltig";
$f_lang['messages'] = "Mitteilungen";
$f_lang['messages_a'] = "von";
$f_lang['page'] = "Seite";
$f_lang['nbre_messages'] = "Anzahl Mitteilungen";
$f_lang['message_le'] = "am";
$f_lang['message_note'] = "Punkte";
$f_lang['send_mail_to'] = "E-Mail senden an";
$f_lang['go_home'] = "Seite besuchen";
$f_lang['precedente'] = "&lt;&lt; zur&uuml;ck";
$f_lang['suivante'] = "vorw&auml;rts &gt;&gt;";
$f_lang['no_message'] = "Keine Mitteilungen.";
$f_lang['no_ip'] = "ACHTUNG\\nIhre IP wurde gesperrt, Sie sind nicht berechtigt, mitteilungen in diesem G&auml;stebuch zu posten.";
$f_lang['ok_post'] = "Vielen Dank!  Ihre Mitteilung wurde angenommen.";
$f_lang['time_erreur'] = "ACHTUNG\\nIhre Mitteilung konnte nicht angenommen werden, da Sie erst k�rzlich einen Eintrag gemacht haben.";
$f_lang['text_select_search'] = "Zeige nur die Mitteilungen mit folgenden W&ouml;rtern";
$f_lang['text_ok_search'] = "OK";

/* mail einstellungen */
$f_lang['mail_object'] = "[info] - Neue Mitteilung im G&auml;stebuch - ";
$f_lang['mail_message'] = "Hallo,\n\nEs wurde ein neuer Eintrag ins G&auml;stebuch gemacht ";

/* mitteilungen einstellungen */
$f_lang['gestion_mess'] = "Mitteilungen verwalten";
$f_lang['selectionner_pages'] = "Ausw&auml;hlen";
$f_lang['messages_gest'] = "Mitteilung";
$f_lang['page_gest'] = "Seite";
$f_lang['aller_en_page'] = "Zur Seite gehen";
$f_lang['supprimer_gest'] = "l&ouml;schen";
$f_lang['auteur_gest'] = "Autor";
$f_lang['modifier_gest'] = "bearbeiten";
$f_lang['supprimer_mess_selected'] = "Ausgew&auml;hlte Mitteilungen l&ouml;schen";
$f_lang['verif_sup_mess'] = "Wollen Sie die ausgew&auml;hlten Mitteilungen wirklich l&ouml;schen!";

/* mitteilungen �ndern */
$f_lang['modif_mess'] = "Mitteilung bearbeiten";
$f_lang['message_modif'] = "Mitteilung";
$f_lang['nom_modif'] = "Name";
$f_lang['email_modif'] = "E-Mail";
$f_lang['site_web_modif'] = "Website URL";
$f_lang['note_modif'] = "Bewertung der Seite";
$f_lang['ville_pays_modif'] = "Stadt / Land";
$f_lang['date_modif'] = "Datum hinzugef&uuml;gt";
$f_lang['ip_modif'] = "IP Adresse";
$f_lang['ok_modif_mess'] = "Die &Auml;nderungen wurden gespeichert";

/* seitentitel */
$f_lang['title identification'] = "identifikation";
$f_lang['title administration'] = "administration";
$f_lang['title frame gauche'] = "linker frame";
$f_lang['title options'] = "Einstellungen";
$f_lang['title skins'] = "Skins";
$f_lang['title censure'] = "W&ouml;rter zum zensieren";
$f_lang['title censure'] = "Gesperrte IP's verwalten";
$f_lang['title smileys'] = "Smileys verwalten";
$f_lang['title add admin'] = "G&auml;stebuch Administrator hinzuf&uuml;gen";
$f_lang['title gest admin'] = "G&auml;stebuch Administratoren verwalten";
$f_lang['title erreur'] = "Fehler";
$f_lang['title gestion mess'] = "Mitteilungen verwalten";
$f_lang['title modif mess'] = "Mitteilung bearbeiten";
$f_lang['title setup'] = "Installation";

/* fehler */
$f_lang['erreur_mysql_connect'] = "Konnte Datenbank nicht erreichen";
$f_lang['erreur_connexion'] = "ID Infos sind falsch";
$f_lang['manque login'] = "Bitte Benuternamen eingeben";
$f_lang['manque pass'] = "Bitte Passwort eingeben";
$f_lang['end session'] = "Ihre Session wurde beendet";

/* add version 3.11 */
$f_lang['addSignature'] = "Mitteilung schreiben";
$f_lang['seeMessages'] = "Mitteilungen lesen";
$f_lang['addMessageBlocAdd'] = "Mitteilung zum G&auml;stebuch hinzuf&uuml;gen";

/* add version 3.2 */
$f_lang['version'] = "Version";
$f_lang['new_version_dispo'] = "Eine neue Version von @lex Guestbook ist verf�gbar";
$f_lang['version_courrante'] = "Aktuelle version des Skripts";
$f_lang['info_version'] = "Information �ber die Version die Sie benutzen";
$f_lang['version_txt_ok'] = "Die Version die Sie haben ist  ".$alex_livre_version.",<br/>das ist die letzte version, kein update notwendig.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "Die Version die Sie haben ist ".$alex_livre_version.", <b>eine neue Version ist verf�gbar</b>";
$f_lang['version_down'] = "Die neue Version herunterladen";
$f_lang['help_update'] = "Hilfe �bers updaten";
$f_lang['spam'] = "Der USER AGENT Ihres Browsers konnte nicht bestimmt werden, scheint so als ob ein bot versucht automatisch eine Nachricht abzusenden. Ist das nicht der Fall probieren Sie es bitte nochmal mit einem anderen Browser.";
$f_lang['avis_spammeurs'] = "Mitteilung an Spammer";
$f_lang['txt_spammeurs'] = "<b>Dieses G�stebuch ist gegen SPAM gesch�tzt</b>, Email Adressen und URLs sind kodiert im Quellcode der erzeugten Seiten, deshalb ist es sehr nutzlos Werbe-Links zu senden, diese werden von Suchmaschinen ohnehin nicht erkannt (Ausserdem wird Ihre Nachricht h�chstwahrscheinlich gel�scht...)";
$f_lang['fermer'] = "Fenster schliessen";
$f_lang['valider_messages'] = "M�chten Sie alle neuen Nachrichten durchsehen bevor diese �ffentlich sichtbar werden?";
$f_lang['valide'] = "�berpr�ft!";
$f_lang['mess_valide'] = "Diese nachricht wurde �berpr�ft";
$f_lang['mess_invalide'] = "Diese Nachricht wartet auf �berpr�fung";
$f_lang['info_mess_valide'] = "�berpr�fte Nachricht!";
$f_lang['ok_post_valid'] = "Danke! Ihre Nachricht wurde erfolgreich gespeichert, sie wird ver�ffentlicht sobald sie vom Webmaster �berpr�ft wurde.";
$f_lang['see_skin'] = "Vorschau des G�stebuchs mit diesem Skin";
$f_lang['maxi_car'] = "Maximale Anzahl von Zeichen in einer Nachricht (0 = keine Einschr�nkung)";
$f_lang['il_reste'] = "Sie k�nnen bis zu";
$f_lang['caracteres'] = "weitere Zeichen in Ihrer Nachricht";
$f_lang['sup_copyright'] = "Copyright entfernen";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Name der Tabelle f�r security codes";
$f_lang['add_code_securite'] = "M�chten Sie Besucher einen security code eingeben lassen bevor die Nachricht versandt werden kann?";
$f_lang['t_chem_dossier_fonts'] = "Absolute URL zum Fonts Verzeichnis";
$f_lang['t_color_txt_code'] = "Hexadezimaler Farbcode f&uuml;r den Text";
$f_lang['t_color_background_code'] = "Hexadezimaler Farbcode f&uuml;r den Hintergrund";
$f_lang['veuillez_taper_code'] = "Bitte untenstehende Buchstaben in das rechte Feld eintippen";
$f_lang['a_quoi_ca_sert'] = "Info";
$f_lang['why_code'] = "Wozu ein 'security code'?";
$f_lang['txt_why_code'] = "Dieser Vorgang erm&ouml;glicht uns zu &uuml;berpr&uuml;fen ob die Nachricht von einem Menschen oder von automatisierter Software gesendet wurde.<br/><br/><b>Werbung und querverweisender SPAM sind nicht erlaubt in diesem G&auml;stebuch!</b>";
$f_lang['erreur_code_securite'] = "Bitte geben Sie den 'security code' ein";
$f_lang['erreur_saisie_code_securite'] = "Der 'security code' den Sie eingegeben haben ist ung&uuml;ltig, bitte wiederholen Sie den Vorgang";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatisierte Antwort";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;verwalte automatisierte Antworten?";
$f_lang['text_reponse_auto'] = "<b>Auf dieser Seite k�nnen Sie den Text der automatisierten Antwort verfassen</b> welcher an die Besucher, nachdem diese eine Nachricht hinterlassen haben, versendet wird. Wenn Sie diese Funktion in den Skript Optionen aktivieren wird dieser Text versendet.<br/><br/>Jede Sprache kann einen eigenen Antworttext haben, und der [PSEUDO] code wird durch Name oder Nickname des Besuchers ersetzt der eine Nachricht hinterl�sst.";
$f_lang['name_table_rep_auto'] = "Name der MySQL Tabelle welche die Automatisierten Antworttexte enth�lt.";
$f_lang['gestion_reponses'] = "Anworten verwalten";
$f_lang['msg_remerciement'] = "Vielen Dank... Antwort";
$f_lang['txt_remerciement'] = "Hallo [PSEUDO],\n\nVielen dank, dass du dich auf meinem G�stebuch eingetragen hast!";
$f_lang['ok_save_msg_rem'] = "Die \"Vielen Dank... Antwort\" wurde gespeichert.";
$f_lang['envoyer_remerciement'] = "M�chten Sie, dass die \"Vielen Dank... Antwort\" versendet wird?";
$f_lang['remerciement'] = "Danke";
$f_lang['titre_guestbook'] = "G�stebuch Titel";
$f_lang['text_titre_guestbook'] = "<b>Sie k�nnen den Titel des G�stebuchs �ndern</b> und verschiedene Titel je nach Sprache vergeben.";
$f_lang['titre'] = "Titel";
$f_lang['parametrage'] = "Einstellungen";
$f_lang['ok_save_titre'] = "Der Titel wurde gespeichert.";
$f_lang['ville_visiteur'] = "Stadt :";
$f_lang['pays_visiteur'] = "Land :";
$f_lang['flag'] = "Flagge";
$f_lang['ville_modif'] = "Stadt";
$f_lang['pays_modif'] = "Land";
$f_lang['action'] = "Action";
$f_lang['repondre'] = "Antworten";
$f_lang['votre_reponse'] = "Ihre Antwort";
$f_lang['ok_reponse_mess'] = "Danke, Ihre Antwort wurde gespeichert";
$f_lang['defaut_titre_rep'] = "Webmaster's Nachricht";
$f_lang['annuler'] = "Abbrechen";
$f_lang['num_appari'] = "Zeige Nummer";
$f_lang['nb_max_smileys'] = "Maximale Anzahl an Smileys die angezeigt wird";
$f_lang['plus_smileys'] = "Mehr Smileys anzeigen";
$f_lang['liste_all_smilies'] = "Liste aller Smileys";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Diese Funktion erm�glicht es die letzten Eintr�ge Ihres G�stebuches anzuzeigen</b> auf einer anderen Seite Ihrer Wahl.";
$f_lang['parametrage_modele'] = "Template Einstellungen";
$f_lang['ok_save_boite'] = "Ihre Einstellungen wurden gespeichert";
$f_lang['format_date_boite'] = "Datum Format (identisch zur <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP Funktion)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maximale Anzahl von angezeigten Zeichen f�r den Nickname";
$f_lang['nbre_maxi_message_boite'] = "Maximale Anzahl von angezeigten Zeichen f�r die Nachricht";
$f_lang['modele_affichage_donnees'] = "Formular Template";
$f_lang['url_dossier_livre_boite'] = "Komplette URL zu Ihrem G�stebuch Verzeichnis";
$f_lang['url_livre_boite'] = "Komplette URL zu Ihrem G�stebuch index Dokument";
$f_lang['generation_code'] = "Javascript code Erzeugung";
$f_lang['nom_msg_afficher'] = "Anzahl der angezeigten Nachrichten";
$f_lang['generer_code'] = "Erzeuge Javascript Aufruf-code";
$f_lang['code_a_copier'] = "HTML Code der auf die Seite Ihrer Wahl kopiert wird";
$f_lang['erreur_boite_java'] = "Geben Sie bitte eine g�ltige Anzahl der angezeigten Nachrichten ein";
$f_lang['erreur_par_boite'] = "Einstellungsproblem, kann [BOUCLE] ... [/BOUCLE] nicht in Ihrem Template finden.";
$f_lang['saut_ligne_msg_boite'] = "Zeilenumbr�che in den Nachrichten erhalten";
$f_lang['message_a'] = "an";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;Datenbank verwalten?";
$f_lang['bdd'] = "Datenbank";
$f_lang['optimisation'] = "Optimieren";
$f_lang['sauvegarde'] = "Speichern";
$f_lang['restauration'] = "Wiederherstellen";
$f_lang['optimisation_txt'] = "<b>W�hrend Sie neue Eintr�ge hinzuf�gen und l�schen, sammelt sich ungenutzer Speicher in der Datenbank an.</b> Dieser kann schlecht f�r die Performanz der Datenbank sein, und somit f�r Ihre Webseite. Hier k�nnen Sie diese Problem l�sen indem Sie die Tabellen optimieren.";
$f_lang['liste_tables'] = "Liste der Tabellen in Ihrer Datenbank";
$f_lang['lancer_optimisation'] = "Starte Optimierung";
$f_lang['tables'] = "TABELLEN";
$f_lang['pertes'] = "VERLUSTE";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Die Tabellen mit Verlusten wurden optimiert";
$f_lang['txt_sauvegarde'] = "<b>Wenn Sie die G�stebuch Eintr�ge f�r lange Zeit aufheben m�chte, empfehlen wir periodische Backups.</b> Ein Festplattenversagen k�nnte all Ihre Daten zerst�ren. Weiters ist ein Backup n�tzlich, um die Eintr�ge auf einen anderen Server zu �bertragen.";
$f_lang['lancer_sauvegarde'] = "Backup starten";
$f_lang['lancer_restauration'] = "Wiederherstellen starten";
$f_lang['txt_restauration'] = "<b>Wenn sie ein Backup gemacht haben, k�nnen Sie die komplette G�stebuch Datenbank wiederherstellen</b> W�hlen Sie dazu einfach die richtige Datei auf Ihrer Festplatte.<br/><br/><b><u>ACHTUNG</u></b>, wenn diese Datei sehr gross ist (mehrere Megabytes), kann die Wiederherstellung Probleme mit Ihrem Website Anbieter verursachen (set_time_limit() und maximale dateigr�sse f�r uploads).";
$f_lang['select_file'] = "W�hlen Sie eine Backup Datei auf Ihrer Festplatte or dem Server (.ZIP oder .SQL)";
$f_lang['confirm_restauration'] = "M�chten Sie wirklich die Wiederherstellung starten und somit alle aktuell vorhandenen Daten l�schen?";
$f_lang['select_file_restau'] = "Bitte w�hlen Sie eine Datei auf Ihrer Festplatte";
$f_lang['erreur_ext_restau'] = "Die gew�hlte Datei-Endung ist nicht .ZIP oder .SQL, die Wiederherstellung konnte nicht ausgef�hrt werden.";
$f_lang['conseil_zip'] = "(Entpacken Sie die ZIP Datei um an das SQL Skript heranzukommen)";
$f_lang['erreur_ext_zip'] = "Die PHP_ZIP extension ist nicht verf�gbar auf Ihrem Server, somit ist die Wiederherstellung mittels ZIP Datei nicht m�glich. Bitte w�hlen sie eine .SQL Datei auf Ihrer Festplatte".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Fehler beim lesen des ZIP Archivs, Wiederherstellung schlug fehl. Sie k�nnen es mit einer .SQL Datei erneut versuchen ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Die gew�hlte SQL Datei scheint nicht ein @lex Guestbook Skript zu sein. Wiederherstellungen kann nicht ausgef�hrt werden.";
$f_lang['restauration_terminee'] = "Wiederherstellung erfolgreich ausgef�hrt.";

							/* V5 */
$f_lang['name_table_ban'] = "Name der Tabelle f�r gesperrte IP, nicknames und E-mails";
$f_lang['ok_validation'] = "Danke, die �berpr�fung wurde durchgef�hrt";
$f_lang['selectionner_tous_messages'] = "Alle an-/abw�hlen";
$f_lang['admin_send_mail'] = "Sollen die Administratoren eine E-mail erhalten wenn eine neue Nachricht eingelangt ist?";

//ajout bannissement
$f_lang['bannissement'] = "Sperren";
$f_lang['admin_gestion_bannissement'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;Verwalte die Sperren?";
$f_lang['interdit_de_message'] = "Ihre Nachricht wurde nicht gespeichert. Um den Grund f�r die Abweisung zu erfahren muss Javascript aktiviert sein. Bitte �ndern Sie Ihre Nachricht der Fehlermeldung entsprechend ab.";
$f_lang['valider_mess'] = "Die oben genannten �berpr�fungen anwenden";
$f_lang['erreur_ip'] = "IP Adresse ist ung�ltig";
$f_lang['erreur_ip1'] = "Bitte geben Sie Teil 1 der IP-Adresse an (Zahl 0-255 oder *)";
$f_lang['erreur_ip2'] = "Bitte geben Sie Teil 2 der IP-Adresse an (Zahl 0-255 oder *)";
$f_lang['erreur_ip3'] = "Bitte geben Sie Teil 3 der IP-Adresse an (Zahl 0-255 oder *)";
$f_lang['erreur_ip4'] = "Bitte geben Sie Teil 4 der IP-Adresse an (Zahl 0-255 oder *)*";
$f_lang['explication_bannir_mot'] = "Es gibt zwei M�glichkeiten um W�rter in den Nachrichten zu sperren. Entweder Sie zensieren welche (diese werden durch w�hlbaren Text oder Symbole ersetzt), oder die Nachricht wird abgelehnt.";
$f_lang['bannir_mot'] = "M�chten Sie Nachrichten die gesperrte W�rter enthalten ablehnen?<br/> Wenn Sie \"nein\" w�hlen, werden die W�rter durch den Text oder die Symbole die sie gew�hlt haben ersetzt.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Sperren von (nick)names";
$f_lang['admin_text_pseudo'] = "M�chten Sie verhindern, dass ein Benutzer <b>keine Nachrichten zum G�stebuch hinzuf�gen k�nnen soll</b>, dann k�nnen Sie dessen Namen/Nickname hier angeben. Der Platzhalter * steht f�r jegliches Zeichen oder Zahl";
$f_lang['ajouter_pseudo'] = "gesperrten (nick)name hinzuf�gen";
$f_lang['gestion_pseudo'] = "Nicknames Verwaltung";
$f_lang['sup_pseudo'] = "gew�hlte nicknames l�schen";
$f_lang['erreur_pseudo'] = "Bitte geben Sie den hinzuzuf�genden nickname an";
$f_lang['ok_aj_pseudo'] = "Dieser nickname ist von nun an gesperrt";
$f_lang['verif_sup_pseudo'] = "M�chten Sie wirklich alle gew�hlten nicknames l�schen?";

/* bannir des emails */
$f_lang['bannir_emails'] = "Sperren von E-mail Adressen";
$f_lang['admin_text_email'] = "M�chten Sie verhindern, dass ein Benutzer <b>keine Nachrichten zum G�stebuch hinzuf�gen k�nnen soll</b>, dann k�nnen Sie dessen E-mail hier angeben. Der Platzhalter * kann verwendet werden um z.B. eine ganze Domain zu sperren: *@spamdomain.com";
$f_lang['ajouter_email'] = "gesperrte E-mail Adresse hinzuf�gen";
$f_lang['gestion_email'] = "E-mail Adress-Verwaltung";
$f_lang['sup_email'] = "gew�hlte E-mail Adressen l�schen";
$f_lang['erreur_email'] = "Bitte geben Sie eine E-mail Adresse an";
$f_lang['ok_aj_email'] = "Diese E-mail Adresse ist von nun an gesperrt";
$f_lang['verif_sup_email'] = "M�chten Sie wirklich alle gew�hlten E-mail-Adressen l�schen?";

$f_lang['no_pseudo'] = "ACHTUNG\\nIhr (nick)name wurde gesperrt, es ist Ihnen nicht erlaubt auf diesem G�stebuch Nachrichten zu hinterlassen.";
$f_lang['no_email'] = "ACHTUNG\\nIhre E-mail Adresse wurde gesperrt, es ist Ihnen nicht erlaubt auf diesem G�stebuch Nachrichten zu hinterlassen.";
$f_lang['no_ville'] = "ACHTUNG\\nDie angegebene Stadt ist nicht korrekt, es ist Ihnen nicht erlaubt auf diesem G�stebuch Nachrichten zu hinterlassen.";
$f_lang['no_mot'] = "ACHTUNG\\nIhre Nachricht enth�lt gesperrte/zensierte W�rter, es ist Ihnen nicht erlaubt auf diesem G�stebuch Nachrichten zu hinterlassen.\\nBitte �ndern Sie Ihre Nachricht!";

// interdiction des URL
$f_lang['url_interdite'] = "ACHTUNG\\nURL in Nachrichten sind nicht erlaubt";
$f_lang['url_interdites'] = "M�chten Sie URL innerhalb einer Nachricht verbieten?";
$f_lang['url_cliquables'] = "Sollen URL innerhalb einer Nachricht klickbar sein?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "Name der Tabelle f�r Konfigurationsparameter";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "Sie k�nnen die Zeit-Differenz zwischen Server und Ihres Landes hier anpassen. Auf 0 belassen wenn Sie die Zeit nicht anpassen m�chten.";
$f_lang['heures'] = "Stunden";
$f_lang['secondes'] = "Sekunden";
$f_lang['admin_erreur_decalage_horaire'] = "Sie m�ssen eine Zeitdifferenz zwischen -12 und +12 angeben";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "Sie k�nnen den letzen Administrator nicht l�schen";

// d�sactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Smileys erlauben?";

// pour emp�cher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "ACHTUNG\\nDie G�ltigkeitsdauer f�r Session is zu kurz!\\nBitte geben Sie einen Wert gr�sser als 300 Sekunden an";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "M�chten Sie das G�stebuch in ein PHP Dokument inkludieren?";
$f_lang['admin_inclure_livre_code'] = "Hier ist der PHP code, den Sie in Ihr PHP script zwischen &lt;?php und!&gt; einf�gen k�nnen.\n\nWeiters m�ssen sie das \$chem_absolu array im /index.php des G�stebuches �ndern und das CSS in der aufrufenden Seite einbetten (siehe FAQ f�r weitere Erkl�rungen).";
$f_lang['admin_fichier_inclusion'] = "Geben Sie den absoluten Pfad zur Datei an in die das G�stebuch inkludiert werden soll (/verzeichnis1/verzeichnis2/datei_in_die_inkludiert_wird.php). Nach dem klicken auf \"Speichern\" sehen sie den kompletten Pfad der verwendet wurde.";
$f_lang['admin_fichier_inclusion_erreur'] = "ACHTUNG\\nSie haben einen ung�ltigen Pfad zur include-Datei angegeben\\nDer Pfad soll aussen wie z.B. /verzeichnis1/verzeichnis2/datei_in_die_inkludiert_wird.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "nicht vorschlagen";
$f_lang['admin_champ_obligatoire'] = "verpflichtend";
$f_lang['admin_champ_prive'] = "privat";
$f_lang['admin_champ_pseudo'] = "Besucher k�nnen Nicknamen eingeben";
$f_lang['admin_champ_ville'] = "Besucher k�nnen Ihre Stadt eingeben";
$f_lang['admin_donner_focus'] = "Soll das 'Nickname' Feld vor-ausgew�hlt sein (Fokus im Eingabefeld) wenn die Seite geladen wird?";
$f_lang['champ_obligatoire_vide'] = "Mindestens ein Feld (ausgezeichnet mit *) ist leer. Bitte f�llen Sie diese Felder aus.";
$f_lang['erreur_add_nom'] = "Bitte geben Sie Ihren Namen ein";
$f_lang['erreur_add_email'] = "Bitte geben Sie Ihre E-mail Adresse ein";
$f_lang['erreur_add_site'] = "Bitte geben Sie Ihre Website Adresse ein";
$f_lang['erreur_add_ville'] = "Bitte geben Sie Ihre Stadt ein";
$f_lang['erreur_add_pays'] = "Bitte geben Sie Ihr Land ein";
$f_lang['erreur_add_note'] = "Bitte w�hlen Sie eine Bewertung";
$f_lang['erreur_add_message'] = "Bitte geben Sie Ihre Nachricht ein";
$f_lang['erreur_url'] = "Die Adresse Ihrer Webseite schein ung�ltig zu sein";

// code de s�curit� : v�rification de la pr�sence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">Sie k�nnen die 'security code' Option nicht nutzen!<br/>\nIhr server unterst�tzt nicht die GD2 Bibliothek die daf�r notwendig ist!</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "M�chten Sie den Link zur Administration in der Fusszeile der Seite anzeigen?";
$f_lang['admin_lien_accueil'] = "M�chten Sie einen Link zu Ihrer Seite (oder zur�ck zu einer anderen) anzeigen?";
$f_lang['admin_chemin_lien_accueil'] = "Wenn Sie dieses Feld leer lassen, wird der Link zu dieser Homepage f�hren. Alternativ k�nnen sie einen absoluten Pfad zu einer Seite Ihrer Wahl angeben (z.B. /folder1/page1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "Der Pfad den Sie angegeben haben ist ung�ltig. Bitte verwenden Sie einen absoluten Pfad (z.B. /folder1/page1.htm).";
$f_lang['texte_lien_accueil'] = "Zur�ck zur Homepage";
$f_lang['texte_lien_admin'] = "G�stebuch verwalten";

$f_lang['admin_retour_livre'] = "G�stebuch anzeigen";

// symboles champs priv�s/obligatoires sur le formulaire
// /!\ ACHTUNG, maximum 90 caract�res
$f_lang['information_champ_prive'] = "Der Inhalt dieses Feldes ist nur f�r Administratoren Sichtbar.";
$f_lang['information_champ_obligatoire'] = "Dieses Feld ist verpflichtend, um eine Nachricht abzusenden.";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Server (normalerweise: localhost)";

$f_lang['name_table_txt_lang'] = "Name der Tabelle die angepasste Texte enth�lt (z.B. G�stebuch Titel)";

$f_lang['erreur_host'] = "Bitte geben Sie einen Datenbank Server an";

$f_lang['erreur_ecriture'] = "<b>FEHLER</b>, konnte auf \"config/\" Verzeichnis nicht zugreifen.<br/><br/>Bitte �ndere die Unix Rechte des \"config\" Verzeichnisses (z.B. chmod 777), und versuch es nocheinmal mit der installation: <a href=\"./setup.php\"><b>zur�ck</b></a>.";

$f_lang['options_livre'] = "G�stebuch Einstellungen";

$f_lang['text1'] = "<b>Zensierte W�rter werden automatisch ersetzt</b>. Sie k�nnen z.B. alle Schimpfw�rter mit einem Text wie \"**zensiert**\" ersetzen lassen.<br/>Sollten Sie die Option \"Nachrichten ablehnen\" gew�hlt haben, werden Nachrichten die zensierte W�rter enthalten abgelehnt, und somit nicht gespeichert. <u>Sie m�ssen dennoch einen Ersatztext angeben</u>, denn dann k�nnen Sie zwischen ersetzen und ablehnen hin- und herwechseln.";

/* Erreur si fichier install present */
$f_lang['erreur_fic_install_present'] = "For security reasons, to use your guestbook you have to delete file setup.php and folder update/";
?>