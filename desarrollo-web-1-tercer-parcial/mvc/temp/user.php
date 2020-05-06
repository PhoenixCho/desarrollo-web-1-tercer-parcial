<?php
require_once 'my_connection.php';

class User extends Model {
    // propiedades o atributos
    private $id;
    private $fields;
    public $table = "users";

    // Constructor
    public function __construct() {
        parent::$table = $this->table;
        $this->id = null;
        $this->fields = [
            'name' => '',
            'passwd' => '',
            'email' => '',
            'firstname' => '',
            'lastname' => ''
        ];
    }

    // __get() y __set()
    public function __get($name) {
        if ($name == 'id') {
            return $this->id;
        }

        if (array_key_exists($name, $this->fields)) {
            return $this->fields[$name];
        } else {
            return null;
        }
    }

    public function __set($name, $value) {
        if (array_key_exists($name, $this->fields)) {
            $this->fields[$name] = $value;
        }
    }

    public static function getById($id) {
        // Done: definir la consulta
        $sql = sprintf("select id,name,email,firstname,lastname from users where id=%d", $id);
        // Done: abrir la conexion a la base de datos
        $conn = new MyConnection();
        // Done: ejecutar la consulta
        $rst = $conn->query($sql);
        // Forgotten: Cerrar la conexión
        $conn->close();
        // Done: evaluar el resultado
        /**
         * mysqli_query()
         * Retorna FALSE en caso de error. Si una consulta del tipo SELECT,
         * SHOW, DESCRIBE o EXPLAIN es exitosa, mysqli_query() retornará un
         * objeto mysqli_result. Para otras consultas exitosas de
         * mysqli_query() retornará TRUE. 
         */
        if (!$rst) {
            die("Error al ejecutar la consulta: $sql");
        } elseif ($rst->num_rows == 1) {
            // encontro el registro
            $user = new User();
            // obtener el registro en formato de arreglo asociativo
            $row = $rst->fetch_assoc();
            $user->id = $row['id'];
            $user->name = $row['name'];
            $user->email = $row['email'];
            $user->firstname = $row['firstname'];
            $user->lastname = $row['lastname'];
            return $user;
        } else {
            // no encontro resultados
            return null;
        }
        // Done: retornar null para cuando no se encuentra o un objeto tipo User
    }

    public static function getByName($name) {
        $sql = sprintf("select id,name,email,firstname,lastname from users where name='%s'", $name);
        $conn = new MyConnection();
        $rst = $conn->query($sql);
        $conn->close();
        if (!$rst) {
            die("Error al ejecutar la consulta: $sql");
        } elseif ($rst->num_rows == 1) {
            $user = new User();
            $row = $rst->fetch_assoc();
            $user->id = $row['id'];
            $user->name = $row['name'];
            $user->email = $row['email'];
            $user->firstname = $row['firstname'];
            $user->lastname = $row['lastname'];
            return $user;
        } else {
            return null;
        }
    }
    public static function getByEmail($email) {
        $sql = sprintf("select id,name,email,firstname,lastname from users where email='%s'", $email);
        $conn = new MyConnection();
        $rst = $conn->query($sql);
        $conn->close();
        if (!$rst) {
            die("Error al ejecutar la consulta: $sql");
        } elseif ($rst->num_rows == 1) {
            $user = new User();
            $row = $rst->fetch_assoc();
            $user->id = $row['id'];
            $user->name = $row['name'];
            $user->email = $row['email'];
            $user->firstname = $row['firstname'];
            $user->lastname = $row['lastname'];
            return $user;
        } else {
            return null;
        }
    }
}

// código de prueba que se eliminará una vez se concluya esta clase User
// $resultado = User::getById(1);
// $resultado = User::getByName('bidkar');
$resultado = User::getByEmail('bidkar.aragon@udo.mx');
var_dump($resultado);