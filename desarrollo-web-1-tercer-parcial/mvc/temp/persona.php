<?php
class Persona {
    public int $id;
    public string $nombre;
    public string $apellidos;
    public int $edad;

    public function __construct() {
        $this->id = random_int(1,1000);
    }

    public function getId() {
        return $this->id;
    }
}
