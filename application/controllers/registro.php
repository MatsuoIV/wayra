<?php

	class Registro extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->view_data['base_url'] = base_url();
			$this->load->model('registro_model');
		}

		/*function index(){
			$this->registrar();
		}*/

		function index(){
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nombre','Nombres','trim|required|min_length[3]|xss_clean');
			$this->form_validation->set_rules('ap_paterno','Apellido Paterno','trim|required|min_length[3]|xss_clean');
			$this->form_validation->set_rules('ap_materno','Apellido Materno','trim|required|min_length[3]|xss_clean');
			$this->form_validation->set_rules('dni','DNI','trim|required|numeric|min_length[8]|max_length[8]|xss_clean');
			$this->form_validation->set_rules('edad','Edad','trim|required|numeric|max_length[2]|is_natural_no_zero|xss_clean');
			$this->form_validation->set_rules('mail','E-Mail','trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('telefono','Teléfono','trim|required|numeric|min_length[7]|max_length[9]|xss_clean');
			$this->form_validation->set_rules('facultad','Facultad','callback_validar');

			if($this->form_validation->run() == FALSE){
				//nunca ha corrido el formulario o existen errores de validacion
				$this->load->view('registro_view');
			}else{
				//procesa el formulario
				$datos = array(
					'nombre' => $this->input->post('nombre'),
					'ap_paterno' => $this->input->post('ap_paterno'),
					'ap_materno' => $this->input->post('ap_materno'),
					'dni' => $this->input->post('dni'),
					'edad' => $this->input->post('edad'),
					'mail' => $this->input->post('mail'),
					'telefono' => $this->input->post('telefono'),
					'facultad' => $this->input->post('facultad'),
					'universidad' => $this->input->post('universidad')
					);

				$this->registro_model->registrar($datos);
				echo $this->input->post('nombre');
			}
		
		}

		function validar($fac){
			if($fac == "none"){
				 $this->form_validation->set_message('validar', 'Por favor elija una facultad');
				 return false;
			}else{
				return true;
			}
		}
	}

?>