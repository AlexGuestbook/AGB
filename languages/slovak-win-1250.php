<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2011    //
//         Hercelin Maxime (c) 2005 - 2011   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
///////////////////////////////////////////////

/* Encodage utilis� dans le script */
$SCRIPT_ENCODAGE = "windows-1250";
$CONTENT_LANGUAGE = "sk";

/* setup */
$f_lang['install_auto'] = "Automatick� in�tal�cia";
$f_lang['identi_base'] = "Datab�za ID";
$f_lang['type_base'] = "Typ datab�zy";
$f_lang['user_base'] = "U�ivate�sk� meno";
$f_lang['pass_base'] = "Heslo";
$f_lang['nom_base'] = "N�zov datab�zy";
$f_lang['nom_table'] = "N�zvy tabuliek";
$f_lang['name_table_sessions'] = "Sessions tabu�ka";
$f_lang['name_table_users'] = "Tabulka u��vate�ov";
$f_lang['name_table_messages'] = "Tabu�ka pre ukladanie spr�v";
$f_lang['name_table_censure'] = "Tabu�ka zak�zan�ch slov";
$f_lang['name_table_ip'] = "Tabu�ka blokovan�ch IP adres";
$f_lang['name_table_smileys'] = "Tabu�ka smajl�kov";
$f_lang['extension_script'] = "Pr�pona skriptov";
$f_lang['choose_extension'] = "Vyberte pr�ponu pre skripty<br>(odpor��ame \"php\", inak budete musie� premenova� v�etky s�bory na v�mi zvolen� pr�ponu)";
$f_lang['identi_acces_admin'] = "Va�e prihlasovacie �daje do administr�torsk�ho panelu";
$f_lang['login_admin'] = "U�ivate�sk� meno";
$f_lang['pass_admin'] = "Heslo";
$f_lang['verif_pass_admin'] = "Zopakujte heslo";
$f_lang['email_admin_setup'] = "V� email";
$f_lang['installer'] = "In�talova�";
$f_lang['erreur_host'] = "Nie je vyplnen� �daj o datab�zovom serveri";
$f_lang['erreur_user'] = "Nie je vyplnen� u�ivate�sk� meno k datab�ze";
$f_lang['erreur_nom_base'] = "Nie je vyplnen� meno datab�zy";
$f_lang['erreur_log_admin'] = "Nie je vyplnen� Va�e u�ivate�sk� meno pre pr�stup do administr�torsk�ho rozhrania";
$f_lang['erreur_pass_admin'] = "Nie je vyplnen� Va�e heslo pre pr�stup do administr�torsk�ho rozhrania";
$f_lang['erreur_pass_differents'] = "POZOR, zadan� hesla sa nezhoduj�.";
$f_lang['erreur_first_connexion'] = "<b>CHYBA, nepodarilo sa pripoji� k datab�ze.</b><br><br>skontrolujte pros�m prihlasovacie �daje : <a href=\"javascript:history.go(-1);\"><b>nasp�</b></a>.";
$f_lang['erreur_install'] = "In�tal�cia sa nepodarila.";
$f_lang['ok_install'] = "In�tal�cia bola �spe�n�";
$f_lang['text_ok_install'] = "<b>V�aka ! In�tal�cia bola �spe�n�.</b><br><br>Z bezpe�nostn�ch d�vodov d�razne odpor��ame zmaza� in�tala�n� pr�ve pou�it� skript (\"setup.php\"), ke� ho neodstr�nite, tak ktoko�vek ho m��e pou�i� k modifik�ci�/zni�eniu va�ich konfigura�n�ch s�borov.<br><br>Teraz m��ete spravova� Va�u n�v�tevn� knihu kliknut�m <a href=\"".$chem_absolu."admin/\" target=\"_blank0\"><b>tu</b></a> alebo<br> ju pozrie� poh�adom n�v�tevn�ka <a href=\"".$chem_absolu."\" target=\"_blank1\"><b>tu</b></a>. Odkazy sa otv�raj� v novom okne.";

/* administration */
$f_lang['page protect'] = "Chr�nen� str�nka";
$f_lang['login'] = "U�iv. meno";
$f_lang['pass'] = "Heslo";
$f_lang['value identif'] = "Prihl�si�";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Mo�nosti";
$f_lang['script'] = "Glob�lne nastavenia";
$f_lang['graphismes'] = "Vzh�ad n�v�. knihy";
$f_lang['messages'] = "Spr�vy";
$f_lang['gestion'] = "�pravy";
$f_lang['censure_mots'] = "Cenz�ra slov";
$f_lang['smileys'] = "Smajl�ky";
$f_lang['utilisateurs'] = "Administr�tori";
$f_lang['ajouter'] = "Prida�";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "O produkte...";
$f_lang['donner_avis'] = "V� n�zor";
$f_lang['deconnexion'] = "odhl�si�";

 /* options */
 $f_lang['options_livre'] = "Nastavenia knihy host�";
