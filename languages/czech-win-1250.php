<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2011    //
//         Hercelin Maxime (c) 2005 - 2011   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//         Czech translation by Carlos       //
//                www.stachsw.cz             //
///////////////////////////////////////////////

/* Encodage utilis� dans le script */
$SCRIPT_ENCODAGE = "windows-1250";
$CONTENT_LANGUAGE = "cs";

/* setup */
$f_lang['install_auto'] = "Automatick� instalace";
$f_lang['identi_base'] = "Database ID";
$f_lang['type_base'] = "Typ datab�ze";
$f_lang['user_base'] = "U�ivatelsk� jm�no";
$f_lang['pass_base'] = "Heslo";
$f_lang['nom_base'] = "Jm�no datab�ze";
$f_lang['nom_table'] = "Jm�na tabulek";
$f_lang['name_table_sessions'] = "Sessions tabulka";
$f_lang['name_table_users'] = "Tabulka u�ivatel�";
$f_lang['name_table_messages'] = "Tabulka pro ukl�d�n� zpr�v";
$f_lang['name_table_censure'] = "Tabulka zak�zan�ch slov";
$f_lang['name_table_ip'] = "Tabulka blokovan�ch IP adres";
$f_lang['name_table_smileys'] = "Tabulka smajl�k�";
$f_lang['extension_script'] = "P��pona skript�";
$f_lang['choose_extension'] = "Vyberte p��ponu pro skripty<br>(doporu�ujeme \"php\", jinak budete muset p�ejmenovat v�echny soubory na v�mi zvolenou p��ponu)";
$f_lang['identi_acces_admin'] = "Va�e p�ihla�ovac� �daje do administr�torsk�ho panelu";
$f_lang['login_admin'] = "U�ivatelsk� jm�no";
$f_lang['pass_admin'] = "Heslo";
$f_lang['verif_pass_admin'] = "Zopakujte heslo";
$f_lang['email_admin_setup'] = "V� email";
$f_lang['installer'] = "Instalovat";
$f_lang['erreur_host'] = "Nen� vypln�n �daj o datab�zov�m serveru";
$f_lang['erreur_user'] = "Nen� vypln�no u�ivatelsk� jm�no k datab�zi";
$f_lang['erreur_nom_base'] = "Nen� vypln�no jm�no datab�ze";
$f_lang['erreur_log_admin'] = "Nen� vypln�no Va�e u�ivatelsk� jm�no pro p��stup do administr�torsk�ho rozhran�";
$f_lang['erreur_pass_admin'] = "Nen� vypln�no Va�e heslo pro p��stup do administr�torsk�ho rozhran�";
$f_lang['erreur_pass_differents'] = "POZOR, zadan� hesla nejsou shodn�.";
$f_lang['erreur_first_connexion'] = "<b>CHYBA, nezda�ilo se p�ipojen� k datab�zi.</b><br><br>zkontrolujte pros�m p�ihla�ovac� �daje : <a href=\"javascript:history.go(-1);\"><b>zp�t</b></a>.";
$f_lang['erreur_install'] = "Instalace se nezda�ila.";
$f_lang['ok_install'] = "Instalace byla �sp�n�";
$f_lang['text_ok_install'] = "<b>D�ky ! Instalace byla �sp�n�.</b><br><br>Z bezpe�nostn�ch d�vod� d�razn� doporu�ujeme smazat instala�n� pr�v� pou�it� skript (\"setup.php\"), pokud tak neu�in�te, kdokoliv jej m��e pou��t k modifikaci/zni�en� va�ich konfigura�n�ch soubor�.<br><br>Nyn� m��ete spravovat  Va�i n�v�t�vn� knihu kliknut�m <a href=\"".$chem_absolu."admin/\" target=\"_blank0\"><b>zde</b></a> nebo<br> ji shl�dnout pohledem n�v�t�vn�ka <a href=\"".$chem_absolu."\" target=\"_blank1\"><b>zde</b></a>. Odkazy se otev�raj� v nov�m okn�.";

/* administration */
$f_lang['page protect'] = "Chr�n�n� str�nka";
$f_lang['login'] = "U�iv.jm�no";
$f_lang['pass'] = "Heslo";
$f_lang['value identif'] = "P�ihl�sit";

 /* menu */
