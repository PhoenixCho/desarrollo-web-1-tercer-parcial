<?php
class Usuario extends Persona {
    public string $alias;
    private string $contraseña;

    public function __construct() {
        parent::__construct();
    }

    /**
     * Metodo para generar contraseñas utilizando el algoritmo de encriptación bcrypt
     * 
     * @param string $cadena Cadena que va a ser encriptada
     */
    public function generarConstraseña(string $cadena) {
        $this->contraseña = password_hash($cadena, PASSWORD_BCRYPT);
        return $this->contraseña;
    }
}
