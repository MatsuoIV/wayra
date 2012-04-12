<?php
	
	class Team extends CI_Controller{

		function __construct(){
			parent::__construct();
		}

		function index(){
			$this->load->view('team_view');
		}
	}
?>