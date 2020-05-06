<?php
// nombres de clase en formato StudlyCaps
// prettier-ignore
class MyConnection extends mysqli {
    public function __construct() {
        $conn = parent::__construct('127.0.0.1','demo','123','demo',3308);
        if ($conn->connect_error) {
            die('Error de conexión ('.$conn->connect_errno.') '.$conn->connect_error);
        }
        return $conn;
    }
}
