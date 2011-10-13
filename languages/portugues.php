<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2008    //
//         Hercelin Maxime (c) 2005 - 2008   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//      Portuguese translation by THE EYE    //
///////////////////////////////////////////////

/* Encodage utilis� dans le script */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "pt-br";

/* setup */
$f_lang['install_auto'] = "Instala��o autom�tica";
$f_lang['identi_base'] = "ID do Banco de dados";
$f_lang['type_base'] = "Tipo do Banco de dados";
$f_lang['user_base'] = "ID";
$f_lang['pass_base'] = "Senha";
$f_lang['nom_base'] = "Nome do Banco de dados";
$f_lang['nom_table'] = "Nome das tabelas";
$f_lang['name_table_sessions'] = "Nome da tabela de sessions";
$f_lang['name_table_users'] = "Nome da tabela de usu�rios";
$f_lang['name_table_messages'] = "Nome da tabela de mensagens";
$f_lang['name_table_censure'] = "Nome da tabela de palavras censuradas";
$f_lang['name_table_ip'] = "Nome da tabela de IPs banidos";
$f_lang['name_table_smileys'] = "Nome da tabela de smileys";
$f_lang['extension_script'] = "Extens�o do script";
$f_lang['choose_extension'] = "Escolha uma extens�o para o script<br>(n�s recomendamos  \"php\", se n�o voc� ter� que renomear todos os arquivos com a extens�o escolhida.)";
$f_lang['identi_acces_admin'] = "Seu ID de acesso ao painel de administra��o";
$f_lang['login_admin'] = "Login";
$f_lang['pass_admin'] = "Senha";
$f_lang['verif_pass_admin'] = "Digite a Senha novamente";
$f_lang['email_admin_setup'] = "Seu e-mail";
$f_lang['installer'] = "Instalal";
$f_lang['erreur_host'] = "Voc� esqueceu de digitar o host do banco de dados.";
$f_lang['erreur_user'] = "Voc� esqueceu de digitar o ID para conectar ao banco de dados.";
$f_lang['erreur_nom_base'] = "Voc� esqueceu de digitar o nome do banco de dados.";
$f_lang['erreur_log_admin'] = "Voc� esqueceu de digitar seu login para o painel de administra��o.";
$f_lang['erreur_pass_admin'] = "Voc� esqueceu de digitar sua senha para conectar o painel de administra��o.";
$f_lang['erreur_pass_differents'] = "ATEN��O, Suas senhas est�o diferentes.";
$f_lang['erreur_first_connexion'] = "<b>ERRO, imposs�vel conectar ao banco de dados.</b><br><br>por favor cheque seu ID de conex�o : <a href=\"javascript:history.go(-1);\"><b>back</b></a>.";
$f_lang['erreur_install'] = "Instala��o falhou.";
$f_lang['ok_install'] = "Instala��o conclu�da com sucesso.";
$f_lang['text_ok_install'] = "<b>OBRIGADO ! Instala��o foi conclu�da com sucesso.</b><br><br>Por raz�es de seguran�a n�s pedimos que delete o arquivo de instala��o que voc� acabou de utilizar (\"setup.php\"), sen�o, outras pessoas poder�o corromper suas configura��es.<br><br>Agora voc� pode administrar sue livro de visitas clicando <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>aqui</b></a> ou<br> ver como os visitantes acessam <a href=\"".$chem_absolu."\" target=\"_blank\"><b>here</b></a>.";

/* administration */
$f_lang['page protect'] = "P�gina protegida";
$f_lang['login'] = "Login";
$f_lang['pass'] = "Senha";
$f_lang['value identif'] = "Identifica��o";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Op��es";
$f_lang['script'] = "Script";
$f_lang['graphismes'] = "Skins di livro de visitas";
$f_lang['messages'] = "Mensagens";
$f_lang['gestion'] = "Gerenciamento";
$f_lang['censure_mots'] = "Censura de palavras";
$f_lang['smileys'] = "Smileys";
$f_lang['utilisateurs'] = "Administradores";
$f_lang['ajouter'] = "Adicionar";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "Sobre...";
$f_lang['donner_avis'] = "D�-nos sua opini�o";
$f_lang['deconnexion'] = "desconectar";

 /* options */
 $f_lang['options_livre'] = "Op��es do livro de visitas";
