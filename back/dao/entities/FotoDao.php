<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Pero el ruiseñor no respondió; yacía muerto sobre las altas hierbas, con el corazón traspasado de espinas.  \\

include_once realpath('../dao/interfaz/IFotoDao.php');
include_once realpath('../dto/Foto.php');

class FotoDao implements IFotoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Foto en la base de datos.
     * @param foto objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($foto){
      $idfoto=$foto->getIdfoto();
$descripcion=$foto->getDescripcion();
$rutaAlmacenamiento=$foto->getRutaAlmacenamiento();
$fotoFormato=$foto->getFotoFormato();
$nombreFoto=$foto->getNombreFoto();
$opcionFoto=$foto->getOpcionFoto();

      try {
          $sql= "INSERT INTO `foto`( `idfoto`, `descripcion`, `rutaAlmacenamiento`, `fotoFormato`, `nombreFoto`, `opcionFoto`)"
          ."VALUES ('$idfoto','$descripcion','$rutaAlmacenamiento','$fotoFormato','$nombreFoto','$opcionFoto')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Foto en la base de datos.
     * @param foto objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($foto){
      $idfoto=$foto->getIdfoto();

      try {
          $sql= "SELECT `idfoto`, `descripcion`, `rutaAlmacenamiento`, `fotoFormato`, `nombreFoto`, `opcionFoto`"
          ."FROM `foto`"
          ."WHERE `idfoto`='$idfoto'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $foto->setIdfoto($data[$i]['idfoto']);
          $foto->setDescripcion($data[$i]['descripcion']);
          $foto->setRutaAlmacenamiento($data[$i]['rutaAlmacenamiento']);
          $foto->setFotoFormato($data[$i]['fotoFormato']);
          $foto->setNombreFoto($data[$i]['nombreFoto']);
          $foto->setOpcionFoto($data[$i]['opcionFoto']);

          }
      return $foto;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Foto en la base de datos.
     * @param foto objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($foto){
      $idfoto=$foto->getIdfoto();
$descripcion=$foto->getDescripcion();
$rutaAlmacenamiento=$foto->getRutaAlmacenamiento();
$fotoFormato=$foto->getFotoFormato();
$nombreFoto=$foto->getNombreFoto();
$opcionFoto=$foto->getOpcionFoto();

      try {
          $sql= "UPDATE `foto` SET`idfoto`='$idfoto' ,`descripcion`='$descripcion' ,`rutaAlmacenamiento`='$rutaAlmacenamiento' ,`fotoFormato`='$fotoFormato' ,`nombreFoto`='$nombreFoto' ,`opcionFoto`='$opcionFoto' WHERE `idfoto`='$idfoto' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Foto en la base de datos.
     * @param foto objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($foto){
      $idfoto=$foto->getIdfoto();

      try {
          $sql ="DELETE FROM `foto` WHERE `idfoto`='$idfoto'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Foto en la base de datos.
     * @return ArrayList<Foto> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idfoto`, `descripcion`, `rutaAlmacenamiento`, `fotoFormato`, `nombreFoto`, `opcionFoto`"
          ."FROM `foto`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $foto= new Foto();
          $foto->setIdfoto($data[$i]['idfoto']);
          $foto->setDescripcion($data[$i]['descripcion']);
          $foto->setRutaAlmacenamiento($data[$i]['rutaAlmacenamiento']);
          $foto->setFotoFormato($data[$i]['fotoFormato']);
          $foto->setNombreFoto($data[$i]['nombreFoto']);
          $foto->setOpcionFoto($data[$i]['opcionFoto']);

          array_push($lista,$foto);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That`s all folks!