$f_lang['options'] = "Mo�nosti";
$f_lang['script'] = "Glob�ln� nastaven�";
$f_lang['graphismes'] = "Vzhled n�v�.knihy";
$f_lang['messages'] = "Zpr�vy";
$f_lang['gestion'] = "�pravy";
$f_lang['censure_mots'] = "Cenzura slov";
$f_lang['smileys'] = "Smajl�ci";
$f_lang['utilisateurs'] = "Administr�to�i";
$f_lang['ajouter'] = "P�idat";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "O produktu...";
$f_lang['donner_avis'] = "V� n�zor";
$f_lang['deconnexion'] = "odhl�sit";

 /* options */
 $f_lang['options_livre'] = "Mo�nosti n�v�t�vn� knihy";
$f_lang['options_generales'] = "Souhrnn� parametry";
$f_lang['langue'] = "Jazyk";
$f_lang['send_mail'] = "Chcete, aby administr�tor e-mailem obdr�el nov� vlo�en� zpr�vy ?";
$f_lang['avert_mail'] = "<br>(<b>pozor</b> : funkce mail() na va�em serveru je vypnuta, tak�e ani p�i za�krtnut� volb� \"ano\" nem��ete dost�vat e-mailov� upozorn�n�)";
$f_lang['oui'] = "ano";
$f_lang['non'] = "ne";
$f_lang['options_modules'] = "Jednotliv� pole n�v�t�vn� knihy";
$f_lang['admin_champ_email'] = "N�v�t�vn�k m��e zadat e-mailovou adresu";
$f_lang['admin_champ_site'] = "N�v�t�vn�k m��e zadat adresu jeho www str�nek";
$f_lang['admin_champ_pays'] = "N�v�t�vn�k m��e zadat m�sto a zemi";
$f_lang['admin_champ_note'] = "N�v�t�vn�k m��e hodnotit va�e str�nky";
$f_lang['admin_ok_aff_moteur'] = "Zp��stupnit vyhled�va��m";
$f_lang['options_tech'] = "Technick� parametry";
$f_lang['url_recharger'] = "Str�nka pro aktualizace n�v�t�vn� knihy";
$f_lang['url_variables'] = "Prom�nn� pou��van� jako parametr (zadejte # m�sto $ v n�zvu prom�nn�)";
$f_lang['temps_session'] = "Doba platnosti session pro administr�torsk� rozhran� (v sekund�ch)";
$f_lang['skin_to_use'] = "Pou��t vzhled";
$f_lang['enregistrer'] = "Ulo�it";
$f_lang['nb_pages'] = "Po�et zpr�v zobrazen�ch na jedn� str�nce n�v�t.knihy";
$f_lang['merci_options'] = "D�ky, parametry byly aktualizov�ny";
$f_lang['erreur_options'] = "CHYBA\\nParametry se nepoda�ilo ulo�it, nebylo mo�no zapisovat do souboru \\\"config.".$alex_livre_ext."\\\", pro zm�nu nastaven� editujte tento soubor pomoc� textov�ho editoru.";
$f_lang['temps_ip_post'] = "Po�et minut, po kter�ch m��e n�v�t�vn�k vlo�it dal�� zpr�vu";
$f_lang['minutes'] = "minut";
$f_lang['cut_mots'] = "Max.d�lka slova - del�� slova budou rozd�lena";
$f_lang['format_date'] = "Form�t data";

