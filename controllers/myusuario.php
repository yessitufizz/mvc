<?php
$usuario = new Usuario();
$titulo='bienvenidos a myusuario';
$contenido='contenido de la variable...';
$variables=array('titulo'=>$titulo,
'contenido'=>$contenido,
 'nombre'=>$usuario->setUsuario());

view('myusuario',$variables);
?>

