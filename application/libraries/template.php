<?php
	class Template {
		protected $_ci;

		function __construct() {
			$this->_ci = &get_instance(); //Untuk Memanggil function load, dll dari CI. ex: $this->load, $this->model, dll
		}

		function views($template = NULL, $data = NULL) {
			if ($template != NULL) {

				//Footer
				$data['foot'] 					= $this->_ci->load->view('template/foot', $data, TRUE);
				
				// head
				$data['head'] 					= $this->_ci->load->view('template/head', $data, TRUE);
				
				// js
					$data['js'] 				= $this->_ci->load->view('template/js', $data, TRUE);

				//Sidebar
				$data['sidebar'] 				= $this->_ci->load->view('template/sidebar', $data, TRUE);
				
				
				//topbar
				$data['topbar'] 				= $this->_ci->load->view('template/topbar', $data, TRUE);
				
				//login
					$data['login'] 	= $this->_ci->load->view('template/login', $data, TRUE);
				//profil
				$data['profil'] 				= $this->_ci->load->view('template/profil', $data, TRUE);
				
				
				

				echo $data['dasboard'] 		= $this->_ci->loadasboard->view('template/d', $data, TRUE);
			}
		}
	}
?>