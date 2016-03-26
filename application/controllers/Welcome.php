<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
  function __construct(){
      parent::__construct();
      
        $this->load->model('Claseconsultas');
   }
    
	public function index()
	{
          $data['categoria']=$this->Claseconsultas->obtener_categorias();
          $data['regiones']=$this->Claseconsultas->obtener_regiones();
          $data['ciudades']=$this->Claseconsultas->obtener_ciudades();
          $data['top_categorias']=$this->Claseconsultas->obtener_top_categorias();
          $this->load->view('front/index',$data);  
                     
	}
	public function back_user_registro()
	{
          
          $this->load->view('back/back-user-registro');  
                     
	}
        public function back_index()
	{
          
          $this->load->view('back/index');  
                     
	}
         public function back_user_login()
	{
          
          $this->load->view('back/back-user-login');  
                     
	} 
       
}