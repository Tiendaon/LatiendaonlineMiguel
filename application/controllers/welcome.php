<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

  function __construct(){
      parent::__construct();
      
        $this->load->model('claseconsultas');
   }
    
	public function index()
	{
          $data['categoria']=$this->claseconsultas->obtener_categorias();
          $data['regiones']=$this->claseconsultas->obtener_regiones();
          $data['ciudades']=$this->claseconsultas->obtener_ciudades();
          $data['top_categorias']=$this->claseconsultas->obtener_top_categorias();
          $this->load->view('front/index',$data);  
                     
	}
        
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */