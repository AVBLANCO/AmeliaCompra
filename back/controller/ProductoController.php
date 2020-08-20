<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../facade/ProductoFacade.php');


class ProductoController {

    public static function insert(){
        $idproducto = strip_tags($_POST['idproducto']);
        $nombreProducto = strip_tags($_POST['nombreProducto']);
        $cantidadProductoInventario = strip_tags($_POST['cantidadProductoInventario']);
        $precioUnitarioProducto = strip_tags($_POST['precioUnitarioProducto']);
        $descripcionProducto = strip_tags($_POST['descripcionProducto']);
        $calidadTipo = strip_tags($_POST['calidadTipo']);
        $Foto_idfoto = strip_tags($_POST['foto_idfoto']);
        $foto= new Foto();
        $foto->setIdfoto($Foto_idfoto);
        $ubicacionProducto = strip_tags($_POST['ubicacionProducto']);
        $Categoria_idcategoria = strip_tags($_POST['categoria_idcategoria']);
        $categoria= new Categoria();
        $categoria->setIdcategoria($Categoria_idcategoria);
        ProductoFacade::insert($idproducto, $nombreProducto, $cantidadProductoInventario, $precioUnitarioProducto, $descripcionProducto, $calidadTipo, $foto, $ubicacionProducto, $categoria);
return true;
    }

    public static function listAll(){
        $list=ProductoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Producto) {	
	       $rta.="{
	    \"idproducto\":\"{$Producto->getidproducto()}\",
	    \"nombreProducto\":\"{$Producto->getnombreProducto()}\",
	    \"cantidadProductoInventario\":\"{$Producto->getcantidadProductoInventario()}\",
	    \"precioUnitarioProducto\":\"{$Producto->getprecioUnitarioProducto()}\",
	    \"descripcionProducto\":\"{$Producto->getdescripcionProducto()}\",
	    \"calidadTipo\":\"{$Producto->getcalidadTipo()}\",
	    \"foto_idfoto_idfoto\":\"{$Producto->getfoto_idfoto()->getidfoto()}\",
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
        return "[{$msg},{$rta}]";
    }

}
//That`s all folks!