$f_lang['options_generales'] = "S�hrnn� parametre";
$f_lang['langue'] = "Jazyk";
$f_lang['send_mail'] = "Chcete, aby administr�tor e-mailom obdr�al nov� vlo�en� spr�vy ?";
$f_lang['avert_mail'] = "<br>(<b>pozor</b> : funkcia mail() na va�om serveri je vypnut�, tak�e ani pri za�krtnutej vo�be \"�no\" nem��ete dost�va� e-mailov� upozornenia)";
$f_lang['oui'] = "�no";
$f_lang['non'] = "nie";
$f_lang['options_modules'] = "Jednotliv� polia knihy host�";
$f_lang['admin_champ_email'] = "N�v�tevn�k m��e zada� e-mailov� adresu";
$f_lang['admin_champ_site'] = "N�v�tevn�k m��e zada� adresu jeho www str�nok";
$f_lang['admin_champ_pays'] = "N�v�tevn�k m��e zada� mesto a krajinu";
$f_lang['admin_champ_note'] = "N�v�tevn�k m��e hodnoti� va�e str�nky";
$f_lang['admin_ok_aff_moteur'] = "Spr�stupni� vyh�ad�va�om";
$f_lang['options_tech'] = "Technick� parametre";
$f_lang['url_recharger'] = "Str�nka pre aktualiz�ciu n�v�tevnej knihy";
$f_lang['url_variables'] = "Premenn� pou��van� ako parameter (zadajte # namiesto $ v n�zve premennej)";
$f_lang['temps_session'] = "Doba platnosti session pre administr�torsk� rozhranie (v sekund�ch)";
$f_lang['skin_to_use'] = "Pou�it� vzh�ad";
$f_lang['enregistrer'] = "Ulo�i�";
$f_lang['nb_pages'] = "Po�et spr�v zobrazen�ch na jednej str�nke v knihe host�";
$f_lang['merci_options'] = "V�aka, parametre boli aktualizovan�";
$f_lang['erreur_options'] = "CHYBA\\nParametre sa nepodarilo ulo�i�, nebolo mo�n� zapisova� do s�boru \\\"config.".$alex_livre_ext."\\\", pre zmenu nastaven� editujte tento s�bor pomocou textov�ho editora.";
$f_lang['temps_ip_post'] = "Po�et min�t, po ktor�ch m��e n�v�tevn�k vlo�i� �al�iu spr�vu";
$f_lang['minutes'] = "min�t";
$f_lang['cut_mots'] = "Max. d�ka slova - dlh�ie slov� bud� rozdelen�";
$f_lang['format_date'] = "Form�t data";

/* skins */
$f_lang['ok_ajouter'] = "V�aka, vzh�ad bol �spe�ne vytvoren�";
$f_lang['erreur_ajouter'] = "CHYBA\\nVzh�ad sa nepodarilo vytvori�, vytvorte ho ru�ne";
$f_lang['text1_2'] = "Vzh�ad bol ulo�en� do zlo�ky &quot;templates/skins/&quot;. Toto rozhranie v�m umo��uje ho jednoducho zmeni�, ale m��ete tak �init aj ru�ne, a to edit�ciou html souboru.";
$f_lang['text2'] = "<b>Ak chcete zmeni� aj vh�ad masky administr�torsk�ho rozhrania</b> modifikujte pros�m ru�ne s�bory v prie�inku &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "Prida� vzh�ad";
$f_lang['ajouter'] = "Prida�";
$f_lang['gestion_skins'] = "Spr�va vzh�adu";
$f_lang['vous_editez'] = "Pr�ve modifikujete tento vzh�ad :";
$f_lang['style'] = "s�bor �t�lov";
$f_lang['ajouter_message'] = "sekcia: prida� spr�vu";
$f_lang['nbre_messages_page'] = "sekcia: po�et spr�v/str�n";
$f_lang['pages_dispos'] = "sekcia: zoznam str�nok / �al�ia strana - predch�zdaj�ca strana";
$f_lang['texte_corps_messages'] = "telo spr�vy";
$f_lang['espacement'] = "medzera mezi 2 spr�vami";
$f_lang['text_assembly'] = "s�bor skladaj�ci predch�dzaj�ce sekcie";
$f_lang['ok_edit_skin'] = "V�aka, vzh�ad bol aktualizovan�";
$f_lang['erreur_edit_skin'] = "CHYBA\\nJeden alebo viac s�borov vzh�adu nebolo mo�n� aktualizova�. Upravte pros�m tieto s�bory ru�ne.";
$f_lang['ajouter'] = "Prida�";
$f_lang['supprimer'] = "Zmaza�";
$f_lang['text_sup_skin'] = "zmaza� vzh�ad";
$f_lang['ok_supprimer'] = "V�aka, vzh�ad bol vymazan�.";
$f_lang['erreur_supprimer'] = "CHYBA\\nJeden alebo viac s�borov vzh�adu se nepodarilo vymaza�, mus�te ich vymaza� ru�ne.";

/* page des mots censur�s */
$f_lang['aj_mot'] = "Prida� slovo "; 
$f_lang['mot_interdit'] = "Zak�zan� slovo :";
$f_lang['remplacer_par'] = "Nahradi� slovom :";
$f_lang['gestion_censure'] = "Spr�va zak�zan�ch slov";
$f_lang['mot'] = "slovo";
$f_lang['remplace_by'] = "nahraden� slovom";
$f_lang['liste_jour'] = "Aktualizova� zoznam";
$f_lang['sup_mots'] = "Zmaza� vybran� slov�";
$f_lang['erreur_aj_censure1'] = "Zadajte pros�m slovo, ktor� se m� cenzurova�";
$f_lang['erreur_aj_censure2'] = "Zadejte pros�m slovo, ktor� m� by� pou�it� ako n�hrada";
$f_lang['ok_aj_mot'] = "V�aka, zak�zan� slovo bolo pridan�.";
$f_lang['verif_sup'] = "Chcete skuto�ne definit�vne vymaza� vybran� slov� ?";
$f_lang['merci_modif'] = "V�aka, zmeny boli ulo�en�";

/* bannir des ip */
$f_lang['bannir_ip'] = "Zak�zan� IP";
$f_lang['text_ip1'] = "Ka�d� n�v�tevn�k m� p�idelen� �pecifick� ��seln� IP adresu (napr. 201.10.25.14). T�to adresa je pride�ovan� poskytovate�om internetu pri pripojen� a men� sa, teoreticky, kedyko�vek sa n�v�tevn�k znovu pripoj� do internetu.";
$f_lang['text_ip2'] = "Ak chcete <b>zak�za� n�v�tevn�kovi vkl�da� spr�vu do va�ej n�v�tevnej knihy</b>, m��ete sem zada� jeho IP adreseu. M��ete taktie� zak�za� rozsah IP adries pou�it�m z�stupn�ho symbolu * (napr. 201.15.55.*, alebo napr. 158.*.*.*).";
$f_lang['ajouter_ip'] = "Prida� zak�zan� IP adresu";
$f_lang['gestion_ip'] = "Spr�va IP adries";
$f_lang['sup_ip'] = "Odobra� vybran� IP adresy";
$f_lang['ok_aj_ip'] = "V�aka, t�to IP adresa je teraz zak�zan�";
$f_lang['verif_sup_ip'] = "Skuto�ne chcete zmaza� vybran� IP adresy ?";