$f_lang['options_generales'] = "Op��es gerais";
$f_lang['langue'] = "Linguagem";
$f_lang['send_mail'] = "Voc� quer que os administradores recebam um e-mail quando uma nova mensagem � postada ?";
$f_lang['avert_mail'] = "<br>(<b>informa��o</b> : a fun��o mail() do seu host est� desativada, conseq�entemente mesmo se voc� marcar \"sim\" voc� n� receber� notifica��o de e-mail)";
$f_lang['oui'] = "sim";
$f_lang['non'] = "n�o";
$f_lang['options_modules'] = "Op��es de campos do livro de visitas";
$f_lang['admin_champ_email'] = "Visitantes s�o perguntados pelo e-mail";
$f_lang['admin_champ_site'] = "Visitantes s�o perguntados pela URL de seus websites";
$f_lang['admin_champ_pays'] = "Visitantes s�o perguntados pela sua cidade e pa�s";
$f_lang['admin_champ_note'] = "Visitantes podem dar notas ao site";
$f_lang['admin_ok_aff_moteur'] = "Mostrar sistema de busca";
$f_lang['options_tech'] = "Op��es t�cnicas";
$f_lang['url_recharger'] = "P�gina para atualizar o Livro de visitas";
$f_lang['url_variables'] = "Instru��es vari�veis emitidas como par�metros (use # em vez de $ em uma vari�vel)";
$f_lang['temps_session'] = "Dura��o da sess�o em segundos para o painel de administra��o";
$f_lang['skin_to_use'] = "Skin a ser usado";
$f_lang['enregistrer'] = "Salvar";
$f_lang['nb_pages'] = "N�mero de mensagens exibidas por p�gina";
$f_lang['merci_options'] = "Informa��es salvas";
$f_lang['erreur_options'] = "ERRO\\nAs informa��es n�o puderam ser salvas, n� foi poss�vel escrever para o arquivo \\\"config.".$alex_livre_ext."\\\", por favor use um editor de texto para mudar suas op��es.";
$f_lang['temps_ip_post'] = "N�mero de minutos entre postagens do visitante";
$f_lang['minutes'] = "minutos";
$f_lang['cut_mots'] = "N�mero de letras cortadas antes de uma palavra longa";
$f_lang['format_date'] = "Formato da data";

/* skins */
$f_lang['ok_ajouter'] = "Obrigado, o skin foi criado com sucesso.";
$f_lang['erreur_ajouter'] = "ERRO\\nO skin n�o pode ser criado, por favor crie-o manualmente";
$f_lang['text1_2'] = "Os seguintes skins ser�o salvos na pasta &quot;templates/skins/&quot; . Esta interface permite a voc� edit�-los facilmente, mas voc� tamb�m pode editar arquivos html manualmente.";
$f_lang['text2'] = "<b>Se voc� tamb�m deseja modificar os templates do painel de administra��o</b> por favor edite manualmente os arquivos na pasta &quot;templates/admin/&quot; .";
$f_lang['text_aj_skin'] = "Adicionar skin";
$f_lang['ajouter'] = "Adicionar";
$f_lang['gestion_skins'] = "Gerenciamento de skins";
$f_lang['vous_editez'] = "Voc� modifica agora o skin :";
$f_lang['style'] = "estilo";
$f_lang['ajouter_message'] = "parte de adicionar uma da mensagem";
$f_lang['nbre_messages_page'] = "parte do n�mero de mensagens / p�ginas";
$f_lang['pages_dispos'] = "parte da lista de p�ginas / pr�xima pagina - pagina anterior";
$f_lang['texte_corps_messages'] = "corpo das mensagens";
$f_lang['espacement'] = "Espa�o entre mensagens";
$f_lang['text_assembly'] = "partes de arquivos inclu�dos antes";
$f_lang['ok_edit_skin'] = "O skin foi alterado";
$f_lang['erreur_edit_skin'] = "ERRO\\nUm ou mais arquivo(s) do skin n�o pode ser atualizado. Por favor edite-o(s) manualmente.";
$f_lang['ajouter'] = "Adicionar";
$f_lang['supprimer'] = "Deletar";
$f_lang['text_sup_skin'] = "Deletar um skin";
$f_lang['ok_supprimer'] = "O skin foi deletado.";
$f_lang['erreur_supprimer'] = "ERRO\\nUm ou mais arquivo(s) do skin n�o pode ser deletado(s). Por favor delete-o(s) manualmente.";

