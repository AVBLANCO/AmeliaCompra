<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\
include_once realpath('../facade/UsuarioFacade.php');


   
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
        echo "[{$msg},{$rta}]";
 
//That`s all folks!