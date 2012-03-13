<?php
/////////////////////////////////////////////
//                @lex Guestbook				//
//      by Soulard Alexis (c) 2002 - 2006 		//
//         Gieling Pierre (c) 2002 - 2012 		//
//         Hercelin Maxime (c) 2005 - 2012		//
//         http://www.alexguestbook.net		//
//              all right reserved           			//
//   Turkish translation by Anti Biotic		//
//          http://www.allaturkaa.de			//
////////////////////////////////////////////

/* Encodage utilis� dans le script */
$SCRIPT_ENCODAGE = "iso-8859-9";
$CONTENT_LANGUAGE = "tr";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

/* setup */
$f_lang['install_auto'] = "Otomatik Kurulum";
$f_lang['identi_base'] = "Veritaban� Kullan�c� Ad�";
$f_lang['type_base'] = "Veritaban� T�r�";
$f_lang['host_base'] = "Host";
$f_lang['user_base'] = "Kullan�c� Ad�";
$f_lang['pass_base'] = "�ifre";
$f_lang['nom_base'] = "Veritaban� Ad�";
$f_lang['nom_table'] = "Tablolar�n Ad�";
$f_lang['name_table_sessions'] = "Oturum Tablolar�n�n Ad�";
$f_lang['name_table_users'] = "Kullan�c� Tablolar�n�n Ad�";
$f_lang['name_table_messages'] = "Mesaj Tablolar�n�n Ad�";
$f_lang['name_table_censure'] = "Sans�rl� Kelimelerin Tablolar�n�n Ad�";
$f_lang['name_table_ip'] = "Yasakl� IP Tablolar�n�n Ad�";
$f_lang['name_table_smileys'] = "�fade Tablolar�n�n Ad�";
$f_lang['extension_script'] = "Script ba�lant�s�";
$f_lang['choose_extension'] = "Script i�in bir ba�lant� se�in.<br>(bizim tavsiyemiz \"php\", dilerseniz se�ili ba�lant�ya siz de farkl� bir isim verebilirsiniz.)";
$f_lang['identi_acces_admin'] = "Y�netim Paneline gitmek i�in Kullan�c� Ad�";
$f_lang['login_admin'] = "Kullan�c� Ad�";
$f_lang['pass_admin'] = "�ifre";
$f_lang['verif_pass_admin'] = "�ifreni Tekrar Gir";
$f_lang['email_admin_setup'] = "E-Posta Adresin";
$f_lang['installer'] = "Kur";
$f_lang['erreur_host'] = "Viritaban�n�z�n sunucu hostunu yazmay� unuttunuz.";
$f_lang['erreur_user'] = "Viritaban�na ba�lanabilmek i�in Kullan�c� Ad� yazmay� unuttunuz.";
$f_lang['erreur_nom_base'] = "Veritaban� isminizi yazmay� unuttunuz.";
$f_lang['erreur_log_admin'] = "Y�netim Paneline ba�lanmak i�in bir Kullan�c� Ad� olu�turmay� unuttunuz.";
$f_lang['erreur_pass_admin'] = "Y�netim Paneline ba�lanmak i�in bir �ifre olu�turmay� unuttunuz.";
$f_lang['erreur_pass_differents'] = "Uyar�! �ifreniz uyu�muyor.";
$f_lang['erreur_first_connexion'] = "<b>HATA! Veritaban�na ba�lan�lam�yor.</b><br><br>L�tfen Kullan�c� Ad�n�z� kontrol ediniz : <a href=\"javascript:history.go(-1);\"><b>Geri D�n</b></a>.";
$f_lang['erreur_install'] = "Kurulum ba�ar�s�z oldu.";
$f_lang['ok_install'] = "Kurulum ba�ar�yla tamamland�.";
$f_lang['text_ok_install'] = "<b>Te�ekk�r Ederiz Kurulum ba�ar�yla tamamland�.</b><br><br>G�venli�iniz i�in Ftp'nizden (\"setup.php\") dosyas�n� siliniz., E�er bu i�lemi yapmazsan�z ba�ka birisi sitenizi hackleyebilir.<br><br>E�er hemen Y�netim Paneline gitmek istiyorsan�z <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>Buraya T�klay�n!</b></a>ya da<br>Hemen ziyaret�i defterinizi g�rmek istiyorsan�z<a href=\"".$chem_absolu."\" target=\"_blank\"><b>Buraya T�klay�n!</b></a>.";
$f_lang['erreur_ecriture'] = "<b>HATA</b>, (config) dosyas� yaz�lam�yor.<br><br>L�tfen \"config\" dosyas�n�n chmod ayarlar�n�n do�ru oldu�unu kontrol ediniz (chmod 777 olmal�), Daha sonra kuruluma devam edebilirsiniz : <a href=\"javascript:history.go(-1)\"><b>Geri D�n</b></a>.";

/* administration */
$f_lang['page protect'] = "Y�netici Giri�i";
$f_lang['login'] = "Kullan�c� Ad�";
$f_lang['pass'] = "�ifre";
$f_lang['value identif'] = "Giri�";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Se�enekler";
$f_lang['script'] = "Script";
$f_lang['graphismes'] = "Defterin G�r�n�m�";
$f_lang['messages'] = "Mesajlar";
$f_lang['gestion'] = "Y�netim";
$f_lang['censure_mots'] = "Kelime Sans�rleme";
$f_lang['bannir_ip'] = "IP Yasaklama";
$f_lang['smileys'] = "�fadeler";
$f_lang['utilisateurs'] = "Y�neticiler";
$f_lang['ajouter'] = "Ekle";
$f_lang['aide_guestbook'] = "S�k Sorulan Sorular";
$f_lang['a_propos_de'] = "Hakk�m�zda";
$f_lang['donner_avis'] = "Fikrinizi Bizle Payla��n";
$f_lang['deconnexion'] = "��k��";

 /* options */
 $f_lang['options_livre'] = "Defterin Se�enekleri";
