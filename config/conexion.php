<?php
//! Conexion a la base de Datos
class Conexion
{
    //- Declaracion de las variables.
    private $servidor = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $db = "servicioweb";
    private $conexion;

    //- Método para conectar la DB a traves de PDO
    public function __construct()
    {

        //= Método PDO
        try {
            $this->conexion = new PDO("mysql:host=$this->servidor; dbname=$this->db", $this->usuario, $this->pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return 'Fallo de conexion' . $e;
        }
    }

    //# Método para consultar datos en la DB
    public function consultar($sql)
    {
        //en la variable $sentencia almacenamos la instrucción SELECT FROM
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    //# Método para insertar datos en la DB (tambien puede servir para DELETE / UPDATE / INSERT)
    public function ejecutar($sql)
    {
        //en la variable $insert almacenamos la instrucción INSERT INTO
        $insert = $this->conexion->prepare($sql);
        //ejecutamos la instrucción
        $insert->execute();
    }

    //# Método para eliminar datos en la DB
    public function eliminar($sql)
    {
        //en la variable $delete almacenamos la instrucción DELETE FROM
        $delete = $this->conexion->prepare($sql);
        //ejecutamos la instrucción
        $delete->execute();
        return $delete->fetchAll();
    }
} // class Conexion fin