/* page des mots censur�s */
$f_lang['aj_mot'] = "Adicionar uma nova palavra "; 
$f_lang['mot_interdit'] = "Palavra proibida :";
$f_lang['remplacer_par'] = "Substituir por :";
$f_lang['gestion_censure'] = "Gerenciamento de palavras proibidas";
$f_lang['mot'] = "palavra";
$f_lang['remplace_by'] = "substituir por";
$f_lang['liste_jour'] = "Atualizar a lista";
$f_lang['sup_mots'] = "Remover selecionadas";
$f_lang['erreur_aj_censure1'] = "Por favor digite a palavra para censurar";
$f_lang['erreur_aj_censure2'] = "Por favor digite a palavra que ser� recolocada";
$f_lang['ok_aj_mot'] = "Palavra censurada adicionada.";
$f_lang['verif_sup'] = "Deseja remover permanentemente as palavras ?";
$f_lang['merci_modif'] = "Modifica��es salvas.";

/* bannir des ip */
$f_lang['bannir_ip'] = "Banir IPs";
$f_lang['text_ip1'] = "Cada usu�rio de internet tem uma identifica��o de 4 sequ�ncias numerais (ex. 201.1.183.14). Esta identifica��o � dada automaticamente pelo provedor e muda, teoricamente, cada vez que ele/ela des/conectar a internet.";
$f_lang['text_ip2'] = "Se voc� quiser <b>prevenir um usu�rio de postar no Livro de visitas</b>, voc� pode copiar o endere�o de IP aqui. Voc� tamb�m pode banir um alcance de IPs usando o s�mbolo * (ex. 201.15.55.*, ou tamb�m 158.*.*.*).";
$f_lang['ajouter_ip'] = "Adicionar novo IP banido";
$f_lang['gestion_ip'] = "Gerenciar os IPs banidos";
$f_lang['sup_ip'] = "Remover os IPs  banidos selecionados";
$f_lang['ok_aj_ip'] = "O IP est� bandido";
$f_lang['verif_sup_ip'] = "Deseja realmente deletar os IPs selecionados ?";

