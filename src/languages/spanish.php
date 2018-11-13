<?php
////////////////////////////////////////////////////
//                @lex Guestbook                  //
//      by Soulard Alexis (c) 2002 - 2006         //
//         Gieling Pierre (c) 2002 - 2012         //
//         Hercelin Maxime (c) 2005 - 2012        //
//         http://www.alexguestbook.net/          //
//              all right reserved                //
// Spanish translation by Ricardo Concha Traverso //
////////////////////////////////////////////////////

/* Encodage utilis� dans le script */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "sp";

/* setup */
$f_lang['install_auto'] = "Instalaci�n autom�tica";
$f_lang['identi_base'] = "ID de la Base de Datos";
$f_lang['type_base'] = "Tipo de Base de Datos";
$f_lang['user_base'] = "Usuario";
$f_lang['pass_base'] = "Contrase�a";
$f_lang['nom_base'] = "Nombre de la Base de Datos";
$f_lang['nom_table'] = "Nombre de las tablas";
$f_lang['name_table_sessions'] = "Nombre de la tabla de sesiones";
$f_lang['name_table_users'] = "Nombre tabla de usuarios";
$f_lang['name_table_messages'] = "Nombre tabla de mensajes";
$f_lang['name_table_censure'] = "Nombre de tabla de palabras censuradas";
$f_lang['name_table_ip'] = "Nombre de la tabla de IP baneada";
$f_lang['name_table_smileys'] = "Nombre de tabla de sonrisas";
$f_lang['extension_script'] = "Extensi�n del script";
$f_lang['choose_extension'] = "Escoja una extensi�n para el script<br>(le avisamos que es \"php\", de otra manera Ud. tendr�a que renombrar todos los campos con la extensi�n que ha escogido)";
$f_lang['identi_acces_admin'] = "Su ID para acceder al P�nel de Administraci�n";
$f_lang['login_admin'] = "Usuario";
$f_lang['pass_admin'] = "Contrase�a";
$f_lang['verif_pass_admin'] = "Vuelva a escribir su contrase�a";
$f_lang['installer'] = "Instalar";
$f_lang['erreur_host'] = "Olvid� escribir el nombre del servidor de Base de Datos";
$f_lang['erreur_user'] = "Olvid� escribir su ID para conectarse con la Base de Datos";
$f_lang['erreur_nom_base'] = "Olvid� escribir el nombre de su Base de Datos";
$f_lang['erreur_log_admin'] = "Olvid� escribir su nombre de usuario para acceder al P�nel de Administraci�n";
$f_lang['erreur_pass_admin'] = "Olvid� escribir su contrase�a para acceder al P�nel de Administraci�n";
$f_lang['erreur_pass_differents'] = "ATENCI�N!, sus contrase�as son diferentes entre s�.";
$f_lang['erreur_first_connexion'] = "<b>ERROR, imposible conectar con la Base de Datos.</b><br><br>por favor, chequee su ID de conexi�n : <a href=\"javascript:history.go(-1);\"><b>atr�s</b></a>.";
$f_lang['erreur_install'] = "Fall� la instalaci�n!";
$f_lang['ok_install'] = "Instalaci�n exitosa!";
$f_lang['text_ok_install'] = "<b>Gracias ! La instalaci�n fue exitosa.</b><br><br>Por razones de seguridad, le recomendamos que elimine del servidor el documento setup.php que acaba de usar para instalar este programa (\"setup.php\"), de lo contrario, otras personas podr�n usarelo para corromper sus documentos de configuraci�n.<br><br>Ahora puede administrar su Libro de Visitas haciendo click ---> <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>aqu�</b></a> o <br> vea c�mo lo hacen los visitantes <a href=\"".$chem_absolu."\" target=\"_blank\"><b>ac�</b></a>.";

