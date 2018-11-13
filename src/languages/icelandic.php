<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//   Icelandic translation by M�ni J�sefsson //
//          manijobba@gmail.com              //
///////////////////////////////////////////////

/* Encodage utilis� dans le script */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "is";

/* setup */
$f_lang['install_auto'] = "Sj�lfvirk uppsetning";
$f_lang['identi_base'] = "Gagnagrunns ID";
$f_lang['type_base'] = "Ger� gagnagrunns";
$f_lang['user_base'] = "Notendanafn";
$f_lang['pass_base'] = "Lykilor�";
$f_lang['nom_base'] = "Nafn gagnagrunns";
$f_lang['nom_table'] = "Nafn � t�flum gagnagrunns";
$f_lang['name_table_sessions'] = "Nafn � sessions t�flu";
$f_lang['name_table_users'] = "Nafn � notenda t�flu";
$f_lang['name_table_messages'] = "Nafn � skilabo�a t�flu";
$f_lang['name_table_censure'] = "Nafn � b�nnu� or� t�flu";
$f_lang['name_table_ip'] = "Nafn � banna IP t�flu";
$f_lang['name_table_smileys'] = "Nafn � smileys t�flu";
$f_lang['extension_script'] = "Skr�arger� skriftu";
$f_lang['choose_extension'] = "Veldu skr�arger� fyrir gestab�kina<br>(m�lt er me� \"php\", annars ver�ur a� endurnefna allar skr�r me� valinni endingu)";
$f_lang['identi_acces_admin'] = "�itt ID til a� f� a�gang a� stj�rnsv��i";
$f_lang['login_admin'] = "Notendanafn";
$f_lang['pass_admin'] = "Lykilor�";
$f_lang['verif_pass_admin'] = "Sta�festa lykilor�";
$f_lang['email_admin_setup'] = "Netfang";
$f_lang['installer'] = "Setja upp";
$f_lang['erreur_host'] = "�� gleymdir a� gefa upp host fyrir gagnagrunnsh�sil";
$f_lang['erreur_user'] = "�� gleymdir a� gefa upp ID til a� tengjast gagnagrunni";
$f_lang['erreur_nom_base'] = "�� gleymdir a� gefa upp nafni� � gagnagrunninum";
$f_lang['erreur_log_admin'] = "�� gleymdir a� gefa upp notendanafn til a� f� a�gang a� stj�rnsv��inu";
$f_lang['erreur_pass_admin'] = "�� gleymdir a� gefa upp lykilor� til a� f� a�gang a� stj�rnsv��inu";
$f_lang['erreur_pass_differents'] = "ATHUGI�, lykilor�in p�ssu�u ekki saman.";
$f_lang['erreur_first_connexion'] = "<b>Villa, ekki var h�gt a� tengjast gagnagrunni.</b><br><br>Athuga�u ID fyrir tenginguna ��na : <a href=\"javascript:history.go(-1);\"><b>Til baka</b></a>.";
$f_lang['erreur_install'] = "Uppsetning mist�kst";
$f_lang['ok_install'] = "Uppsetning t�kst";
$f_lang['text_ok_install'] = "<b>Takk fyrir ! Uppsetning heppna�ist.</b><br><br>Af �ryggis�st��um, m�lum vi� me� a� �� ey�ir uppsetningarskr� (\"setup.php\"), annars er m�gulegt fyrir utana�komandi a� breyta og/e�a ey�ileggja uppsetningu ��na .<br><br>�� getur n� komist � stj�rnsv��i� me� a� smella <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>h�rna</b></a> e�a<br> s�� hvernig h�n l�tur �t � s��unni �inni  <a href=\"".$chem_absolu."\" target=\"_blank\"><b>h�rna</b></a>.";

/* administration */
$f_lang['page protect'] = "L�st s��a";
$f_lang['login'] = "Notendanafn";
$f_lang['pass'] = "Lykilor�";
$f_lang['value identif'] = "Au�kenning";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Valm�guleikar";
$f_lang['script'] = "Gestab�kin";
$f_lang['graphismes'] = "�tlit gestab�kar";
$f_lang['messages'] = "Skilabo�";
$f_lang['gestion'] = "Tilh�gun";
$f_lang['censure_mots'] = "Banna or�";
$f_lang['smileys'] = "Broskallar";
$f_lang['utilisateurs'] = "S��ustj�rar";
$f_lang['ajouter'] = "B�ta vi�";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "Um...";
$f_lang['donner_avis'] = "Gaf�u okkur �itt �lit";
$f_lang['deconnexion'] = "aftengjast";

 /* options */
 $f_lang['options_livre'] = "Valm�guleikar gestab�kar";
