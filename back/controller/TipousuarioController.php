<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En un lugar de La Mancha, de cuyo nombre no quiero acordarme...  \\
include_once realpath('../facade/TipousuarioFacade.php');


class TipousuarioController {

    public static function insert(){
        $idtipoUsuario = strip_tags($_POST['idtipoUsuario']);
        $descripcioTipoUsuario = strip_tags($_POST['descripcioTipoUsuario']);
        TipousuarioFacade::insert($idtipoUsuario, $descripcioTipoUsuario);
return true;
    }

    public static function listAll(){
        $list=TipousuarioFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Tipousuario) {	
	       $rta.="{
	    \"idtipoUsuario\":\"{$Tipousuario->getidtipoUsuario()}\",
	    \"descripcioTipoUsuario\":\"{$Tipousuario->getdescripcioTipoUsuario()}\"
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