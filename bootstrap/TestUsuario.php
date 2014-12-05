<?php

require ('usuario.php');

$usuario = new usuario();

$usuario->createUsuario();
$usuario->readUsuarioG();
$usuario->readUsuarioS();
$usuario->updateUsuario();
$usuario->deleteUsuario();

?>