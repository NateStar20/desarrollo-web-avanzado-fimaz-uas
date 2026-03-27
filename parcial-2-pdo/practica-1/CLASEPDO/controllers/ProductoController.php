<?php

require_once 'config/Database.php';
require_once 'models/Producto.php';

class ProductoController{
    private $conection;

    public function __construct()
    {
       $Database = new Database();
       return $this->conection = $Database->getConnection();
    }

    public function crear(Producto $producto){
        $sql = "iNSERT INTO producto (nombre, descripcion, existencia, precio)
                VALUES (:nombre, :descripcion, :existencia, :precio)";
        $stmt = $this->conection->prepare($sql);

        $stmt->bindValue(':nombre', $producto->getNombre());
        $stmt->bindValue(':descripcion', $producto->getDescripcion());
        $stmt->bindValue(':existencia', $producto->getExistencia(), PDO::PARAM_INT);
        $stmt->bindValue(':precio' , $producto->getPrecio());

        return $stmt->execute();
    }


    public function listar(){
        $sql = "SELECT * FROM producto ORDER BY id DESC";
        $stmt = $this->conection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchall();
    }

    public function obtenerid($id){
        $sql = "SELECT * FROM producto WHERE id = :id";
        $stmt = $this->conection->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function actualizar(Producto $producto){
        $sql = "UPDATE producto
                SET nombre = :nombre, descripcion = :descripcion, existencia = :existencia,
                precio= :precio
                WHERE id = :id";
        $stmt = $this->conection->prepare($sql);

        $stmt->bindValue (':id', $producto->getId(),PDO::PARAM_INT);
        $stmt->bindValue (':nombre', $producto->getNombre());
        $stmt->bindValue (':descripcion', $producto->getDescripcion());
        $stmt->bindValue (':existencia', $producto->getExistencia(),PDO::PARAM_INT);
        $stmt->bindValue (':precio', $producto->getPrecio());

        return $stmt->execute();
    }

    public function eliminar($id){
        $sql = "DELETE FROM producto WHERE id = :id";
        $stmt = $this->conection->prepare($sql);
        $stmt->bindValue (':id', $id,PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function buscar($termino){
        $sql = "SELECT * FROM producto
                WHERE nombre LIKE :termino
                OR descripcion LIKE :termino
                ORDER BY id DESC";
        $stmt = $this->conection->prepare($sql);
        $stmt->bindValue(':termino', '%' . $termino . '%');
        $stmt->execute();

        return $stmt->fetchAll();
    }
}