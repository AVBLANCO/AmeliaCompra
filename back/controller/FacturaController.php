<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cuantas frases como esta crees que puedo escribir?  \\
include_once realpath('../facade/FacturaFacade.php');


class FacturaController {

    public static function insert(){
        $idFactura = strip_tags($_POST['idFactura']);
        $totalFactura = strip_tags($_POST['totalFactura']);
        $fechaFactura = strip_tags($_POST['fechaFactura']);
        $Usuario_idUsuario = strip_tags($_POST['Usuario_idUsuario']);
        $usuario= new Usuario();
        $usuario->setIdUsuario($Usuario_idUsuario);
        FacturaFacade::insert($idFactura, $totalFactura, $fechaFactura, $usuario);
return true;
    }

    public static function listAll(){
        $list=FacturaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Factura) {	
	       $rta.="{
	    \"idFactura\":\"{$Factura->getidFactura()}\",
	    \"totalFactura\":\"{$Factura->gettotalFactura()}\",
	    \"fechaFactura\":\"{$Factura->getfechaFactura()}\",
	    \"Usuario_idUsuario_idUsuario\":\"{$Factura->getUsuario_idUsuario()->getidUsuario()}\"
	       },";
        }

        if($rta!=""){
	       $rta = substr($rta, 0, -1);
	       $msg="{\"msg\":\"exito\"}";
        }else{
	       $msg="{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
	       $rta="{\"result\":\"No se encontraron registros.\"}";	
        }
        return "[{$msg},{$rta}]";
    }

}
//That`s all folks!