$f_lang['ok_write'] = "Buradan itibaren i�eri�ini doldurabilirsiniz.";
$f_lang['no_write'] = "<u>Buradan i�erik yazamazs�n�z</u>. Bu Script serverinizin CHMOD haklarini degisitimeye �alisacak. Basarisiz olursa elle degistirmenizi tavsiye ederiz.";
$f_lang['infos'] = " \"config.".$alex_livre_ext."\" dosyas� hakk�nda bilgi :";
$f_lang['infos_'] = "Bu sayfadaki bilgiler  \"config.".$alex_livre_ext."\" dosyas�nda sakl�d�r. \"include\" dosyas�na bir g�z gezdirin. Dilerseniz bu dosyay� bir text edit�r program�yla d�zenleyebilirsiniz.";
$f_lang['options_generales'] = "Genel Se�enekler";
$f_lang['langue'] = "Dil";
$f_lang['send_mail'] = "Her yeni mesajda y�neticilerin haberdar olmasini ister misiniz ?";
$f_lang['avert_mail'] = "<br>(<b>Bilgi</b> : Eger serveriniz mail fonksiyonu () �alismiyorsa evet deseniz bile bu islem ger�ekle�semez.";
$f_lang['oui'] = "Evet";
$f_lang['non'] = "Hay�r";
$f_lang['options_modules'] = "Defterin Mod�l Se�enekleri";
$f_lang['admin_champ_email'] = "Ziyaret�iler E-Posta adreslerini yazabilsinler mi ?";
$f_lang['admin_champ_site'] = "Ziyaret�iler Website adreslerini yazabilsinler mi ?";
$f_lang['admin_champ_pays'] = "Ziyaret�iler �ehir ve �lkelerini yazabilsinler mi ?";
$f_lang['admin_champ_note'] = "Ziyaret�iler sitenize puan verebilsinler mi ?";
$f_lang['admin_ok_aff_moteur'] = "Arama motoru g�r�nt�lensin mi ?";
$f_lang['options_tech'] = "Teknik Se�enekler";
$f_lang['url_recharger'] = "Defter i�in y�klenecek sayfa";
$f_lang['url_variables'] = "Variable parameterisi ( $ larlari ifade etmek i�in # koyun)";
$f_lang['temps_session'] = "Y�netici i�in ba�l� kalma zaman�";
$f_lang['skin_to_use'] = "Kullan�lan Tema (skin)";
$f_lang['enregistrer'] = "De�i�iklikleri Kaydet";
$f_lang['nb_pages'] = "Defterde sayfa ba��na g�r�nt�lenecek mesaj say�s�";
$f_lang['merci_options'] = "Te�ekk�rler, t�m bilgiler ba�ar� ile y�klenmi�tir.";
$f_lang['erreur_options'] = " HATA\\�u belgedeki bilgiler kaydedilememi�tir\\\"config.".$alex_livre_ext."\\\", Bu belgeyi a�arak d�zeltiniz.";
$f_lang['temps_ip_post'] = "Bir ziyaret�inin yeniden mesaj atabilmesi i�in ka� dakika ge�mesi gerek ?";
$f_lang['minutes'] = "Dakika";
$f_lang['cut_mots'] = "Bir uzun kelimenin kesilmesi i�in ka� harf olmas� gerek ?";
$f_lang['format_date'] = "Tarihlendirme �ekli";

/* skins */
$f_lang['ok_ajouter'] = "Tesekk�rler, yeni tema ba�ar�yla eklendi.";
$f_lang['erreur_ajouter'] = "HATA\\Tema eklenemedi, l�tfen el ile ekleyiniz.";
$f_lang['text1_2'] = "Temalar�n kay�tl� oldu�u dosya &quot;templates/skins/&quot;.";
$f_lang['text2'] = "<b>Admin b�l�m� g�r�nt�s� de�i�tirmek i�in </b> el ile �u dosyadaki belgeyi de�i�tirin &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "Tema Ekle";
$f_lang['ajouter'] = "Ekle";
$f_lang['gestion_skins'] = "Tema Y�netimi";
$f_lang['vous_editez'] = "�u an se�ili olan tema :";
$f_lang['style'] = "Stil Ka��d�";
$f_lang['ajouter_message'] = "Mesaj Ekleme B�l�m�";
$f_lang['nbre_messages_page'] = "Sayfa ba��na mesaj b�l�m�";
$f_lang['pages_dispos'] = "Var olan sayfalar b�l�m� / Geri Sayfa - �leri Sayfa";
$f_lang['texte_corps_messages'] = "Mesaj�n ��eri�i";
$f_lang['espacement'] = "2 Mesaj aras� bo�luk";
$f_lang['text_assembly'] = "�nceki b�l�mleri birle�tiren belge";
$f_lang['ok_edit_skin'] = "Tesekk�rler, tema ba�ar� ile y�klendi.";
$f_lang['erreur_edit_skin'] = "HATA\\L�tfen el ile bu belgeyi d�zenleyin.";
$f_lang['ajouter'] = "Ekle";
$f_lang['supprimer'] = "Sil";
$f_lang['text_sup_skin'] = "Tema Sil";
$f_lang['ok_supprimer'] = "Tesekk�rler, tema ba�ar�yla silindi.";
$f_lang['erreur_supprimer'] = "HATA\\Temay� el ile silin.";

/* page des mots censur�s */
$f_lang['aj_mot'] = "Yeni bir kelime ekle. "; 
$f_lang['mot_interdit'] = "Yasak kelimeleri:";
$f_lang['remplacer_par'] = "ile de�i�tir:";
$f_lang['gestion_censure'] = "Yasak kelimelerin y�netimi";
$f_lang['mot'] = "Kelime";
$f_lang['remplace_by'] = "olarak de�i�mi�tir.";
$f_lang['liste_jour'] = "Listeyi y�kle.";
$f_lang['sup_mots'] = "Se�ilen kelimeleri kald�r.";
$f_lang['erreur_aj_censure1'] = "Sans�rlenecek kelimeyi belirtiniz.";
$f_lang['erreur_aj_censure2'] = "Sans�rlenecek kelimenin yerine kullan�lacak kelimeyi se�in.";
$f_lang['ok_aj_mot'] = "Te�ekk�rler, sans�rlencek kelimeler ba�ar�yla eklenmi�tir.";
$f_lang['verif_sup'] = "Se�ti�iniz kelimeleri silmek istedi�inizden emin misiniz ?";
$f_lang['merci_modif'] = "Te�ekk�rler, de�i�iklikler uygulamaya konulmu�tur.";

