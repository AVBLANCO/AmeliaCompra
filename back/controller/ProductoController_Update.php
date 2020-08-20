<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../facade/ProductoFacade.php');

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
        ProductoFacade::update($idproducto, $nombreProducto, $cantidadProductoInventario, $precioUnitarioProducto, $descripcionProducto, $calidadTipo, $foto, $ubicacionProducto, $categoria);
echo true;
  