$f_lang['options_generales'] = "Almmenir valm�guleikar";
$f_lang['langue'] = "Tungum�l";
$f_lang['send_mail'] = "Villt �� a� stj�rnendur f�i email �egar skilabo� eru skr�� � gestab�k ?";
$f_lang['avert_mail'] = "<br>(<b>uppl�singar</b> : Vefh�sillinn �inn notast ekki vi� <b>mail()</b>  sem ���ir a� jafnvel �� �� merkir vi� J�, er ekki h�gt a� senda tilkynningar � email)";
$f_lang['oui'] = "j�";
$f_lang['non'] = "nei";
$f_lang['options_modules'] = "Valm�guleikar fyrir reiti � gestab�k";
$f_lang['admin_champ_email'] = "Gestir eru be�nir a� gefa upp netfang";
$f_lang['admin_champ_site'] = "Gestir eru be�nir a� gefa upp veffang � vefs��u vi�komandi";
$f_lang['admin_champ_pays'] = "Gestir eru be�nir a� gefa upp sta� og land";
$f_lang['admin_champ_note'] = "Gestir geta gefi� �lit sitt � s��unni";
$f_lang['admin_ok_aff_moteur'] = "S�na m�guleika � leit";
$f_lang['options_tech'] = "T�knistillingar";
$f_lang['url_recharger'] = "Endurhla�a s��u fyrir gestab�k";
$f_lang['url_variables'] = "Stillingar sendar sem breytur (sl��u inn # � sta�inn fyrir $ � breytu)";
$f_lang['temps_session'] = "Gildist�mi fyrir Session � stj�rnsv��i";
$f_lang['skin_to_use'] = "�tlit sem � a� nota";
$f_lang['enregistrer'] = "Vista";
$f_lang['nb_pages'] = "Fj�ldi skilabo�a sem � a� birta � hverri s��u";
$f_lang['merci_options'] = "Takk fyrir, uppl�singarnar voru uppf�r�ar";
$f_lang['erreur_options'] = "Villa\\nEkki var h�gt a� vista uppl�singar, ekki var h�gt a� skrifa � \\\"config.".$alex_livre_ext."\\\" skr�nna, vinsamlega uppf�r�u uppl�singar skr�arinnar me� textaritli.";
$f_lang['temps_ip_post'] = "Fj�ldi m�n�tna ��ur en gestur getur skr�� �nnur skilabo�";
$f_lang['minutes'] = "m�n�tur";
$f_lang['cut_mots'] = "Fj�ldi stafa sem m� nota ��ur en l�ngum or�um er skipt";
$f_lang['format_date'] = "Sni� dagsetningar";

/* skins */
$f_lang['ok_ajouter'] = "Takk fyrir, �tliti� hefur veri� b�i� til";
$f_lang['erreur_ajouter'] = "VILLA\\nEkki var h�gt a� b�a til �tlit, vinsamlega b�i� til handst�rt";
$f_lang['text1_2'] = "Eftirfarandi sni� ver�a vistu� � &quot;templates/skins/&quot; m�ppunni. �� getur au�veldlega breytt �eim me� �essu vi�m�ti en �� getur l�ka breytt �eim beint me� HTML ritli";
$f_lang['text2'] = "<b>Ef �� villt l�ka breyta �tlitssni�i � stj�rnsv��i</b> vinsamlega geri� �a� handst�rt � &quot;templates/admin/&quot; m�ppunni.";
$f_lang['text_aj_skin'] = "B�ta vi� �tliti";
$f_lang['ajouter'] = "B�ta vi�";
$f_lang['gestion_skins'] = "�tlitsstj�rn";
$f_lang['vous_editez'] = "�� getur n� breytt �essu �tliti :";
$f_lang['style'] = "stylesheet";
$f_lang['ajouter_message'] = "b�ta vi� skilabo�ahluta";
$f_lang['nbre_messages_page'] = "fj�ldi skilabo�a / s��uhluti";
$f_lang['pages_dispos'] = "listi yfir a�gengilegar s��ur / n�sta s��a - fyrri s��u hluti";
$f_lang['texte_corps_messages'] = "skilabo� b�kur";
$f_lang['espacement'] = "bil milli tveggja skilabo�a";
$f_lang['text_assembly'] = "skr� sem safnar fyrri hluta";
$f_lang['ok_edit_skin'] = "Takk fyrir, �tliti� hefur veri� uppf�rt";
$f_lang['erreur_edit_skin'] = "VILLA\\nEkki var h�gt a� uppf�ra eina e�a fleiri skr� �r �tliti. Vinsamlega breyti� �essari/�essum skr�m handvirkt.";
$f_lang['ajouter'] = "B�ta vi�";
$f_lang['supprimer'] = "Ey�a";
$f_lang['text_sup_skin'] = "Ey�a �tliti";
$f_lang['ok_supprimer'] = "Takk fyrir, �tlitinu var eytt.";
$f_lang['erreur_supprimer'] = "VILLA\\nEkki var h�gt a� ey�a einni e�a fleiri skr�m �r �tliti, �eim �tti a� ey�a handvirkt.";