/* administration */
$f_lang['page protect'] = "P�gina protegida";
$f_lang['login'] = "Usuario";
$f_lang['pass'] = "Contrase�a";
$f_lang['value identif'] = "Identificaci�n";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Opciones";
$f_lang['script'] = "Script";
$f_lang['graphismes'] = "Pieles del Libro de Visitas";
$f_lang['messages'] = "Mensajes";
$f_lang['gestion'] = "Administraci�n";
$f_lang['censure_mots'] = "Palabras censuradas";
$f_lang['smileys'] = "Caritas";
$f_lang['utilisateurs'] = "Administradores";
$f_lang['ajouter'] = "Agregar";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "Acerca de ...";
$f_lang['donner_avis'] = "Denos su opini�n";
$f_lang['deconnexion'] = "desconectar";

 /* options */
 $f_lang['options_livre'] = "Opciones del Libro de Visitas";
$f_lang['options_generales'] = "Opciones generales";
$f_lang['langue'] = "Idioma";
$f_lang['send_mail'] = "�Desea que los administradores reciban un eMail cuando un nuevo mensaje ha sido enviado en el Libro de Visitas?";
$f_lang['avert_mail'] = "<br>(<b>informaci�n</b> : la funci�n mail() del servidor fue desactivada, aunque siempre digak \"yes\" no recibir� ninguna notificaci�n via Email)";
$f_lang['oui'] = "si";
$f_lang['non'] = "no";
$f_lang['options_modules'] = "Opciones de campos del Libro de Visitas";
$f_lang['admin_champ_email'] = "Solicitar a las visitas su Email";
$f_lang['admin_champ_site'] = "Solicitar a las visitas la URL de su sitio Web";
$f_lang['admin_champ_pays'] = "Solicitar a las visitas su ciudad y pais";
$f_lang['admin_champ_note'] = "Solicitar a las visitas evaluar su sitio Web";
$f_lang['admin_ok_aff_moteur'] = "Mostrar motor de b�squeda";
$f_lang['options_tech'] = "Opciones t�cnicas";
$f_lang['url_recharger'] = "P�gina a recargar para el Libro de Visitas";
$f_lang['url_variables'] = "Instrucciones variables enviadas como par�metros (tipear # en vez de $ en una variable)";
$f_lang['temps_session'] = "Duraci�n de cada sesi�n en segundos para el panel de administraci�n";
$f_lang['skin_to_use'] = "Piel a ser usada";
$f_lang['enregistrer'] = "Guardar";
$f_lang['nb_pages'] = "N�mero de mensajes a ser mostrados en cada p�gina del Libro de Visitas";
$f_lang['merci_options'] = "Gracias!, su informaci�n ha sido actualizada";
$f_lang['erreur_options'] = "ERROR\\nLa informaci�n no pudo ser guardada. Fue imposible en el documento \\\"config.".$alex_livre_ext."\\\", por favor, edite este documento con un editor de textos para cambiar sus alternativas.";
$f_lang['temps_ip_post'] = "N�mero de minutos antes de que una visita pueda enviar un nuevo mensaje";
$f_lang['minutes'] = "minutos";
$f_lang['cut_mots'] = "N�mero de letras antes que una palabra extensa sea cortada";
$f_lang['format_date'] = "Formato de fecha";

