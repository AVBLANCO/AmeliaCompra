<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Vva 'l doro  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Factura.php');
require_once realpath('../dao/interfaz/IFacturaDao.php');
require_once realpath('../dto/Usuario.php');

class FacturaFacade {

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
   * Crea un objeto Factura a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFactura
   * @param totalFactura
   * @param fechaFactura
   * @param usuario_idUsuario
   */
  public static function insert( $idFactura,  $totalFactura,  $fechaFactura,  $usuario_idUsuario){
      $factura = new Factura();
      $factura->setIdFactura($idFactura); 
      $factura->setTotalFactura($totalFactura); 
      $factura->setFechaFactura($fechaFactura); 
      $factura->setUsuario_idUsuario($usuario_idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $facturaDao =$FactoryDao->getfacturaDao(self::getDataBaseDefault());
     $rtn = $facturaDao->insert($factura);
     $facturaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Factura de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFactura
   * @return El objeto en base de datos o Null
   */
  public static function select($idFactura){
      $factura = new Factura();
      $factura->setIdFactura($idFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $facturaDao =$FactoryDao->getfacturaDao(self::getDataBaseDefault());
     $result = $facturaDao->select($factura);
     $facturaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Factura  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFactura
   * @param totalFactura
   * @param fechaFactura
   * @param usuario_idUsuario
   */
  public static function update($idFactura, $totalFactura, $fechaFactura, $usuario_idUsuario){
      $factura = self::select($idFactura);
      $factura->setTotalFactura($totalFactura); 
      $factura->setFechaFactura($fechaFactura); 
      $factura->setUsuario_idUsuario($usuario_idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $facturaDao =$FactoryDao->getfacturaDao(self::getDataBaseDefault());
     $facturaDao->update($factura);
     $facturaDao->close();
  }

  /**
   * Elimina un objeto Factura de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFactura
   */
  public static function delete($idFactura){
      $factura = new Factura();
      $factura->setIdFactura($idFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $facturaDao =$FactoryDao->getfacturaDao(self::getDataBaseDefault());
     $facturaDao->delete($factura);
     $facturaDao->close();
  }

  /**
   * Lista todos los objetos Factura de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Factura en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $facturaDao =$FactoryDao->getfacturaDao(self::getDataBaseDefault());
     $result = $facturaDao->listAll();
     $facturaDao->close();
     return $result;
  }


}
//That`s all folks!