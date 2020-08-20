<?php

/*
  -------Creado por-------
  \(x.x )/ Anarchy \( x.x)/
  ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\
include_once realpath('../facade/UsuarioFacade.php');



//$idUsuario = strip_tags($_POST['idUsuario']);
$nombreUsuario = "prueba";
$direccionUsuario = "avenida siempre viva";
$correoUsuario = "prueba@gmail.com";
$telefonoUsuario = "575";
$claveUsuario = "algo";

//        $tipoUsuario_idtipoUsuario_idtipoUsuario = "1";
////        $tipousuario= new Tipousuario();
//  //      $tipousuario->setIdtipoUsuario($Tipousuario_idtipoUsuario);
//        $claveUsuario = "algo";
//        
//        
//        $idUsuario = strip_tags($_POST['idUsuario']);
//        $nombreUsuario = strip_tags($_POST['nombreUsuario']);
//        $direccionUsuario = strip_tags($_POST['direccionUsuario']);
//        $correoUsuario = strip_tags($_POST['correoUsuario']);
//        $telefonoUsuario = strip_tags($_POST['telefonoUsuario']);
//        $Tipousuario_idtipoUsuario = strip_tags($_POST['tipoUsuario_idtipoUsuario']);
//        $tipousuario= new Tipousuario();
//        $tipousuario->setIdtipoUsuario($Tipousuario_idtipoUsuario);
//        $claveUsuario = strip_tags($_POST['claveUsuario']);
//        
//        
//        $nombreUsuario = strip_tags($_POST['nombreUsuario']);
//        $direccionUsuario = strip_tags($_POST['direccionUsuario']);
//        $correoUsuario = strip_tags($_POST['correoUsuario']);
//        $telefonoUsuario = strip_tags($_POST['telefonoUsuario']);
//        $claveUsuario = strip_tags($_POST['claveUsuario']);
UsuarioFacade::registro($nombreUsuario, $direccionUsuario, $correoUsuario, $telefonoUsuario, $claveUsuario);
echo true;





//That`s all folks!