/* smileys */
$f_lang['gestion_smileys'] = "Spr�va smajl�kov";
$f_lang['text_smileys'] = "<b>Smajl�ky dovo�uj� vyjadri� n�v�tevn�kovi jeho em�cie</b> pri z�pisu. V tomto rozhran� m��ete jednoducho prid�vat alebo maza� smajl�ky tak, aby mal nav�tevn�k z �oho vybera� :o)<br><br>Smajl�ky z tejto str�nky s� ulo�en� v prie�inku \"images/smileys\".";
$f_lang['ajouter_smiley'] = "Prida� smajl�ka";
$f_lang['image_smiley'] = "Obr�zok";
$f_lang['car_replace'] = "Zodpovedaj�ci k�d";
$f_lang['gestion_smileys'] = "Spr�va smajl�kov";
$f_lang['sup_smileys'] = "Zmaza� vybran� smajl�ky";
$f_lang['erreur_image'] = "Vyberte pros�m smajl�ka";
$f_lang['erreur_car'] = "Vyberte pros�m zodpovedaj�ci k�d pre smajl�ka";
$f_lang['ok_aj_smiley'] = "V�aka, smajl�k bol �spe�ne pridan�";
$f_lang['no_smiley'] = "Smajl�ky m��u by� iba vo form�te GIF alebo JPEG";
$f_lang['copy_impossible'] = "CHYBA\\nSmajl�ka se nepodarilo nahr� do slo�ky \\\"images/smileys\\\".";
$f_lang['car_replace_exist'] = "CHYBA\\nTento k�d u� v datab�ze existuje.";
$f_lang['modif_smileys'] = "Aktualizova� v�etk�ch smajl�kov";
$f_lang['verif_sup_smileys'] = "Skuto�ne chcete vymaza� vybran�ch smajl�kov ?";
$f_lang['merci_modif_smileys'] = "v�aka, smajl�ky boli upraven�.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Prida� administr�tora n�v�tevnej knihy";
	$f_lang['add_admin_2'] = "Prida� administr�tora";
	$f_lang['ajouter_admin'] = "Prida�";
	$f_lang['name_ajouter_admin'] = "prida�";
}
else{
	$f_lang['add_admin_texte'] = "�prava administr�tora n�v�t.knihy";
	$f_lang['add_admin_2'] = "Upravi� administr�tora";
	$f_lang['ajouter_admin'] = "Ulo�i�";
	$f_lang['name_ajouter_admin'] = "upravi�";
}

$f_lang['identif_connexion'] = "Prihlasovacie meno";
$f_lang['passe_admin'] = "Heslo";
$f_lang['email_admin'] = "E-mail (d�le�it� v pr�pade, ke� admin m� dost�va� e-maily po vlo�en� spr�vy)";
$f_lang['admin_receive_email'] = "Chcete, aby admin dost�val e-mail po ka�dej vlo�enej spr�ve ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;m��e meni� parametre skriptov ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;m��e meni� vzh�ad ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravova� vlo�en� spr�vy ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravova� zak�zan� slov� ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravova� smajl�ky ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravova� ��ty �al��ch administr�torov ?";
$f_lang['erreur_name'] = "Zadajte pros�m u�ivate�sk� meno";
$f_lang['erreur_passe'] = "Zadajte pros�m heslo";
$f_lang['erreur_email'] = "Zadajte pros�m e-mail";
$f_lang['ok_aj_admin'] = "V�aka, ��et bol �spe�ne vytvoren�";
$f_lang['ok_modif_admin'] = "V�aka, ��et bol aktualizovan�";
$f_lang['erreur_aj_admin'] = "CHYBA\\nToto u�ivate�sk� m�no u� existuje";
$f_lang['revenir'] = "Nasp� na predch�dzaj�cu str�nku";

