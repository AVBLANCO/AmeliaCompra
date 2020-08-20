<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    In Anarchy we trust  \\
include_once realpath('../facade/CarritoFacade.php');


class CarritoController {

    public static function insert(){
        $Producto_idproducto = strip_tags($_POST['producto_idproducto']);
        $producto= new Producto();
        $producto->setIdproducto($Producto_idproducto);
        $precio = strip_tags($_POST['precio']);
        $cantidad = strip_tags($_POST['cantidad']);
        $subTotal = strip_tags($_POST['subTotal']);
        $fechaProductoUsuario = strip_tags($_POST['fechaProductoUsuario']);
        $idCarrito = strip_tags($_POST['idCarrito']);
        $Factura_idFactura = strip_tags($_POST['Factura_idFactura']);
        $factura= new Factura();
        $factura->setIdFactura($Factura_idFactura);
        CarritoFacade::insert($producto, $precio, $cantidad, $subTotal, $fechaProductoUsuario, $idCarrito, $factura);
return true;
    }

    public static function listAll(){
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
        return "[{$msg},{$rta}]";
    }

}
//That`s all folks!