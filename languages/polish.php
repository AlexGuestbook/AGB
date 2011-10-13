<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2005    //
//          http://www.alexguestbook.com/      //
//              all right reserved           //
//        polish translation by the nym      //
///////////////////////////////////////////////

/* Encodage utilis� dans le script */
$SCRIPT_ENCODAGE = "iso-8859-2";
$CONTENT_LANGUAGE = "pl";

/* setup */
$f_lang['install_auto'] = "Automatyczna instalacja";
$f_lang['identi_base'] = "ID bazy danych";
$f_lang['type_base'] = "Typ bazy danych";
$f_lang['user_base'] = "U�ytkownik";
$f_lang['pass_base'] = "Has�o";
$f_lang['nom_base'] = "Nazwa bazy danych";
$f_lang['nom_table'] = "Nazwy tabel";
$f_lang['name_table_sessions'] = "Nazwa tabeli sesji";
$f_lang['name_table_users'] = "Nazwa tabeli u�ytkownik�w";
$f_lang['name_table_messages'] = "Nazwa tabeli wiadomo�ci";
$f_lang['name_table_censure'] = "Nazwa tabeli s��w ocenzurowanych";
$f_lang['name_table_ip'] = "Nazwa tabeli zbanowanych IP";
$f_lang['name_table_smileys'] = "Nazwa tabeli u�mieszk�w";
$f_lang['extension_script'] = "Rozszerzenie skryptu";
$f_lang['choose_extension'] = "Wybierz rozszerzenie skrypt�w<br>(radzimy u�ycie \"php\", inaczej b�dziesz musia� zmieni� nazw� wszystkich plik�w z wybranym rozszerzeniem)";
$f_lang['identi_acces_admin'] = "Twoja identyfikacja dost�pu do panelu administracyjnego";
$f_lang['login_admin'] = "Login";
$f_lang['pass_admin'] = "Has�o";
$f_lang['verif_pass_admin'] = "Wpisz ponownie has�o";
$f_lang['email_admin_setup'] = "Tw�j Email";
$f_lang['installer'] = "Instaluj";
$f_lang['erreur_host'] = "Zapomnia�e� poda� nazwy hosta";
$f_lang['erreur_user'] = "Zapomnia�e� poda� swojego ID do po��czenia z baz� danych";
$f_lang['erreur_nom_base'] = "Zapomnia�e� poda� nazwy swojej bazy danych";
$f_lang['erreur_log_admin'] = "Zapomnia�e� poda� swojego loginu do panelu administracyjnego";
$f_lang['erreur_pass_admin'] = "Zapomnia�e� poda� swojego has�a do panelu administracyjnego";
$f_lang['erreur_pass_differents'] = "UWAGA, twoje has�a s� r�ne.";
$f_lang['erreur_first_connexion'] = "<b>B��D, nie mo�na po��czy� si� z baz� danych.</b><br><br>prosz� sprawdzi� sw�j ID : <a href=\"javascript:history.go(-1);\"><b>wr��</b></a>.";
$f_lang['erreur_install'] = "B��d instalacji";
$f_lang['ok_install'] = "Instalacja prawid�owa";
$f_lang['text_ok_install'] = "<b>Dzi�kuj� ! Instalacja zako�czy�a si� prawid�owo.</b><br><br>Z powod�w bezpiecze�stwa, radzimy usun�� plik instalacji, kt�rego w�a�nie u�ywa�e� (\"setup.php\"), je�eli tego nie zrobisz, kto� b�dzie m�g� go u�y� do zepsucia twoich plik�w konfiguracyjnych.<br><br>Mo�esz teraz zarz�dza� swoj� ksi�g� go�ci klikaj�c <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>tutaj</b></a> lub<br> zobaczy� panel go�ci <a href=\"".$chem_absolu."\" target=\"_blank\"><b>tutaj</b></a>.";

/* administration */
$f_lang['page protect'] = "Strona logowania";
$f_lang['login'] = "Login";
$f_lang['pass'] = "Has�o";
$f_lang['value identif'] = "Zaloguj";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Opcje";
$f_lang['script'] = "Skrypty";
$f_lang['graphismes'] = "Sk�rki";
$f_lang['messages'] = "Wpis�w";
$f_lang['gestion'] = "Zarz�dzanie";
$f_lang['censure_mots'] = "Cenura s��w";
$f_lang['smileys'] = "U�mieszki";
$f_lang['utilisateurs'] = "Administratorzy";
$f_lang['ajouter'] = "Dodaj";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "O...";
$f_lang['donner_avis'] = "Dodaj opini�";
$f_lang['deconnexion'] = "Wyloguj";

 /* options */
 $f_lang['options_livre'] = "Opcje ksi�gi";