/* smileys */
$f_lang['gestion_smileys'] = "Gerenciamento de smileys";
$f_lang['text_smileys'] = "<b>Smileys permitem o visitante demonstrar sentimentos</b> quando postam. Desta interface voc� pode facilmente adicionar ou remover smileys de forma a seus visitantes terem mais ou menos op��es de escolha :o)<br><br>Smileys desta p�gina s�o colocados na pasta \"images/smileys\" .";
$f_lang['ajouter_smiley'] = "Adicionar smiley";
$f_lang['image_smiley'] = "Imagem";
$f_lang['car_replace'] = "C�digo correspondente";
$f_lang['gestion_smileys'] = "Gerenciamento de smileys";
$f_lang['sup_smileys'] = "Deletar os smileys selecionados ";
$f_lang['erreur_image'] = "Escolha um smiley";
$f_lang['erreur_car'] = "Escolha o c�digo correspondente para o smiley selecionado.";
$f_lang['ok_aj_smiley'] = "O smiley foi adicionado.";
$f_lang['no_smiley'] = "O smiley deve estar em formato GIF ou JPEG";
$f_lang['copy_impossible'] = "ERRO\\nImposs�vel copiar smiley selecionado para a pasta \\\"images/smileys\\\" .";
$f_lang['car_replace_exist'] = "ERRO\\nO c�digo correspondente j� est� no banco de dados.";
$f_lang['modif_smileys'] = "Atualizar todos smileys";
$f_lang['verif_sup_smileys'] = "Deseja realmente delatar os smileys selecionados ?";
$f_lang['merci_modif_smileys'] = "Smileys modificados.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Adicionar um administrador do livro de visitas";
	$f_lang['add_admin_2'] = "Adicionar um administrador";
	$f_lang['ajouter_admin'] = "Adicionar";
	$f_lang['name_ajouter_admin'] = "adicionar";
}
else{
	$f_lang['add_admin_texte'] = "Modificar um administrador do livro de visitas";
	$f_lang['add_admin_2'] = "Modificar um administrador";
	$f_lang['ajouter_admin'] = "Salvar";
	$f_lang['name_ajouter_admin'] = "modificar";
}

$f_lang['identif_connexion'] = "ID da conex�o";
$f_lang['passe_admin'] = "Senha";
$f_lang['email_admin'] = "E-mail (importante se o administrador receber� um e-mail quando houver postagens)";
$f_lang['admin_receive_email'] = "Deseja que o administrador receba um e-mail quando houver postaens ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;est� habilitado a editar op��es do script ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;modificar skins ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gerenciar mensagens ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gerenciar palavras censuradas ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gerenciar smileys ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gerenciar outros administradores ?";
$f_lang['erreur_name'] = "D� um ID de conex�o";
$f_lang['erreur_passe'] = "D� uma senha";
$f_lang['erreur_email'] = "D� um E-mail";
$f_lang['ok_aj_admin'] = "A conta foi criada";
$f_lang['ok_modif_admin'] = "A conta foi atualizada";
$f_lang['erreur_aj_admin'] = "ERRO\\nLogin j� existe";
$f_lang['revenir'] = "Voltar para a p�gina anterior";

/* gestion des admins */
$f_lang['gest_admin'] = "Gerenciando administradores";
$f_lang['sup_admin'] = "remover";
$f_lang['login_admin'] = "Login";
$f_lang['email_admin'] = "E-mail";
$f_lang['modif_admin'] = "modificar";
$f_lang['value_sup_admin'] = "Remover todos administradores selecionado";
$f_lang['verif_sup_admin'] = "Deseja realmente remover administradores selecionados ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "P�GINA N�O DISPON�VEL";
$f_lang['erreur_auth'] = "Falha de autentica��o";
$f_lang['erreur_droits'] = "Voc� n�o tem os direitos necess�rios para acessar esta p�gina.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "M�dia de notas dadas pelos visitantes ao site :";
$f_lang['title_guestbook'] = "Meu Livro de visitas";
$f_lang['note_super'] = " : fant�stico !";
$f_lang['note_moyen'] = " : regular";
$f_lang['note_rate'] = " : uma grande falha";
$f_lang['nom_pseudo_visiteur'] = "Nome ou apelido :";
$f_lang['email_visiteur'] = "E-mail :";
$f_lang['site_web_visiteur'] = "URL de seu site :";
$f_lang['ville_pays_visiteur'] = "Cidade / Pa�s :";
$f_lang['note_visiteur'] = "Nota :";
$f_lang['message_visiteur'] = "Sua mensagem :";
$f_lang['ajouter_message_visiteur'] = "Adicionar mensagem";
$f_lang['erreur_add_nom'] = "Por favor diga seu nome";
$f_lang['erreur_add_message'] = "Por favor digite sua mensagem";
$f_lang['erreur_mail'] = "Seu e-mail est� incorreto";
$f_lang['messages'] = "Mensagens";
$f_lang['messages_a'] = "para";
$f_lang['page'] = "P�gina";
$f_lang['nbre_messages'] = "N�mero de mensagens";
$f_lang['message_le'] = "em";
$f_lang['message_note'] = "Nota";
$f_lang['send_mail_to'] = "Enviar e-mail para";
$f_lang['go_home'] = "Visitar site";
$f_lang['precedente'] = "&lt;&lt; anterior";
$f_lang['suivante'] = "Pr�xima &gt;&gt;";
$f_lang['no_message'] = "Sem mensagens para mostrar.";
$f_lang['no_ip'] = "ATEN��O\\nSeu IP est� banido, voc� n�o est� autorizado a postar mensagens.";
$f_lang['ok_post'] = "Obrigado! Sua mensagem foi postada.";
$f_lang['time_erreur'] = "ATEN��O\\nSua mensagem n�o pode ser postada, voc� postou muito recentemente.";
$f_lang['text_select_search'] = "Mostrar apenas mensagens contendo a(s) seguinte(s) palavra(s)";
$f_lang['text_ok_search'] = "OK";

