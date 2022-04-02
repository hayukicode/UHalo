<?php

namespace Core;
 

class Container
{

    public static function newController($controller)
    {
        $controller = "App\\Controllers\\" . $controller;
        return new $controller;
    }

    public static function page404()
    {
        if (file_exists(__DIR__ . "/../app/views/404.php")) {
            return require_once __DIR__ . "/../app/views/404.php";
        } else {
            echo "Erro 404, Página não encontrada.";
        }
    }
  
    
    /* Verificador de REQUEST */
    public static function setConfig($data, $meta)
    {
        return isset($data[$meta]) ? $data[$meta] : false;
    }
 
}