/* page des mots censur�s */
$f_lang['aj_mot'] = "B�ta vi� or�i "; 
$f_lang['mot_interdit'] = "Banna� or� :";
$f_lang['remplacer_par'] = "Skipta �t fyrir :";
$f_lang['gestion_censure'] = "Stj�rnun � b�nnu�um or�um";
$f_lang['mot'] = "or�";
$f_lang['remplace_by'] = "skipt �t fyrir";
$f_lang['liste_jour'] = "Uppf�ra listann";
$f_lang['sup_mots'] = "Fjarl�gja valin or�";
$f_lang['erreur_aj_censure1'] = "Vinsamlega gef�u upp or� til a� banna";
$f_lang['erreur_aj_censure2'] = "Vinsamlega gef�u upp or� til a� setja inn � sta�inn fyrir banna� or�";
$f_lang['ok_aj_mot'] = "Takk fyrir, b�nnu�u or�i var b�tt vi�.";
$f_lang['verif_sup'] = "Viltu endanlega fjarl�gja valin or� ?";
$f_lang['merci_modif'] = "Takk fyrir, breytingar hafa veri� vista�ar";

/* bannir des ip */
$f_lang['bannir_ip'] = "Banna ip t�lur";
$f_lang['text_ip1'] = "Hver vefnotandi hefur s�rstakt 4 talna ID (t.d. 201.10.25.14). �etta ID er gefi� �t af �eim sem veitir a�gang og breytist � hvert skipti sem notandinn tengist aftur.";
$f_lang['text_ip2'] = "Ef �� vilt <b>hindra notanda � a� skrifa � gestab�kina ��na</b>, getur �� afrita� IP t�luna hans hinga�. �� getur l�ka banna� e�a IP t�lur sem byrja � �kve�num t�lum me� a� nota t�kni� * (t.d. 201.15.55.*, e�a jafnvel 158.*.*.*).";
$f_lang['ajouter_ip'] = "B�ta vi� banna�ri IP t�lu";
$f_lang['gestion_ip'] = "Stj�rna IP t�lum";
$f_lang['sup_ip'] = "Fjarl�gja valdar IP t�lur";
$f_lang['ok_aj_ip'] = "Takk fyrir, �essi IP tala er n� b�nnu�";
$f_lang['verif_sup_ip'] = "Viltu ey�a �essum IP t�lum ?";