$f_lang['options_generales'] = "Opcje og�lne";
$f_lang['langue'] = "J�zyk";
$f_lang['send_mail'] = " Czy chcesz, �eby administratorzy otrzymywali email po wys�aniu nowej wiadomo�ci ?";
$f_lang['avert_mail'] = "<br>(<b>informacja</b> : funkcja mail() na twoim serwerze jest  wy��czona, dlatego nawet je�eli ustawisz \"tak\" nie otrzymasz powiadomienia email)";
$f_lang['oui'] = "tak";
$f_lang['non'] = "nie";
$f_lang['options_modules'] = "Opcje p�l ksi�gi go�ci";
$f_lang['admin_champ_email'] = "Go�cie s� proszeni o podanie adresu email";
$f_lang['admin_champ_site'] = "Go�cie s� proszeni o podanie adresu URL swojej strony";
$f_lang['admin_champ_pays'] = "Go�cie s� proszeni o podanie nazwy miasta i kraju";
$f_lang['admin_champ_note'] = "Go�cie mog� ocenia� twoj� stron�";
$f_lang['admin_ok_aff_moteur'] = "Poka� wyszukiwanie";
$f_lang['options_tech'] = "Opcje techniczne ";
$f_lang['url_recharger'] = "Strona po prze�adowaniu ksi�gi go�ci";
$f_lang['url_variables'] = "Zmienne instrukcje wys�ane jako parametry (napisz # zamiast $ w zmiennej)";
$f_lang['temps_session'] = "Czas trwania sesji w sekundach dla panelu administracyjnego";
$f_lang['skin_to_use'] = "U�ywana sk�rka";
$f_lang['enregistrer'] = "Zapisz";
$f_lang['nb_pages'] = "Liczba wiadomo�ci pokazywana na ka�dej stronie ksi�gi go�ci";
$f_lang['merci_options'] = "Dzi�kuj�, informacje zaktualizowane";
$f_lang['erreur_options'] = "B��D\\nInformacje nie mog�yby by� zachowane, nie mo�na by�o zapisa� pliku \\\"config.".$alex_livre_ext."\\\", prosz� edytuj ten plik edytorem tekst�w aby zmieni� twoje ustawienia.";
$f_lang['temps_ip_post'] = "Liczba minut zanim go�� b�dzie m�g� zapisa� ponownie wiadomo��";
$f_lang['minutes'] = "minut";
$f_lang['cut_mots'] = "Ilo�� liter zanim d�ugi wyraz zostanie podzielony";
$f_lang['format_date'] = "Format daty";

/* skins */
$f_lang['ok_ajouter'] = "Dzi�kuj�, sk�rka zosta�a utworzona";
$f_lang['erreur_ajouter'] = "B��D\\nSk�rka nie mo�e by� utworzona, prosz� utworzy� j� r�cznie";
$f_lang['text1_2'] = "Poni�sze sk�rki b�d� zapisane w folderze &quot;templates/skins/&quot;. Ten interfejs umo�liwia �atw� ich modyfikacj� ale ty mo�esz r�cznie edytowa� pliki html.";
$f_lang['text2'] = "<b>Je�eli te� chcesz zmodyfikowa� szablony panelu administracji</b> prosz� edytuj r�cznie pliki w folderze &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "Dodaj sk�rk�";
$f_lang['ajouter'] = "Dodaj";
$f_lang['gestion_skins'] = "Zarz�dzanie sk�rkami";
$f_lang['vous_editez'] = "Edytujesz sk�rk� :";
$f_lang['style'] = "arkusz styl�w";
$f_lang['ajouter_message'] = "cz�� edycji wiadomo�ci";
$f_lang['nbre_messages_page'] = "Ilo�� wpis�w / cz�� strony";
$f_lang['pages_dispos'] = "lista dost�pnych stron / nast�pna strona - cz�� poprzedniej strony";
$f_lang['texte_corps_messages'] = "tre�� wiadomo�ci";
$f_lang['espacement'] = "Odst�p mi�dzy wpisami";
$f_lang['text_assembly'] = "plik zbieraj�cy poprzednie cz�ci";
$f_lang['ok_edit_skin'] = "Dzi�kuj�, sk�rka zosta�a uaktualniona";
$f_lang['erreur_edit_skin'] = "B��D\\ �aden lub kilka plik�w sk�rki nie mo�e by� uaktualniony. Prosz� to zrobi� r�cznie.";
$f_lang['ajouter'] = "Dodaj";
$f_lang['supprimer'] = "Skasuj";
$f_lang['text_sup_skin'] = "Skasuj sk�rk�";
$f_lang['ok_supprimer'] = "Dzi�kuj�, sk�rka zosta�a skasowana.";
$f_lang['erreur_supprimer'] = "B��D\\ �aden lub kilka plik�w sk�rki nie mo�e by� skasowany, Prosz� to zrobi� r�cznie.";

/* page des mots censur�s */
$f_lang['aj_mot'] = "Dodaj nowe s�owo "; 
$f_lang['mot_interdit'] = "S�owo zakazane :";
$f_lang['remplacer_par'] = "Zamie� na :";
$f_lang['gestion_censure'] = "Zarz�dzanie zakazanymi s�owami";
$f_lang['mot'] = "s�owo";
$f_lang['remplace_by'] = "zamienione na";
$f_lang['liste_jour'] = "Uaktualnij list�";
$f_lang['sup_mots'] = "Skasuj wybrane s�owa";
$f_lang['erreur_aj_censure1'] = "Prosz� doda� s�owo do cenzury";
$f_lang['erreur_aj_censure2'] = "Prosz� doda� s�owo zast�puj�ce ocenzurowane s�owa";
$f_lang['ok_aj_mot'] = "Dzi�kuj�, zakazane s�owo zosta�o dodane.";
$f_lang['verif_sup'] = "Czy chcesz trwale usun�� wybrane s�owa ?";
$f_lang['merci_modif'] = "Dzi�kuj�, zmiany zosta�y zapisane";

/* bannir des ip */
$f_lang['bannir_ip'] = "Banowanie IP";
$f_lang['text_ip1'] = "Ka�dy surfer w sieci ma specyficzny 4 liczbowy identyfikator (np. 201.10.25.14). Ten identyfikator jest nadawany przez dostawc� sieci i zmienia si�, teoretycznie, za ka�dym razem po ponownym po��czeniu.";
$f_lang['text_ip2'] = "Je�eli chcesz <b>powstrzyma� u�ytkownika przed wysy�aniem wiadomo�ci do twojej ksi�gi go�ci</b>, mo�esz tutaj skopiowa� jego IP adres. Mo�esz te� blokowa� zakres adres�w IP u�ywaj�c gwiazdki * (np. 201.15.55.*, lub nawet 158.*.*.*).";
$f_lang['ajouter_ip'] = "Dodaj nowy zbanowany IP";
$f_lang['gestion_ip'] = "Zarz�dzanie adresami IP";
$f_lang['sup_ip'] = "Usu� wybrane zbanowane adresy IP";
$f_lang['ok_aj_ip'] = "Dzi�kuj�, ten adres IP zosta� w�a�nie zbanowany";
$f_lang['verif_sup_ip'] = "Czy chcesz trwale usun�� wybrane adresy IP ?";

