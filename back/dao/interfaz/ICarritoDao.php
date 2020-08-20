<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...con el mayor de los disgustos, el benévolo señor Arciniegas.  \\


interface ICarritoDao {

    /**
     * Guarda un objeto Carrito en la base de datos.
     * @param carrito objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($carrito);
    /**
     * Modifica un objeto Carrito en la base de datos.
     * @param carrito objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($carrito);
    /**
     * Elimina un objeto Carrito en la base de datos.
     * @param carrito objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($carrito);
    /**
     * Busca un objeto Carrito en la base de datos.
     * @param carrito objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($carrito);
    /**
     * Lista todos los objetos Carrito en la base de datos.
     * @return Array<Carrito> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!