/* skins */
$f_lang['ok_ajouter'] = "Gracias, la piel ha sido exitosamente creada";
$f_lang['erreur_ajouter'] = "ERROR\\nla piel no pudo ser creada, por favor, cr�ela manualmente";
$f_lang['text1_2'] = "Las siguientes pieles ser�n salvadas en la carpeta &quot;templates/skins/&quot;. Esta interfaz le permite modificarlas f�cilmente, pero tambi�n puede editar manualmente los documentos html.";
$f_lang['text2'] = "<b>Si tambi�n desea modificar las plantillas del panel de administraci�n </b> por favor, edite manuelmente los documentos en las carpetas &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "Agregar una piel";
$f_lang['ajouter'] = "Agregar";
$f_lang['gestion_skins'] = "Administraci�n de pieles";
$f_lang['vous_editez'] = "Va a editar esta piel :";
$f_lang['style'] = "hoja de estilos";
$f_lang['ajouter_message'] = "agregar parte de un mensaje";
$f_lang['nbre_messages_page'] = "n�mero de mensajes / parte p�ginas";
$f_lang['pages_dispos'] = "lista de p�ginas disponibles / p�gina siguiente - parte p�gina previa";
$f_lang['texte_corps_messages'] = "cuerpo de mensajes";
$f_lang['espacement'] = "espacio entre dos mensajes";
$f_lang['text_assembly'] = "documento ensamblando las partes previas";
$f_lang['ok_edit_skin'] = "Gracias, la piel ha sido actualizada";
$f_lang['erreur_edit_skin'] = "ERROR\\nUno o muchos documento(s) de la piel no pudieron ser actualizadas. Por favor, edite estos documentos manualmente.";
$f_lang['ajouter'] = "Agregar";
$f_lang['supprimer'] = "Borrar";
$f_lang['text_sup_skin'] = "Borrar una piel";
$f_lang['ok_supprimer'] = "Gracias, la piel ha sido exitosamente borrada.";
$f_lang['erreur_supprimer'] = "ERROR\\nUno o muchos documento(s) de la piel no pudieron ser borrados, puede borrarlos manualmente.";

/* page des mots censur�s */
$f_lang['aj_mot'] = "Agregar nueva palabra "; 
$f_lang['mot_interdit'] = "Palabra prohibida :";
$f_lang['remplacer_par'] = "Reemplazar con :";
$f_lang['gestion_censure'] = "Administraci�n de palabras prohibidas";
$f_lang['mot'] = "palabra";
$f_lang['remplace_by'] = "reemplazada por";
$f_lang['liste_jour'] = "Actualizar la lista";
$f_lang['sup_mots'] = "Remover las palabras seleccionadas";
$f_lang['erreur_aj_censure1'] = "Por favor de una palabra a censurar";
$f_lang['erreur_aj_censure2'] = "Por favor de una palabra a reemplazar las palabras censuradas";
$f_lang['ok_aj_mot'] = "Gracias, las palabras censuradas han sido actualizadas.";
$f_lang['verif_sup'] = "�Desea borrar permanentemente las palabras seleccionadas?";
$f_lang['merci_modif'] = "Gracias, los cambios han sido salvados";

/* bannir des ip */
$f_lang['bannir_ip'] = "Banear ip's";
$f_lang['text_ip1'] = "Cada navegante de la Web tiene 4 n�meros espec�ficos en su ID (i.e. 201.10.25.14). Esta ID es entregada por el proveedor de acceso (ISP) y la cambia, te�ricamente, cada vez que �l/ella se reconecta.";
$f_lang['text_ip2'] = "Si desea <b>evitar que un usuario envie mensajes en su Libro de Visitas</b>, puede copiar su direcci�n de IP aqu�. Tambi�n puede banear un rango de direcciones IP usando el s�mbolo de escape * (por ejemplo, 201.15.55.*, o tambi�n 158.*.*.*).";
$f_lang['ajouter_ip'] = "Agregar una nueva IP baneada";
$f_lang['gestion_ip'] = "Administrar las IP's";
$f_lang['sup_ip'] = "Remueva las seleccionadas IP's baneadas";
$f_lang['ok_aj_ip'] = "Gracias, esta IP ahora ha sido baneada";
$f_lang['verif_sup_ip'] = "�Realmente desea borrar las IP's seleccionadas?";

