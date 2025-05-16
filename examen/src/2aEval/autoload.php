<?php 
function autocargador($clases){
    require_once 'clases/'.$clases.'.php';
}

spl_autoload_register('autocargador');

?>