/* mail envoy� */
$f_lang['mail_object'] = "[info] - Nova mensagem no Livro de visitas - ";
$f_lang['mail_message'] = "Oi,\n\nN�s informamos sobre uma nova mensagem no seu Livro se visitas ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Gerenciando mensagens";
$f_lang['selectionner_pages'] = "Selecionar";
$f_lang['messages_gest'] = "mensagem";
$f_lang['page_gest'] = "p�gina";
$f_lang['aller_en_page'] = "Ir � p�gina";
$f_lang['supprimer_gest'] = "deletar";
$f_lang['auteur_gest'] = "autor";
$f_lang['modifier_gest'] = "editar";
$f_lang['supprimer_mess_selected'] = "Deletar as mensagens selecionadas";
$f_lang['verif_sup_mess'] = "Deseja realmente deletar as mensagens selecionadas ?";

/* modifier un message */
$f_lang['modif_mess'] = "Editar a mensagem";
$f_lang['message_modif'] = "Mensagem";
$f_lang['nom_modif'] = "Nome";
$f_lang['email_modif'] = "E-mail";
$f_lang['site_web_modif'] = "Website";
$f_lang['note_modif'] = "Nota dada ao site";
$f_lang['ville_pays_modif'] = "Cidade / Pa�s";
$f_lang['date_modif'] = "Data que foi postado";
$f_lang['ip_modif'] = "IP";
$f_lang['ok_modif_mess'] = "A mensagem foi alterada";

/* titre des pages */
$f_lang['title identification'] = "identifica��o";
$f_lang['title administration'] = "administra��o";
$f_lang['title frame gauche'] = "frame esquerda";
$f_lang['title options'] = "op��es";
$f_lang['title skins'] = "skins";
$f_lang['title censure'] = "palavras a censurar";
$f_lang['title censure'] = "gerenciando IPs banidos";
$f_lang['title smileys'] = "gerenciando os smileys";
$f_lang['title add admin'] = "adicionar um administrador do livro de visitas";
$f_lang['title gest admin'] = "gerenciando administrador do livro de visitas";
$f_lang['title erreur'] = "erro";
$f_lang['title gestion mess'] = "gerenciando mensagens";
$f_lang['title modif mess'] = "editando uma mensagem";
$f_lang['title setup'] = "instala��o";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Imposs�vel conectar ao banco de dados";
$f_lang['erreur_connexion'] = "Suas informa��es de ID est�o incorretas";
$f_lang['manque login'] = "Digite seu login";
$f_lang['manque pass'] = "Digite sua senha";
$f_lang['end session'] = "Sua sess�o terminou";

