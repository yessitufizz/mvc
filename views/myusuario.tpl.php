<?php
$usuario02=new  Usuario();

?>

<html>
<heead></heead>
<boody>
    <h1><?=$titulo?></h1>
    <p><?=$contenido ?></p>
    <p><?=$nombre ?></p>
    <p><?php
    $usuario02->setUsuario();
    $usuario02->getUsuario();
        $usuario02->readUsuarioG();

   ?></p>
</boody>
</html>