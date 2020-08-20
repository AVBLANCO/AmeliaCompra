<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cuantas frases como esta crees que puedo escribir?  \\
include_once realpath('../facade/FacturaFacade.php');


        $idFactura = strip_tags($_POST['idFactura']);
        $totalFactura = strip_tags($_POST['totalFactura']);
        $fechaFactura = strip_tags($_POST['fechaFactura']);
        $Usuario_idUsuario = strip_tags($_POST['Usuario_idUsuario']);
        $usuario= new Usuario();
        $usuario->setIdUsuario($Usuario_idUsuario);
        FacturaFacade::update($idFactura, $totalFactura, $fechaFactura, $usuario);
echo true;
    
//That`s all folks!