/* add version 3.11 */
$f_lang['addSignature'] = "Escrever uma mensagem";
$f_lang['seeMessages'] = "Ler mensagem postada";
$f_lang['addMessageBlocAdd'] = "Adicionar mensagem ao livro de visitas";

/* add version 3.2 */
$f_lang['version'] = "Vers�o";
$f_lang['new_version_dispo'] = "Uma vers�o atualizada do livro de visitas est� dispon�vel";
$f_lang['version_courrante'] = "vers�o atual do script";
$f_lang['info_version'] = "Informa��o sobre a vers�o que voc� possui";
$f_lang['version_txt_ok'] = "A vers�o que voc� possui � ".$alex_livre_version.",<br>esta � a vers�o mais recente, n�o necessita atualiza��o.";
$f_lang['version_txt_update'] = "A vers�o que voc� possui � ".$alex_livre_version.", <b>uma nova vers�o est� dispon�vel</b>";
$f_lang['version_down'] = "Baixe a vers�o atualizada";
$f_lang['help_update'] = "Ajuda para atualizar";
$f_lang['spam'] = "O AGENTE USU�RIO do seu browser n�o pode ser determinado, parece que um robot tentou enviar automaticamente uma mensagem. Se n�o for verdade, tente novamente com outro browser.";
$f_lang['avis_spammeurs'] = "Nota aos engra�adinhos";
$f_lang['txt_spammeurs'] = "<b>Este livro de visitas � protegido contra SPAM</b>, Endere�os de e-mail e URLs s�o codificadas no c�digo fonte das p�ginas geradas, conseq�entemente � absolutamente in�til postar links de propagandas, eles n�o ser�o vistos por sites de buscas (al�m disso sua mensagem ser� suprimida de qualquer maneira...)";
$f_lang['fermer'] = "Fechar a janela";
$f_lang['valider_messages'] = "Voc� deseja rever as mensagens antes delas se tornarem publicamente vis�veis no livro de visitas ?";
$f_lang['valide'] = "Validado ?";
$f_lang['mess_valide'] = "Esta mensagem foi validada";
$f_lang['mess_invalide'] = "Esta mensagem est� esperando por valida��o";
$f_lang['info_mess_valide'] = "Mensagem validada ?";
$f_lang['ok_post_valid'] = "Obrigado! sua mensagem foi salva, ela ser� postada quando um administrador aceita-la.";
$f_lang['see_skin'] = "Prever o livro de visitas com este skin";
$f_lang['maxi_car'] = "N�mero m�ximo de s�mbolos/letras permitidas em uma mensagem (0 = sem limites)";
$f_lang['il_reste'] = "Voc� pode digitar at�";
$f_lang['caracteres'] = "simbolos/letras a mais na sua mensagem";
$f_lang['sup_copyright'] = "Deletar cr�ditos";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Nome da tabela de c�digos de seguran�a";
$f_lang['add_code_securite'] = "Voc� quer requerer que os usu�rios confirmem um c�digo de seguran�a antes de postar uma mensagem ?";
$f_lang['t_chem_dossier_fonts'] = "URL completa para o diret�rio de fontes";
$f_lang['t_color_txt_code'] = "Cor hexadecimal do texto de c�digo";
$f_lang['t_color_background_code'] = "Cor hexadecimal do fundo do c�digo";
$f_lang['veuillez_taper_code'] = "Por favor digite o c�digo de seguran�a na caixa da direita";
$f_lang['a_quoi_ca_sert'] = "Por que ?";
$f_lang['why_code'] = "Por que um \"c�digo de seguran�a\" ?";
$f_lang['txt_why_code'] = "Este procedimento nos permite verificar se a mensagem est� sendo postada por uma pessoa real e n�o por um software autom�tico.<br><br><b>Comerciais e os referidos spams s�o proibidos neste livro de visitas !</b>";
$f_lang['erreur_code_securite'] = "Por favor digite o c�digo de seguran�a";
$f_lang['erreur_saisie_code_securite'] = "O c�digo de seguran�a que voc� digitou n�o � v�lido, por favor renove a opera��o";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Resposta autom�tica";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gerenciar as perguntas autom�ticas ?";
$f_lang['text_reponse_auto'] = "<b>Nesta p�gina voc� pode modificar o texto das respostas autom�ticas</b> que ser�o enviadas aos visitantes que postarem uma mensagem no seu Livro de visitas.  Esta mensagem ser� enviada se voc� ativar esta fun��o nas op��es do script.<br><br>Cala lingua pode ter uma resposta autom�tica personalizada e o c�digo [PSEUDO] ser� substituido pelo nome ou apelido do visitante que postou a mensagem.";
$f_lang['name_table_rep_auto'] = "Nome para a tabela MySQL que conter� as respostas autom�ticas.";
$f_lang['gestion_reponses'] = "Gerenciando mensagens";
$f_lang['msg_remerciement'] = "Obrigado por sua mensagem";
$f_lang['txt_remerciement'] = "Ol� [PSEUDO],\n\nObrigado por deixar sua mensagem em nosso Livro de visitas!";
$f_lang['ok_save_msg_rem'] = "Obrigado, o sistema agradece e sua mensagem foi salva.";
$f_lang['envoyer_remerciement'] = "Voc� quer que seja enviado um e-mail de agradecimento ao seu endere�o de e-mail ?";
$f_lang['remerciement'] = "Obrigado";
$f_lang['titre_guestbook'] = "Livro de visitas";
$f_lang['text_titre_guestbook'] = "<b>Voc� pode modificar o t�tulo do livro de visitas</b> e escrever um diferente para cada l�ngua dispon�vel.";
$f_lang['titre'] = "T�tulo";
$f_lang['parametrage'] = "Op��es";
$f_lang['ok_save_titre'] = "O t�tulo foi salvo.";
$f_lang['ville_visiteur'] = "Cidade :";
$f_lang['pays_visiteur'] = "Pa�s :";
$f_lang['flag'] = "Bandeira";
$f_lang['ville_modif'] = "Cidade";
$f_lang['pays_modif'] = "Pa�s";
$f_lang['action'] = "A��o";
$f_lang['repondre'] = "Respondendo";
$f_lang['votre_reponse'] = "Sua resposta";
$f_lang['ok_reponse_mess'] = "Sua resposta foi salva";
$f_lang['defaut_titre_rep'] = "Resposta do webmaster";
$f_lang['annuler'] = "Cancelar";
$f_lang['num_appari'] = "Mostrando n�mero";
$f_lang['nb_max_smileys'] = "M�ximo de smileys mostrados";
$f_lang['plus_smileys'] = "Mais smileys";
$f_lang['liste_all_smilies'] = "Lista de todos smileys";
$f_lang['boite_java'] = "Caixa de javascript";
$f_lang['text_boite_java'] = "<b>Esta fun��o permite voc� a mostrar as �ltimas mensagens postadas no seu livro de visitas</b> em outra p�gina se voc� quiser.";
$f_lang['parametrage_modele'] = "Op��es do template";
$f_lang['ok_save_boite'] = "Suas op��es foram salvas";
$f_lang['format_date_boite'] = "Formato da data (id�ntica � fun��o PHP <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a>)";
$f_lang['nbre_maxi_pseudo_boite'] = "N�mero m�ximo de s�mbolos mostrados em nome ou apelido";
$f_lang['nbre_maxi_message_boite'] = "N�mero m�ximo de s�mbolos mostrados em mensagem";
$f_lang['modele_affichage_donnees'] = "Template de postagem de dados";
$f_lang['url_dossier_livre_boite'] = "URL completa da pasta do livro de visitas";
$f_lang['url_livre_boite'] = "URL completa da index do livro de visitas";
$f_lang['generation_code'] = "Cria��o do c�digo JavaScript";
$f_lang['nom_msg_afficher'] = "N�mero de mensagens a exibir";
$f_lang['generer_code'] = "Crie o c�digo de chamada em JavaScript";
$f_lang['code_a_copier'] = "C�digo HTML a ser copiado na(s) p�gina(s) {se voc� quiser)";
$f_lang['erreur_boite_java'] = "Ponha um n�mero v�lido de mensagens a exibir";
$f_lang['erreur_par_boite'] = "Erro de op��es, n�o foi poss�vel isolar a chave [BOUCLE] ... [/BOUCLE] no seu template.";
$f_lang['saut_ligne_msg_boite'] = "Manter quebras de linha das mensagens";
$f_lang['message_a'] = "em";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gerenciar banco de dados ?";
$f_lang['bdd'] = "Banco de dados";
$f_lang['optimisation'] = "Otimiza��o";
$f_lang['sauvegarde'] = "Salvando";
$f_lang['restauration'] = "Restaura��o";
$f_lang['optimisation_txt'] = "<b>Gravando e deletando, as tabelas do seu banco de dados empilhadas e n�o usadas, liberam espa�o.</b> Elas s�o m�s para a performance geral do seu banco de dados e do seu website, esta p�gina permite voc� resolver este problema optimizando as tabelas.";
$f_lang['liste_tables'] = "Lista de tabelas do seu banco de dados";
$f_lang['lancer_optimisation'] = "Lan�ando otimiza��o";
$f_lang['tables'] = "TABELAS";
$f_lang['pertes'] = "PERDAS";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "As tabelas foram otimizadas";
$f_lang['txt_sauvegarde'] = "<b>Se voc� quiser manter as mensagens postadas por um longo tempo, um backup peri�dico � altamente recomendado.</b> Uma falha no disco r�gido pode acabar destruindo todos seus dados.  Um backup pode tamb�m ser usual se voc� quiser transferir suas mensagens para outro servidor.";
$f_lang['lancer_sauvegarde'] = "Iniciar backup";
$f_lang['lancer_restauration'] = "Iniciar restaura��o";
$f_lang['txt_restauration'] = "<b>Se voc� realizou um backup, voc� pode restaurar completamete o banco de dados do seu livro de visitas</b> Apenas selecione o arquivo correspondente no seu disco r�gido.<br><br><b><u>ATEN��O</u></b>, se o arquivo for muito grande (muitos megabytes), o processo de restaura��o pode causar problemas para as op��es do host do seu website (set_time_limit() e  tamanho m�ximo permitido nas op��es de upload).";
$f_lang['select_file'] = "Selecione o arquivo de backup no seu disco r�gido (.ZIP ou .SQL)";
$f_lang['confirm_restauration'] = "Voc� confirma que quer iniciar o processo de restaura��o ?";
$f_lang['select_file_restau'] = "Selecione o arquivo no seu disco r�gido";
$f_lang['erreur_ext_restau'] = "A extens�o do arquivo selecionado n�o � .ZIP ou .SQL, portanto n�o � poss�vel realizar a restaura��o.";
$f_lang['conseil_zip'] = "(Descompacte o arquivo ZIP no seu disco r�gido para obter o arquivo SQL)";
$f_lang['erreur_ext_zip'] = "A extens�o PHP_ZIP n�o est� dispon�vel no seu servidor, a restaura��o via arquivo ZIP n�o � poss�vel. Por favor selecione um arquivo .SQL em seu disco r�gido".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Erro lendo arquivo ZIP, n�o foi poss�vel realizar a restaura��o. Voc� deve tentar o arquivo .SQL ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "O arquivo SQL n�o parece ser do @lex Guestbook. N�o foi poss�vel realizar a restaura��o.";
$f_lang['restauration_terminee'] = "A restaura��o foi conclu�da com sucesso !";

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