/* skins */
$f_lang['ok_ajouter'] = "D�ky, vzhled byl �sp�n� vytvo�en";
$f_lang['erreur_ajouter'] = "CHYBA\\nVzhled se nepoda�ilo vytvo�it, vytvo�te jej ru�n�";
$f_lang['text1_2'] = "Vzhled byl ulo�en do slo�ky &quot;templates/skins/&quot;. Toto rozhran� v�m umo��uje jej jednodu�e m�nit, ale m��ete tak �init i ru�n� editac� html soubor�.";
$f_lang['text2'] = "<b>Pokud chcete tak� zm�nit vhled masky administr�torsk�ho rozhran�</b> modifikujte pros�m ru�n� soubory ve slo�ce &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "P�idat vzhled";
$f_lang['ajouter'] = "P�idat";
$f_lang['gestion_skins'] = "Spr�va vzhledu";
$f_lang['vous_editez'] = "Pr�v� modifikujete tento vzhled :";
$f_lang['style'] = "soubor styl�";
$f_lang['ajouter_message'] = "sekce: p�idat zpr�vu";
$f_lang['nbre_messages_page'] = "sekce: po�et zpr�v/stran";
$f_lang['pages_dispos'] = "sekce: seznam str�nek / dal�� strana - p�edchoz� strana";
$f_lang['texte_corps_messages'] = "t�lo zpr�vy";
$f_lang['espacement'] = "mezera mezi 2 zpr�vami";
$f_lang['text_assembly'] = "soubor skl�daj�c� p�edchoz� sekce";
$f_lang['ok_edit_skin'] = "D�ky, vzhled byl aktualizov�n";
$f_lang['erreur_edit_skin'] = "CHYBA\\nJeden nebo v�ce soubor� vzhledu nebylo mo�no aktualizovat. Upravte pros�m tyto soubory ru�n�.";
$f_lang['ajouter'] = "P�idat";
$f_lang['supprimer'] = "Smazat";
$f_lang['text_sup_skin'] = "Smazat vzhled";
$f_lang['ok_supprimer'] = "D�ky, vzhled byl smaz�n.";
$f_lang['erreur_supprimer'] = "CHYBA\\nJeden nebo v�ce soubor� vzhledu se nepoda�ilo smazat, mus�te je smazat ru�n�.";

/* page des mots censur�s */
$f_lang['aj_mot'] = "P�idat slovo "; 
$f_lang['mot_interdit'] = "Zak�zan� slovo :";
$f_lang['remplacer_par'] = "N�hradit slovem :";
$f_lang['gestion_censure'] = "Spr�va zak�zan�ch slov";
$f_lang['mot'] = "slovo";
$f_lang['remplace_by'] = "nahrazeno slovem";
$f_lang['liste_jour'] = "Aktualizovat seznam";
$f_lang['sup_mots'] = "Smazat vybran� slova";
$f_lang['erreur_aj_censure1'] = "Zadejte pros�m slovo, kter� se m� cenzurovat";
$f_lang['erreur_aj_censure2'] = "Zadejte pros�m slovo, kter� m� b�t pou�ito jako n�hrada";
$f_lang['ok_aj_mot'] = "D�ky, zak�zan� slovo bylo p�id�no.";
$f_lang['verif_sup'] = "Chcete opravdu definitivn� smazat vybran� slova ?";
$f_lang['merci_modif'] = "D�ky, zm�ny byly ulo�eny";

/* bannir des ip */
$f_lang['bannir_ip'] = "Zak�zan� IP";
$f_lang['text_ip1'] = "Ka�d� n�v�t�vn�k m� p�id�lenu specifickou ��selnou IP adresu (nap�. 201.10.25.14). Tato adrese je p�id�lov�na poskytovatelem internetu p�i p�ipojen� a m�n� se, teoreticky, kdykoliv se n�v�t�vn�k znovu p�ipoj� k internetu.";
$f_lang['text_ip2'] = "Pokud chcete <b>zak�zat n�v�t�vn�kovi vkl�dat zpr�vu do va�� n�v�t�vn� knihy</b>, m��ete sem zadat jeho IP adreseu. M��ete tak� zak�zat rozsah IP adres pou�it�m z�stupn�ho symbolu * (nap�. 201.15.55.*, nebo t�eba 158.*.*.*).";
$f_lang['ajouter_ip'] = "P�idat zak�zanou IP adresu";
$f_lang['gestion_ip'] = "Spr�va IP adres";
$f_lang['sup_ip'] = "Odebrat vypran� IP adresy";
$f_lang['ok_aj_ip'] = "D�ky, tato IP adresa je nyn� zak�z�na";
$f_lang['verif_sup_ip'] = "Opravdu chcete smazat vypran� IP adresy ?";

