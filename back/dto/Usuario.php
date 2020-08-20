<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Más delgado  \\


class Usuario {

  private $idUsuario;
  private $nombreUsuario;
  private $direccionUsuario;
  private $correoUsuario;
  private $telefonoUsuario;
  private $tipoUsuario_idtipoUsuario;
  private $claveUsuario;

    /**
     * Constructor de Usuario
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idUsuario
     * @return idUsuario
     */
  public function getIdUsuario(){
      return $this->idUsuario;
  }

    /**
     * Modifica el valor correspondiente a idUsuario
     * @param idUsuario
     */
  public function setIdUsuario($idUsuario){
      $this->idUsuario = $idUsuario;
  }
    /**
     * Devuelve el valor correspondiente a nombreUsuario
     * @return nombreUsuario
     */
  public function getNombreUsuario(){
      return $this->nombreUsuario;
  }

    /**
     * Modifica el valor correspondiente a nombreUsuario
     * @param nombreUsuario
     */
  public function setNombreUsuario($nombreUsuario){
      $this->nombreUsuario = $nombreUsuario;
  }
    /**
     * Devuelve el valor correspondiente a direccionUsuario
     * @return direccionUsuario
     */
  public function getDireccionUsuario(){
      return $this->direccionUsuario;
  }

    /**
     * Modifica el valor correspondiente a direccionUsuario
     * @param direccionUsuario
     */
  public function setDireccionUsuario($direccionUsuario){
      $this->direccionUsuario = $direccionUsuario;
  }
    /**
     * Devuelve el valor correspondiente a correoUsuario
     * @return correoUsuario
     */
  public function getCorreoUsuario(){
      return $this->correoUsuario;
  }

    /**
     * Modifica el valor correspondiente a correoUsuario
     * @param correoUsuario
     */
  public function setCorreoUsuario($correoUsuario){
      $this->correoUsuario = $correoUsuario;
  }
    /**
     * Devuelve el valor correspondiente a telefonoUsuario
     * @return telefonoUsuario
     */
  public function getTelefonoUsuario(){
      return $this->telefonoUsuario;
  }

    /**
     * Modifica el valor correspondiente a telefonoUsuario
     * @param telefonoUsuario
     */
  public function setTelefonoUsuario($telefonoUsuario){
      $this->telefonoUsuario = $telefonoUsuario;
  }
    /**
     * Devuelve el valor correspondiente a tipoUsuario_idtipoUsuario
     * @return tipoUsuario_idtipoUsuario
     */
  public function getTipoUsuario_idtipoUsuario(){
      return $this->tipoUsuario_idtipoUsuario;
  }

    /**
     * Modifica el valor correspondiente a tipoUsuario_idtipoUsuario
     * @param tipoUsuario_idtipoUsuario
     */
  public function setTipoUsuario_idtipoUsuario($tipoUsuario_idtipoUsuario){
      $this->tipoUsuario_idtipoUsuario = $tipoUsuario_idtipoUsuario;
  }
    /**
     * Devuelve el valor correspondiente a claveUsuario
     * @return claveUsuario
     */
  public function getClaveUsuario(){
      return $this->claveUsuario;
  }

    /**
     * Modifica el valor correspondiente a claveUsuario
     * @param claveUsuario
     */
  public function setClaveUsuario($claveUsuario){
      $this->claveUsuario = $claveUsuario;
  }


}
//That`s all folks!