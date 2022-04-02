<?php

#Arquivos diretórios raízes

$pastaInterna = ""; 
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");  
(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') ? $barra = "" : $barra = "/";
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

define('TITLE_SITE', 'Komenci_A1');

#Diretórios Específicos
define('DIRIMG', DIRPAGE . "public/images/");
define('DIRCSS', DIRPAGE . "public/css/");
define('DIRJS', DIRPAGE . "public/js/");  
 

define("CONTROLLER_PATH", DIRREQ . "app/view/");