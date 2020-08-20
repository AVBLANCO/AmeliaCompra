<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cuantas frases como esta crees que puedo escribir?  \\
include_once realpath('../facade/FacturaFacade.php');


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
       echo "[{$msg},{$rta}]";

//That`s all folks!