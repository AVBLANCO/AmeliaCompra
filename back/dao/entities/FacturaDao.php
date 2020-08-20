<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\

include_once realpath('../dao/interfaz/IFacturaDao.php');
include_once realpath('../dto/Factura.php');
include_once realpath('../dto/Usuario.php');

class FacturaDao implements IFacturaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Factura en la base de datos.
     * @param factura objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($factura){
      $idFactura=$factura->getIdFactura();
$totalFactura=$factura->getTotalFactura();
$fechaFactura=$factura->getFechaFactura();
$usuario_idUsuario=$factura->getUsuario_idUsuario()->getIdUsuario();

      try {
          $sql= "INSERT INTO `factura`( `idFactura`, `totalFactura`, `fechaFactura`, `Usuario_idUsuario`)"
          ."VALUES ('$idFactura','$totalFactura','$fechaFactura','$usuario_idUsuario')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Factura en la base de datos.
     * @param factura objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($factura){
      $idFactura=$factura->getIdFactura();

      try {
          $sql= "SELECT `idFactura`, `totalFactura`, `fechaFactura`, `Usuario_idUsuario`"
          ."FROM `factura`"
          ."WHERE `idFactura`='$idFactura'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $factura->setIdFactura($data[$i]['idFactura']);
          $factura->setTotalFactura($data[$i]['totalFactura']);
          $factura->setFechaFactura($data[$i]['fechaFactura']);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $factura->setUsuario_idUsuario($usuario);

          }
      return $factura;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Factura en la base de datos.
     * @param factura objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($factura){
      $idFactura=$factura->getIdFactura();
$totalFactura=$factura->getTotalFactura();
$fechaFactura=$factura->getFechaFactura();
$usuario_idUsuario=$factura->getUsuario_idUsuario()->getIdUsuario();

      try {
          $sql= "UPDATE `factura` SET`idFactura`='$idFactura' ,`totalFactura`='$totalFactura' ,`fechaFactura`='$fechaFactura' ,`Usuario_idUsuario`='$usuario_idUsuario' WHERE `idFactura`='$idFactura' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Factura en la base de datos.
     * @param factura objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($factura){
      $idFactura=$factura->getIdFactura();

      try {
          $sql ="DELETE FROM `factura` WHERE `idFactura`='$idFactura'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Factura en la base de datos.
     * @return ArrayList<Factura> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idFactura`, `totalFactura`, `fechaFactura`, `Usuario_idUsuario`"
          ."FROM `factura`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $factura= new Factura();
          $factura->setIdFactura($data[$i]['idFactura']);
          $factura->setTotalFactura($data[$i]['totalFactura']);
          $factura->setFechaFactura($data[$i]['fechaFactura']);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $factura->setUsuario_idUsuario($usuario);

          array_push($lista,$factura);
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