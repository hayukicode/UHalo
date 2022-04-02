<?php

//---------------------------------
// Configurações iniciais do PHP
//---------------------------------

setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
header('Content-type: application/json');
date_default_timezone_set('America/Sao_Paulo');
set_time_limit(0);
ini_set('memory_limit', '-1');
ini_set('max_input_vars', 10000);
ini_set('mysql.connect_timeout', 60 * 60 * 8);
ini_set('default_socket_timeout', 60 * 60 * 8);
ini_set('session_cookie_domain', substr($_SERVER['SERVER_NAME'], strpos($_SERVER['SERVER_NAME'], "."), 100));
ini_set('session.gc_maxlifetime', 60 * 60 * 8);
session_set_cookie_params(60 * 60 * 8);
session_start();
ini_set('display_errors', 1);
header("Content-Type: text/html; charset=utf-8"); 

//-------------------------------------
// Chamando funções uteis para o site
//-------------------------------------

require_once('app/config/config.php'); 

/**
 * Definir Constantes
 */

define("ROOT", dirname(__FILE__));

/**
 * Carregar o Sistema
 */
require ROOT . "/vendor/autoload.php"; 
require_once __DIR__ . "/core/bootstrap.php";