/* bannir des ip */
$f_lang['bannir_ip'] = "IP Yasaklama";
$f_lang['text_ip1'] = "Her �nternet kullan�c�s�n�n bir IP adresi vard�r. (201.10.25.14 �rnek). Genelde bu adresi ISP taraf�ndan verilmekte her yeni ba�lant�da genelde de�i�mektedir.";
$f_lang['text_ip2'] = "E�er bir kullan�c�nin IP sini yasaklamak istiyorsan�z buraya IP sini girebilirsiniz.";
$f_lang['ajouter_ip'] = "Yasaklanacak bir IP adresi gir.";
$f_lang['gestion_ip'] = "IP lerin y�netimi";
$f_lang['sup_ip'] = "Se�ilen IP leri sil.";
$f_lang['erreur_ip1'] = "IP nin birinci b�l�m�n� yaz�n";
$f_lang['erreur_ip2'] = "Ip nin ikinci b�l�m�n� yaz�n";
$f_lang['erreur_ip3'] = "IP nin ���nc� b�l�m�n� yaz�n";
$f_lang['erreur_ip4'] = "IP nin d�rd�nc� b�l�m�n� yaz�n";
$f_lang['ok_aj_ip'] = "Te�ekk�rler, art�k bu IP mesaj g�nderemez.";
$f_lang['verif_sup_ip'] = "Se�ti�iniz IP leri silmek istedi�inizden emin misiniz ?";

/* smileys */
$f_lang['gestion_smileys'] = "�fadelerin Y�netimi";
$f_lang['text_smileys'] = "<b>Bu b�l�mden ifade ekleyebilir, silebilir, ifadelerinizin yerlerini de�i�ebilirsiniz. Ayn� zamanda Ziyeret�i defterinizde ifade kullan�m�n� iptal de edebilirsiniz. Anasayfada g�r�necek ifade say�s�n� Script se�eneklerinden d�zenleyebilirsiniz.</b>";
$f_lang['ajouter_smiley'] = "Yeni bir ifade ekle.";
$f_lang['image_smiley'] = "Resim :";
$f_lang['car_replace'] = "Yerine konacak harfler :";
$f_lang['gestion_smileys'] = "�fadelerin Y�netimi";
$f_lang['sup_smileys'] = "Se�ilenleri Sil";
$f_lang['erreur_image'] = "L�tfen bir ifade se�in.";
$f_lang['erreur_car'] = "Yerine konacak tu�lar� se�in.";
$f_lang['ok_aj_smiley'] = "Te�ekk�rler. Ba�ar�yla eklediniz.";
$f_lang['no_smiley'] = "�fadeler .jpeg veya .gif format�nda olmal�.";
$f_lang['copy_impossible'] = "HATA\\Dosyaya y�klenemedi \\\"images/smileys\\\".";
$f_lang['car_replace_exist'] = "HATA\\Kullanmak istedi�iniz tu�lar zaten var.";
$f_lang['modif_smileys'] = "T�m ifadeleri de�i�tir.";
$f_lang['verif_sup_smileys'] = "Silmek istedi�inizden emin misiniz ?";
$f_lang['merci_modif_smileys'] = "Te�ekk�rler, t�m ifadeler ler de�i�tirilmi�ir.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Deftere yeni bir y�netici ekler.";
	$f_lang['add_admin_2'] = "Yeni Y�netici Ekle";
	$f_lang['ajouter_admin'] = "Ekle";
	$f_lang['name_ajouter_admin'] = "Ekle";
}
else{
	$f_lang['add_admin_texte'] = "Defterin y�netcisini de�i�itir.";
	$f_lang['add_admin_2'] = "Y�netici De�i�tir";
	$f_lang['ajouter_admin'] = "Kaydet";
	$f_lang['name_ajouter_admin'] = "De�i�tir";
}

$f_lang['identif_connexion'] = "Kullan�c� Ad� :";
$f_lang['passe_admin'] = "�ifre :";
$f_lang['email_admin'] = "E-mail (�nemli)";
$f_lang['admin_receive_email'] = "Y�netici her mesaj g�nderildiginde bildirilsin mi ?";
$f_lang['admin_modif_options'] = "Y�netici script se�enekelerini de�i�tirebilsin mi ?";
$f_lang['admin_gestion_skins'] = "Y�netici temalar� de�i�tirebilsin mi ?";
$f_lang['admin_gestion_messages'] = "Y�netici girilen mesajlar� de�i�tirebilsin mi ?";
$f_lang['admin_gestion_censure'] = "Y�netici uygunsuz kelimeleri de�i�tirebilsin mi ?";
$f_lang['admin_gestion_smileys'] = "Y�netici ifadeleri de�i�tirebilsin mi ?";
$f_lang['admin_gestion_admin'] = "Y�netici di�er y�neticilerin hesaplar�n� de�i�tirebilsin mi ?";
$f_lang['erreur_name'] = "L�tfen bir kullan�c� ad� giriniz.";
$f_lang['erreur_passe'] = "L�tfen �ifrenizi giriniz.";
$f_lang['erreur_email'] = "L�tfen E-mail adresinizi belirtiniz.";
$f_lang['ok_aj_admin'] = "Te�ekk�rler, hesap ba�ar�yla eklenmi�tir.";
$f_lang['ok_modif_admin'] = "Tesekk�rler, hesap ba�ar�yla de�i�tirilmi�tir.";
$f_lang['erreur_aj_admin'] = "Hata\\nBu kullan�c� ad� zaten mevcut l�tfen ba�ka bir kullan�c� ad� se�iniz.";
$f_lang['revenir'] = "Bir �nceki sayfaya geri d�n";

