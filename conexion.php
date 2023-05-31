<?php

    class conexion {
        private $servidor="localhost";
        private $usuario = "root";
        private $password="";
        private $conexion;

        public function __construct(){
            try{
                $this->conexion = new PDO("mysql:host=$this->servidor;dbname=portfolio",$this->usuario,$this->password);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                return "Error en la conexión".$e;
            }

        }

        public function ejecutar($sql){
            $this->conexion->exec($sql);
            return $this->conexion->lastInsertId();
        }
    }

?>