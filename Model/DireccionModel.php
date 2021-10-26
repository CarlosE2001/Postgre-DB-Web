<?php
class DireccionModel extends ADODB_Active_Record {
    public $_table = 'eb92786_contacts';
    
    function __construct($nombre,$apellido,$telefono_casa,$direccion,$telefono_trabajo,$direccion_trabajo,$correo) {
        parent::__construct();
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->telefono_trabajo = $telefono_trabajo;
        $this->direccion_trabajo = $direccion_trabajo;
        $this->correo = $correo;
        $this->id = 1;
    }
}