/* gestion des admins */
$f_lang['gest_admin'] = "Y�netim Sayfas�";
$f_lang['sup_admin'] = "Sil";
$f_lang['login_admin'] = "Kullan�c� Ad�";
$f_lang['email_admin'] = "E-mail";
$f_lang['modif_admin'] = "De�i�tir";
$f_lang['value_sup_admin'] = "Se�ilen Y�neticileri Sil";
$f_lang['verif_sup_admin'] = "Silmek istedi�inizden emin misiniz ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "�ZG�N�Z BU SAYFAYI KISITLI OLARAK KULLANAB�L�RS�N�Z";
$f_lang['erreur_auth'] = "Tan�mlanamad�n�z.";
$f_lang['erreur_droits'] = "Bu sayfaya girme yetkiniz yok.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Ziyaret�ilerin verdi�i ortalama not :";
$f_lang['title_guestbook'] = "Ziyaret�i Defteri";
$f_lang['note_super'] = " : S�per !";
$f_lang['note_moyen'] = " : Orta";
$f_lang['note_rate'] = " : K�t�";
$f_lang['nom_pseudo_visiteur'] = "Ad�n�z :";
$f_lang['email_visiteur'] = "E-Posta Adresiniz :";
$f_lang['site_web_visiteur'] = "Web Sayfan�z :";
$f_lang['ville_pays_visiteur'] = "�ehir/�lke :";
$f_lang['note_visiteur'] = "Bu Site ��in Notunuz :";
$f_lang['message_visiteur'] = "Mesaj�n�z� Yaz�n�z :";
$f_lang['ajouter_message_visiteur'] = "G�nder";
$f_lang['erreur_add_nom'] = "L�tfen isminizi yaz�n�z.";
$f_lang['erreur_add_message'] = "Bo� bir mesaj g�nderemezsiniz.";
$f_lang['erreur_mail'] = "Ge�ersiz bir E-Posta adresi girdiniz.";
$f_lang['messages'] = "Mesajlar";
$f_lang['messages_a'] = "/";
$f_lang['page'] = "Sayfa";
$f_lang['nbre_messages'] = "Mesaj Say�s�";
$f_lang['message_le'] = "Mesaj Tarihi";
$f_lang['message_note'] = "De�erlendirme";
$f_lang['send_mail_to'] = "E-Posta g�nder";
$f_lang['go_home'] = "Bu siteyi ziyaret et";
$f_lang['precedente'] = "&lt;&lt; Geri";
$f_lang['suivante'] = "�leri &gt;&gt;";
$f_lang['no_message'] = "�u an hi�bir mesaj bulunmamakta.";
$f_lang['no_ip'] = "D�KKAT\\nIP adresiniz yasaklanm��t�r. Buraya mesaj g�ndermezsiniz.";
$f_lang['ok_post'] = "Te�ekk�rler !  Mesaj�n�z ba�ar�yla g�nderilmi�tir.";
$f_lang['time_erreur'] = "D�KKAT\\nYeni bir mesaj g�nderdi�iniz i�in bekleme s�reniz hen�z bitmemi�tir.";
$f_lang['text_select_search'] = "Sadece �u kelimeleri i�eren mesajlar� g�ster ";
$f_lang['text_ok_search'] = "Ara";

/* mail envoy� */
$f_lang['mail_object'] = "[Ziyaret�i Defteri] - Yeni bir mesaj g�nderilmi�ir. ";
$f_lang['mail_message'] = "Ziyaret�i defterinizde yeni mesaj :\n\n-------------------------------------------\n ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Mesaj Y�netimi";
$f_lang['selectionner_pages'] = "Se�iniz";
$f_lang['messages_gest'] = "Mesaj";
$f_lang['page_gest'] = "Sayfa";
$f_lang['aller_en_page'] = "Sayfaya Git";
$f_lang['supprimer_gest'] = "Sil";
$f_lang['auteur_gest'] = "Yazan";
$f_lang['modifier_gest'] = "De�i�tir";
$f_lang['supprimer_mess_selected'] = "Se�ilen mesajlar� sil";
$f_lang['verif_sup_mess'] = "Silmek istedi�inizden emin misiniz ?";

/* modifier un message */
$f_lang['modif_mess'] = "Mesaj� De�i�tir";
$f_lang['message_modif'] = "Mesaj :";
$f_lang['nom_modif'] = "�sim :";
$f_lang['email_modif'] = "E-Posta :";
$f_lang['site_web_modif'] = "Web Sayfas� :";
$f_lang['note_modif'] = "Sitenize verilen oy :";
$f_lang['ville_pays_modif'] = "�ehir �lke :";
$f_lang['date_modif'] = "Eklenme Tarihi :";
$f_lang['ip_modif'] = "IP Adresi :";
$f_lang['ok_modif_mess'] = "Te�ekk�rler. T�m bilgiler de�i�tirilmi�tir.";

/* titre des pages */
$f_lang['title identification'] = "Ba�lant�";
$f_lang['title administration'] = "Y�netim";
$f_lang['title frame gauche'] = "Sol Pencere";
$f_lang['title options'] = "Se�enekler";
$f_lang['title skins'] = "Temalar";
$f_lang['title censure'] = "Uygunsuz Kelimeler";
$f_lang['title censure'] = "Yasaklanacan IP";
$f_lang['title smileys'] = "�fade Y�netimi";
$f_lang['title add admin'] = "Yeni Bir Y�netici Ekle";
$f_lang['title gest admin'] = "Y�neticiler";
$f_lang['title erreur'] = "Hata";
$f_lang['title gestion mess'] = "Mesaj Y�netimi";
$f_lang['title modif mess'] = "Mesaj� De�i�tir";
$f_lang['title setup'] = "Kurulum";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Veritaban�na ba�lan�lam�yor.";
$f_lang['erreur_connexion'] = "Kullan�c� ad�n�z yanl��";
$f_lang['manque login'] = "Kullan�c� Ad� Girin";
$f_lang['manque pass'] = "�ifrenizi Girin";
$f_lang['end session'] = "Ba�lant� S�reniz Dolmu�tur.";

/* add version 3.11 */
$f_lang['addSignature'] = "Mesaj Yaz";
$f_lang['seeMessages'] = "Eklenen Mesajlar� Oku";
$f_lang['addMessageBlocAdd'] = "Deftere Yeni Mesaj Ekle";

