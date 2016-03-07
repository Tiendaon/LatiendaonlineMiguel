<?php

class tiendas {
    

    function __construct(){
      parent::__construct();
      
        //$this->load->model('claseconsultastiendas');
    //put your code here
}

public function buscar_tiendas()
        {
        $valor = $this->input->post('categoria');
        echo $valor;
        echo 'hola';
     $this->load->view('front/index',$data);      
	}
}