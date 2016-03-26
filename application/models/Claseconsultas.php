<?php

class Claseconsultas extends CI_Model{
    
    public function _construct()
    {
        parent::_construct();
    }
    
    public function obtener_ciudades()
    {
        $sql = "SELECT id_ciudad, nombre FROM ciudades";
        $query = $this->db->query($sql);
        $data = array(); 
        if ($query->num_rows() > 0) {
        foreach ($query->result_array() as $row) {
        $data[$row['id_ciudad']] = strtoupper($row['nombre']); 
        }
        return $data;
     }
            
    }
   function obtener_categorias(){
    $sql = "SELECT id_categoria, nombre FROM categorias";
    $query = $this->db->query($sql);
    $data = array(); 
    if ($query->num_rows() > 0) {
    foreach ($query->result_array() as $row) {
    $data[$row['id_categoria']] = strtoupper($row['nombre']); 
    }
    return $data;
   
    }
   // return $data;

}
   function obtener_usuario(){

     $query = $this->db-> query('SELECT nombre, password FROM usuarios');
    if ($query->num_rows() > 0) {
       foreach ($query->result_array() as $row )
       {
           $datos_usuario = array(
           'nombre' => $row['nombre'],
           'password' => $row['password'],
               );
        }
        

     return $datos_usuario;
           
     }
}
function obtener_regiones(){

    $sql = "SELECT id_region, nombre FROM regiones";
    $query = $this->db->query($sql);
    $data = array(); 
    if ($query->num_rows() > 0) {
    foreach ($query->result_array() as $row) {
    $data[$row['id_region']] = strtoupper($row['nombre']); 
    }
    return $data;
           
     }
}
 function obtener_top_categorias(){
    $sql = "SELECT top, nombre, id_categoria FROM categorias WHERE top BETWEEN 1 And 10 order by top ASC";
    $query = $this->db->query($sql);
    $data = array(); 
    if ($query->num_rows() > 0) {
    foreach ($query->result_array() as $row) {
    $data[$row['top']] = array(
        'nombre'=> strtoupper($row['nombre']),
          'id_categoria' => $row['id_categoria'],   
            'top' => $row['top']); 
    }
    return $data;
   
    }
   // return $data;

}
}