/* add version 3.2 */
$f_lang['version'] = "Versiyon";
$f_lang['new_version_dispo'] = "Bu scriptin yeni bir versiyonu mevcuttur.";
$f_lang['version_courrante'] = "Scriptin �u anki versiyonu";
$f_lang['info_version'] = "Sizin versiyonunuz hakkinda bilgi";
$f_lang['version_txt_ok'] = "Elinizde su ".$alex_livre_version.",versiyonu var. <br>Bu en son versiyon, g�ncelleme gerekmemektedir.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "Elinizde �u an ".$alex_livre_version."versiyonu bulunmakta, <b>yeni bir versiyon mevcut.</b>";
$f_lang['version_down'] = "Yeni Versiyonu Y�kle";
$f_lang['help_update'] = "Y�kleme Yard�m";
$f_lang['spam'] = "Kulland���n�z browser koruma konusunda yetersiz.Bir robot (Bot) taraf�ndan mesaj g�nderiliyor gibi g�r�nmekte. E�er bu dogru de�ilse ba�ka bir browserde tekrar deneyiniz.";
$f_lang['avis_spammeurs'] = "Spamc�lara Duyuru";
$f_lang['txt_spammeurs'] = "<b>Bu ziyaret�i defteri spamlara kar�� korunmaktad�r. Her t�rl� sald�raya kar�� gerekli �nlem al�nm��t�r.";
$f_lang['fermer'] = "Bu pencereyi kapat!";
$f_lang['valider_messages'] = "Mesajalr� defterde yay�nlanmadan �nce onaylamak ister misiniz ?";
$f_lang['valide'] = "Onay Durumu";
$f_lang['mess_valide'] = "Bu mesaj onayland�.";
$f_lang['mess_invalide'] = "Bu mesaj onaylanmay� beklemektedir.";
$f_lang['info_mess_valide'] = "Mesaj Onayland�.";
$f_lang['ok_post_valid'] = "Tesekk�rler ! �ste�iniz ba�ar�yla eklenmi�tir. Y�netici en yak�n zamanda iste�inizi de�erlendirecektir.";
$f_lang['see_skin'] = "Bu temay� kullanarak siteyi dola�";
$f_lang['maxi_car'] = "Bir mesajdaki maksimum harf say�s� (0 = s�n�rs�z)";
$f_lang['il_reste'] = "Mesaj�n�z i�in";
$f_lang['caracteres'] = "karakter daha kullanabilirsiniz.";
$f_lang['sup_copyright'] = "Copyright Sil";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "G�venlik kodu tablosunun ad�";
$f_lang['add_code_securite'] = "Ziyaret�iler mesaj g�nderirken g�venlik kodu kullans�nlar m� ?";
$f_lang['t_chem_dossier_fonts'] = "B�t�n URL yaz�lar�n�n y�netimi";
$f_lang['t_color_txt_code'] = "G�venlik kodu i�in yaz� rengi";
$f_lang['t_color_background_code'] = "G�venlik kodu i�in arka plan rengi";
$f_lang['veuillez_taper_code'] = "L�tfen a�a��da bulunan 4 karakteri kutunun i�ine eksiksiz giriniz";
$f_lang['a_quoi_ca_sert'] = "Neden ?";
$f_lang['why_code'] = "Ni�in bir \"g�venlik kodu\" uygulamas� yap�l�yor ?";
$f_lang['txt_why_code'] = "Bu se�enek sayesinde mesaj yazan�n ger�ek bir ki�i mi yoksa bir bilgisayar bot'u mu oldu�unu anl�yoruz.<br><br><b>Bu sayede defrerimiz Spamc�lara kar�� daha iyi korumnaktad�r.</b><br><br><b>Anlay���n�z i�in Te�ekk�r ederiz!</b>";
$f_lang['erreur_code_securite'] = "L�tfen g�venlik kodunu giriniz.";
$f_lang['erreur_saisie_code_securite'] = "Girmi� oldu�unuz g�venlik kodu do�ru de�il.L�tfen tekrar deneyiniz.";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Otomatik Cevaplama";
$f_lang['admin_gestion_reponse_auto'] = "Y�netici Otomatik Cevaplama se�ene�ini d�zenleyebilsin mi ?";
$f_lang['text_reponse_auto'] = "<b>Bu b�l�mde defterinize mesaj yazan ziyaret�ilere otomatik olarak cevap g�nderebilirsiniz .</b>Bu se�ene�i aktif ederseniz olu�turdu�unuz mesaj otomatik olarak ziyaret�ilere g�nderilecektir.<br><br>�stedi�iniz dilde otomatik cevap olu�turman�z m�mk�n. Ziyaret�iler mesaj yazd�ktan sonra bu otomatik mesaj sayfada g�r�nt�lenecektir.";
$f_lang['name_table_rep_auto'] = "Otomatik mesaj cevaplama MySQL tablo ismi";
$f_lang['gestion_reponses'] = "Mesaj Y�netimi";
$f_lang['msg_remerciement'] = "Te�ekk�r Mesaj�";
$f_lang['txt_remerciement'] = "Defterimizi ziyaret etti�iniz i�in te�ekk�r ederiz.";
$f_lang['ok_save_msg_rem'] = "Te�ekk�rler, Otomatik cevap mesaj�n kaydedilmi�tir..";
$f_lang['envoyer_remerciement'] = "Ziyaret�ilere g�nderdikleri mesaj bilgileri E-posta olarak g�nderilsin mi?";
$f_lang['remerciement'] = "Te�ekk�rler";
$f_lang['titre_guestbook'] = "Defter Ba�l���";
$f_lang['text_titre_guestbook'] = "<b>Ziyaret�i defterinizin ba�l���n� de�i�ebilirsiniz.</b> Di�er dil se�eneklerini de kullanarak bu i�lemi ger�ekle�tirebilirsiniz. ";
$f_lang['titre'] = "Ba�l�k";
$f_lang['parametrage'] = "Ayarlar";
$f_lang['ok_save_titre'] = "Te�ekk�rler, ba�l�k kaydedilmi�tir.";
$f_lang['ville_visiteur'] = "�ehir :";
$f_lang['pays_visiteur'] = "�lke :";
$f_lang['flag'] = "Bayrak";
$f_lang['ville_modif'] = "�ehir";
$f_lang['pays_modif'] = "�lke";
$f_lang['action'] = "��lem";
$f_lang['repondre'] = "Cevaplama";
$f_lang['votre_reponse'] = "Yorumunuz";
$f_lang['ok_reponse_mess'] = "Te�ekk�rler yorumunuz eklenmi�tir.";
$f_lang['defaut_titre_rep'] = "Edit�r'�n Yorumu";
$f_lang['annuler'] = "�ptal";
$f_lang['num_appari'] = "Numara G�ster";
$f_lang['nb_max_smileys'] = "En fazla g�r�nt�lenebilecek ifade say�s� :";
$f_lang['plus_smileys'] = "Daha fazla ifade g�ster";
$f_lang['liste_all_smilies'] = "T�m ifadelerin listesi :";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Bu fonksiyon defterinize g�nderilen en son mesajlar� farkl� bir sayfada g�r�nt�lemenize izin verir.</b>";
$f_lang['parametrage_modele'] = "Kal�p Ayarlar�";
$f_lang['ok_save_boite'] = "Te�ekk�rler. Ayarlar�n�z ba�ar�yla kaydedilmi�tir.";
$f_lang['format_date_boite'] = "Tarihlendirme �ekli (hemen hemen ayn�<a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP format� ile)";
$f_lang['nbre_maxi_pseudo_boite'] = "Kullan�c� Ad� i�in kullan�labilecek maksimum (en fazla) karakter say�s� :";
$f_lang['nbre_maxi_message_boite'] = "Mesaj i�in kullan�labilecek maksimum (en fazla) karakter say�s� :";
$f_lang['modele_affichage_donnees'] = "G�nderme kal�b� bilgileri";
$f_lang['url_dossier_livre_boite'] = "Defterinizin bulundu�u dosyay� belirtmek i�in verece�iniz URL yi tamamlay�n�z.";
$f_lang['url_livre_boite'] = "Defterinizin anasayfas� belirtmek i�in verece�iniz URL yi tamamlay�n�z.";
$f_lang['generation_code'] = "Javascript kod olu�turma";
$f_lang['nom_msg_afficher'] = "G�r�nt�lenebilecek mesaj say�s�";
$f_lang['generer_code'] = "Yeni bir Javascript ba�lang�� kodu olu�tur";
$f_lang['code_a_copier'] = "Se�ti�iniz HTML kodlar� kopyaland�.";
$f_lang['erreur_boite_java'] = "Mesaj� g�r�nt�lemek i�in ge�erli bir numara giriniz.";
$f_lang['erreur_par_boite'] = "Settings error, cannot isolate the [BOUCLE] ... [/BOUCLE] chain in your template.";
$f_lang['saut_ligne_msg_boite'] = "Keep the line jumps in the messages";
$f_lang['message_a'] = "Saat";
$f_lang['admin_gestion_bdd'] = "Y�netici Veritaban� d�zenlemesi yapabilsin mi ?";
$f_lang['bdd'] = "Veritaban�";
$f_lang['optimisation'] = "Durum";
$f_lang['sauvegarde'] = "Veritaban�n� Kaydet";
$f_lang['restauration'] = "Veritaban� Y�kle";
$f_lang['optimisation_txt'] = "<b>Veritaban�n� kaydederken veya silerken tablolara eri�meniz zor oluyor.</b> Bu durum sizin i�in s�k�nt� olabilir. Ama bu sayfa sayesinde veritaban�n�zdaki tablolar�n durumunu kontrol edebilir ve gerekti�inde hepsini silebilirsiniz.";
$f_lang['liste_tables'] = "Veritaban�n�zdaki Tablolar�n Listesi";
$f_lang['lancer_optimisation'] = "Veritaban�n� S�f�rla";
$f_lang['tables'] = "TABLES";
$f_lang['pertes'] = "LOSSES";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Thanks, the tables having losses have been optimized";
$f_lang['txt_sauvegarde'] = "<b>E�er g�nderilen mesajlar� uzun s�re saklamak istiyorsan�z veritaban�n�z� bir hardiske ya da bir sunucuya kaydedebilirsiniz.</b> Ayn� �ekilde kaydetti�iniz mesajlar� veritaban�n�za tekrar y�klemeniz de m�mk�n.";
$f_lang['lancer_sauvegarde'] = "Veritaban�n� Kaydetmeye Ba�la";
$f_lang['lancer_restauration'] = "Veritaban�n� Y�klemeye Ba�la";
$f_lang['txt_restauration'] = "<b>E�er isterseniz veritaban�n�zdaki bilgileri bilgisayar�n�za (hard diskinize) ya da bir sunucuya kaydedebilirsiniz.</b><br><br><b><u>D�KKAT</u></b>,E�er veritaban�n�z�n boyutu �ok b�y�k ise, kaydetme s�resi uzayabilir. Website sunucunuzun upload ve download h�z�da bu i�lemi etkileyebilir.";
$f_lang['select_file'] = "Veritaban�na y�klemek istedi�iniz bir dosya se�iniz. (.ZIP veya .SQL)";
$f_lang['confirm_restauration'] = "Do you confirm that you wish to lauch the restoration and thus erase all actual data?";
$f_lang['select_file_restau'] = "L�tfen bilgisayar�n�zdan y�kleyebilece�iniz bir dosya se�iniz.";
$f_lang['erreur_ext_restau'] = "Se�ti�iniz dosya ge�erli de�il. .ZIP ya da .SQL, uzant�l� bir dosya se�melisiniz.";
$f_lang['conseil_zip'] = "(S�k��t�r�lmam�� bir SQL dosyas� se�iniz.)";
$f_lang['erreur_ext_zip'] = "Sunucunuzdaki PHP_ZIP ba�lant�s� kullan�lam�yor, veritaban� y�klemesi .ZIP uzant�l� dosyayla yap�lamamaktad�r. L�tfen hard diskinizden .SQL uzant�l� bir dosya se�iniz.".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "ZIP ar�iv dosyas� bir hatadan dolay� okunam�yor. Y�kleme yapmak i�in l�tfen bir SQL dosyas� se�iniz.".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Se�ti�iniz SQL dosyas� @lex Guestbook script dosyas� olarak g�r�nm�yor. Bu nedenle y�kleme yapamazs�n�z. ";
$f_lang['restauration_terminee'] = "Te�ekk�rler, veritaban� ba�ar�yla y�klenmi�tir.";

							/* V5 */
