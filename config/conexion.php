<?php
class Conectar {
    protected $dbh; // Almacenar los datos de la conexión
    
    // Método para establecer la conexión a la base de datos
    protected function Conexion() {
        try {
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=paginawebphp", "root", "");
            return $conectar;
        } catch (Exception $e) {
            print "Error: " . $e->getMessage();
            die(); // Termina el script en caso de error
        }
    }

    // Método para establecer el juego de caracteres a utf8
    public function set_names() {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}

?>
