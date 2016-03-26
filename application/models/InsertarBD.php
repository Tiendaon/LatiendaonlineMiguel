<?php

class InsertarBD extends CI_Model{
    
    public function _construct()
    {
        parent::_construct();
    }
    
    public function registrar_usuario($nombre,$email,$contrasena)
    {
        $data = array(
            'usuario' => $nombre,
            'email' => $email,
            'password' =>$contrasena
        );
        
        return $this->db->insert('usuarios', $data);   
    }
}
