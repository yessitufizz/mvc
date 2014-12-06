<?php
require'helpers.php';
require'template/header.php';
require'clases/usuario.php';
require'bd/bd.php';
if(empty ($_GET['url']))
    $_GET['url']='home';
controller($_GET['url']);
?>
