<?php

class InsertarBD extends CI_Model{
    
    public function _construct()
    {
        parent::_construct();
    }
    
    public function registrar_usuario($nombre,$email,$password)
    {
        $data = array(
            'usuario' => $nombre,
            'email' => $email,
            'password' =>$password
        );
        
        return $this->db->insert('usuarios', $data);   
    }
}