/* smileys */
$f_lang['gestion_smileys'] = "Administraci�n de caritas";
$f_lang['text_smileys'] = "<b>Caritas (o Smileys) permiten a cada visita expresar sus sentimientos</b> cuando envia su mensaje. Desde esta interfaz, Ud. puede f�cilmente agregar o remover caritas, de manera tal que sus visitas tengan una amplia gama de alternativas a elegir :o)<br><br>Las caritas disponibles en este sitio se almacenan en la carpeta \"images/smileys\".";
$f_lang['ajouter_smiley'] = "Agregar carita";
$f_lang['image_smiley'] = "Imagen";
$f_lang['car_replace'] = "C�digo correspondiente";
$f_lang['gestion_smileys'] = "Administraci�n de caritas";
$f_lang['sup_smileys'] = "Borrar las caritas seleccionadas";
$f_lang['erreur_image'] = "Por favor, escoja una carita";
$f_lang['erreur_car'] = "Por favor, escoja el correspondiente c�digo para la carita seleccionada";
$f_lang['ok_aj_smiley'] = "Gracias, la carita ha sido exitosamente a�adida";
$f_lang['no_smiley'] = "La carita debe ser un GIF o una imagen en formato JPEG o JPG";
$f_lang['copy_impossible'] = "ERROR\\nFue imposible copiar la carita en la carpeta \\\"images/smileys\\\" .";
$f_lang['car_replace_exist'] = "ERROR\\nEl correspondiente c�digo ya existe en la Base de Datos.";
$f_lang['modif_smileys'] = "Actualizar todas las caritas";
$f_lang['verif_sup_smileys'] = "�Realmente desea borrar todas las caritas seleccionadas?";
$f_lang['merci_modif_smileys'] = "Gracias, las caritas han sido modificadas.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Agregar un administrador del Libro de Visitas";
	$f_lang['add_admin_2'] = "Agregar un administrador";
	$f_lang['ajouter_admin'] = "Agregar";
	$f_lang['name_ajouter_admin'] = "agregar";
}
else{
	$f_lang['add_admin_texte'] = "Modificar un aministrador del Libro de Visitas";
	$f_lang['add_admin_2'] = "Modificar un administrador";
	$f_lang['ajouter_admin'] = "Salvar";
	$f_lang['name_ajouter_admin'] = "modificar";
}

$f_lang['identif_connexion'] = "ID de Conexi�n";
$f_lang['passe_admin'] = "contrase�a";
$f_lang['email_admin'] = "Email (importante si el administrador debe recibir un Email cuando un mensaje ha sido enviado)";
$f_lang['admin_receive_email'] = "�Desea que el administrador reciba un Email cuando un mensaje es enviado?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;�est� autorizado a modificar las opciones del script?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;�cambiar las pieles?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;�administrar los mensajes?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;�administrar las palabras censuradas?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;�administrar las caritas?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;�administrar las cuentas de otros administradores?";
$f_lang['erreur_name'] = "Por favor, de una ID de conexi�n";
$f_lang['erreur_passe'] = "Por favor, de una contrase�a";
$f_lang['erreur_email'] = "Por favor, de un Email";
$f_lang['ok_aj_admin'] = "Gracias, la cuenta ha sido exitosamente creada";
$f_lang['ok_modif_admin'] = "Gracias, la cuenta ha sido actualizada";
$f_lang['erreur_aj_admin'] = "ERROR\\nEste usuario ya existe";
$f_lang['revenir'] = "Volver a la anterior p�gina";

/* gestion des admins */
$f_lang['gest_admin'] = "Manejar a los administradores";
$f_lang['sup_admin'] = "remover";
$f_lang['login_admin'] = "Usuario";
$f_lang['email_admin'] = "Email";
$f_lang['modif_admin'] = "modificar";
$f_lang['value_sup_admin'] = "Remover a todos los administradores seleccionados";
$f_lang['verif_sup_admin'] = "�Realmente desea remover a todos los administradores seleccionados?";

