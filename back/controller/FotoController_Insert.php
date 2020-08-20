<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../facade/FotoFacade.php');



        $idfoto = strip_tags($_POST['idfoto']);
        $descripcion = strip_tags($_POST['descripcion']);
        $rutaAlmacenamiento = strip_tags($_POST['rutaAlmacenamiento']);
        $fotoFormato = strip_tags($_POST['fotoFormato']);
        $nombreFoto = strip_tags($_POST['nombreFoto']);
        $opcionFoto = strip_tags($_POST['opcionFoto']);
        FotoFacade::insert($idfoto, $descripcion, $rutaAlmacenamiento, $fotoFormato, $nombreFoto, $opcionFoto);
echo true;
   