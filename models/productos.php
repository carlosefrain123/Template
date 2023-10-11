<?php
    class Productos extends Conectar{
        public function get_producto_destacado(){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_producto WHERE pro_desta=1 and est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        public function get_producto(){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_producto WHERE pro_desta=0 and est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>