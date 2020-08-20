<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bastará decir que soy Juan Pablo Castel, el pintor que mató a María Iribarne...  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Foto.php');
require_once realpath('../dao/interfaz/IFotoDao.php');

class FotoFacade {

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
   * Crea un objeto Foto a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idfoto
   * @param descripcion
   * @param rutaAlmacenamiento
   * @param fotoFormato
   * @param nombreFoto
   * @param opcionFoto
   */
  public static function insert( $idfoto,  $descripcion,  $rutaAlmacenamiento,  $fotoFormato,  $nombreFoto,  $opcionFoto){
      $foto = new Foto();
      $foto->setIdfoto($idfoto); 
      $foto->setDescripcion($descripcion); 
      $foto->setRutaAlmacenamiento($rutaAlmacenamiento); 
      $foto->setFotoFormato($fotoFormato); 
      $foto->setNombreFoto($nombreFoto); 
      $foto->setOpcionFoto($opcionFoto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fotoDao =$FactoryDao->getfotoDao(self::getDataBaseDefault());
     $rtn = $fotoDao->insert($foto);
     $fotoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Foto de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idfoto
   * @return El objeto en base de datos o Null
   */
  public static function select($idfoto){
      $foto = new Foto();
      $foto->setIdfoto($idfoto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fotoDao =$FactoryDao->getfotoDao(self::getDataBaseDefault());
     $result = $fotoDao->select($foto);
     $fotoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Foto  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idfoto
   * @param descripcion
   * @param rutaAlmacenamiento
   * @param fotoFormato
   * @param nombreFoto
   * @param opcionFoto
   */
  public static function update($idfoto, $descripcion, $rutaAlmacenamiento, $fotoFormato, $nombreFoto, $opcionFoto){
      $foto = self::select($idfoto);
      $foto->setDescripcion($descripcion); 
      $foto->setRutaAlmacenamiento($rutaAlmacenamiento); 
      $foto->setFotoFormato($fotoFormato); 
      $foto->setNombreFoto($nombreFoto); 
      $foto->setOpcionFoto($opcionFoto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fotoDao =$FactoryDao->getfotoDao(self::getDataBaseDefault());
     $fotoDao->update($foto);
     $fotoDao->close();
  }

  /**
   * Elimina un objeto Foto de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idfoto
   */
  public static function delete($idfoto){
      $foto = new Foto();
      $foto->setIdfoto($idfoto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fotoDao =$FactoryDao->getfotoDao(self::getDataBaseDefault());
     $fotoDao->delete($foto);
     $fotoDao->close();
  }

  /**
   * Lista todos los objetos Foto de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Foto en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fotoDao =$FactoryDao->getfotoDao(self::getDataBaseDefault());
     $result = $fotoDao->listAll();
     $fotoDao->close();
     return $result;
  }


}
//That`s all folks!