$f_lang['name_table_ban'] = "Banlanan IP,Nick  ve E-postan�n bulundu�u tablo ad�";
$f_lang['ok_validation'] = "Te�ekk�rler.Se�ilen mesajlar onaylanm��t�r.";
$f_lang['selectionner_tous_messages'] = "Hepsini Se�/Se�imi Kald�r";
$f_lang['admin_send_mail'] = "Yeni mesaj eklendi�inde y�neticiye E-posta ile bildirilsin mi ?";

//ajout bannissement
$f_lang['bannissement'] = "Yasaklama";
$f_lang['admin_gestion_bannissement'] = "Y�netici Yasaklama Y�netimi'ni kullanabilsin mi ?";
$f_lang['interdit_de_message'] = "Mesaj�n�z uygunsuz kelimeler i�ermektedir. L�tfen mesaj�n�z� d�zenleyerek tekrar deneyiniz.";
$f_lang['valider_mess'] = "Se�ilen Mesajlar� Onayla";
$f_lang['erreur_ip'] = "Ge�ersiz bir IP adresi";
$f_lang['erreur_ip1'] = "L�tfen ilk b�l�m i�in 0 ile 255 aras� bir say� giriniz.";
$f_lang['erreur_ip2'] = "L�tfen ikinci b�l�m i�in 0 ile 255 aras� bir say� giriniz.";
$f_lang['erreur_ip3'] = "L�tfen ���nc� b�l�m i�in 0 ile 255 aras� bir say� giriniz.";
$f_lang['erreur_ip4'] = "L�tfen d�rd�nc� b�l�m i�in 0 ile 255 aras� bir say� giriniz.";
$f_lang['explication_bannir_mot'] = "Mesajlardaki kelimeleri yasaklamak i�in iki y�nteme sahipsiniz.Hem onlar� otomatik olarak de�i�ebilirsiniz hem de yazan� mesaj g�nderirken sistemden otomatik olarak uyarmas�n� isteyebilirsiniz.";
$f_lang['bannir_mot'] = " Sans�rledi�iniz kelimelerin mesaj yazarken otomatik olarak uyar�lmas�n� ister misiniz?<br/>E�er bu se�e�i i�aretlerseniz sans�rlenmi� kelime yaz�ld��� zaman sistem otomatik olarak yazan� uyaracakt�r.</br>Hay�r � se�erseniz sistem o kelimeyi (de�i�tirerek) yazan� uyarmadan yay�nlayacakt�r.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Kullan�c� Ad� Yasaklama";
$f_lang['admin_text_pseudo'] = "E�er dilerseniz defterinize mesaj yazan ki�inin ismini/nickin vs. yasaklayabilirsiniz.";
$f_lang['ajouter_pseudo'] = "Yasaklanacak bir kullan�c� ad� se�iniz.";
$f_lang['gestion_pseudo'] = "Kullan�c� Ad� Y�netimi";
$f_lang['sup_pseudo'] = "Se�ilen Kullan�c� Adlar�n� Sil";
$f_lang['erreur_pseudo'] = "L�tfen bir kullan�c� ad� se�iniz.";
$f_lang['ok_aj_pseudo'] = "Te�ekk�rler. Se�ti�iniz Kullan�c� Ad� yasaklanm��t�r.";
$f_lang['verif_sup_pseudo'] = "Se�ti�iniz t�m Kullan�c� Adlar�n� silmek istedi�nizden emin misiniz ?";

