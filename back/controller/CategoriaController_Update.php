<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No es una cola ni es una pila, es tu proyecto que no compila  \\
include_once realpath('../facade/CategoriaFacade.php');




   
        $idcategoria = strip_tags($_POST['idcategoria']);
        $descripcionCategoria = strip_tags($_POST['descripcionCategoria']);
        CategoriaFacade::update($idcategoria, $descripcionCategoria);
echo true;
  

 


//That`s all folks!