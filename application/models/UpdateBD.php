<?php

class UpdateBD extends CI_Model {

    public function _construct() {
        parent::_construct();
    }

    public function completar_registro_usuario($email, $nombre, $apellido, $telefono, $direccion, $pais, $ciudad) {
        $data = array(
            'nombre' => $nombre,
            'apellidos' => ($apellido),
            'telefono' => ($telefono),
            'direccion' => ($direccion),
            'pais' => ($pais),
            'ciudad' => $ciudad
           
        );
        $this->db->where('email',$email);
        return $this->db->update('usuarios', $data);
        
    }
}