/* smileys */
$f_lang['gestion_smileys'] = "Stj�rna brosk�llum";
$f_lang['text_smileys'] = "<b>Notendur geta tj�� tilfinningar s�nar me� brosk�llum</b> �egar �eir skrifa skilabo�. �� getur fr� �essu vi�m�ti, sett inn fleiri broskalla svo a� notendur hafi �r sem flestum a� velja :o)<br><br>Broskallar sem h�gt er a� velja �r eru geymdir � \"images/smileys\" m�ppunni.";
$f_lang['ajouter_smiley'] = "B�ta vi� broskalli";
$f_lang['image_smiley'] = "Mynd";
$f_lang['car_replace'] = "Samb�rilegur k��i";
$f_lang['gestion_smileys'] = "Stj�rna brosk�llum";
$f_lang['sup_smileys'] = "Ey�a v�ldum brosk�llum";
$f_lang['erreur_image'] = "Vinsamlega veldu broskall";
$f_lang['erreur_car'] = "Veldu samb�rilegan k��a fyrir broskall";
$f_lang['ok_aj_smiley'] = "Takk fyrir, broskallinum hefur veri� b�tt vi�";
$f_lang['no_smiley'] = "Broskallinn ver�ur a� vera GIF e�a JPG";
$f_lang['copy_impossible'] = "VILLA\\nEkki var h�gt a� afrita broskallinn �  \\\"images/smileys\\\" m�ppuna.";
$f_lang['car_replace_exist'] = "VILLA\\nSamb�rilegur k��i finnst fyrir � gagnagrunni.";
$f_lang['modif_smileys'] = "Uppf�ra alla broskalla";
$f_lang['verif_sup_smileys'] = "Viltu ey�a v�ldum brosk�llum ?";
$f_lang['merci_modif_smileys'] = "Takk fyrir, brosk�llunum hefur veri� breytt.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "B�ta vi� stj�rnanda � gestab�k";
	$f_lang['add_admin_2'] = "B�ta stj�rnanda";
	$f_lang['ajouter_admin'] = "B�ta vi�";
	$f_lang['name_ajouter_admin'] = "b�ta vi�";
}
else{
	$f_lang['add_admin_texte'] = "Breyta gestab�kar stj�rnanda";
	$f_lang['add_admin_2'] = "Breyta stj�rnanda";
	$f_lang['ajouter_admin'] = "Vista";
	$f_lang['name_ajouter_admin'] = "breyta";
}

$f_lang['identif_connexion'] = "ID tengingar";
$f_lang['passe_admin'] = "Lykilor�";
$f_lang['email_admin'] = "Netfang (mikilv�gt ef �� villt a� stj�rnandi f�i email �egar n� skilabo� eru skr��)";
$f_lang['admin_receive_email'] = "Viltu a� stj�rnandi f�i email �egar n� skilabo� eru skr��?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;m� hann gera breytingar � gestab�k ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;breyta �tliti ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;a� stj�rna skilabo�um ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;a� stj�rna b�nnu�um or�um ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;a� stj�rna brosk�llum ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;a� stj�rna ��rum stj�rnendum ?";
$f_lang['erreur_name'] = "Vinsamlega gef�u upp tengingar ID";
$f_lang['erreur_passe'] = "Vinsamlega gef�u upp lykilor�";
$f_lang['erreur_email'] = "Vinsamlega gef�u upp netfang";
$f_lang['ok_aj_admin'] = "Takk fyrir, notandi hefur veri� stofna�ur";
$f_lang['ok_modif_admin'] = "Takk fyrir, notandinn hefur veri� uppf�r�ur";
$f_lang['erreur_aj_admin'] = "VILLA\\n�essi notandi er til";
$f_lang['revenir'] = "Aftur � fyrri s��u";

