<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Caminante no hay camino, se hace camino al andar  \\


class Categoria {

  private $idcategoria;
  private $descripcionCategoria;

    /**
     * Constructor de Categoria
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idcategoria
     * @return idcategoria
     */
  public function getIdcategoria(){
      return $this->idcategoria;
  }

    /**
     * Modifica el valor correspondiente a idcategoria
     * @param idcategoria
     */
  public function setIdcategoria($idcategoria){
      $this->idcategoria = $idcategoria;
  }
    /**
     * Devuelve el valor correspondiente a descripcionCategoria
     * @return descripcionCategoria
     */
  public function getDescripcionCategoria(){
      return $this->descripcionCategoria;
  }

    /**
     * Modifica el valor correspondiente a descripcionCategoria
     * @param descripcionCategoria
     */
  public function setDescripcionCategoria($descripcionCategoria){
      $this->descripcionCategoria = $descripcionCategoria;
  }


}
//That`s all folks!