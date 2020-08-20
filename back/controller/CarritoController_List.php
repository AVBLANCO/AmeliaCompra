<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    In Anarchy we trust  \\
include_once realpath('../facade/CarritoFacade.php');



        $list=CarritoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Carrito) {	
	       $rta.="{
	    \"producto_idproducto_idproducto\":\"{$Carrito->getproducto_idproducto()->getidproducto()}\",
	    \"precio\":\"{$Carrito->getprecio()}\",
	    \"cantidad\":\"{$Carrito->getcantidad()}\",
	    \"subTotal\":\"{$Carrito->getsubTotal()}\",
	    \"fechaProductoUsuario\":\"{$Carrito->getfechaProductoUsuario()}\",
	    \"idCarrito\":\"{$Carrito->getidCarrito()}\",
	    \"Factura_idFactura_idFactura\":\"{$Carrito->getFactura_idFactura()->getidFactura()}\"
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
