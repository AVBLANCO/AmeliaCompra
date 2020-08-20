<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La primera regla de Anarchy es no hablar de Anarchy  \\


class Tipousuario {

  private $idtipoUsuario;
  private $descripcioTipoUsuario;

    /**
     * Constructor de Tipousuario
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idtipoUsuario
     * @return idtipoUsuario
     */
  public function getIdtipoUsuario(){
      return $this->idtipoUsuario;
  }

    /**
     * Modifica el valor correspondiente a idtipoUsuario
     * @param idtipoUsuario
     */
  public function setIdtipoUsuario($idtipoUsuario){
      $this->idtipoUsuario = $idtipoUsuario;
  }
    /**
     * Devuelve el valor correspondiente a descripcioTipoUsuario
     * @return descripcioTipoUsuario
     */
  public function getDescripcioTipoUsuario(){
      return $this->descripcioTipoUsuario;
  }

    /**
     * Modifica el valor correspondiente a descripcioTipoUsuario
     * @param descripcioTipoUsuario
     */
  public function setDescripcioTipoUsuario($descripcioTipoUsuario){
      $this->descripcioTipoUsuario = $descripcioTipoUsuario;
  }


}
//That`s all folks!