/* page d'erreur */
$f_lang['erreur_texte'] = "PAGINA NO DISPONIBLE";
$f_lang['erreur_auth'] = "Fallo en la autentificaci�n";
$f_lang['erreur_droits'] = "Ud. no tiene los derechos requeridos para acceder a esta p�gina.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Puntaje dado por las visitas a su sitio Web :";
$f_lang['title_guestbook'] = "Mi Libro de Visitas";
$f_lang['note_super'] = " : fant�stico !";
$f_lang['note_moyen'] = " : puntaje";
$f_lang['note_rate'] = " : un gran error";
$f_lang['nom_pseudo_visiteur'] = "Nombre o Nick :";
$f_lang['email_visiteur'] = "Direcci�n de Email :";
$f_lang['site_web_visiteur'] = "URL del sitio Web :";
$f_lang['ville_pays_visiteur'] = "Ciudad / Pais :";
$f_lang['note_visiteur'] = "�Qu� puntaje le dar�a a este sitio?";
$f_lang['message_visiteur'] = "Su mensaje :";
$f_lang['ajouter_message_visiteur'] = "Agregar este mensaje";
$f_lang['erreur_add_nom'] = "Por favor, d�ganos su nombre";
$f_lang['erreur_add_message'] = "Por favor, agregue su mensaje";
$f_lang['erreur_mail'] = "Su Email es incorrecto";
$f_lang['messages'] = "Mensajes";
$f_lang['messages_a'] = "a";
$f_lang['page'] = "P�gina";
$f_lang['nbre_messages'] = "N�mero de mensajes";
$f_lang['message_le'] = "El";
$f_lang['message_note'] = "Puntaje";
$f_lang['send_mail_to'] = "Enviar un Email a";
$f_lang['go_home'] = "Visitar el sitio";
$f_lang['precedente'] = "&lt;&lt; anterior";
$f_lang['suivante'] = "siguiente &gt;&gt;";
$f_lang['no_message'] = "Ning�n mensaje que mostrar.";
$f_lang['no_ip'] = "ATENCION\\nSu IP ha sido baneada, Ud. no est� autorizado a enviar mensajes en el Libro de Visitas.";
$f_lang['ok_post'] = "Gracias !  Su mensaje ha sido exitosamente enviado.";
$f_lang['time_erreur'] = "ATENCION\\nSu mensaje no pudo ser enviado, Ud. ya ha enviado uno recientemente.";
$f_lang['text_select_search'] = "Mostrar solamente mensajes que contienen las siguientes palabras";
$f_lang['text_ok_search'] = "Ok";

/* mail envoy� */
$f_lang['mail_object'] = "[info] - Nuevo mensaje en su Libro de Visitas - ";
$f_lang['mail_message'] = "Hola,\n\nle informamos que un uevo mensaje fue enviado al Libro de Visitas ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Administrar mensajes";
$f_lang['selectionner_pages'] = "Seleccionar";
$f_lang['messages_gest'] = "mensaje";
$f_lang['page_gest'] = "p�gina";
$f_lang['aller_en_page'] = "Ir a la p�gina";
$f_lang['supprimer_gest'] = "borrar";
$f_lang['auteur_gest'] = "autor";
$f_lang['modifier_gest'] = "editar";
$f_lang['supprimer_mess_selected'] = "Borrar los mensajes seleccionados";
$f_lang['verif_sup_mess'] = "�Realmente quiere borrar los mensajes seleccionados?";

/* modifier un message */
$f_lang['modif_mess'] = "Editar un mensaje";
$f_lang['message_modif'] = "Mensaje";
$f_lang['nom_modif'] = "Nombre";
$f_lang['email_modif'] = "Email";
$f_lang['site_web_modif'] = "URL del sitio Web";
$f_lang['note_modif'] = "Puntaje dado a su sitio";
$f_lang['ville_pays_modif'] = "Ciudad / Pais";
$f_lang['date_modif'] = "Agregado fecha";
$f_lang['ip_modif'] = "Direcci�n de IP";
$f_lang['ok_modif_mess'] = "Gracias, los cambios fueron salvados";

/* titre des pages */
$f_lang['title identification'] = "identificaci�n";
$f_lang['title administration'] = "administration";
$f_lang['title frame gauche'] = "marco de la izquierda";
$f_lang['title options'] = "opciones";
$f_lang['title skins'] = "pieles";
$f_lang['title censure'] = "palabras a censurar";
$f_lang['title censure'] = "administrando las IPs baneadas";
$f_lang['title smileys'] = "administrando las sosnrisas";
$f_lang['title add admin'] = "agregar un administrador del Libro de Visitas";
$f_lang['title gest admin'] = "administrando a los administradores del Libro de Visitas";
$f_lang['title erreur'] = "error";
$f_lang['title gestion mess'] = "administrar mensajes";
$f_lang['title modif mess'] = "editar un mensaje";
$f_lang['title setup'] = "instalaci�n";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Imposible conectarse con la Base de Datos";
$f_lang['erreur_connexion'] = "La informaci�n de su ID es incorrecta";
$f_lang['manque login'] = "Por favor, tipee su usuario";
$f_lang['manque pass'] = "Por favor, tipee su contrase�a";
$f_lang['end session'] = "Su sesi�n termin�";

