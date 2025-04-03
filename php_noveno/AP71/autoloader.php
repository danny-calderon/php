<?php 

function autocargador($clases){
    require_once 'class/'.$clases.'.php';
}

spl_autoload_register('autocargador');

?>