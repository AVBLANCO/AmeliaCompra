<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../facade/FotoFacade.php');




        $list=FotoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Foto) {	
	       $rta.="{
	    \"idfoto\":\"{$Foto->getidfoto()}\",
	    \"descripcion\":\"{$Foto->getdescripcion()}\",
	    \"rutaAlmacenamiento\":\"{$Foto->getrutaAlmacenamiento()}\",
	    \"fotoFormato\":\"{$Foto->getfotoFormato()}\",
	    \"nombreFoto\":\"{$Foto->getnombreFoto()}\",
	    \"opcionFoto\":\"{$Foto->getopcionFoto()}\"
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
   