/* bannir des emails */
$f_lang['bannir_emails'] = "E-Posta Adresi Yasaklama";
$f_lang['admin_text_email'] = "E�er dilerseniz ziyaret�i defterinize mesaj yazan ki�inin E-posta adresini yasaklayabilirsiniz</b>Sadece E-Posta adresini de�il ayn� zamanda domain uzant�l� mail adreslerini de yasaklaman�z m�mk�n : (...@spamdomain.com) gibi";
$f_lang['ajouter_email'] = "Yasaklanacak bir E-Posta adresi Ekle";
$f_lang['gestion_email'] = "E-Posta Y�netimi";
$f_lang['sup_email'] = "Se�ilen E-Postay� Sil";
$f_lang['erreur_email'] = "L�tfen bir E-posta adresi se�in.";
$f_lang['ok_aj_email'] = "Te�ekk�rler. Se�ilen E-posta adresi yasaklanm��t�r.";
$f_lang['verif_sup_email'] = "Se�ilen t�m E-posta adreslerini silmek istedi�inizden emin misiniz ?";

$f_lang['no_pseudo'] = "UYARI!\\nSizin Kullan�c� Ad�n�z yasaklanm��t�r. �u an bu panoya mesaj yazamazs�n�z.";
$f_lang['no_email'] = "UYARI!\\nSizin E-Posta adresiniz yasaklanm��t�r. �u an bu panoya mesaj yazamazs�n�z.";
$f_lang['no_ville'] = "UYARI!\\nYanl�� bir �ehirden girmeyi denediniz. �u an bu panoya mesaj yazamazs�n�z.";
$f_lang['no_mot'] = "UYARI!\\nYazm�� oldu�unuz mesaj uygun olmayan kelimeler i�ermektedir. L�tfen mesaj�n�z� kontrol edip tekrar deneyiniz !";

