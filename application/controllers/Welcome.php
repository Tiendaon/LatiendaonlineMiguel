<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('Claseconsultas');
        $this->load->model('InsertarBD', "in");
         $this->load->model('UpdateBD');
    }

    public function index() {
        $data['categoria'] = $this->Claseconsultas->obtener_categorias();
        $data['regiones'] = $this->Claseconsultas->obtener_regiones();
        $data['ciudades'] = $this->Claseconsultas->obtener_ciudades();
        $data['top_categorias'] = $this->Claseconsultas->obtener_top_categorias();
        $this->load->view('front/index', $data);
    }

    public function back_user_registro() {

        $this->load->view('back/back-user-registro');
    }

    public function back_index() {
        $nombre = $this->input->post('nombre');
        $password = $this->input->post('password');
        $email = $this->input->post('email');

        if ($this->in->registrar_usuario($nombre, $email, $password)) {
            $this->load->view('back/index');
        } else {
            $this->load->view('back/back-user-registro');
        }
    }

    public function back_user_login() {

        $this->load->view('back/back-user-login');
    }
    
    public function back_perfil() {

        $this->load->view('back/back-perfil');
    }
    public function completar_perfil() {
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $telefono = $this->input->post('telefono');
        $direccion = $this->input->post('direccion');
        $pais = $this->input->post('pais');
        $ciudad = $this->input->post('ciudad');
        // capturar email e integrar en los parametros
        $this->UpdateBD->completar_registro_usuario($nombre,$apellido,$telefono,$direccion,$pais,$ciudad);
                // seguir completando
        $this->load->view('back/back-perfil');
        
    }
    public function back_tiendas() {

        $this->load->view('back/back-tiendas');
    }

    public function back_productos_servicios() {

        $this->load->view('back/back-productos-servicios');
    }

    public function back_planes() {

        $this->load->view('back/back-planes');
    }
}