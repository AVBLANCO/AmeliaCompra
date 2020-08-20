<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../facade/FotoFacade.php');


class FotoController {

    public static function insert(){
        $idfoto = strip_tags($_POST['idfoto']);
        $descripcion = strip_tags($_POST['descripcion']);
        $rutaAlmacenamiento = strip_tags($_POST['rutaAlmacenamiento']);
        $fotoFormato = strip_tags($_POST['fotoFormato']);
        $nombreFoto = strip_tags($_POST['nombreFoto']);
        $opcionFoto = strip_tags($_POST['opcionFoto']);
        FotoFacade::insert($idfoto, $descripcion, $rutaAlmacenamiento, $fotoFormato, $nombreFoto, $opcionFoto);
return true;
    }

    public static function listAll(){
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
        return "[{$msg},{$rta}]";
    }

}
//That`s all folks!