/* smileys */
$f_lang['gestion_smileys'] = "Zarz�dzanie u�mieszkami";
$f_lang['text_smileys'] = "<b>U�mieszki pozwalaj� na pokazanie uczu�</b> podczas pisania wiadomo�ci. W tym interfejsie mo�esz �atwo doda� albo usun�� u�mieszki tak, aby twoi u�ytkownicy mieli ich wi�kszy wyb�r :o)<br><br>U�mieszki dost�pne na tej stronie s� przechowane w folderze \"images/smileys\".";
$f_lang['ajouter_smiley'] = "Dodaj u�mieszki";
$f_lang['image_smiley'] = "Obrazek";
$f_lang['car_replace'] = "Odpowiadaj�cy kod";
$f_lang['gestion_smileys'] = "Zarz�dzanie u�mieszkami";
$f_lang['sup_smileys'] = "Usu� wybrane u�mieszki";
$f_lang['erreur_image'] = "Prosz� wybra� u�mieszek";
$f_lang['erreur_car'] = "Prosz� wybra� odpowiadaj�cy kod wybranego u�mieszka";
$f_lang['ok_aj_smiley'] = "Dzi�kuj�, u�mieszek zosta� dodany";
$f_lang['no_smiley'] = "U�mieszek musi by� obrazem GIF lub JPEG";
$f_lang['copy_impossible'] = "B��D\\nNie mo�na skopiowa� u�mieszka do foldera \\\"images/smileys\\\".";
$f_lang['car_replace_exist'] = "B��D\\nOdpowiadaj�cy kod ju� istnieje w bazie danych.";
$f_lang['modif_smileys'] = "Uaktualnij wszystkie u�mieszki";
$f_lang['verif_sup_smileys'] = " Naprawd� chcesz usun�� wybrane u�mieszki ?";
$f_lang['merci_modif_smileys'] = "Dzi�kuj�, u�mieszki zosta�y zmodyfikowane.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Dodaj administratora ksi�gi go�ci";
	$f_lang['add_admin_2'] = "Dodaj admina";
	$f_lang['ajouter_admin'] = "Dodaj";
	$f_lang['name_ajouter_admin'] = "dodaj";
}
else{
	$f_lang['add_admin_texte'] = "Modyfikuj administratora ksi�gi go�ci";
	$f_lang['add_admin_2'] = "Modyfikuj admina";
	$f_lang['ajouter_admin'] = "Zapisz";
	$f_lang['name_ajouter_admin'] = "modyfikuj";
}

$f_lang['identif_connexion'] = "Login";
$f_lang['passe_admin'] = "Has�o";
$f_lang['email_admin'] = "Email (wa�ne je�li admin chce otrzyma� email po wys�aniu wiadomo�ci)";
$f_lang['admin_receive_email'] = " Czy chcesz �eby administrator otrzyma� email po wys�aniu wiadomo�ci?";
$f_lang['admin_modif_options'] = "czy mo�e modyfikowa� opcje skryptu ?";
$f_lang['admin_gestion_skins'] = "czy mo�e zmienia� sk�rki ?";
$f_lang['admin_gestion_messages'] = "czy mo�e zarz�dza� wiadomo�ciami ?";
$f_lang['admin_gestion_censure'] = "czy mo�e zarz�dza� s�owami cenzurowanymi ?";
$f_lang['admin_gestion_smileys'] = "czy mo�e zarz�dza� u�mieszkami ?";
$f_lang['admin_gestion_admin'] = "czy mo�e zarz�dza� innymi opcjami administratora ?";
$f_lang['erreur_name'] = "Prosz� poda� login";
$f_lang['erreur_passe'] = "Prosz� poda� has�o";
$f_lang['erreur_email'] = "Prosz� poda� email";
$f_lang['ok_aj_admin'] = "Dzi�kuj�, konto zosta�o utowrzone";
$f_lang['ok_modif_admin'] = "Dzi�kuj�, konto zosta�o zaktualizowane";
$f_lang['erreur_aj_admin'] = "B��D\\nTen login ju� istnieje";
$f_lang['revenir'] = "Powr�t do poprzedniej strony";

/* gestion des admins */
$f_lang['gest_admin'] = "Zarz�dzanie administratorami";
$f_lang['sup_admin'] = "usu�";
$f_lang['login_admin'] = "login";
$f_lang['email_admin'] = "email";
$f_lang['modif_admin'] = "modyfikuj";
$f_lang['value_sup_admin'] = "Skasuj wybranych admin�w";
$f_lang['verif_sup_admin'] = "Czy naprawd� chcesz skasowa� wybranych admin�w ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "STRONA NIEDOST�PNA";
$f_lang['erreur_auth'] = "Brak autoryzacji";
$f_lang['erreur_droits'] = "Nie masz wymaganych praw dost�pu do tej strony.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "�rednia ocena go�ci odwiedzj�cych t� stron� :";
$f_lang['title_guestbook'] = "Ksi�ga go�ci";
$f_lang['note_super'] = " : fantastyczna !";
$f_lang['note_moyen'] = " : �rednia";
$f_lang['note_rate'] = " : beznadziejna";
$f_lang['nom_pseudo_visiteur'] = "Imi� lub Nick :";
$f_lang['email_visiteur'] = "Adres Email :";
$f_lang['site_web_visiteur'] = "URL strony :";
$f_lang['ville_pays_visiteur'] = "Miasto / Kraj :";
$f_lang['note_visiteur'] = "Twoja ocena :";
$f_lang['message_visiteur'] = "Wpisz wiadomo�� :";
$f_lang['ajouter_message_visiteur'] = "Zapisz wiadomo��";
$f_lang['erreur_add_nom'] = "Prosz� poda� swoje imi�";
$f_lang['erreur_add_message'] = "Prosz� wpisa� swoj� wiadomo��";
$f_lang['erreur_mail'] = "Tw�j adres email jest niepoprawny";
$f_lang['messages'] = "Wpisy";
$f_lang['messages_a'] = "do";
$f_lang['page'] = "Strona";
$f_lang['nbre_messages'] = "Ilo�� wpis�w";
$f_lang['message_le'] = "dnia";
$f_lang['message_note'] = "Ocena";
$f_lang['send_mail_to'] = "Wy�lij email do";
$f_lang['go_home'] = "Odwied� stron�";
$f_lang['precedente'] = "&lt;&lt; poprzednia";
$f_lang['suivante'] = "nast�pna &gt;&gt;";
$f_lang['no_message'] = "Brak wpis�w.";
$f_lang['no_ip'] = "UWAGA\\nTw�j IP zosta� zbanow�any, nie jeste� upowa�niony do wpisywania wiadomo�ci w tej ksi�dze go�.";
$f_lang['ok_post'] = "Dzi�kuj� !  Twoja wiadomo�� zosta�a zapisana poprawnie.";
$f_lang['time_erreur'] = "UWAGA\\nTwoja wiadomo�� nie mo�e by� zapisana, zapisa�e� j� ju� wcze�niej.";
$f_lang['text_select_search'] = "Poka� wpisy zawieraj�ce tylko s�owa";
$f_lang['text_ok_search'] = "Ok";