/* smileys */
$f_lang['gestion_smileys'] = "Spr�va smajl�k�";
$f_lang['text_smileys'] = "<b>Smajl�ci dovoluj� vyj�d�it n�v�t�vn�kovi jeho emoce</b> p�i z�pisu. V tomto rozhran� m��ete jednodu�e p�id�vat �i mazat smajl�ky tak, aby m�l n�v�t�vn�k z �eho vyb�rat :o)<br><br>Smajl�ci z t�to str�nky jsou ulo�eny ve slo�ce \"images/smileys\".";
$f_lang['ajouter_smiley'] = "P�idat smajl�ka";
$f_lang['image_smiley'] = "Obr�zek";
$f_lang['car_replace'] = "Odpov�daj�c� k�d";
$f_lang['gestion_smileys'] = "Spr�va smajl�k�";
$f_lang['sup_smileys'] = "Smazat vybran� smajl�ky";
$f_lang['erreur_image'] = "Vyberte pros�m smajl�ka";
$f_lang['erreur_car'] = "Vyberte pros�m odpov�daj�c� k�d pro smajl�ka";
$f_lang['ok_aj_smiley'] = "D�ky, smajl�k byl �sp�n� p�id�n";
$f_lang['no_smiley'] = "Smajl�ci mohou b�t pouze ve form�tu GIF nebo JPEG";
$f_lang['copy_impossible'] = "CHYBA\\nSmajl�ka se nepoda�ilo nahr�t do slo�ky \\\"images/smileys\\\".";
$f_lang['car_replace_exist'] = "CHYBA\\nTento k�d ji� v datab�zi existuje.";
$f_lang['modif_smileys'] = "Aktualizovat v�echny smajl�ky";
$f_lang['verif_sup_smileys'] = "Skute�n� chcete smazat vybran� smajl�ky ?";
$f_lang['merci_modif_smileys'] = "D�ky, smajl�ci byli upraveni.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "P�idat administr�tora n�v�t�vn� knihy";
	$f_lang['add_admin_2'] = "P�idat administr�tora";
	$f_lang['ajouter_admin'] = "P�idat";
	$f_lang['name_ajouter_admin'] = "p�idat";
}
else{
	$f_lang['add_admin_texte'] = "�prava administr�tora n�v�t.knihy";
	$f_lang['add_admin_2'] = "Upravit administr�tora";
	$f_lang['ajouter_admin'] = "Ulo�it";
	$f_lang['name_ajouter_admin'] = "upravit";
}

$f_lang['identif_connexion'] = "P�ihla�ovac� jm�no";
$f_lang['passe_admin'] = "Heslo";
$f_lang['email_admin'] = "E-mail (d�le�it� v p��pad�, kdy admin m� dost�vat e-maily po vlo�en� zpr�vy)";
$f_lang['admin_receive_email'] = "Chcete, aby admin dost�bval e-mail po ka�d� vlo�en� zpr�v� ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;m��e m�nit parametry skript� ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;m��e m�nit vzhled ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravovat vlo�en� zpr�vy ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravovat zak�zan� slova ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravovat smajl�ky ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravovat ��ty dal��ch administr�tor� ?";
$f_lang['erreur_name'] = "Zadejte pros�m u�ivatelsk� jm�no";
$f_lang['erreur_passe'] = "Zadejte pros�m heslo";
$f_lang['erreur_email'] = "Zadejte pros�m e-mail";
$f_lang['ok_aj_admin'] = "D�ky, ��et byl �sp�n� vytvo�en";
$f_lang['ok_modif_admin'] = "D�ky, ��et byl aktualizov�n";
$f_lang['erreur_aj_admin'] = "CHYBA\\nToto u�ivatelsk� jm�no ji� existuje";
$f_lang['revenir'] = "Zp�t na p�edchoz� str�nku";

