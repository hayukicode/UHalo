<?php
/*

UHALO - Configurações das rotas no site em geral.

./ Use o "['/', 'HomeController@index']; " para mudar o padrão de inicialização das rotas.
./ O padrão de rotas vem no "home", altere e não esqueça de criar o controller para ele. 
*/ 


$route[] = ['/', 'HomeController@index'];

 
return $route;
?>