/* add version 3.11 */
$f_lang['addSignature'] = "Escribir un mensaje";
$f_lang['seeMessages'] = "Leer mensajes enviados";
$f_lang['addMessageBlocAdd'] = "Agregar un mensaje";

/* add version 3.2 */
$f_lang['version'] = "Versi�n";
$f_lang['new_version_dispo'] = "Una actualizaci�n de la versi�n del Libro de Visitas est� disponible";
$f_lang['version_courrante'] = "Actual versi�n de este script";
$f_lang['info_version'] = "Informaci�n sobre la versi�n que tiene";
$f_lang['version_txt_ok'] = "La versi�n que tiene es ".$alex_livre_version.",<br>esta versi�n es la �ltima, no es necesaria una actualizaci�n.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "La versi�n que tiene es ".$alex_livre_version.", <b>una nueva versi�n est� disponible</b>";
$f_lang['version_down'] = "Descargue la versi�n actualizada";
$f_lang['help_update'] = "Ayuda para la actualizaci�n";
$f_lang['spam'] = "El USER AGENT de su navegador no puede ser determinado, este ve como un robot trata de postear un mensaje autom�ticamente.  Si esto no es verdadero, por favor trate de nuevo con otro navegador.";
$f_lang['avis_spammeurs'] = "Nota a los spammers";
$f_lang['txt_spammeurs'] = "<b>Este es un Libro de visitas protegido contra el spam</b>, las direcciones de E-Mail y URLs son codificados en el c�digo fuente de las p�ginas generadas, por lo tanto es absolutamente in�til postear links comerciales, estos no ser�n vistos por los motores de b�squeda (adem�s su mensaje ser� borrado de todas maneras...)";
$f_lang['fermer'] = "Cerrar esta ventana";
$f_lang['valider_messages'] = "�Desea ver los mensajes posteados antes de que sean publicamente visibles en el libro de visitas?";
$f_lang['valide'] = "�Validado?";
$f_lang['mess_valide'] = "Este mensaje ha sido validado";
$f_lang['mess_invalide'] = "Este mensaje est� esperando la validaci�n";
$f_lang['info_mess_valide'] = "�Mensaje validado?";
$f_lang['ok_post_valid'] = "Gracias ! Su mensaje ha sido guardado satisfactoriamente, este se postear� luego que el webmaster lo apruebe.";
$f_lang['see_skin'] = "Prever el Libro de visitas con esta piel";
$f_lang['maxi_car'] = "Maximos numeros de signos/letras permitidas en un mensaje (0 = unlimited)";
$f_lang['il_reste'] = "Puede escribir hasta";
$f_lang['caracteres'] = "letras/signos m�s en su mensaje";
$f_lang['sup_copyright'] = "Borrar copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Nombre de la table del c�digo de seguridad";
$f_lang['add_code_securite'] = "�Desea requerirle a los usuarios tipear un c�digo de seguridad antes de postear un mensaje?";
$f_lang['t_chem_dossier_fonts'] = "URL completa al directorio de tipos de fuentes";
$f_lang['t_color_txt_code'] = "C�digo hexadecimal del color del texto";
$f_lang['t_color_background_code'] = "C�digo hexadecimal del color de fondo";
$f_lang['veuillez_taper_code'] = "Por favor copie el c�digo de seguridad en la caja de la derecha";
$f_lang['a_quoi_ca_sert'] = "�Por qu� esto?";
$f_lang['why_code'] = "�Por qu� un \"c�digo de seguridad\"?";
$f_lang['txt_why_code'] = "este procedimiento nos permite checkear que el mensaje es escrito por una persona real y no por un programa automatizado.<br><br><b>Las referencias a anuncios y Spam est�n prohibidos en este libro de visitas!</b>";
$f_lang['erreur_code_securite'] = "Por favor, ingrese el c�digo de seguridad";
$f_lang['erreur_saisie_code_securite'] = "el c�digo de seguridad escrito no es v�lido, por favor vuelva a escribirlo";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Respuesta automatizada";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;�manejar respuesta automatizada?";
$f_lang['text_reponse_auto'] = "<b>En esta p�gina usted puede escribir la respuesta automatizada</b> que el texto ser� enviado a los visitantes quienes habr�n posteado un mensaje en el Libro de visitas.  Este mensaje ser� enviado si se activa esta funci�n en el script de opciones.<br><br>Cada idioma puede tener su propia respuesta personalizada y el c�digo [PSEUDO] ser� reemplazado por el nombre o el nick del visitante quien ha posteado el mensaje.";
$f_lang['name_table_rep_auto'] = "Nombre para la tabla MySQL que contendr� los mensajes de respuesta automatizada";
$f_lang['gestion_reponses'] = "Manejar mensajes";
$f_lang['msg_remerciement'] = "Gracias su mensaje";
$f_lang['txt_remerciement'] = "Hola [PSEUDO],\n\nGracias por dejar su mensaje en nuestro libro de visitas!";
$f_lang['ok_save_msg_rem'] = "Gracias, el agradecimiento autom�tico ha sido guardado.";
$f_lang['envoyer_remerciement'] = "�Desea agradecer el mensaje con un cartel enviado autom�ticamente?";
$f_lang['remerciement'] = "Gracias";
$f_lang['titre_guestbook'] = "T�tulo del libro de visitas";
$f_lang['text_titre_guestbook'] = "<b>Usted puede cambiar el t�tulo del libro de visitas</b> y escribir uno diferente para cada uno de los idiomas disponibles.";
$f_lang['titre'] = "T�tulo";
$f_lang['parametrage'] = "Configuraciones";
$f_lang['ok_save_titre'] = "Gracias, el mensaje ha sido guardado.";
$f_lang['ville_visiteur'] = "Ciudad :";
$f_lang['pays_visiteur'] = "Pais :";
$f_lang['flag'] = "Bandera";
$f_lang['ville_modif'] = "Ciudad";
$f_lang['pays_modif'] = "Pais";
$f_lang['action'] = "Acci�n";
$f_lang['repondre'] = "Respondiendo";
$f_lang['votre_reponse'] = "Su respuesta";
$f_lang['ok_reponse_mess'] = "Gracias, su respuesta ha sido guardada";
$f_lang['defaut_titre_rep'] = "Respuesta del Webmaster";
$f_lang['annuler'] = "Cancelar";
$f_lang['num_appari'] = "Mostrando n�mero";
$f_lang['nb_max_smileys'] = "M�ximo n�mero de caritas a mostrar";
$f_lang['plus_smileys'] = "Mostrar m�s caritas";
$f_lang['liste_all_smilies'] = "Lista de todas las caritas";
$f_lang['boite_java'] = "Caja Javascript";
$f_lang['text_boite_java'] = "<b>Esta funci�n le permite mostrar los �ltimos mensajes posteados en su libro de visitas</b> en otra p�gina de su elecci�n.";
$f_lang['parametrage_modele'] = "Configuraci�n de la plantilla";
$f_lang['ok_save_boite'] = "Gracias, su configuraci�n ha sido guardada";
$f_lang['format_date_boite'] = "Formato de fecha (identica a la funci�n <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> de PHP)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maximo n�meros de signos mostrados para el nombre o nick";
$f_lang['nbre_maxi_message_boite'] = "Maximo n�meros de signos mostrados para el mensaje";
$f_lang['modele_affichage_donnees'] = "Plantilla de datos posteados";
$f_lang['url_dossier_livre_boite'] = "URL completa a su carpeta del libro de visitas";
$f_lang['url_livre_boite'] = "URL completa a su p�gina inicio de su libro de visitas";
$f_lang['generation_code'] = "Creaci�n de c�digo javascript";
$f_lang['nom_msg_afficher'] = "Numero de mensajes para mostrar";
$f_lang['generer_code'] = "Crear el c�digo javascript";
$f_lang['code_a_copier'] = "C�digo HTML que ser� copiado en la(s) p�gina(s) de su elecci�n";
$f_lang['erreur_boite_java'] = "Por favor ingrese un n�mero v�lido de mensajes a mostrar";
$f_lang['erreur_par_boite'] = "Configurando errores, no puede aislar la cadena [BOUCLE] ... [/BOUCLE] en su plantilla.";
$f_lang['saut_ligne_msg_boite'] = "Mantener el salto de l�nea en los mensajes";
$f_lang['message_a'] = "a las";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;�manejar la base de datos?";
$f_lang['bdd'] = "Base de datos";
$f_lang['optimisation'] = "Optimizaci�n";
$f_lang['sauvegarde'] = "Guardando";
$f_lang['restauration'] = "Restauraci�n";
$f_lang['optimisation_txt'] = "<b>Sobre el guardado y borrado, las tablas de su base de datos llenan el espacio vac�o no usado.</b> Esto es malo para el funcionamiento total de la base de datos y as� de su sitio web, esta p�gina le permite resolver ese problema optimizando las tablas.";
$f_lang['liste_tables'] = "Lista de tablas de su base de datos";
$f_lang['lancer_optimisation'] = "Lanzando optimizaci�n";
$f_lang['tables'] = "TABLAS";
$f_lang['pertes'] = "PERDIDAS";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Gracias, las tablas con p�rdidas han sido optimizadas";
$f_lang['txt_sauvegarde'] = "<b>Si usted quiere mantener los mensajes posteados por un largo tiempo, un regular y peri�dico backup es altamente aconsejado.</b> Una falla del disco duro podr�a destruir de hecho todos sus datos.  Un backup podr�a tambi�n ser muy �til si desea trasnferir todos sus mensajes a otro servidor.";
$f_lang['lancer_sauvegarde'] = "Iniciar el backup";
$f_lang['lancer_restauration'] = "Iniciar la restauraci�n";
$f_lang['txt_restauration'] = "<b>Si ha realizado un backup, puede completamente restaurar su base de datos de su libro de visitas</b> Solo seleccione el archivo correspondiente en su disco duro.<br><br><b><u>ATENCI�N</u></b>, si este archivo es muy grande (varios megabytes), el proceso de restauraci�n puede causar problemas sobre los ajustes del servidor de su sitio web (set_time_limit() y el m�ximo tama�o permitido en los ajustes de upload).";
$f_lang['select_file'] = "Seleccione el archivo de backup de su disco duro o servidor (.ZIP o .SQL)";
$f_lang['confirm_restauration'] = "�Confirma que desea lanzar la restauraci�n y as� borrar todos los datos actuales?";
$f_lang['select_file_restau'] = "Por favor seleccione un archivo de su disco duro";
$f_lang['erreur_ext_restau'] = "El archivo seleccionado no es .ZIP o .SQL, la restauraci�n no ser� realizada.";
$f_lang['conseil_zip'] = "(Descomprima el archivo ZIP en su disco duro para obtener el archivo SQL)";
$f_lang['erreur_ext_zip'] = "La extensi�n PHP_ZIP no est� disponible en su servidor, la restauraci�n v�a archivo ZIP no es as� posible.  Por favor seleccione un archivo .SQL de su disco duro".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Error leyendo su archivo ZIP, no se puede realizar la restauraci�n.   Intente con un archivo .SQL ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "El archivo SQL seleccionado no parece ser un libro de visitas @lex.  No se puede realizar la restauraci�n.";
$f_lang['restauration_terminee'] = "Gracias ! La restauraci�n ha sido realizada satisfactoriamente !";

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