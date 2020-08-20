<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...con el mayor de los disgustos, el benévolo señor Arciniegas.  \\
include_once realpath('../facade/PublicacionFacade.php');


        $Usuario_idUsuario = strip_tags($_POST['Usuario_idUsuario']);
        $usuario= new Usuario();
        $usuario->setIdUsuario($Usuario_idUsuario);
        $Producto_idproducto = strip_tags($_POST['producto_idproducto']);
        $producto= new Producto();
        $producto->setIdproducto($Producto_idproducto);
        $fechaPublicacion = strip_tags($_POST['fechaPublicacion']);
        $estado = strip_tags($_POST['estado']);
        PublicacionFacade::insert($usuario, $producto, $fechaPublicacion, $estado);
echo true;
  