/* gestion des admins */
$f_lang['gest_admin'] = "Spr�va administr�torov";
$f_lang['sup_admin'] = "odobra�";
$f_lang['login_admin'] = "prihlasovacie meno";
$f_lang['email_admin'] = "E-mail";
$f_lang['modif_admin'] = "zmeni�";
$f_lang['value_sup_admin'] = "Odobra� vybran�ch administr�torov";
$f_lang['verif_sup_admin'] = "Skuto�ne chcete odebra� vybran�ch administr�torov ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "STR�NKA NIE JE DOSTUPN�";
$f_lang['erreur_auth'] = "Chyba pri prihl�sen�";
$f_lang['erreur_droits'] = "Nem�te zodpovedaj�ce pr�va pre pr�stup na t�to str�nku.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Priemern� zn�mka, udelen� n�v�tevn�kmi, t�mto str�nkam :";
$f_lang['title_guestbook'] = "Na�a n�v�tevn� kniha";
$f_lang['note_super'] = " : super !";
$f_lang['note_moyen'] = " : priemer";
$f_lang['note_rate'] = " : prepad�k";
$f_lang['nom_pseudo_visiteur'] = "Meno alebo prez�vka :";
$f_lang['email_visiteur'] = "E-mail :";
$f_lang['site_web_visiteur'] = "WWW adresa";
$f_lang['ville_pays_visiteur'] = "Mesto / Krajina :";
$f_lang['note_visiteur'] = "Va�e hodnotenie :";
$f_lang['message_visiteur'] = "Va�a spr�va :";
$f_lang['ajouter_message_visiteur'] = "Vlo�i� t�to spr�vu";
$f_lang['erreur_add_nom'] = "Zadajte pros�m Va�e meno";
$f_lang['erreur_add_message'] = "Zadajte pros�m Va�u spr�vu";
$f_lang['erreur_mail'] = "Va�a e-mailov� adresa nie je spr�vna";
$f_lang['messages'] = "Spr�vy";
$f_lang['messages_a'] = "a�";
$f_lang['page'] = "Str�nka";
$f_lang['nbre_messages'] = "Po�et spr�v";
$f_lang['message_le'] = "d�a";
$f_lang['message_note'] = "Hodnotenie";
$f_lang['send_mail_to'] = "Posla� e-mail";
$f_lang['go_home'] = "Nav�t�vte str�nky";
$f_lang['precedente'] = "&lt;&lt; predch�dzaj�ca";
$f_lang['suivante'] = "�al�ia &gt;&gt;";
$f_lang['no_message'] = "Nie s� tu �iadn� spr�vy.";
$f_lang['no_ip'] = "POZOR\\nVa�a IP adresa je zak�zan�, nem�te pr�vo vkl�da� spr�vy do tejto n�v�tevnej knihy.";
$f_lang['ok_post'] = "V�aka! Va�a spr�va bola �spe�ne vlo�en�.";
$f_lang['time_erreur'] = "POZOR\\nVa�a spr�va nemohla by� vlo�ena, vkl�dali ste ju pred chv�kou.";
$f_lang['text_select_search'] = "Uk�za� iba spr�vy obsahuj�ce n�sleduj�ce slov�";
$f_lang['text_ok_search'] = "Ok";

/* mail envoy� */
$f_lang['mail_object'] = "[INFO] - Nov� spr�va vo va�ej n�v�tevnej knihe - ";
$f_lang['mail_message'] = "Dobr� de�,\n\ndo Va�ej n�v�tevnej knihy bola vlo�ena nov� spr�va ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Spr�va spr�v :)";
$f_lang['selectionner_pages'] = "Vybra�";
$f_lang['messages_gest'] = "spr�va";
$f_lang['page_gest'] = "str�nka";
$f_lang['aller_en_page'] = "Cho� na stranu";
$f_lang['supprimer_gest'] = "vymaza�";
$f_lang['auteur_gest'] = "author";
$f_lang['modifier_gest'] = "opravi�";
$f_lang['supprimer_mess_selected'] = "Vymaza� vybran� spr�vy";
$f_lang['verif_sup_mess'] = "Skuto�ne chcete vymaza� vybran� spr�vy ?";

/* modifier un message */
$f_lang['modif_mess'] = "Opravi� spr�vu";
$f_lang['message_modif'] = "Spr�va";
$f_lang['nom_modif'] = "Meno";
$f_lang['email_modif'] = "E-mail";
$f_lang['site_web_modif'] = "WWW str�nky";
$f_lang['note_modif'] = "Hodnotenie Va�ich str�nok";
$f_lang['ville_pays_modif'] = "Mesto / Krajina";
$f_lang['date_modif'] = "D�tum vlo�enia";
$f_lang['ip_modif'] = "IP adresa";
$f_lang['ok_modif_mess'] = "V�aka, zmeny boli ulo�en�";

/* titre des pages */
$f_lang['title identification'] = "identifik�cia";
$f_lang['title administration'] = "administr�cia";
$f_lang['title frame gauche'] = "�av� r�m";
$f_lang['title options'] = "vo�by";
$f_lang['title skins'] = "vzh�ad";
$f_lang['title censure'] = "zak�zan�ch slov";
$f_lang['title censure'] = "spr�va zak�zan�ch IP";
$f_lang['title smileys'] = "spr�va smajl�kov";
$f_lang['title add admin'] = "pridanie administr�tora";
$f_lang['title gest admin'] = "spr�va administr�torov";
$f_lang['title erreur'] = "chyba";
$f_lang['title gestion mess'] = "spr�va spr�v";
$f_lang['title modif mess'] = "modifik�cia spr�vy";
$f_lang['title setup'] = "in�tal�cia";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Zlyhalo pripojenie k datab�ze";
$f_lang['erreur_connexion'] = "Va�e prihlasovacie �daje nie s� spr�vne";
$f_lang['manque login'] = "Zadajte pros�m Va�e prihlasovacie meno";
$f_lang['manque pass'] = "Zadajte pros�m Va�e heslo";
$f_lang['end session'] = "Va�a rel�cia bola ukon�en�";

/* add version 3.11 */
$f_lang['addSignature'] = "Vlo�i� nov� spr�vu";
$f_lang['seeMessages'] = "��ta� spr�vy";
$f_lang['addMessageBlocAdd'] = "Prida� spr�vu do n�v�tevnej knihy";

