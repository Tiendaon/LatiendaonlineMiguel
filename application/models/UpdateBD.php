<?php

class UpdateBD extends CI_Model{
    
    public function _construct()
    {
        parent::_construct();
    }
    
    public function completar_registro_usuario($email,$nombre,$apellido,$telefono,$direccion,$pais,$ciudad)
    {
        $sql = "UPDATE usuarios SET nombre='$nombre',apellido='$apellido',telefono=$telefono,direccion='$direccion', pais='$pais', ciudad='$ciudad' WHERE email='$email'";
        $this->db->query($sql);
    }
}