/* gestion des admins */
$f_lang['gest_admin'] = "stj�rna stj�rnendum";
$f_lang['sup_admin'] = "fjarl�gja";
$f_lang['login_admin'] = "Notendanafn";
$f_lang['email_admin'] = "Netfang";
$f_lang['modif_admin'] = "breyta";
$f_lang['value_sup_admin'] = "Fjarl�gja alla valda stj�rnendur";
$f_lang['verif_sup_admin'] = "Viltu fjarl�gja alla valda stj�rnendur ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "Ekki h�gt a� birta s��u";
$f_lang['erreur_auth'] = "Au�kenning mist�kst";
$f_lang['erreur_droits'] = "�� hefur ekki tilskilin r�ttindi til a� sko�a s��una.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Me�aleinkunn s��unar a� mati gesta :";
$f_lang['title_guestbook'] = "Gestab�k";
$f_lang['note_super'] = " : fr�b�r !";
$f_lang['note_moyen'] = " : mi�lungs";
$f_lang['note_rate'] = " : hro�aleg";
$f_lang['nom_pseudo_visiteur'] = "Nafn e�a g�lunafn :";
$f_lang['email_visiteur'] = "Netfang :";
$f_lang['site_web_visiteur'] = "Veffang(http://) :";
$f_lang['ville_pays_visiteur'] = "Sta�ur / Land :";
$f_lang['note_visiteur'] = "��n einkunn :";
$f_lang['message_visiteur'] = "Skilabo� :";
$f_lang['ajouter_message_visiteur'] = "Senda skilabo�";
$f_lang['erreur_add_nom'] = "Vinsamlega gef�u upp nafni� �itt";
$f_lang['erreur_add_message'] = "Vinsamlega skrifa�u skilabo�";
$f_lang['erreur_mail'] = "Netfangi� �itt er rangt";
$f_lang['messages'] = "Skilabo�";
$f_lang['messages_a'] = "til";
$f_lang['page'] = "S��a";
$f_lang['nbre_messages'] = "Fj�ldi skilabo�a";
$f_lang['message_le'] = "�ann";
$f_lang['message_note'] = "Einkunn";
$f_lang['send_mail_to'] = "Senda email til";
$f_lang['go_home'] = "Sko�a s��una";
$f_lang['precedente'] = "&lt;&lt; fyrra";
$f_lang['suivante'] = "n�sta &gt;&gt;";
$f_lang['no_message'] = "Engin skilabo�.";
$f_lang['no_ip'] = "ATHUGI�\\nIP talan ��n er b�nnu�, �� m�tt ekki skrifa � gestab�kina.";
$f_lang['ok_post'] = "Takk fyrir !  Skilabo�in ��n hafa veri� skr��.";
$f_lang['time_erreur'] = "ATHUGI�\\nEkki var h�gt a� skr� skilabo�in ��n, af �ryggis�st��um eru t�mam�rk � skr�ningum.Reyndu s��ar.";
$f_lang['text_select_search'] = "S�na a�eins skilabo� sem innihalda �kve�in or�";
$f_lang['text_ok_search'] = "Ok";

/* mail envoy� */
$f_lang['mail_object'] = "[info] - N� skilabo� � gestab�k - ";
$f_lang['mail_message'] = "Hi,\n\nN� skilabo� hafa veri� skr�� � gestab�kina � josefsson.dk ";

/* gestion des messages */
$f_lang['gestion_mess'] = "stj�rna skilabo�um";
$f_lang['selectionner_pages'] = "Velja";
$f_lang['messages_gest'] = "skilabo�";
$f_lang['page_gest'] = "s��a";
$f_lang['aller_en_page'] = "Fara � s��u";
$f_lang['supprimer_gest'] = "ey�a";
$f_lang['auteur_gest'] = "h�fundur";
$f_lang['modifier_gest'] = "breyta";
$f_lang['supprimer_mess_selected'] = "Ey�a v�ldum skilabo�um";
$f_lang['verif_sup_mess'] = "Viltu ey�a v�ldum skilabo�um ?";

/* modifier un message */
$f_lang['modif_mess'] = "Breyta skilabo�i";
$f_lang['message_modif'] = "Skilabo�";
$f_lang['nom_modif'] = "Nafn";
$f_lang['email_modif'] = "Netfang";
$f_lang['site_web_modif'] = "Veffang";
$f_lang['note_modif'] = "Einkunn fyrir s��u";
$f_lang['ville_pays_modif'] = "Sta�ur / Land";
$f_lang['date_modif'] = "Dags skrifa�";
$f_lang['ip_modif'] = "IP tala";
$f_lang['ok_modif_mess'] = "Takk fyrir, breytingarnar vista�ar";

/* titre des pages */
$f_lang['title identification'] = "au�kenning";
$f_lang['title administration'] = "stj�rnun";
$f_lang['title frame gauche'] = "vinstri rammi";
$f_lang['title options'] = "valm�guleikar";
$f_lang['title skins'] = "�tlit";
$f_lang['title censure'] = "Or� sem � a� banna";
$f_lang['title censure'] = "stj�rna b�nnu�um IP t�lum";
$f_lang['title smileys'] = "stj�rna brosk�llum";
$f_lang['title add admin'] = "b�ta vi� gestab�kar stj�rnanda";
$f_lang['title gest admin'] = "stj�rna gestab�kar stj�rnendum";
$f_lang['title erreur'] = "villa";
$f_lang['title gestion mess'] = "stj�rna skilabo�um";
$f_lang['title modif mess'] = "breyta skilabo�i";
$f_lang['title setup'] = "uppsetning";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Ekki h�gt a� tengjast gagnagrunni";
$f_lang['erreur_connexion'] = "Uppl�singar um ID eru r�ng";
$f_lang['manque login'] = "Vinsamlega sl��u inn notendanafn";
$f_lang['manque pass'] = "Vinsamlega sl��i inn lykilor�";
$f_lang['end session'] = "Session krefst n�rrar innskr�ningar";

