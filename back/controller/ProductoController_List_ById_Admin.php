<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../facade/ProductoFacade.php');

$id_tem=$_GET['empresa'];
//$id_tem="3";
        $list=ProductoFacade::listAllByIdAdmin($id_tem);
        $rta="";
        foreach ($list as $obj => $Producto) {	
	       $rta.="{
	    \"idproducto\":\"{$Producto->getidproducto()}\",	   
	    \"nombreProducto\":\"{$Producto->getnombreProducto()}\",
	    \"cantidadProductoInventario\":\"{$Producto->getcantidadProductoInventario()}\",
	    \"precioUnitarioProducto\":\"{$Producto->getprecioUnitarioProducto()}\",
	    \"descripcionProducto\":\"{$Producto->getdescripcionProducto()}\",
	    \"calidadTipo\":\"{$Producto->getcalidadTipo()}\",	    
	    \"ubicacionProducto\":\"{$Producto->getubicacionProducto()}\",
	    \"categoria_idcategoria_idcategoria\":\"{$Producto->getcategoria_idcategoria()->getidcategoria()}\"
	
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
    