<?php
class Model {
    private $dsn;
    private $db_user;
    private $db_password;
    private $cnn;
    public $table;

    public function __construct() {
        $this->dsn = "mysql:dbname=demo;host=127.0.0.1";
        $this->db_user = "demo";
        $this->db_password = "123";
        $this->cnn = new PDO($this->dsn, $this->db_user, $this->db_password);
    }

    /**
     * @param int
     * 
     * Find by Id
     */
    public function find($id) {
        $sql = "select * from ? where id = ?";
        
    }
}