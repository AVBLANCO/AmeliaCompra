<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\
include_once realpath('../facade/UsuarioFacade.php');


class UsuarioController {

    public static function insert(){
        $idUsuario = strip_tags($_POST['idUsuario']);
        $nombreUsuario = strip_tags($_POST['nombreUsuario']);
        $direccionUsuario = strip_tags($_POST['direccionUsuario']);
        $correoUsuario = strip_tags($_POST['correoUsuario']);
        $telefonoUsuario = strip_tags($_POST['telefonoUsuario']);
        $Tipousuario_idtipoUsuario = strip_tags($_POST['tipoUsuario_idtipoUsuario']);
        $tipousuario= new Tipousuario();
        $tipousuario->setIdtipoUsuario($Tipousuario_idtipoUsuario);
        $claveUsuario = strip_tags($_POST['claveUsuario']);
        UsuarioFacade::insert($idUsuario, $nombreUsuario, $direccionUsuario, $correoUsuario, $telefonoUsuario, $tipousuario, $claveUsuario);
return true;
    }

    public static function listAll(){
        $list=UsuarioFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Usuario) {	
	       $rta.="{
	    \"idUsuario\":\"{$Usuario->getidUsuario()}\",
	    \"nombreUsuario\":\"{$Usuario->getnombreUsuario()}\",
	    \"direccionUsuario\":\"{$Usuario->getdireccionUsuario()}\",
	    \"correoUsuario\":\"{$Usuario->getcorreoUsuario()}\",
	    \"telefonoUsuario\":\"{$Usuario->gettelefonoUsuario()}\",
	    \"tipoUsuario_idtipoUsuario_idtipoUsuario\":\"{$Usuario->gettipoUsuario_idtipoUsuario()->getidtipoUsuario()}\",
	    \"claveUsuario\":\"{$Usuario->getclaveUsuario()}\"
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