/* add version 3.2 */
$f_lang['version'] = "Verzia";
$f_lang['new_version_dispo'] = "Je k dispoz�cii nov� verzia N�v�tevnej knihy";
$f_lang['version_courrante'] = "S��asn� verzie skriptov";
$f_lang['info_version'] = "Inform�cie o Va�ej verzii";
$f_lang['version_txt_ok'] = "Va�a verzie je ".$alex_livre_version.",<br>t�to verzia je najnov�ia, netreba aktualizova�.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "Va�a verzia je ".$alex_livre_version.", <b>k dispoz�ci� je nov�ia verzia</b>";
$f_lang['version_down'] = "Stiahn�� nov� verziu";
$f_lang['help_update'] = "Pomoc pri aktualizaci�";
$f_lang['spam'] = "USER AGENT Va�eho prehliada�a nebol identifikovan�, zd� sa, akoby sa nejak� robot pok��al automatizovane vlo�i� spr�vu. Ak tomu tak nie je, sk�ste to pros�m z in�ho prehliada�a.";
$f_lang['avis_spammeurs'] = "Pozn�mka pre spammerov";
$f_lang['txt_spammeurs'] = "<b>T�to n�v�tevn� kniha je chr�nen� pred spammermi</b>, E-mailov� a www adresy s� v zdrojovom k�de str�nok za�ifrovan�, preto je �plne zbyto�n� vkl�da� komer�n� odkazy, nebud� vidite�n� vo vyh�ad�va�och (naviac va�a spr�va bude aj tak vymazan�...)";
$f_lang['fermer'] = "Zavrie� toto okno";
$f_lang['valider_messages'] = "Chcete najpr prezrie� vlo�en� spr�vy pred ich zverejnen�m ?";
$f_lang['valide'] = "Schv�len� ?";
$f_lang['mess_valide'] = "T�to spr�va bola schv�lena";
$f_lang['mess_invalide'] = "Tato spr�va �ak� na schv�lenie";
$f_lang['info_mess_valide'] = "Schv�len� spr�va ?";
$f_lang['ok_post_valid'] = "V�aka ! Va�a spr�va bola �spe�ne vlo�en�, bude zverejnen� ihne� po webmastrovom schv�len�.";
$f_lang['see_skin'] = "Zobrazi� n�v�tevn� knihu v tomto vzh�ade";
$f_lang['maxi_car'] = "Maxim�lny povolen� po�et znakov vo spr�ve (0 = bez obmedzenia)";
$f_lang['il_reste'] = "Do Va�ej spr�vy m��ete nap�sa� e�te";
$f_lang['caracteres'] = "znakov";
$f_lang['sup_copyright'] = "Vymaza� copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Meno tabu�ky bezpe�nostn�ch k�dov";
$f_lang['add_code_securite'] = "Chcete, aby u�ivate� musel pred odoslan�m spr�vy prep�sa� bezpe�nostn� k�d?";
$f_lang['t_chem_dossier_fonts'] = "�plna cesta (URL) ku zlo�ke s font-ami";
$f_lang['t_color_txt_code'] = "Hexadecim�lny k�d farby textu";
$f_lang['t_color_background_code'] = "Hexadecim�ln� k�d farby pozadia";
$f_lang['veuillez_taper_code'] = "Op�te pros�m tento bezpe�nostn� k�d do pol��ka vpravo";
$f_lang['a_quoi_ca_sert'] = "A pre�o?";
$f_lang['why_code'] = "Pro� \"bezpe�nostn� k�d\" ?";
$f_lang['txt_why_code'] = "Umo��uje skontrolova�, �i spr�va bola vlo�en� skuto�n�m �iv�m n�v�tevn�kom a nie automaticky pracuj�c�m softv�rom.<br><br><b>Komer�n� spr�vy a spam s� zak�z�n�!</b>";
$f_lang['erreur_code_securite'] = "Zadajte pros�m bezpe�nostn� k�d";
$f_lang['erreur_saisie_code_securite'] = "V�mi zadan� bezpe�nostn� k�d nie je spr�vny. Pros�m, sk�ste to znova";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatick� odpove�";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spr�va automatickej odpovede?";
$f_lang['text_reponse_auto'] = "<b>Tu m��ete zada� text automatickej odpovede</b> odosielanej n�v�tevn�kovi, ktor� vlo�� spr�vu do Va�ej n�v�tevnej knihy. T�to spr�va bude odoslan�, ak t�to funkciu aktivujete v parametroch.<br><br>Ka�d� jazyk m� svoju vlastn� odpove� a k�d [PSEUDO] bude nahraden� menom alebo prez�vkou n�v�tevn�ka, ktor� spr�vu vlo�il.";
$f_lang['name_table_rep_auto'] = "Meno tabu�ky, ktor� obsahuje automatick� odpovede";
$f_lang['gestion_reponses'] = "Spr�va spr�v";
$f_lang['msg_remerciement'] = "V�aka za spr�vu";
$f_lang['txt_remerciement'] = "Dobr� de�, [PSEUDO],\n\v�aka za spr�vu v na�ej n�v�tevnej knihe!";
$f_lang['ok_save_msg_rem'] = "V�aka, automatick� odpove� bola ulo�ena.";
$f_lang['envoyer_remerciement'] = "Chcete, aby bylo automaticky odosielan� po�akovanie?";
$f_lang['remerciement'] = "V�aka";
$f_lang['titre_guestbook'] = "Titulok n�v�tevnej knihy";
$f_lang['text_titre_guestbook'] = "<b>M��ete zmeni� titulok n�v�tevnej knihy</b> a nap�sat svoj vlastn� pre ka�d� z jazykov.";
$f_lang['titre'] = "Titulok";
$f_lang['parametrage'] = "Nastavenia";
$f_lang['ok_save_titre'] = "V�aka, titulok bol ulo�en�.";
$f_lang['ville_visiteur'] = "Mesto :";
$f_lang['pays_visiteur'] = "Krajina :";
$f_lang['flag'] = "Vlajka";
$f_lang['ville_modif'] = "Mesto";
$f_lang['pays_modif'] = "Krajina";
$f_lang['action'] = "Akcia";
$f_lang['repondre'] = "Odpove�";
$f_lang['votre_reponse'] = "Va�a odpove�";
$f_lang['ok_reponse_mess'] = "V�aka, Va�a odpove� bola ulo�en�";
$f_lang['defaut_titre_rep'] = "Odpove� spr�vcu";
$f_lang['annuler'] = "Zru�";
$f_lang['num_appari'] = "Po�et in�talovan�ch smajl�k�";
$f_lang['nb_max_smileys'] = "Maxim�ln� po�et zobrazovan�ch smajl�kov";
$f_lang['plus_smileys'] = "Uka� �al��ch smajl�kov";
$f_lang['liste_all_smilies'] = "Zoznam v�etk�ch smajl�kov";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>T�to funkcia V�m umo��uje zobrazi� posledn� spr�vy, vlo�en� do Va�ej n�v�tevnej knihy,</b> na str�nke pod�a Va�ej vo�by.";
$f_lang['parametrage_modele'] = "Nastavenie masky";
$f_lang['ok_save_boite'] = "V�aka, Va�e nastavenie bolo ulo�en�";
$f_lang['format_date_boite'] = "Form�t data (zodpoved� <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>funkcii date()</b></a> jazyka PHP)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maxim�lny po�et znakov zobrazuj�c�ch sa z mena alebo prez�vky";
$f_lang['nbre_maxi_message_boite'] = "Maxim�ln� po�et znakov zobrazovan�ch zo spr�vy";
$f_lang['modele_affichage_donnees'] = "Maska";
$f_lang['url_dossier_livre_boite'] = "Dopl�te adresu URL ku zlo�ke s n�v�tevnou knihou";
$f_lang['url_livre_boite'] = "Dopl�te adresu URL �vodnej str�nky n�v�tevnej knihy";
$f_lang['generation_code'] = "Vytvorenie javascriptu";
$f_lang['nom_msg_afficher'] = "Po�et zobrazovan�ch spr�v";
$f_lang['generer_code'] = "Vytvori� javascriptov� k�d";
$f_lang['code_a_copier'] = "HTML k�d, ktor� mus� by� skop�rovan� do vybranej str�nky";
$f_lang['erreur_boite_java'] = "Zadajte pros�m platn� po�et zobrazovan�ch zpr�v";
$f_lang['erreur_par_boite'] = "Chyba v konfigur�ci�, nem��em vo va�ej maske n�js� sekciu [BOUCLE] ... [/BOUCLE].";
$f_lang['saut_ligne_msg_boite'] = "Ponecha� riadkovanie vo spr�vach";
$f_lang['message_a'] = "o";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravova� datab�zu ?";
$f_lang['bdd'] = "Database";
$f_lang['optimisation'] = "Optimaliz�cia";
$f_lang['sauvegarde'] = "Z�lohovanie";
$f_lang['restauration'] = "Obnovenie";
$f_lang['optimisation_txt'] = "<b>Po z�pisoch a vymaz�vaniach zostalo v tabu�k�ch datab�zy nevyu�it� miesto.</b> To nie je vhodn� z poh�adu r�chlosti odozvy a v�konu datab�zy a t�m aj Va�ich str�nok. T�to funkcia umo��uje rie�it probl�m optimaliz�ciou tabuliek.";
$f_lang['liste_tables'] = "Zoznam tabuliek vo Va�ej datab�ze";
$f_lang['lancer_optimisation'] = "Sp���am optimaliz�ciu";
$f_lang['tables'] = "TABU�KY";
$f_lang['pertes'] = "NAVIAC";
$f_lang['octets'] = "bytov";
$f_lang['ok_optimise'] = "V�aka, optimaliz�cia tabuliek bola preveden�";
$f_lang['txt_sauvegarde'] = "<b>Ak chcete archivova� spr�vy dlh�� �as, d�razne odpor��ame pravideln� z�lohovanie d�t.</b> Probl�m s hardv�rom m��e zni�i� v�etky Va�e d�ta. Z�loha m��e by� taktie� u�ito�n� pri prechode na in� server.";
$f_lang['lancer_sauvegarde'] = "Spusti� z�lohovanie";
$f_lang['lancer_restauration'] = "Spusti� obnovu";
$f_lang['txt_restauration'] = "<b>Ak m�te k dispoz�ci� z�lohu, m��ete kompletne obnovi� d�ta Va�ej n�v�tevnej knihy</b> Jednoducho na Va�om disku vyberte zodpovedaj�ci s�bor so z�lohou .<br><br><b><u>POZOR</u></b>, ak je tento s�bor pr�li� ve�k� (nieko�ko megabytov), m��e pri obnove d�js� k probl�mu, z 
d�vodu nastavenia V�ho servera (�asov� limit behu skriptu alebo maxim�lne povolen� ve�kos� nahr�van�ho s�boru).";
$f_lang['select_file'] = "Vyberte s�bor so z�lohou na Va�om disku (.ZIP alebo .SQL)";
$f_lang['confirm_restauration'] = "Potvrdzujete spustenie obnovy d�t ? Aktu�lne d�ta bud� vymazan�!";
$f_lang['select_file_restau'] = "Vyberte pros�m s�bor na Va�om disku";
$f_lang['erreur_ext_restau'] = "Vybran� s�bor nem� pr�ponu .ZIP nebo .SQL, obnova d�t nem��e by� spusten�.";
$f_lang['conseil_zip'] = "(Rozba�te ZIP s�bor na V� pevn� disk k z�skaniu s�boru SQL)";
$f_lang['erreur_ext_zip'] = "Extension PHP_ZIP nie je na serveri dostupn�, obnova d�t zo ZIP s�boru nie je mo�n�. Vyberte pros�m .SQL soubor na Va�om disku".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Chyba pri ��tan� V�ho ZIP arch�vu, nemo�no spusti� obnovu d�t.  Sk�ste to prostredn�ctvom .SQL s�boru ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Vybran� s�bor SQL neobsahuje zodpovedaj�ce pr�kazy pre obnovu d�t n�v�tevnej knihy \"@lex Guestbook\".  Obnova nem��e by� spusten�.";
$f_lang['restauration_terminee'] = "V�aka ! Obnova d�t bola �spe�ne preveden� !";

							/* V5 */
