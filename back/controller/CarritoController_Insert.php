<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    In Anarchy we trust  \\
include_once realpath('../facade/CarritoFacade.php');


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
echo true;
    