// interdiction des URL
$f_lang['url_interdite'] = "UYARI\\nMesaj�n�zda URL adresine yer vermeniz y�netici taraf�ndan yasaklanm��t�r.";
$f_lang['url_interdites'] = "Mesaj�n i�eri�inde URL ba�lant�lar� engellensin mi ?";
$f_lang['url_cliquables'] = "Mesaj�n i�eri�inde URL ba�lant�lar� aktif edilsin mi ?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "config paremetre tablolar�n�n ad�";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "Sunucu zaman ayar�ndan farkl� olarak bir zaman belirtebilirsiniz. Girdi�iniz de�er zaman� ileriye alacakt�r. Buna ihtiyac�n�z yoksa l�tfen 0 de�erini giriniz.";
$f_lang['heures'] = "saat";
$f_lang['secondes'] = "saniye";
$f_lang['admin_erreur_decalage_horaire'] = "-12 ve +12 aras� ge�erli bir zaman girmelisiniz";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "Son y�netici silinemez!";

// d�sactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "�fadeleri kullan�ma izin veriyor musunuz ?";

// pour emp�cher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "UYARI!\\nSe�mi� oldu�unuz zaman dilimi �ok k�sa.\\n300 saniyeden daha fazla bir zaman dilimi girmeniz gerekiyor.";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "Ziyaret�i defterinizi bir PHP dosyas�na dahil etmek ister misiniz ?";
$f_lang['admin_inclure_livre_code'] = "Here is the PHP code that you will need to insert into your PHP file between the &lt;?php and ?&gt; tags.\n\nYou'll also need to change the \$chem_absolu array in the /index.php file of the guestbook and to add the stylesheet in the calling page (check the FAQ for further explanation)";
$f_lang['admin_fichier_inclusion'] = "Enter here the absolute path to the file in which you want to include the guestbook (this way : /folder1/folder2/file_where_the_include_takes_place.php). You must click on the \"Save\" button in order to see the entered path taken into account in the code";
$f_lang['admin_fichier_inclusion_erreur'] = "ATTENTION\\nYou haven't entered a valid path to the include file\\nThe path must be entered i.e. as /folder1/folder2/file_where_the_include_takes_place.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "Listeden Kald�r";
$f_lang['admin_champ_obligatoire'] = "Zorunlu Yap";
$f_lang['admin_champ_prive'] = "�zel Yap";
$f_lang['admin_champ_pseudo'] = "Ziyaret�iler isimlerini yazs�nlar m� ?";
$f_lang['admin_champ_ville'] = "Ziyater�iler �ehierlerini ekleyebilsinler mi ?";
$f_lang['admin_donner_focus'] = "Sayfa y�klenirken 'Kullan�c� Ad�'se�ili olsun mu ? (�erezler i�in)";
$f_lang['champ_obligatoire_vide'] = "At least one required field (identified by a *) is empty. Please fill it in.";
$f_lang['erreur_add_nom'] = "L�tfen ad�n�z� giriniz.";
$f_lang['erreur_add_email'] = "L�tfen E-Posta adresi giriniz.";
$f_lang['erreur_add_site'] = "L�tfen Website adresinizi giriniz.";
$f_lang['erreur_add_ville'] = "L�tfen �ehrinizi belirtiniz.";
$f_lang['erreur_add_pays'] = "L�tfen �lkenizi belirtiniz.";
$f_lang['erreur_add_note'] = "Sitemiz i�in l�tfen bir puan kullan�n�z";
$f_lang['erreur_add_message'] = "L�tfen mesaj�n�z� yaz�n�z.";
$f_lang['erreur_url'] = "Girmi� oldu�unuz Website adresi ge�erli de�il.";

// code de s�curit� : v�rification de la pr�sence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">G�venlik kodu uygulamas�n� kullanamazs�n�z !<br/>\n Sunucunuz GD2 fonksiyonu i�ermiyor. G�venlik kodu uygulamas�n�n �al��mas� i�in bu ayarlar gerekli.</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Y�netim Paneli'ne gitmek i�in defterinizin alt�na bir eri�im linki eklemek ister misiniz ?";
$f_lang['admin_lien_accueil'] = "Back link (Anasayfaya D�n) ansayfan�za m� y�nlensin yoksa ba�ka bir site mi tercih edersiniz&nbsp;?";
$f_lang['admin_chemin_lien_accueil'] = "E�er defterinizin anasayfadan ba�ka bir linke y�nlenmesini istiyorsan�z bu se�enekten d�zenleme yapabilirsiniz. FTP'den alternatif bir uzant� giriniz. (www.siteadresiniz.com/dosya2/index.html) gibi.";
$f_lang['admin_chemin_lien_accueil_erreur'] = "Girmi� oldu�unuz adres eksik. L�tfen adresinizi tam giriniz (i.e. /mypage.php).";
$f_lang['texte_lien_accueil'] = "Anasayfaya D�n";
$f_lang['texte_lien_admin'] = "Y�netim Paneli";

$f_lang['admin_retour_livre'] = "Deftere Git";

// symboles champs priv�s/obligatoires sur le formulaire
// /!\ Attention, maximum 90 caract�res
$f_lang['information_champ_prive'] = "Sadece ziyaret�i defterinin y�neticileri �zelleri g�rebilir.";
$f_lang['information_champ_obligatoire'] = "This field is required to post a message.";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Sunucu (genellikle: localhost)";

$f_lang['name_table_txt_lang'] = "Name of the table containing the customized texts (�rn: Defter ba�l���)";

$f_lang['erreur_ecriture'] = "<b>HATA</b>, \"config/\" dosyas�na yaz�lma izni verilmemi�.<br><br>L�tfen \"config\" dosyas�n�n ayarlar�n� de�i�tiriniz. (chmod 777), Daha sonra yeniden deneyiniz : <a href=\"./setup.php\"><b>Geri D�n</b></a>.";

$f_lang['options_livre'] = "Defter Ayarlar�";

$f_lang['text1'] = "<b>Sans�rlenen kelimeler otomatik olarak de�i�tirilecek.<br>E�er bir ziyaret�i uygun olmayan bir kelime girmi�se ve bu kelime de sizin sans�rledi�iniz kelimeler aras�nda varsa sistem otomatik olarak o kelimeyi iste�iniz kelimeyle de�i�ecektir.</b>";

/* Erreur si fichier install present */
$f_lang['erreur_fic_install_present'] = "For security reasons, to use your guestbook you have to delete file setup.php and folder update/";
?>