/* mail envoy� */
$f_lang['mail_object'] = "[info] - Nowa wiadomo�� w twojej ksi�dze go�ci - ";
$f_lang['mail_message'] = "Hi,\n\nInformujemy ci�, �e nowa wiadomo�� zosta�a zapisana w twojej ksi�dze go�ci ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Zarz�dzanie wiadomo�ciami";
$f_lang['selectionner_pages'] = "Wybierz";
$f_lang['messages_gest'] = "wiadomo��";
$f_lang['page_gest'] = "strona";
$f_lang['aller_en_page'] = "Id� do strony";
$f_lang['supprimer_gest'] = "skasuj";
$f_lang['auteur_gest'] = "autor";
$f_lang['modifier_gest'] = "edytuj";
$f_lang['supprimer_mess_selected'] = "Skasuj wybrane wiadomo�ci";
$f_lang['verif_sup_mess'] = "Czy chcesz na prawd� skasowa� wybrane wiadomo�ci ?";

/* modifier un message */
$f_lang['modif_mess'] = "Edytuj wiadomo��";
$f_lang['message_modif'] = "wiadomo��";
$f_lang['nom_modif'] = "Imi�";
$f_lang['email_modif'] = "Email";
$f_lang['site_web_modif'] = "URL strony";
$f_lang['note_modif'] = "Ocena twojej strony";
$f_lang['ville_pays_modif'] = "Miasto / Kraj";
$f_lang['date_modif'] = "Data wpisania";
$f_lang['ip_modif'] = "adres IP";
$f_lang['ok_modif_mess'] = "Dzi�kuj�, zmiany zosta�y zapisane";

/* titre des pages */
$f_lang['title identification'] = "identyfikacja";
$f_lang['title administration'] = "administracja";
$f_lang['title frame gauche'] = "lewa ramka";
$f_lang['title options'] = "opcje";
$f_lang['title skins'] = "sk�rki";
$f_lang['title censure'] = "s�owo do cenzury";
$f_lang['title censure'] = "zarz�dzanie zbanowanymi IP";
$f_lang['title smileys'] = "zarz�dzanie u�mieszkami";
$f_lang['title add admin'] = "dodaj administratora ksi�gi go�ci";
$f_lang['title gest admin'] = "zarz�dzanie administratorami ksi�gi go�ci";
$f_lang['title erreur'] = "B��D";
$f_lang['title gestion mess'] = "zarz�dzanie wiadomo�ciami";
$f_lang['title modif mess'] = "edycja wiadomo�ci";
$f_lang['title setup'] = "instalacja";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Nie mo�na po��czy� si� z baz� danych";
$f_lang['erreur_connexion'] = "Twoje informacje ID s� niepoprawne";
$f_lang['manque login'] = "Prosz� podaj sw�j login";
$f_lang['manque pass'] = "Prosz� podaj swoje has�o";
$f_lang['end session'] = "Twoja sesja zako�czy�a si�";

/* add version 3.11 */
$f_lang['addSignature'] = "Wpisz  ";
$f_lang['seeMessages'] = "Przegl�daj wpisy";
$f_lang['addMessageBlocAdd'] = "Wpisz wiadomo�� do ksi�gi go�ci";

