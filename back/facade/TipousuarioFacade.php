<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si he visto más lejos es porque estoy sentado sobre los hombros de gigantes.  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Tipousuario.php');
require_once realpath('../dao/interfaz/ITipousuarioDao.php');

class TipousuarioFacade {

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
   * Crea un objeto Tipousuario a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idtipoUsuario
   * @param descripcioTipoUsuario
   */
  public static function insert( $idtipoUsuario,  $descripcioTipoUsuario){
      $tipousuario = new Tipousuario();
      $tipousuario->setIdtipoUsuario($idtipoUsuario); 
      $tipousuario->setDescripcioTipoUsuario($descripcioTipoUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipousuarioDao =$FactoryDao->gettipousuarioDao(self::getDataBaseDefault());
     $rtn = $tipousuarioDao->insert($tipousuario);
     $tipousuarioDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Tipousuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idtipoUsuario
   * @return El objeto en base de datos o Null
   */
  public static function select($idtipoUsuario){
      $tipousuario = new Tipousuario();
      $tipousuario->setIdtipoUsuario($idtipoUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipousuarioDao =$FactoryDao->gettipousuarioDao(self::getDataBaseDefault());
     $result = $tipousuarioDao->select($tipousuario);
     $tipousuarioDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Tipousuario  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idtipoUsuario
   * @param descripcioTipoUsuario
   */
  public static function update($idtipoUsuario, $descripcioTipoUsuario){
      $tipousuario = self::select($idtipoUsuario);
      $tipousuario->setDescripcioTipoUsuario($descripcioTipoUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipousuarioDao =$FactoryDao->gettipousuarioDao(self::getDataBaseDefault());
     $tipousuarioDao->update($tipousuario);
     $tipousuarioDao->close();
  }

  /**
   * Elimina un objeto Tipousuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idtipoUsuario
   */
  public static function delete($idtipoUsuario){
      $tipousuario = new Tipousuario();
      $tipousuario->setIdtipoUsuario($idtipoUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipousuarioDao =$FactoryDao->gettipousuarioDao(self::getDataBaseDefault());
     $tipousuarioDao->delete($tipousuario);
     $tipousuarioDao->close();
  }

  /**
   * Lista todos los objetos Tipousuario de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Tipousuario en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipousuarioDao =$FactoryDao->gettipousuarioDao(self::getDataBaseDefault());
     $result = $tipousuarioDao->listAll();
     $tipousuarioDao->close();
     return $result;
  }
  public static function listAllById($id_tem){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipousuarioDao =$FactoryDao->gettipousuarioDao(self::getDataBaseDefault());
     $result = $tipousuarioDao->listAllById($id_tem);
     $tipousuarioDao->close();
     return $result;
  }


}
//That`s all folks!