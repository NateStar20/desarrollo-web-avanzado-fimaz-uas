<?php

class Producto{
    private $Id;
    private $Nombre;
    private $Descripcion;
    private $Existencia;
    private $Precio;

    public function __construct($id,$nombre,$descripcion,$existencia,$precio)
    {
        $this->Id = $id;
        $this->Nombre = $nombre;
        $this->Descripcion = $descripcion;
        $this->Existencia = $existencia;
        $this->Precio = $precio;
    }

    public function setNombre($nombre){
        $this->Nombre = $nombre;
    }

    public function getNombre(){
        return $this->Nombre;
    }

      public function setDescripcion($descripcion){
        $this->Descripcion = $descripcion;
    }
    
    public function getDescripcion(){
        return $this->Descripcion;
    }

      public function setExistencia($existencia){
        $this->Existencia = $existencia;
    }

    public function getExistencia() {
        return $this->Existencia;
    }

      public function setPrecio($precio){
        $this->Precio = $precio;
    }
    public function getPrecio(){
        return $this->Precio;

    }
    public function getId(){
        return $this->Id;

    }

    public function setId($id){

        $this->Id = $id;
    }
}