/* add version 3.2 */
$f_lang['version'] = "Wersja";
$f_lang['new_version_dispo'] = "Dost�pna jest uaktualniona wersja ksi�gi go�ci";
$f_lang['version_courrante'] = "Aktualna wersja skryptu";
$f_lang['info_version'] = "Informacja o wersji, kt�r� posiadasz";
$f_lang['version_txt_ok'] = "Wersja kt�r� posiadasz ".$alex_livre_version.",<br>ta wersja jest ostatnia, �adna aktualizacja nie jest konieczna.";
$f_lang['version_txt_update'] = "Wersja kt�r� posiadasz ".$alex_livre_version.", <b>dost�pna jest nowa wersja</b>";
$f_lang['version_down'] = "Pobierz ulepszon� wersj�";
$f_lang['help_update'] = "Pomoc dla aktualizacji";
$f_lang['spam'] = "USER AGENT twojej przegl�darki nie zosta� rozpoznany, wydaje si�, �e to robot pr�bowa� automatycznie wys�a� wiadomo��. Je�eli jest to nieprawda, spr�buj ponownie z inn� przegl�dark�.";
$f_lang['avis_spammeurs'] = "Informacja dla spamer�w";
$f_lang['txt_spammeurs'] = "<b>Ta ksi�ga go�ci jest zabezpieczona przed spamem</b>, Adresy email i URL s� kodowane w kodzie �r�d�owym generowanych stron, dlatego wysy�anie link�w reklam jest ca�kowicie bezcelowe, poniewa� nie b�d� widziane przez silniki wyszukiwania (ponadto twoja wiadomo�� natychmiast zostanie usuni�ta...)";
$f_lang['fermer'] = "Zamknij to okno";
$f_lang['valider_messages'] = "Czy chcesz przegl�da� wys�ane wiadomo�ci zanim b�d� widoczne publicznie w ksi�dze go�ci ?";
$f_lang['valide'] = "Zatwierdzona ?";
$f_lang['mess_valide'] = "Ta wiadomo�� zosta�a zatwierdzona";
$f_lang['mess_invalide'] = "wiadomo�� oczekuje na zatwierdzenie";
$f_lang['info_mess_valide'] = "Wiadomo�� zatwierdzona ?";
$f_lang['ok_post_valid'] = "Dzi�kuj� ! Twoja wiadomo�� zosta�a zapisana i oczekuje na akceptacj� webmastera.";
$f_lang['see_skin'] = "Zobacz ksi�g� w tej sk�rce";
$f_lang['maxi_car'] = "Maksymalna liczba znak�w/liter dozwolona w wiadomo�ci (0 = bez limitu)";
$f_lang['il_reste'] = "Mo�esz wpisa� do";
$f_lang['caracteres'] = "znak�w w swojej wiadomo�ci";
$f_lang['sup_copyright'] = "Skasuj copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Nazwa tabeli kod�w bezpiecze�stwa";
$f_lang['add_code_securite'] = "Czy chcesz wymaga�, �eby u�ytkownik poda� kod bezpiecze�stwa przed wys�aniem wiadomo�ci?";
$f_lang['t_chem_dossier_fonts'] = "pe�ny URL do folderu font�w";
$f_lang['t_color_txt_code'] = "Szesnastkowy kod koloru tekstu";
$f_lang['t_color_background_code'] = "Szesnastkowy kod koloru t�a";
$f_lang['veuillez_taper_code'] = "Przepisz kod z obrazka";
$f_lang['a_quoi_ca_sert'] = "Do czego to s�u�y?";
$f_lang['why_code'] = "Dlaczego \"kod bezpiecze�stwa\" ?";
$f_lang['txt_why_code'] = "Ten proces pozwala mi skontrolowa� czy wiadomo�� wpisana jest przez prawdziw� osob� czy przez robota.<br><br><b>Reklamy i spam s� zakazane w tej ksi�dze go�ci!</b>";
$f_lang['erreur_code_securite'] = "Prosz� przepisa� kod z obrazka";
$f_lang['erreur_saisie_code_securite'] = "Wpisany kod jest nieprawid�owy, prosz� powt�rzy� operacj�";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatyczna odpowied�";
$f_lang['admin_gestion_reponse_auto'] = "czy mo�e zarz�dza� automatycznymi odpowiedziami?";
$f_lang['text_reponse_auto'] = "<b>Na tej stronie mo�esz napisa� automatyczn� odpowied�,</b> kt�ra b�dzie wys�ana do u�ytkownika pisz�cego wiadomo�� w twojej ksi�dze go�ci. Ta wiadomo�� b�dzie wys�ana je�eli aktywujesz t� funkcj� w opcjach skryptu.<br><br>Ka�dy j�zyk mo�e mie� swoj� w�asn� odpowied�, a kod [PSEUDO] b�dzie zast�piony przez nazw� albo nick u�ytkownika, kt�ry wys�a� wiadomo��.";
$f_lang['name_table_rep_auto'] = "Nazwa tabeli MySQL, kt�ra b�dzie zawiera� automatyczne odpowiedzi";
$f_lang['gestion_reponses'] = "Zarz�dzanie wiadomo�ciami";
$f_lang['msg_remerciement'] = "Podzi�kowanie";
$f_lang['txt_remerciement'] = "Witaj [PSEUDO],\n\nDzi�kuj� za wpis do ksi�gi go�ci!";
$f_lang['ok_save_msg_rem'] = "Dzi�kuj�, automatyczne podzi�kowanie zosta�o zapisane.";
$f_lang['envoyer_remerciement'] = "Czy chcesz aby podzi�kowanie by�o wysy�ane automatycznie ?";
$f_lang['remerciement'] = "Dzi�kuj�";
$f_lang['titre_guestbook'] = "Tytu� ksi�gi";
$f_lang['text_titre_guestbook'] = "<b>Mo�esz zmieni� tytu� ksi�gi go�ci </b> i wpisa� inny dla ka�dego dost�pnego j�zyka.";
$f_lang['titre'] = "Tytu�";
$f_lang['parametrage'] = "Ustawienia";
$f_lang['ok_save_titre'] = "Dzi�kuj�, tytu� zosta� zapisany.";
$f_lang['ville_visiteur'] = "Miasto :";
$f_lang['pays_visiteur'] = "Kraj :";
$f_lang['flag'] = "Flaga";
$f_lang['ville_modif'] = "Miasto";
$f_lang['pays_modif'] = "Kraj";
$f_lang['action'] = "Akcja";
$f_lang['repondre'] = "Odpowied�";
$f_lang['votre_reponse'] = "Twoja odpowied�";
$f_lang['ok_reponse_mess'] = "Dzi�kuj�, Twoja odpowied� zosta�a zapisana";
$f_lang['defaut_titre_rep'] = "Odpowied� webmastera";
$f_lang['annuler'] = "Porzu�";
$f_lang['num_appari'] = "Wy�wietlany numer";
$f_lang['nb_max_smileys'] = "Maksymalna liczba u�mieszk�w";
$f_lang['plus_smileys'] = "Poka� wi�cej u�mieszk�w";
$f_lang['liste_all_smilies'] = "Lista wszystkich u�mieszk�w";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Ta funkcja pozwala pokaza� ostatnie wiadomo�ci zapisane w twojej ksi�dze go�ci</b> na innej stronie wed�ug twojego wyboru.";
$f_lang['parametrage_modele'] = "Ustawienia szablonu";
$f_lang['ok_save_boite'] = "Dzi�kuj�, twoje ustawienia zosta�y zapisane";
$f_lang['format_date_boite'] = "Format daty (identyczny z funkcj� <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maksymalna liczba znak�w pokazanych dla imienia albo nicka";
$f_lang['nbre_maxi_message_boite'] = "Maksymalna liczba znak�w pokazanych dla wiadomo�ci";
$f_lang['modele_affichage_donnees'] = "Kod szablonu do wysy�ania wiadomo�ci";
$f_lang['url_dossier_livre_boite'] = "Kompletny URL do folderu twojej ksi�gi go�ci";
$f_lang['url_livre_boite'] = "Kompletny URL do strony index twojej ksi�gi go�ci";
$f_lang['generation_code'] = "Tworzenie kodu Javascript";
$f_lang['nom_msg_afficher'] = "Ilo�� pokazywanych wiadomo�ci ";
$f_lang['generer_code'] = "Tworzenie kodu wywo�ania Javascript";
$f_lang['code_a_copier'] = "Kod HTML do skopiowania na stron�, kt�r� wybra�e�";
$f_lang['erreur_boite_java'] = "Prosz� ustawi� prawid�ow� ilo�� pokazywanych wiadomo�ci";
$f_lang['erreur_par_boite'] = "B��D USTAWIE�, nie mo�na oddzieli� �a�cucha [BOUCLE] ... [/BOUCLE] w twoim szablonie.";
$f_lang['saut_ligne_msg_boite'] = "Utrzymuj odst�p linii w wiadomo�ciach";
$f_lang['message_a'] = "godz.";
$f_lang['admin_gestion_bdd'] = "czy mo�e zarz�dza� baz� danych ?";
$f_lang['bdd'] = "Baza danych";
$f_lang['optimisation'] = "Optymalizacja";
$f_lang['sauvegarde'] = "Backup";
$f_lang['restauration'] = "Przywracanie";
$f_lang['optimisation_txt'] = "<b>Po zapisaniu lub usuwaniu danych, w tabelach twojej bazy danych narasta nie u�ywana pusta przestrze�.</b> Nie wp�ywa to dobrze na wydajno�� twojej bazy danych oraz twojej strony, ta strona pozwala na rozwi�zanie tego problemu przez optymalizowanie tabel.";
$f_lang['liste_tables'] = "Lista tabel twojej bazy danych";
$f_lang['lancer_optimisation'] = "Rozpocznij optymalizacj�";
$f_lang['tables'] = "TABELA";
$f_lang['pertes'] = "NADMIAR";
$f_lang['octets'] = "bajt�w";
$f_lang['ok_optimise'] = "Dzi�kuj�, tabele maj�ce straty zosta�y optymalizowane";
$f_lang['txt_sauvegarde'] = "<b>Je�eli chcesz trzyma� wys�ane wiadomo�ci przez d�ugi czas, radzimy robi� regularn� i okresow� kopi�  zapasow�.</b> Uszkodzenie dysku mog�oby naprawd� zniszczy� wszystkie twoje dane.  Kopia zapasowa mog�aby te� by� bardzo u�yteczna w przypadku ch�ci przeniesienia twoich wiadomo�ci na inny serwer.";
$f_lang['lancer_sauvegarde'] = "Uruchom backup";
$f_lang['lancer_restauration'] = "Uruchom przywracanie";
$f_lang['txt_restauration'] = "<b>Je�eli wykona�e� kopi� zapasow�, mo�esz przywr�ci� kompletn� baz� danych twojej ksi�gi go�ci</b> Wybierz w�a�ciwy plik na twoim dysku twardym.<br><br><b><u>UWAGA</u></b>, je�eli ten plik jest bardzo du�y (kilka megabajt�w), proces przywracania m�g�by spowodowa� problem w twoich g��wnych ustawieniach serwera  (set_time_limit() i maksymalny dozwolony rozmiar w ustawieniach uploadu).";
$f_lang['select_file'] = "Wybierz plik kopii na twoim dysku albo na serwerze (.ZIP or .SQL)";
$f_lang['confirm_restauration'] = "Czy potwierdzasz ch�� uruchomienia przywracania i wymazania wszystkich bie��cych danych?";
$f_lang['select_file_restau'] = "Prosz� wybierz plik na twoim dysku twardym";
$f_lang['erreur_ext_restau'] = "Wybrane rozszerzenie pliku nie jest .ZIP lub .SQL, przywracanie nie mo�e by� wykonane.";
$f_lang['conseil_zip'] = " (Rozpakuj plik ZIP na twoim dysku by dosta� si� do pliku SQL)";
$f_lang['erreur_ext_zip'] = "Rozszerzenie PHP_ZIP nie jest dost�pne na twoim serwerze, przywracanie przez plik ZIP jest tak�e nie mo�liwe. Prosz� wybierz plik .SQL na twoim dysku twardym".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "B��D odczytu twojego archiwum ZIP, nie mo�na wykona� przywracania. Mo�esz spr�bowa� z plikiem .SQL".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Wybrany plik SQL nie wydaje si� by� skryptem @lex Guestbook. Nie mo�na wykona� przywracania.";
$f_lang['restauration_terminee'] = "Dzi�ki ! Przywracanie zako�czy�o si� sukcesem !";

							/* V5 */
