<?php 
	class Error extends CI_Controller {     
		public function error_404() {
			// send 404 header
			$this->output->set_status_header('404');
			// load a custom not found page view template
			$this->load->view('error_404');
		}        
	}
?>
