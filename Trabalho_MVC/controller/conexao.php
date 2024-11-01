<?php
class Conexao {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "tpafinal";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