/* gestion des admins */
$f_lang['gest_admin'] = "Spr�va administr�tor�";
$f_lang['sup_admin'] = "odebrat";
$f_lang['login_admin'] = "p�ihla�ovac� jm�no";
$f_lang['email_admin'] = "E-mail";
$f_lang['modif_admin'] = "zm�nit";
$f_lang['value_sup_admin'] = "Odebrat vybran� administr�tory";
$f_lang['verif_sup_admin'] = "Skute�n� chcete odebrat vybran� administr�tory ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "STR�NKA NEN� DOSTUPN�";
$f_lang['erreur_auth'] = "Chyba p�i p�ihl�en�";
$f_lang['erreur_droits'] = "Nem�te odpov�daj�c� pr�va pro p��stup na tuto str�nku.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Pr�m�rn� zn�mka ud�len� n�v�t�vn�ky t�mto str�nk�m :";
$f_lang['title_guestbook'] = "Na�e n�v�t�vn� kniha";
$f_lang['note_super'] = " : super !";
$f_lang['note_moyen'] = " : pr�m�r";
$f_lang['note_rate'] = " : propad�k";
$f_lang['nom_pseudo_visiteur'] = "Jm�no nebo p�ezd�vka :";
$f_lang['email_visiteur'] = "E-mail :";
$f_lang['site_web_visiteur'] = "WWW adresa";
$f_lang['ville_pays_visiteur'] = "M�sto / Zem� :";
$f_lang['note_visiteur'] = "Va�e hodnocen� :";
$f_lang['message_visiteur'] = "Va�e zpr�va :";
$f_lang['ajouter_message_visiteur'] = "Vlo�it tuto zpr�vu";
$f_lang['erreur_add_nom'] = "Zadejte pros�m Va�e jm�no";
$f_lang['erreur_add_message'] = "Zadejte pros�m Va�i zpr�vu";
$f_lang['erreur_mail'] = "Va�e e-mailov� adresa nen� spr�vn�";
$f_lang['messages'] = "Zpr�vy";
$f_lang['messages_a'] = "a�";
$f_lang['page'] = "Str�nka";
$f_lang['nbre_messages'] = "Po�et zpr�v";
$f_lang['message_le'] = "dne";
$f_lang['message_note'] = "Hodnocen�";
$f_lang['send_mail_to'] = "Poslat e-mail";
$f_lang['go_home'] = "Nav�tivte str�nky";
$f_lang['precedente'] = "&lt;&lt; p�edchoz�";
$f_lang['suivante'] = "dal�� &gt;&gt;";
$f_lang['no_message'] = "Nejsou tu ��dn� zpr�vy.";
$f_lang['no_ip'] = "POZOR\\nVa�e IP adresa je zak�z�na, nem�te pr�vo vkl�dat zpr�vy do t�to n�v�t�vn� knihy.";
$f_lang['ok_post'] = "D�ky !  Va�e zpr�va byla �sp�n� vlo�ena.";
$f_lang['time_erreur'] = "POZOR\\nVa�e zpr�va nemohla b�t vlo�ena, vkl�dal/a jste zpr�vu p�ed chvilkou.";
$f_lang['text_select_search'] = "Uk�zat jenom zpr�vy obsahuj�c� n�sleduj�c� slova";
$f_lang['text_ok_search'] = "Ok";

/* mail envoy� */
$f_lang['mail_object'] = "[INFO] - Nova zprava ve vasi navstevni knize - ";
$f_lang['mail_message'] = "Dobr� den,\n\ndo Va�� n�v�t�vn� knihy byla vlo�ena nov� zpr�va ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Spr�va zpr�v :)";
$f_lang['selectionner_pages'] = "Vybrat";
$f_lang['messages_gest'] = "zpr�va";
$f_lang['page_gest'] = "str�nka";
$f_lang['aller_en_page'] = "Jdi na stranu";
$f_lang['supprimer_gest'] = "smazat";
$f_lang['auteur_gest'] = "author";
$f_lang['modifier_gest'] = "opravit";
$f_lang['supprimer_mess_selected'] = "Smazat vybran� zpr�vy";
$f_lang['verif_sup_mess'] = "Skute�n� chcete smazat vybran� zpr�vy ?";

/* modifier un message */
$f_lang['modif_mess'] = "Opravit zpr�vu";
$f_lang['message_modif'] = "Zpr�va";
$f_lang['nom_modif'] = "Jm�no";
$f_lang['email_modif'] = "E-mail";
$f_lang['site_web_modif'] = "WWW str�nky";
$f_lang['note_modif'] = "Hodnocen� Va�ich str�nek";
$f_lang['ville_pays_modif'] = "M�sto / Zem�";
$f_lang['date_modif'] = "Datum vlo�en�";
$f_lang['ip_modif'] = "IP adresa";
$f_lang['ok_modif_mess'] = "D�ky, zm�ny byly ulo�eny";

/* titre des pages */
$f_lang['title identification'] = "identifikace";
$f_lang['title administration'] = "administrace";
$f_lang['title frame gauche'] = "lev� r�m";
$f_lang['title options'] = "volby";
$f_lang['title skins'] = "vzhled";
$f_lang['title censure'] = "zak�zan�ch slov";
$f_lang['title censure'] = "spr�va zak�zan�ch IP";
$f_lang['title smileys'] = "spr�va smajl�k�";
$f_lang['title add admin'] = "p�id�n� administr�tora";
$f_lang['title gest admin'] = "spr�va administr�tor�";
$f_lang['title erreur'] = "chyba";
$f_lang['title gestion mess'] = "spr�va zpr�v";
$f_lang['title modif mess'] = "modifikace zpr�vy";
$f_lang['title setup'] = "instalace";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Selhalo p�ipojen� k datab�zi";
$f_lang['erreur_connexion'] = "Va�e p�ihla�ovac� �daje nejsou spr�vn�";
$f_lang['manque login'] = "Zadejte pros�m Va�e p�ihla�ovac� jm�no";
$f_lang['manque pass'] = "Zadejte pros�m Va�e heslo";
$f_lang['end session'] = "Va�e relace byla ukon�ena";