$f_lang['name_table_ban'] = "Nazwy zbanowanych adres�w IP, tabela nick�w i adres�w E-mail";
$f_lang['ok_validation'] = "Dzi�ki, zmiany zatwierdzone";
$f_lang['selectionner_tous_messages'] = "Zaznacz/odznacz wszystko";
$f_lang['admin_send_mail'] = "Czy chcesz aby administratorzy otrzymali E-mail po zapisaniu widomo�ci ?";

//ajout bannissement
$f_lang['bannissement'] = "Banowanie";
$f_lang['admin_gestion_bannissement'] = "czy mo�e zarz�dza� banowaniem ?";
$f_lang['interdit_de_message'] = "Twoja wiadomo�� nie zosta�a zapisana. Aby zobaczy� pow�d odmowy (zakazane s�owo, nie wype�nione wymagane pole...) Skrypt Java musi by� aktywowany w twojej przegl�darce. Mo�esz spr�bowa� zmodyfikowa� swoj� wiadomo��.";
$f_lang['valider_mess'] = "Zastosuj wybrane powy�ej opcje walidacji";
$f_lang['erreur_ip'] = "Niew�a�ciwy adres IP";
$f_lang['erreur_ip1'] = "Wpisz 1. cz�� adresu IP pomi�dzy 0 i 255 lub *";
$f_lang['erreur_ip2'] = "Wpisz 2. cz�� adresu IP pomi�dzy 0 i 255 lub *";
$f_lang['erreur_ip3'] = "Wpisz 3. cz�� adresu IP pomi�dzy 0 i 255 lub *";
$f_lang['erreur_ip4'] = "Wpisz 4. cz�� adresu IP pomi�dzy 0 i 255 lub *";
$f_lang['explication_bannir_mot'] = "Masz dwie opcje cenzurowania s��w w wiadomo�ciach. Albo ocenzurowane s�owa b�d� zamienione wybranym tekstem lub symbolami albo wiadomo�� zostanie odrzucona.";
$f_lang['bannir_mot'] = "Czy chcesz aby wiadomo�� zawieraj�ca ocenzurowane s�owa (zobacz \"Cenzura s��w\" w menu) zosta�a odrzucona ?<br/>Je�li zaznaczysz \"nie\", s�owa te zostan� tylko zamienione wybranym tekstem lub symbolami.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Banowanie nick�w/imion";
$f_lang['admin_text_pseudo'] = "Je�li chcesz u�ytkownikowi <b>zabroni� wpisywania wiadomo�ci do twojej ksi�gi go�ci</b>, musisz wpisa� tutaj jego/jej nick/imi�. Mo�esz u�y� gwiazdki *, kt�ra zast�pi dowoln� liter� lub cyfr� w nazwie konta.";
$f_lang['ajouter_pseudo'] = "Dodawanie nowego nicka";
$f_lang['gestion_pseudo'] = "Zarz�dzanie nickami";
$f_lang['sup_pseudo'] = "Skasuj wybrany nick";
$f_lang['erreur_pseudo'] = "Dodaj nick";
$f_lang['ok_aj_pseudo'] = "Dzi�ki, ten nick od teraz jest zbanowany";
$f_lang['verif_sup_pseudo'] = "Czy naprawd� chcesz skasowa� wszystkie wybrane nazwy ?";

