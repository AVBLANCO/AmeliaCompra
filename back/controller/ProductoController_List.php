<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../facade/ProductoFacade.php');


        $list=ProductoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Producto) {	
	       $rta.="{
	    \"idproducto\":\"{$Producto->getidproducto()}\",
	    \"nombreProducto\":\"{$Producto->getnombreProducto()}\",
	    \"cantidadProductoInventario\":\"{$Producto->getcantidadProductoInventario()}\",
	    \"descripcionProducto\":\"{$Producto->getdescripcionProducto()}\",
	    \"ubicacionProducto\":\"{$Producto->getubicacionProducto()}\"
	
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
    