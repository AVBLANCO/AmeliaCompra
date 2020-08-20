<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Caminante no hay camino, se hace camino al andar  \\


interface IPublicacionDao {

    /**
     * Guarda un objeto Publicacion en la base de datos.
     * @param publicacion objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($publicacion);
    /**
     * Modifica un objeto Publicacion en la base de datos.
     * @param publicacion objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($publicacion);
    /**
     * Elimina un objeto Publicacion en la base de datos.
     * @param publicacion objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($publicacion);
    /**
     * Busca un objeto Publicacion en la base de datos.
     * @param publicacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($publicacion);
    /**
     * Lista todos los objetos Publicacion en la base de datos.
     * @return Array<Publicacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Publicacion en la base de datos que coincidan con la llave primaria.
     * @param publicacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Publicacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByUsuario_idUsuario($publicacion);
    /**
     * Lista todos los objetos Publicacion en la base de datos que coincidan con la llave primaria.
     * @param publicacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Publicacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByProducto_idproducto($publicacion);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!