/* bannir des emails */
$f_lang['bannir_emails'] = "Banowanie adres�w E-mail";
$f_lang['admin_text_email'] = "Je�li chcesz u�ytkownikowi <b>zabroni� wpisywania wiadomo�ci do twojej ksi�gi go�ci</b>, musisz wpisa� tutaj jego/jej adres E-mail. Mo�esz u�y� gwiazdki *, kt�ra zablokuje ca�� domen�, np. : *@spamdomain.com.";
$f_lang['ajouter_email'] = "Dodawanie nowego adresu E-mail";
$f_lang['gestion_email'] = "Zarz�dzanie adresami E-mail";
$f_lang['sup_email'] = "Skasuj wybrany adres E-mail";
$f_lang['erreur_email'] = "Dodaj adres E-mail";
$f_lang['ok_aj_email'] = "Dzi�ki, ten adres E-mail od teraz jest zbanowany";
$f_lang['verif_sup_email'] = "Czy naprawd� chcesz skasowa� wszystkie wybrane adresy E-mail ?";

$f_lang['no_pseudo'] = "UWAGA\\nTw�j nick zosta� zbanowany, nie mo�esz zapisa� tej wiadomo�ci w ksi�dze go�ci.";
$f_lang['no_email'] = "UWAGA\\nTw�j adres E-mail zosta� zbanowany, nie mo�esz zapisa� tej wiadomo�ci w ksi�dze go�ci.";
$f_lang['no_ville'] = "UWAGA\\nMiasto, kt�re wpisa�e� jest nieprawid�owe, nie mo�esz zapisa� tej wiadomo�ci w ksi�dze go�ci.";
$f_lang['no_mot'] = "UWAGA\\nWpisa�e� s�owo, kt�re jest zakazane, nie mo�esz zapisa� tej wiadomo�ci w ksi�dze go�ci.\\nProsz� popraw swoj� wiadomo�� !";

// interdiction des URL
$f_lang['url_interdite'] = "UWAGA\\nURL w wiadomo�ci";
$f_lang['url_interdites'] = "Czy chcesz odrzuca� wiadomo�ci zawieraj�ce URL ?";
$f_lang['url_cliquables'] = "Czy chcesz aby URL w wiadomo�ciach by� aktywny (zlinkowany) ?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "Nazwa tabeli parametr�w konfiguracji";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "Mo�esz dostosowa� r�nic� czasu mi�dzy serwerem, a twoim czasem lokalnym. Pozostaw 0 je�eli nie potrzebujesz dostosowa� czasu.";
$f_lang['heures'] = "godzin";
$f_lang['secondes'] = "sekund";
$f_lang['admin_erreur_decalage_horaire'] = "Musisz wpisa� r�nic� czasu pomi�dzy -12 i +12";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "Nie mo�esz skasowa� ostatniego administratora";

