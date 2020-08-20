<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La gente siempre me pregunta si conozco a Tyler Durden.  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Usuario.php');
require_once realpath('../dao/interfaz/IUsuarioDao.php');
require_once realpath('../dto/Tipousuario.php');

class UsuarioFacade {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Usuario a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idUsuario
   * @param nombreUsuario
   * @param direccionUsuario
   * @param correoUsuario
   * @param telefonoUsuario
   * @param tipoUsuario_idtipoUsuario
   * @param claveUsuario
   */
  public static function insert( $idUsuario,  $nombreUsuario,  $direccionUsuario,  $correoUsuario,  $telefonoUsuario,  $tipoUsuario_idtipoUsuario,  $claveUsuario){
      $usuario = new Usuario();
      $usuario->setIdUsuario($idUsuario); 
      $usuario->setNombreUsuario($nombreUsuario); 
      $usuario->setDireccionUsuario($direccionUsuario); 
      $usuario->setCorreoUsuario($correoUsuario); 
      $usuario->setTelefonoUsuario($telefonoUsuario); 
      $usuario->setTipoUsuario_idtipoUsuario($tipoUsuario_idtipoUsuario); 
      $usuario->setClaveUsuario($claveUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $rtn = $usuarioDao->insert($usuario);
     $usuarioDao->close();
     return $rtn;
  }
  
  
  public static function registro($nombreUsuario,  $direccionUsuario,  $correoUsuario, $telefonoUsuario, $claveUsuario){
      $usuario = new Usuario();
//      $usuario->setIdUsuario($idUsuario); 
      $usuario->setNombreUsuario($nombreUsuario); 
      $usuario->setDireccionUsuario($direccionUsuario); 
      $usuario->setCorreoUsuario($correoUsuario); 
      $usuario->setTelefonoUsuario($telefonoUsuario); 
//      $usuario->setTipoUsuario_idtipoUsuario( $tipoUsuario_idtipoUsuario_idtipoUsuario); 
      $usuario->setClaveUsuario($claveUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $rtn = $usuarioDao->registro($usuario);
     $usuarioDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Usuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idUsuario
   * @return El objeto en base de datos o Null
   */
  public static function select($idUsuario){
      $usuario = new Usuario();
      $usuario->setIdUsuario($idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->select($usuario);
     $usuarioDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Usuario  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idUsuario
   * @param nombreUsuario
   * @param direccionUsuario
   * @param correoUsuario
   * @param telefonoUsuario
   * @param tipoUsuario_idtipoUsuario
   * @param claveUsuario
   */
  public static function update($idUsuario, $nombreUsuario, $direccionUsuario, $correoUsuario, $telefonoUsuario, $tipoUsuario_idtipoUsuario, $claveUsuario){
      $usuario = self::select($idUsuario);
      $usuario->setNombreUsuario($nombreUsuario); 
      $usuario->setDireccionUsuario($direccionUsuario); 
      $usuario->setCorreoUsuario($correoUsuario); 
      $usuario->setTelefonoUsuario($telefonoUsuario); 
      $usuario->setTipoUsuario_idtipoUsuario($tipoUsuario_idtipoUsuario); 
      $usuario->setClaveUsuario($claveUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $usuarioDao->update($usuario);
     $usuarioDao->close();
  }

  /**
   * Elimina un objeto Usuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idUsuario
   */
  public static function delete($idUsuario){
      $usuario = new Usuario();
      $usuario->setIdUsuario($idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $usuarioDao->delete($usuario);
     $usuarioDao->close();
  }

  /**
   * Lista todos los objetos Usuario de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Usuario en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->listAll();
     $usuarioDao->close();
     return $result;
  }
  public static function listAllById($id_tem){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->listAllById($id_tem);
     $usuarioDao->close();
     return $result;
  }


}
//That`s all folks!