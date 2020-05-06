<?php
require 'persona.php';
require 'usuario.php';

$usuario = new Usuario();
echo $usuario->generarConstraseña('123');