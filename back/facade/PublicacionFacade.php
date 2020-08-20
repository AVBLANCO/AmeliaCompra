<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡¡Bienvenido al mundo del mañana!!  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Publicacion.php');
require_once realpath('../dao/interfaz/IPublicacionDao.php');
require_once realpath('../dto/Usuario.php');
require_once realpath('../dto/Producto.php');

class PublicacionFacade {

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
   * Crea un objeto Publicacion a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param usuario_idUsuario
   * @param producto_idproducto
   * @param fechaPublicacion
   * @param estado
   */
  public static function insert( $usuario_idUsuario,  $producto_idproducto,  $fechaPublicacion,  $estado){
      $publicacion = new Publicacion();
      $publicacion->setUsuario_idUsuario($usuario_idUsuario); 
      $publicacion->setProducto_idproducto($producto_idproducto); 
      $publicacion->setFechaPublicacion($fechaPublicacion); 
      $publicacion->setEstado($estado); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $publicacionDao =$FactoryDao->getpublicacionDao(self::getDataBaseDefault());
     $rtn = $publicacionDao->insert($publicacion);
     $publicacionDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Publicacion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param usuario_idUsuario
   * @param producto_idproducto
   * @return El objeto en base de datos o Null
   */
  public static function select($usuario_idUsuario, $producto_idproducto){
      $publicacion = new Publicacion();
      $publicacion->setUsuario_idUsuario($usuario_idUsuario); 
      $publicacion->setProducto_idproducto($producto_idproducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $publicacionDao =$FactoryDao->getpublicacionDao(self::getDataBaseDefault());
     $result = $publicacionDao->select($publicacion);
     $publicacionDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Publicacion  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param usuario_idUsuario
   * @param producto_idproducto
   * @param fechaPublicacion
   * @param estado
   */
  public static function update($usuario_idUsuario, $producto_idproducto, $fechaPublicacion, $estado){
      $publicacion = self::select($usuario_idUsuario, $producto_idproducto);
      $publicacion->setFechaPublicacion($fechaPublicacion); 
      $publicacion->setEstado($estado); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $publicacionDao =$FactoryDao->getpublicacionDao(self::getDataBaseDefault());
     $publicacionDao->update($publicacion);
     $publicacionDao->close();
  }

  /**
   * Elimina un objeto Publicacion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param usuario_idUsuario
   * @param producto_idproducto
   */
  public static function delete($usuario_idUsuario, $producto_idproducto){
      $publicacion = new Publicacion();
      $publicacion->setUsuario_idUsuario($usuario_idUsuario); 
      $publicacion->setProducto_idproducto($producto_idproducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $publicacionDao =$FactoryDao->getpublicacionDao(self::getDataBaseDefault());
     $publicacionDao->delete($publicacion);
     $publicacionDao->close();
  }

  /**
   * Lista todos los objetos Publicacion de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Publicacion en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $publicacionDao =$FactoryDao->getpublicacionDao(self::getDataBaseDefault());
     $result = $publicacionDao->listAll();
     $publicacionDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Publicacion de la base de datos a partir de Usuario_idUsuario.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param usuario_idUsuario
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByUsuario_idUsuario($usuario_idUsuario){
      $publicacion = new Publicacion();
      $publicacion->setUsuario_idUsuario($usuario_idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $publicacionDao =$FactoryDao->getpublicacionDao(self::getDataBaseDefault());
     $result = $publicacionDao->listByUsuario_idUsuario($publicacion);
     $publicacionDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Publicacion de la base de datos a partir de producto_idproducto.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param producto_idproducto
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByProducto_idproducto($producto_idproducto){
      $publicacion = new Publicacion();
      $publicacion->setProducto_idproducto($producto_idproducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $publicacionDao =$FactoryDao->getpublicacionDao(self::getDataBaseDefault());
     $result = $publicacionDao->listByProducto_idproducto($publicacion);
     $publicacionDao->close();
     return $result;
  }


}
//That`s all folks!