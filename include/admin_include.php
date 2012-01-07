<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2011    //
//         Hercelin Maxime (c) 2005 - 2011   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

/**
 * NE PAS MODIFIER CE PARAMETRAGE, le script ne fonctionnerait pas correctement.
 */
error_reporting(E_ALL ^ E_NOTICE);

if (!defined('AGUEST'))
	exit("Safety error.");

if (phpversion() < "4.1.0"){
	$_GET    =& $HTTP_GET_VARS;
	$_POST   =& $HTTP_POST_VARS;
	$_FILES  =& $HTTP_POST_FILES;
	$_SERVER =& $HTTP_SERVER_VARS;
}

if (isset($_POST['no_verif_session']) || isset($_GET['no_verif_session']) || isset($_FILES['no_verif_session']) || isset($_COOKIE['no_verif_session']))
	exit("Safety error.");

if (file_exists($chem_absolu."config/extension.inc")){	
	include($chem_absolu."config/config_base.".$alex_livre_ext);
	include($chem_absolu."db/".$database_type.".".$alex_livre_ext);
	include($chem_absolu."include/funct_sql_admin.".$alex_livre_ext);
	}
else
	exit("Safety error.");
	
/* connexion a la base de donnees */
$f_db_connexion = new alex_livre_sql($f_mysql_host, $f_mysql_user, $f_mysql_pass, $f_mysql_base, false);
if (!$f_db_connexion -> db_connect_id){
	exit($f_lang['erreur_mysql_connect']);
}
// chargement de la config
sql_select_query("*", "alex_livre_config");
include($chem_absolu."include/funct_utiles.".$alex_livre_ext);
set_options();
include($chem_modelixe."ModeliXe.".$alex_livre_ext);
include($chem_absolu."include/version.inc.".$alex_livre_ext);
include($chem_absolu."languages/".$config['langue'].".".$alex_livre_ext);

// Desactive les fonctions de protections des variables qui pourraient etre activees
if (version_compare(PHP_VERSION, '5.3.0', '<')) {
	if (get_magic_quotes_runtime())
		set_magic_quotes_runtime(0);
	unregister_globals();
}

// gestion de magic_quotes_gpc
nettoyer_var_post();

/* skin */
$chem_template = "templates/admin/";

// Pour utiliser des fonctions dates avec PHP 5.3 il faut preciser le fuseau horaire utilise
if (function_exists('date_default_timezone_set'))
{
	//on d�finit l heure du serveur sur le fuseau UTC
	date_default_timezone_set('UTC');
}

//----------------------- on verifie si la session est toujours valide
if (!isset($no_verif_session))
	f_verif_session();

//----------------------- on enregistre les pages que l'utilisateur est autorise a consulter
f_save_pages();

?>