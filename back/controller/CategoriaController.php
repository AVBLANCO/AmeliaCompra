<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No es una cola ni es una pila, es tu proyecto que no compila  \\
include_once realpath('../facade/CategoriaFacade.php');


class CategoriaController {

    public static function insert(){
        $idcategoria = strip_tags($_POST['idcategoria']);
        $descripcionCategoria = strip_tags($_POST['descripcionCategoria']);
        CategoriaFacade::insert($idcategoria, $descripcionCategoria);
return true;
    }

    public static function listAll(){
        $list=CategoriaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Categoria) {	
	       $rta.="{
	    \"idcategoria\":\"{$Categoria->getidcategoria()}\",
	    \"descripcionCategoria\":\"{$Categoria->getdescripcionCategoria()}\"
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