<?php

require ('usuario.php');

$usuario = new usuario();

$usuario->createUsuario("Juan","Jimenez","Hernandez",2);
$usuario->readUsuarioG();
$usuario->readUsuarioS();
$usuario->updateUsuario(2,"pepe","cortazar","simon","admin");
//$usuario->deleteUsuario();

?>