/* add version 3.11 */
$f_lang['addSignature'] = "Skrifa skilabo�";
$f_lang['seeMessages'] = "Sko�a skilabo�";
$f_lang['addMessageBlocAdd'] = "B�ta vi� skilabo�i � gestab�k";

/* add version 3.2 */
$f_lang['version'] = "�tg�fa";
$f_lang['new_version_dispo'] = "H�gt er a� n�lgast uppf�r�a �tg�fu af gestab�kinni";
$f_lang['version_courrante'] = "N�verandi �tg�fa af gestab�k";
$f_lang['info_version'] = "Uppl�singar um ��na �tg�fu";
$f_lang['version_txt_ok'] = "��n �tg�fa af gestab�kinni er ".$alex_livre_version.",<br>�essi �tg�fa �arfnast ekki uppf�rslu.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "��n �tg�fa af gestab�kinni er ".$alex_livre_version.", <b>h�gt er a� n�lgast n�ja �tg�fu</b>";
$f_lang['version_down'] = "N� � uppf�r�a �tg�fu";
$f_lang['help_update'] = "Hj�lp fyrir uppf�rslu";
$f_lang['spam'] = "Ekki var h�gt a� fastsetja USER AGENT � vafranum ��num, �a� l�tur �t fyrir a� r�b�ti hafi sj�lfvirkt reynt a� senda skilabo�. S� �etta rangt, reyndu �� aftur me� ��rum vafra.";
$f_lang['avis_spammeurs'] = "Note to spammers";//translate to icelandic if you see the point in that...=)
$f_lang['txt_spammeurs'] = "<b>This Guestbook is protected against spamming</b>, Email adresses and URLs are encoded in the source code of the generated pages, therefore it's absolutely useless to post commercials links, they will not be seen by search engines (furthermore your message will be deleted anyway...)";//translate to icelandic if you see the point in that...=)
$f_lang['fermer'] = "Loka glugga";
$f_lang['valider_messages'] = "Viltu sko�a skilabo� ��ur en �au birtast � s��unni �inni ?";
$f_lang['valide'] = "Sam�ykkt ?";
$f_lang['mess_valide'] = "�etta skilabo� hefur veri� sam�ykkt";
$f_lang['mess_invalide'] = "�etta skilabo� b��ur sam�ykkis";
$f_lang['info_mess_valide'] = "Sam�ykkja skilabo� ?";
$f_lang['ok_post_valid'] = "Takk fyrir ! Skilabo�i� hefur veri� vista�, �a� ver�ur birt � s��u eftir sam�ykki vefstj�ra.";
$f_lang['see_skin'] = "Sko�a gestab�kina me� �essu �tliti";
$f_lang['maxi_car'] = "H�marksfj�ldi t�kna/stafa leyf�um � skilabo�i (0 = �takmarka�)";
$f_lang['il_reste'] = "�u getur l�ka skrifa� upp";
$f_lang['caracteres'] = "fleiri t�kn/stafir � skilabo�i";
$f_lang['sup_copyright'] = "Ey�a h�fundarr�tti";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Nafn � t�flu fyrir �ryggisk��a";
$f_lang['add_code_securite'] = "Viltu a� gestir skrifi �ryggisk��a ��ur en skilabo� eru send?";
$f_lang['t_chem_dossier_fonts'] = "URL a� skr�arsafni sem inniheldur leturger�ir(fonts)";
$f_lang['t_color_txt_code'] = "Hexadecimal k��i �ryggisk��aleturs";
$f_lang['t_color_background_code'] = "Hexadecimal k��i bakgrunns fyrir �ryggisk��a";
$f_lang['veuillez_taper_code'] = "Skr��u �ryggisk��an � kassann h�r til h�gri";
$f_lang['a_quoi_ca_sert'] = "Af hverju?";
$f_lang['why_code'] = "Til hvers \"�ryggisk��i\" ?";
$f_lang['txt_why_code'] = "�ryggisk��inn er til a� hindra sj�lfvirkan hugb�na� � a� skr� f�rslur.<br><br><b>Augl�singar og anna� spam er ekki leyft h�r!</b>";
$f_lang['erreur_code_securite'] = "Vinsamlega sl��u inn �ryggisk��a";
$f_lang['erreur_saisie_code_securite'] = "�ryggisk��inn sem �� sl�st inn var rangur.Vinsamlega reyndu aftur.";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Sj�lfvirkt svar";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;stj�rna sj�lfvirkum sv�rum?";
$f_lang['text_reponse_auto'] = "<b>� �essari s��u getur �� skr�� sj�lfvirk sv�r</b> sem ver�a send til gesta sem a� skr� skilabo� � gestab�kina ��na.  �essi skilabo� ver�a send ef �� virkjar �au � valm�guleikum gestab�karinnar.<br><br>Hvert tungum�l getur haft sitt sj�lfvirka svar og [PSEUDO] k��anum ver�ur skipt �t me� nafni e�a g�lunafni �ess sem skr�ir.";
$f_lang['name_table_rep_auto'] = "Nafn MySQL t�flunar sem inniheldur sj�lfvirk skilabo�";
$f_lang['gestion_reponses'] = "Stj�rna skilabo�um";
$f_lang['msg_remerciement'] = "'takk fyrir' skilabo�";
$f_lang['txt_remerciement'] = "Hall� [PSEUDO],\n\nTakk fyrir a� skr� skilabo� � gestab�kina m�na!";
$f_lang['ok_save_msg_rem'] = "Takk, sj�lfvirka �takk� skilabo�i� hefur veri� vista�.";
$f_lang['envoyer_remerciement'] = "Viltu a� �takk� skilabo� ver�i sent sj�lfvirkt?";
$f_lang['remerciement'] = "Takk";
$f_lang['titre_guestbook'] = "Titill gestab�kar";
$f_lang['text_titre_guestbook'] = "<b>�� getur breytt titli gestab�karinnar</b> og skrifa� eitt mismunandi fyrir hvert tungum�l.";
$f_lang['titre'] = "Titill";
$f_lang['parametrage'] = "Stillingar";
$f_lang['ok_save_titre'] = "Takk, titill gestab�kar hefur veri� vista�ur.";
$f_lang['ville_visiteur'] = "Sta�ur :";
$f_lang['pays_visiteur'] = "Land :";
$f_lang['flag'] = "F�ni";
$f_lang['ville_modif'] = "Sta�ur";
$f_lang['pays_modif'] = "Land";
$f_lang['action'] = "A�ger�";
$f_lang['repondre'] = "Svar";
$f_lang['votre_reponse'] = "�itt svar";
$f_lang['ok_reponse_mess'] = "Takk, svari� �itt hefur veri� vista�";
$f_lang['defaut_titre_rep'] = "Svar vefstj�ra";
$f_lang['annuler'] = "H�tta vi�";
$f_lang['num_appari'] = "S�ni n�mer";
$f_lang['nb_max_smileys'] = "H�marks fj�ldi broskalla";
$f_lang['plus_smileys'] = "S�na fleiri broskalla";
$f_lang['liste_all_smilies'] = "Lista alla broskalla";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>�essi a�ger� gerir ��r kleift a� sj� n�justu skilabo� sem voru skrifu�</b> � annari s��u a� eigin vali .";
$f_lang['parametrage_modele'] = "�tlits stillingar";
$f_lang['ok_save_boite'] = "Takk, stillingar hafa veri� vista�ar";
$f_lang['format_date_boite'] = "Sni� dagsetningar (samanber <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP a�ger�ina)";
$f_lang['nbre_maxi_pseudo_boite'] = "H�marks fj�ldi t�kna fyrir nafn e�a g�lunafn";
$f_lang['nbre_maxi_message_boite'] = "H�marks fj�ldi t�kna fyrir skilabo�atexta";
$f_lang['modele_affichage_donnees'] = "�tlitssni� fyrir gagnasendingar";
$f_lang['url_dossier_livre_boite'] = "Sl�� a� m�ppu sem inniheldur gestab�k";
$f_lang['url_livre_boite'] = "Sl�� a� fors��u gestab�kar";
$f_lang['generation_code'] = "B�a til Javascript k��a";
$f_lang['nom_msg_afficher'] = "H�mark s�nilegra skilabo�a";
$f_lang['generer_code'] = "B�a til Javascript call k��a";
$f_lang['code_a_copier'] = "HTML k��i sem m� afrita � s��u af eigin vali";
$f_lang['erreur_boite_java'] = "Vinsamlega sl��u inn h�mark s�nilegra skilabo�a";
$f_lang['erreur_par_boite'] = "Stillinga villa, get ekki einangra� [BOUCLE] ... [/BOUCLE] ke�juna � �tlitinu ��nu.";
$f_lang['saut_ligne_msg_boite'] = "Halda l�nuhoppum � skilabo�um";
$f_lang['message_a'] = "�";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;stj�rna gagnagrunni ?";
$f_lang['bdd'] = "Gagnagrunnur";
$f_lang['optimisation'] = "Hr��un";
$f_lang['sauvegarde'] = "Vistun";
$f_lang['restauration'] = "Enduruppsetning";
$f_lang['optimisation_txt'] = "<b>�egar �� breytir og ey�ir �r gagnagrunnst�flum, hle�st upp pl�ss sem er �n�tt.</b> �etta er sl�mt upp� hra�a s��unar og gagnagrunnsins og h�r getur �� hra�a� vinnslunni me� a� hreinsa til � gagnagrunnst�flunum.";
$f_lang['liste_tables'] = "Listi yfir t�flur � gagnagrunni";
$f_lang['lancer_optimisation'] = "Byrja hr��un";
$f_lang['tables'] = "T�FLUR";
$f_lang['pertes'] = "TAP";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Takk, t�flur sem ekki n�tast hafa veri� hreinsa�ar";
$f_lang['txt_sauvegarde'] = "<b>Ef �� vilt halda skilabo�um � lengri t�ma, �� er g�� hugmynd a� b�a til afrit.</b> Hrun h�silst�lvunar g�ti ��tt gagnatap .  Afrit eru l�ka gagnleg ef �� �arft a� f�ra t�flurnar ��nar � annann h�sil.";
$f_lang['lancer_sauvegarde'] = "Byrja afritunarferli";
$f_lang['lancer_restauration'] = "Byrja enduruppsetningu";
$f_lang['txt_restauration'] = "<b>Ef �� hefur b�i� til afrit, getur �� nota� afriti� til a� enduruppsetja gagnagrunninn �inn.</b> Veldu bara tilheyrandi skr� � t�lvunni �inni.<br><br><b><u>ATHUGI�/u></b>, ef skr�in er mj�g st�r (nokkur megab�ti), g�ti enduruppsetning gengi� h�gt e�a alls ekki en �a� veltur � stillingum h�sils.  (set_time_limit() og h�marksst�r� upphals).";
$f_lang['select_file'] = "Veldu afritsskr� (.ZIP e�a .SQL)";
$f_lang['confirm_restauration'] = "Hefja enduruppsetningu og ey�a �llum eldri g�gnum sem fyrir liggja � gagnagrunni?";
$f_lang['select_file_restau'] = "Veldu skr� af drifi";
$f_lang['erreur_ext_restau'] = "Valin skr� er ekki  .ZIP e�a .SQL, ekki h�gt a� hefja enduruppsetningu.";
$f_lang['conseil_zip'] = "(Pakka�u �t .ZIP skr�nni til a� n� � SQL skr�nna)";
$f_lang['erreur_ext_zip'] = " PHP_ZIP finnst ekki � h�sli, �arme� er enduruppsetning me� ZIP �tiloku�. Vinsamlega veldu .SQL skr� af drifinu ��nu".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Get ekki lesi� ZIP skjalasafn, Get ekki hafi� enduruppsetningu.  �� getur reynt aftur me� .SQL skr� ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Valin SQL skr� vir�ist ekki vera @lex Guestbook gestab�kar skr�.  Get ekki hafi� enduruppsetningu.";
$f_lang['restauration_terminee'] = "Takk ! Enduruppsetning heppna�ist !";

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

/* Erreur si versions differentes */
$f_lang['erreur_necessite_maj'] = "Version of files is different from the version of the database. Please update.";
$f_lang['erreur_necessite_maj_lien'] = "Link to update.";
?>