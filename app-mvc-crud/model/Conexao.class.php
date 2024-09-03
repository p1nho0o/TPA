<?php 

class Conexao {
    public static $instance;

    public static function get_instance() { 
        if (!isset(self::$instance)) {
            self::$instance = new PDO(
                "mysql:host=localhost;dbname=primeirocrud", 
                "root", 
                "", // Assuming there is no password, you can replace "" with the actual password if needed
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
            );
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}

?>
