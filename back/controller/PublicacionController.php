<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...con el mayor de los disgustos, el benévolo señor Arciniegas.  \\
include_once realpath('../facade/PublicacionFacade.php');


class PublicacionController {

    public static function insert(){
        $Usuario_idUsuario = strip_tags($_POST['Usuario_idUsuario']);
        $usuario= new Usuario();
        $usuario->setIdUsuario($Usuario_idUsuario);
        $Producto_idproducto = strip_tags($_POST['producto_idproducto']);
        $producto= new Producto();
        $producto->setIdproducto($Producto_idproducto);
        $fechaPublicacion = strip_tags($_POST['fechaPublicacion']);
        $estado = strip_tags($_POST['estado']);
        PublicacionFacade::insert($usuario, $producto, $fechaPublicacion, $estado);
return true;
    }

    public static function listAll(){
        $list=PublicacionFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Publicacion) {	
	       $rta.="{
	    \"Usuario_idUsuario_idUsuario\":\"{$Publicacion->getUsuario_idUsuario()->getidUsuario()}\",
	    \"producto_idproducto_idproducto\":\"{$Publicacion->getproducto_idproducto()->getidproducto()}\",
	    \"fechaPublicacion\":\"{$Publicacion->getfechaPublicacion()}\",
	    \"estado\":\"{$Publicacion->getestado()}\"
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