/* add version 3.11 */
$f_lang['addSignature'] = "Vlo�it novou zpr�vu";
$f_lang['seeMessages'] = "��st zpr�vy";
$f_lang['addMessageBlocAdd'] = "P�idat zpr�vu do n�v�t�vn� knihy";

/* add version 3.2 */
$f_lang['version'] = "Verze";
$f_lang['new_version_dispo'] = "Je k dispozici nov� verze N�v�t�vn� knihy";
$f_lang['version_courrante'] = "St�vaj�c� verze skript�";
$f_lang['info_version'] = "Informace o Va�� verzi";
$f_lang['version_txt_ok'] = "Va�e verze je ".$alex_livre_version.",<br>tato verze je nejnov�j��, net�eba aktualizovat.";
$f_lang['version_txt_update'] = "Va�e verze je ".$alex_livre_version.", <b>k dispozici je nov�j�� verze</b>";
$f_lang['version_down'] = "St�hnout novou verzi";
$f_lang['help_update'] = "Pomoc p�i aktualizaci";
$f_lang['spam'] = "USER AGENT Va�eho prohl�e�e nebyl identifikov�n, vypad� to, jako by se n�jak� robot pokou�el automatizovan� vlo�it zpr�vu. Pokud tomu tak nen�, zkuste to pros�m z jin�ho prohl�e�e.";
$f_lang['avis_spammeurs'] = "Pozn�mka pro spammery";
$f_lang['txt_spammeurs'] = "<b>Tato n�v�t�vn� kniha je chr�n�na p�ed spammery</b>, E-mailov� a www adresy jsou ve zdrojov�m k�du str�nek za�ifrov�ny, proto je naprostosto zbyte�n� vkl�dat komer�n� odkazy, nebudou vid�t ve vyhled�va��ch (nav�c va�e zpr�va bude stejn� vymaz�na...)";
$f_lang['fermer'] = "Zav��t toto okno";
$f_lang['valider_messages'] = "Chcete nejprve prohl�dnout vlo�en� zpr�vy p�ed jejich zve�ejn�n�m ?";
$f_lang['valide'] = "Schv�leno ?";
$f_lang['mess_valide'] = "Tato zpr�va byla schv�lena";
$f_lang['mess_invalide'] = "Tato zpr�va �ek� na schv�len�";
$f_lang['info_mess_valide'] = "Schv�len� zpr�va ?";
$f_lang['ok_post_valid'] = "D�ky ! Va�e zpr�va byla �sp�n� vlo�ena, bude zve�ejn�na, jakmile ji webnmaster schv�l�.";
$f_lang['see_skin'] = "Zobrazit n�v�t�vn� knihu v tomto vzhledu";
$f_lang['maxi_car'] = "Maxim�ln� povolen� po�et znak� ve zpr�v� (0 = bez omezen�)";
$f_lang['il_reste'] = "Do Va�� zpr�vy m��ete napsat je�t�";
$f_lang['caracteres'] = "znak�";
$f_lang['sup_copyright'] = "Smazat copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Jm�no tabulky bezpe�nostn�ch k�d�";
$f_lang['add_code_securite'] = "Chcete, aby u�ivatel musel p�ed odesl�n�m zpr�vy zapsat bezpe�nostn� k�d?";
$f_lang['t_chem_dossier_fonts'] = "Kompletn� cesta (URL) ke slo�ce s fonty";
$f_lang['t_color_txt_code'] = "Hexadecim�ln� k�d barvy textu";
$f_lang['t_color_background_code'] = "Hexadecim�ln� k�d barvy pozad�";
$f_lang['veuillez_taper_code'] = "Opi�t� pros�m tento bezpe�nostn� k�d do pol��ka vpravo";
$f_lang['a_quoi_ca_sert'] = "A pro�pak?";
$f_lang['why_code'] = "Pro� \"bezpe�nostn� k�d\" ?";
$f_lang['txt_why_code'] = "Umo��uje zkontrolovat, zda zpr�va byla vlo�ena skute�n�m �iv�m n�v�t�vn�kem a ne automaticky pracuj�c�m softwarem.<br><br><b>Komer�n� zpr�vy a spamm jsou zde zak�z�ny!</b>";
$f_lang['erreur_code_securite'] = "Zadejte pros�m bezpe�nostn� k�d";
$f_lang['erreur_saisie_code_securite'] = "V�mi zadan� bezpe�nostn� k�d nen� spr�vn�, zkuste to, pros�m, znovu";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatick� odpov��";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spr�va automatick� odpov�di?";
$f_lang['text_reponse_auto'] = "<b>Zde m��ete zadat text automatick� odpov�di</b> odes�lan� n�v�t�vn�kovi, jen� vlo�� zpr�vu do Va�� n�v�t�vn� knihy. Tato zpr�va bude odesl�na, pokud tuto funkci aktuvujete v parametrech.<br><br>Ka�d� jazyk m� svou vlastn� odpov�� a k�d [PSEUDO] bude nahrazen jm�nem nebo p�ezd�vkou n�v�t�vn�ka, kter� zpr�vu vlo�il.";
$f_lang['name_table_rep_auto'] = "Jm�no tabulky, kter� obsahuje automatick� odpov�di";
$f_lang['gestion_reponses'] = "Spr�va zpr�v";
$f_lang['msg_remerciement'] = "D�ky za zpr�vu";
$f_lang['txt_remerciement'] = "Dobr� den, [PSEUDO],\n\nd�kujeme za zpr�vu v na�� n�v�t�vn� knize!";
$f_lang['ok_save_msg_rem'] = "D�ky, automatick� odpov�� byla ulo�ena.";
$f_lang['envoyer_remerciement'] = "Chcete, aby bylo automaticky odesl�no pod�kov�n�?";
$f_lang['remerciement'] = "D�ky";
$f_lang['titre_guestbook'] = "Titulek n�v�t�vn� knihy";
$f_lang['text_titre_guestbook'] = "<b>M��ete zm�nit titulek n�v�t�vn� knihy</b> a napsat sv�j vlastn� pro ka�d� z jazyk�.";
$f_lang['titre'] = "Titulek";
$f_lang['parametrage'] = "Nastaven�";
$f_lang['ok_save_titre'] = "D�ky, titulek byl ulo�en.";
$f_lang['ville_visiteur'] = "M�sto :";
$f_lang['pays_visiteur'] = "Zem� :";
$f_lang['flag'] = "Vlajka";
$f_lang['ville_modif'] = "M�sto";
$f_lang['pays_modif'] = "Zem�";
$f_lang['action'] = "Akce";
$f_lang['repondre'] = "Odpov��";
$f_lang['votre_reponse'] = "Va�e odpov��";
$f_lang['ok_reponse_mess'] = "D�ky, Va�e odpov�� byla ulo�ena";
$f_lang['defaut_titre_rep'] = "Odpov�� spr�vce";
$f_lang['annuler'] = "Zru�";
$f_lang['num_appari'] = "Po�et instalovan�ch smajl�k�";
$f_lang['nb_max_smileys'] = "Maxim�ln� po�et zobrazovan�ch smajl�k�";
$f_lang['plus_smileys'] = "Uka� dal�� smajl�ky";
$f_lang['liste_all_smilies'] = "Seznam v�ech smajl�k�";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Tato funkce V�m umo��uje zobrazit posledn� zpr�vy vlo�en� do Va�� n�v�t�vn� knihy</b> na str�nce dle Va�� volby.";
$f_lang['parametrage_modele'] = "Nastaven� masky";
$f_lang['ok_save_boite'] = "D�ky, Va�e nastaven� bylo ulo�eno";
$f_lang['format_date_boite'] = "Form�t data (odpov�d� <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>funkci date()</b></a> jazyka PHP)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maxim�ln� po�et znak� zobrazuj�c�ch se ze jm�na nebo p�ezd�vky";
$f_lang['nbre_maxi_message_boite'] = "Maxim�ln� po�et znak� zobrazovan�ch ze zpr�vy";
$f_lang['modele_affichage_donnees'] = "Maska";
$f_lang['url_dossier_livre_boite'] = "Dopl�te adresu URL ke slo�ce s n�v�t�vn� knihou";
$f_lang['url_livre_boite'] = "Dopl�te adresu URL �vodn� str�nky n�v�t�vn� knihy";
$f_lang['generation_code'] = "Vytvo�en� javascriptu";
$f_lang['nom_msg_afficher'] = "Po�et zobrazovan�ch zpr�v";
$f_lang['generer_code'] = "Vytvo�it javascriptov� k�d";
$f_lang['code_a_copier'] = "HTML k�d, kter� mus� b�t zkop�rov�n do vybran� str�nky";
$f_lang['erreur_boite_java'] = "Zadejte pros�m platn�� po�et zobrazovan�ch zpr�v";
$f_lang['erreur_par_boite'] = "Chyba v konfiguraci, nemohu ve va�� masce naj�t sekci [BOUCLE] ... [/BOUCLE].";
$f_lang['saut_ligne_msg_boite'] = "Zachovat ��dkov�n� ve zpr�v�ch";
$f_lang['message_a'] = "v";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;manage datab�zi ?";
$f_lang['bdd'] = "Database";
$f_lang['optimisation'] = "Optimalizace";
$f_lang['sauvegarde'] = "Z�lohov�n�";
$f_lang['restauration'] = "Obnoven�";
$f_lang['optimisation_txt'] = "<b>Po z�pisech a maz�n� z�stalo v tabulk�ch datab�ze nevyu�it� m�sto.</b> To nen� vhodn� z pohledu rychlosti odezvy a v�konu datab�ze a t�m i Va�ich str�nek. Tato funkce umo��uje �e�it probl�m optimalizac� tabulek.";
$f_lang['liste_tables'] = "Seznam tabulek ve Va�� datab�zi";
$f_lang['lancer_optimisation'] = "Spou�t�m optimalizaci";
$f_lang['tables'] = "TABULKY";
$f_lang['pertes'] = "NAV�C";
$f_lang['octets'] = "byt�";
$f_lang['ok_optimise'] = "D�ky, optimalizace tabulek byla provedena";
$f_lang['txt_sauvegarde'] = "<b>Pokud chcete archivovat zpr�vy del�� �as, d�razn� doporu�ujeme pravideln� z�lohov�n� dat.</b> Probl�m s hardwarem probl�m m��e zlikvidovat v�echna Va�e data. Z�loha m��e b�t tak� u�ite�n� p�i p�echodu na jin� server.";
$f_lang['lancer_sauvegarde'] = "Spustit z�lohov�n�";
$f_lang['lancer_restauration'] = "Spustit obnovu";
$f_lang['txt_restauration'] = "<b>Pokud m�te k dispozici z�lohu, m��ete kompletn� obnovit data Va�� n�v�t�vn� knihy</b> Prost� jenom na Va�em disku vyberte odpov�daj�c� soubor se z�lohou .<br><br><b><u>POZOR</u></b>, pokud je tento soubor p��li� velik� (n�kolik megabyt�), m��e p�i obnov� doj�t k probl�mu d�ky nastaven� Va�eho serveru (�asov� limit b�hu skriptu nebo maxim�ln� povolen� velikost nahr�van�ho souboru).";
$f_lang['select_file'] = "Vyberte soubor se z�lohou na Va�em disku (.ZIP nebo .SQL)";
$f_lang['confirm_restauration'] = "Potvrzujete spu�t�n� obnovy dat ? Aktu�ln� data budou smaz�na!";
$f_lang['select_file_restau'] = "Vyberte pros�m soubor na Va�em disku";
$f_lang['erreur_ext_restau'] = "Vybran� soubor nem� p��ponu .ZIP nebo .SQL, obnova dat nem��e b�t spu�t�na.";
$f_lang['conseil_zip'] = "(Rozbalte ZIP soubor na V� pevn� disk k z�sk�n� souboru SQL)";
$f_lang['erreur_ext_zip'] = "Extension PHP_ZIP nen� na serveru dostupn�, obnova dat ze ZIP souboru nen� mo�n�. Vyberte pros�m .SQL soubor na Va�em disku".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Chyba p�i �ten� Va�eho ZIP archivu, nelze spustit obnovu dat.  Zkuste to prost�ednictv�m .SQL souboru ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Vybran� soubor SQL neobsahuje odpov�daj�c� p��kazy pro obnovu dat n�v�t�vn� knihy \"@lex Guestbook\".  Obnova nem��e b�t spu�t�na.";
$f_lang['restauration_terminee'] = "D�ky ! Obnova dat byla �sp�n� provedena !";

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