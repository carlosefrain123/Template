<?php
    class Lenguajes extends Conectar{
        public function get_lenguajes(){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_lenguages WHERE est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>