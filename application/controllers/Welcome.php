<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('Claseconsultas', "cc");
        $this->load->model('InsertarBD', "in");
        $this->load->model('UpdateBD');
    }

    public function index() {
        $data['categoria'] = $this->cc->obtener_categorias();
        $data['regiones'] = $this->cc->obtener_regiones();
        $data['ciudades'] = $this->cc->obtener_ciudades();
        $data['top_categorias'] = $this->cc->obtener_top_categorias();
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
            $data = array(
                'email' => $email,
                'nombre' => $nombre
            );
            $this->session->set_userdata($data);
            $this->load->view('back/index');
        } else {
            $this->load->view('back/back-user-registro');
        }
    }

    public function back_user_login() {

        $this->load->view('back/back-user-login');
    }

    public function validar_usuario() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($this->cc->validar_usuario($email, $password) == TRUE) {
           $datos = $this->cc->buscar_datos_usuarios($email);
            
            $data = array(
                'email' => $email,
                'nombre' => $datos->nombre,
                'apellidos' => $datos->apellido,
                'telefono' => $datos->telefono,
                'direccion' => $datos->direccion,
                'pais' => $datos->pais,
                'ciudad' => $datos->ciudad
            );
            $this->session->set_userdata($data);
            $this->load->view('back/index');
        } else {
            echo '<script language="javascript"> alert("Usuario o clave inválida");</script>';
            $this->load->view('back/back-user-login');
        }
    }

    public function back_perfil() {
        $data['regiones'] = $this->cc->obtener_regiones();
        $data['ciudades'] = $this->cc->obtener_ciudades();
        $this->load->view('back/back-perfil', $data);
    }

    public function completar_perfil() {
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $telefono = $this->input->post('telefono');
        $direccion = $this->input->post('direccion');
        $pais = $this->input->post('pais');
        $ciudad = $this->input->post('ciudad');
        $email = $this->session->userdata('email');
        // capturar email e integrar en los parametros

        if ($this->UpdateBD->completar_registro_usuario($email, $nombre, $apellido, $telefono, $direccion, $pais, $ciudad)) {
            $data = array(
                'email' => $email,
                'nombre' => $nombre,
                'apellidos' => $apellido,
                'telefono' => $telefono,
                'direccion' => $direccion,
                'pais' => $pais,
                'ciudad' => $ciudad
            );
            $this->session->set_userdata($data);
            $data['regiones'] = $this->cc->obtener_regiones();
            $data['ciudades'] = $this->cc->obtener_ciudades();
            $this->load->view('back/back-perfil', $data);
        } else {
            $this->load->view('back/back-user-login');
        }
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

    function cargar_archivo() {

        $mi_imagen = $this->input->post('mi_imagen');
        $config['upload_path'] = base_url() . "Application/views/imagenes";
        $config['file_name'] = "imagenprueba";
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "0";
        $config['max_width'] = "0";
        $config['max_height'] = "0";
        $config['overwrite'] = "TRUE";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($mi_imagen)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        $data['uploadSuccess'] = $this->upload->data();
    }

    public function cerrar_session() {
        $this->session->sess_destroy();
        $this->index();
        redirect(base_url(), 'refresh');
    }

}