// d�sactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Czy zezwalasz na u�mieszki ?";

// pour emp�cher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "UWAGA\\nWpisana d�ugo�� sesji jest za kr�tka !\\nMusisz poda� warto�� powy�ej 300 sekund";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "Czy chcesz doda� ksi�g� go�ci do pliku PHP ?";
$f_lang['admin_inclure_livre_code'] = "Tutaj znajduje si� kod PHP, kt�ry powiniene� doda� do twojego pliku PHP pomi�dzy tagi &lt;?php i ?&gt; .\n\nPowiniene� r�wnie� zmieni� szyk \$chem_absolu w pliku /index.php ksi�gi go�ci i doda� arkusz styl�w na stronie edycji wiadomo�ci (sprawd� FAQ w celu wyja�nienia)";
$f_lang['admin_fichier_inclusion'] = "Wpisz tutaj ca�kowit� �cie�k� dost�pu do pliku, w kt�rym chcesz w��czy� ksi�g� go�ci (w ten spos�b: /folder1/folder2/plik_z_kodem_ksi�gi.php). Musisz klikn�� przycisk \"Zapisz\" aby zobaczy� czy �cie�ka dost�pu zosta�a wzi�ta pod uwag� w kodzie";
$f_lang['admin_fichier_inclusion_erreur'] = "UWAGA\\nNie wpisa�e� poprawnej �cie�ki do pliku\\n�cie�ka musi wygl�da� w ten spos�b: /folder1/folder2/plik_z_kodem_ksi�gi.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "Nie proponuj";
$f_lang['admin_champ_obligatoire'] = "Obowi�zkowe";
$f_lang['admin_champ_prive'] = "Prywatne";
$f_lang['admin_champ_pseudo'] = "U�ytkownik mo�e wpisa� sw�j nick";
$f_lang['admin_champ_ville'] = "U�ytkownik mo�e wpisa� swoje miasto";
$f_lang['admin_donner_focus'] = "Czy chcesz aby po za�adowaniu strony kursor znalaz� si� w polu 'Imi� lub Nick'  ?";
$f_lang['champ_obligatoire_vide'] = "Co najmniej jedno obowi�zkowe pole (oznaczone *) jest puste. Prosz� je wype�ni�.";
$f_lang['erreur_add_nom'] = "Prosz� poda� swoje imi�";
$f_lang['erreur_add_email'] = "Prosz� poda� sw�j adres E-mail";
$f_lang['erreur_add_site'] = "Prosz� poda� URL swojej strony";
$f_lang['erreur_add_ville'] = "Prosz� poda� nazw� miasta";
$f_lang['erreur_add_pays'] = "Prosz� poda� nazw� kraju";
$f_lang['erreur_add_note'] = "Prosz� poda� ocen�";
$f_lang['erreur_add_message'] = "Prosz� wpisa� swoj� wiadomo��";
$f_lang['erreur_url'] = "Adres twojej strony wygl�da na nieprawid�owy";

// code de s�curit� : v�rification de la pr�sence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">Nie mo�esz u�y� opcji kodu bezpiecze�stwa !<br/>\n Tw�j serwer nie zawiera biblioteki GD2 i/lub opcji koniecznych do pracy kodu bezpiecze�stwa</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Czy chcesz umie�ci� link do cz�ci administracyjnej na dole Ksi�gi Go�ci ?";
$f_lang['admin_lien_accueil'] = "Czy chcesz umie�ci� link przej�cia na stron� g��wn� lub inn�&nbsp;?";
$f_lang['admin_chemin_lien_accueil'] = "Je�li pozostawisz to pole puste link poprowadzi do strony g��wnej. Mo�esz poda� kompletn� �cie�k� do dowolnej strony (np. /folder1/strona1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "Podana �cie�ka jest nieprawid�owa. Prosz� poda� kompletn� �cie�k� (np. /mojastrona.php).";
$f_lang['texte_lien_accueil'] = "Powr�t do strony g��wnej";
$f_lang['texte_lien_admin'] = "Administracja Ksi�gi Go�ci";

$f_lang['admin_retour_livre'] = "Zobacz Ksi�g� Go�ci";

// symboles champs priv�s/obligatoires sur le formulaire
// /!\ Attention, maximum 90 caract�res
$f_lang['information_champ_prive'] = "Zawarto�� tego pola widoczna jest tylko przez administratora Ksi�gi Go�ci.";
$f_lang['information_champ_obligatoire'] = "To pole jest wymagane do wys�ania wiadomo�ci.";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Serwer (najcz�ciej : localhost)";

$f_lang['name_table_txt_lang'] = "Nazwa tabeli zawieraj�cej przerobione teksty (np. tytu� Ksi�gi Go�ci)";

$f_lang['erreur_host'] = "Prosz� wpisa� serwer bazy danych";

$f_lang['erreur_ecriture'] = "<b>B��D</b>, nie mo�na zapisa� w folderze \"config/\".<br><br>Prosz� zmieni� atrybuty Unixowe foldera \"config\" (chmod 777) i ponownie wykona� : <a href=\"./setup.php\"><b>instalacj�</b></a>.";

$f_lang['options_livre'] = "Opcje Ksi�gi Go�ci";

$f_lang['text1'] = "<b>S�owa ocenzurowane b�d� automatycznie zamieniane</b> w wiadomo�ciach wys�anych przez u�ytkownik�w. Mo�esz je zamieni� wszystkie \"wulgaryzm\" tekstem \"**ocenzurowano**\".<br/>Je�li wybra�e� opcj� odrzucania wiadomo�ci zawieraj�cych \"wulgaryzm\", <u>mo�esz by� zmuszony do ci�g�ego poprawiania tekst�w</u>. Tutaj mo�esz prze��czy� tryb (zamiana s��w lub odrzucenie wiadomo�ci).";
?>