$f_lang['name_table_ban'] = "N�zov zak�zan�ch IP, tabu�ka prez�viek a e-mailov";
$f_lang['ok_validation'] = "V�aka, overenie bolo vykonan�";
$f_lang['selectionner_tous_messages'] = "Ozna�i�/odzna�i� v�etky";
$f_lang['admin_send_mail'] = "�el�te si, aby admin dostal e-mail po pridan� novej spr�vy v knihe host�?";

//ajout bannissement
$f_lang['bannissement'] = "Vyhnanstvo";
$f_lang['admin_gestion_bannissement'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravova� vyhnanstvo ?";
$f_lang['interdit_de_message'] = "Va�a spr�va nebola ulo�en�. Pre zobrazenie d�vodu odmietnutia (zak�zan� slovo, nevyplnen� povinn� pole ...) JavaScript mus� by� povolen�. M��ete sa pok�si� upravi� svoju spr�vu.";
$f_lang['valider_mess'] = "Pou�i� vy��ie uveden� vo�by";
$f_lang['erreur_ip'] = "IP adresa nie je spr�vna";
$f_lang['erreur_ip1'] = "Pros�m, vypl�te 1. �as� IP adresy s ��slom od 0 do 255 alebo *";
$f_lang['erreur_ip2'] = "Pros�m, vypl�te 2. �as� IP adresy s ��slom od 0 do 255 alebo *";
$f_lang['erreur_ip3'] = "Pros�m, vypl�te 3. �as� IP adresy s ��slom od 0 do 255 alebo *";
$f_lang['erreur_ip4'] = "Pros�m, vypl�te 4. �as� IP adresy s ��slom od 0 do 255 alebo *";
$f_lang['explication_bannir_mot'] = "M�te dve mo�nosti ako zak�za� slov� v spr�vach. Bu� zak�zan� slov� cenz�rujute (tieto slov� nahrad�te in�mi slovami alebo symbolmi, ktor� zvol�te) alebo spr�va bude odmietnut�.";
$f_lang['bannir_mot'] = "Chcete, aby spr�vy obsahuj�ce cenz�rovan� slov� (pozri \"Cenz�rovn� slov�\" v menu) boli odmietnut�?<br>Ak ozna��te \"nie\", tieto slov� bud� iba nahraden� in�mi slovami alebo symbolmi, ktor� ste zvolili.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Vyhnanstvo prez�viek";
$f_lang['admin_text_pseudo'] = "Ak si �el�te, aby u��vate� <b>nemohol prid�va� spr�vy do knihy host�</b>, m��ete tu zada� jeho prez�vku. Taktie� m��ete pou�i� divok� kartu (wildcard) *, ktor� zachyt� ak�ko�vek p�smeno alebo ��slo do ��tu.";
$f_lang['ajouter_pseudo'] = "Prida� nov� prez�vku do vyhnanstva";
$f_lang['gestion_pseudo'] = "Spr�va prez�vok";
$f_lang['sup_pseudo'] = "Odstr�ni� ozna�en� prez�vky";
$f_lang['erreur_pseudo'] = "Pros�m, zadajte prez�vku";
$f_lang['ok_aj_pseudo'] = "V�aka, prez�vka je odteraz zak�zan�";
$f_lang['verif_sup_pseudo'] = "Naozaj chcete odstr�ni� v�etky ozna�en� prez�vky?";

/* bannir des emails */
$f_lang['bannir_emails'] = "Vyhnanstvo e-mailov�ch adries";
$f_lang['admin_text_email'] = "Ak si �el�te, aby u��vate� <b>nemohol prid�va� spr�vy do knihy host�</b>, m��ete tu zada� jeho e-mailov� adresu. Taktie� m��ete pou�i� divok� kartu (wildcard) *, napr. odmietnutie cel�ho n�zvu dom�ny zabezpe��te nasledovne: \"*@spamdomain.com\".";
$f_lang['ajouter_email'] = "Prida� nov� e-mailov� adresu do vyhnanstva";
$f_lang['gestion_email'] = "Spr�va e-mailov�ch adries";
$f_lang['sup_email'] = "Odstr�ni� ozna�en� e-mailov� adresy";
$f_lang['erreur_email'] = "Pros�m, zadajte e-mailov� adresu";
$f_lang['ok_aj_email'] = "V�aka, e-mailov� adresa je odteraz zak�zan�";
$f_lang['verif_sup_email'] = "Naozaj chcete odstr�ni� v�etky ozna�en� e-mailov� adresy?";

$f_lang['no_pseudo'] = "UPOZORNENIE\\nVa�a prez�vka je vo vyhnanstve. Nem��ete prida� spr�vu do tejto knihy host�.";
$f_lang['no_email'] = "UPOZORNENIE\\nVa�a e-mailov� adresa je vo vyhnanstve. Nem��ete prida� spr�vu do tejto knihy host�.";
$f_lang['no_ville'] = "UPOZORNENIE\\nZadan� mesto nie je spr�vne. Nem��ete prida� spr�vu do tejto knihy host�.";
$f_lang['no_mot'] = "UPOZORNENIE\\nZadali ste zak�zan� slovo. Nem��ete prida� spr�vu do tejto knihy host�.\\nPros�m, upravte text spr�vy.";

// interdiction des URL
$f_lang['url_interdite'] = "UPOZORNENIE\\nURL odkazy s� v spr�vach zak�zan�";
$f_lang['url_interdites'] = "Chcete zak�za� spr�vy obsahuj�ce URL odkazy?";
$f_lang['url_cliquables'] = "Chcete, aby URL odkazy v spr�vach boli klikate�n�?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "N�zov tabu�ky s konfigura�n�mi parametrami";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "M��ete nastavi� �sov� rozdiel medzi serverom a va�ou krajinou. Ak nepotrebujete nastavova� �asov� rozdiel, nechajte 0.";
$f_lang['heures'] = "hod�n";
$f_lang['secondes'] = "sek�nd";
$f_lang['admin_erreur_decalage_horaire'] = "Hodnotu �asov�ho posunu mus�te zada� v rozmedz� od -12 do +12";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "Nem��ete odstr�ni� posledn�ho administr�tora";

// d�sactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Chcete povoli� smajl�kov?";

// pour emp�cher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "UPOZORNENIE\\nZadan� hodnota platnosti sedenia je pr�li� kr�tka!\\nMus�te zada� hodnotu vy��iu ako 300 sek�nd";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "Chcete zahrn�� knihu host� do PHP s�boru?";
$f_lang['admin_inclure_livre_code'] = "Tu je PHP k�d, ktor� mus�te vlo�i� do svojho PHP s�boru medzi tagy &lt;?php a ?&gt;.\n\ntaktie� mus�te zmeni� \$chem_absolu pole v s�bore /index.php v knihe host� a prida� CSS do str�nky (pozrite FAQ pre detailn� vysvetlenie)";
$f_lang['admin_fichier_inclusion'] = "Zadajte absol�tnu cestu k s�boru, do ktor�ho chcete zahrn�� knihu host� (napr�klad: /adresar1/adersar2/subor_pre_zahrnutie_knihi_hosti.php). Mus�te klikn�� na tla��tko \"Ulo�i�\", aby ste videli zadan� cestu, prevzat� do ��tu v k�de.";
$f_lang['admin_fichier_inclusion_erreur'] = "UPOZORNENIE\\nZadali ste nespr�vnu cestu k s�bore pre zahrnutie knihi host�.\\nCesta mus� by� v tvare: /adresar1/adersar2/subor_pre_zahrnutie_knihi_hosti.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "Nenavrhova�";
$f_lang['admin_champ_obligatoire'] = "Povinn�";
$f_lang['admin_champ_prive'] = "S�kromn�";
$f_lang['admin_champ_pseudo'] = "N�v�tevn�ci m��u zada� prez�vku";
$f_lang['admin_champ_ville'] = "N�v�tevn�ci m��u zada� mesto";
$f_lang['admin_donner_focus'] = "Chcete, aby polo�ka 'Prez�vka' bola zvolen� (akt�vna, netreba do nej klikn��) po na��tani str�nky?";
$f_lang['champ_obligatoire_vide'] = "Niektor� z povinn�ch polo�iek (ozna�en� *) je pr�zdna. Pros�m, vypl�te ju.";
$f_lang['erreur_add_nom'] = "Pros�m, zadajte meno";
$f_lang['erreur_add_email'] = "Pros�m, zadajte e-mailov� adresu";
$f_lang['erreur_add_site'] = "Pros�m, zadajte adresu web str�nky";
$f_lang['erreur_add_ville'] = "Pros�m, zadajte mesto";
$f_lang['erreur_add_pays'] = "Pros�m, zadajte krajinu";
$f_lang['erreur_add_note'] = "Pros�m, zvo�te hodnotenie";
$f_lang['erreur_add_message'] = "Pros�m, zadajte spr�vu";
$f_lang['erreur_url'] = "Adresa web str�nky je zrejme nespr�vna";

// code de s�curit� : v�rification de la pr�sence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">Nem��ete pou�i� ochranu overovac�m k�dom!<br/>\n V� server nepodporuje kni�nicu GD2, ktor� je potrebn� pre funk�nos� overovacieho k�du</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Chcete prida� odkaz do administr�torsk�ho rozhrania v spodnej �asti knihi host�?";
$f_lang['admin_lien_accueil'] = "Chcete prida� sp�tn� odkaz na va�u domovsk� str�nku alebo nejak� in� str�nku?";
$f_lang['admin_chemin_lien_accueil'] = "Ak nech�te t�to polo�ku pr�zdnu, odkaz bude smerova� na domovsk� str�nku. M��ete zada� absol�tnu cestu k str�nke (napr. /adresar1/stranka1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "Zadana cesta nie je spr�vna. Pros�m, zadajte absol�tnu cestu (napr. /mojastranka.php).";
$f_lang['texte_lien_accueil'] = "Nasp� na �vodn� str�nku";
$f_lang['texte_lien_admin'] = "Administr�torsk� rozhranie";

$f_lang['admin_retour_livre'] = "Pozrie� knihu host�";

// symboles champs priv�s/obligatoires sur le formulaire
// /!\ Attention, maximum 90 caract�res
$f_lang['information_champ_prive'] = "Obsah tejto polo�ky bude vidite�n� iba administr�torom.";
$f_lang['information_champ_obligatoire'] = "T�to polo�ka je povinn� pre pridanie spr�vy.";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Server (zvy�ane: localhost)";

$f_lang['name_table_txt_lang'] = "N�zov tabu�ky obsahuj�cej upraven� texty (napr. n�zov knihyhost�)";

$f_lang['erreur_host'] = "Pros�m, zadajte datab�zov� server";

$f_lang['erreur_ecriture'] = "<b>CHYBA</b>, nem��em zapisova� do adres�ra \"config/\".<br><br>Pros�m, upravte pr�va pre tento adres�r (chmod 777) a in�tal�ciu zopakujte: <a href=\"./setup.php\"><b>nasp�</b></a>.";

$f_lang['options_livre'] = "Nastavenia knihy host�";

$f_lang['text1'] = "V spr�vach od n�v�tevn�kov bud� <b>cenz�rovan� slov� automaticky nahraden�</b>. M��ete zvolen� slovo \"zle slovo\" nahradi�  v�razom \"**cenz�rovan� slovo**\".<br/>Ak ste zvolili vo�bu odmietn�� spr�vy obsahuj�ce cenz�rovn� slov�, <u>aj tak mus�te zada� slov�, ktor� ich mj� nahradi�</u>. T�mto sp�sobom m��ete potom �ahko prep�na� vo�by (odmietanie spr�v a nahradzovanie cenz�rovan�ch slov).";

/* Erreur si fichier install present */
$f_lang['erreur_fic_install_present'] = "For security reasons, to use your guestbook you have to delete file setup.php and folder update/";
?>