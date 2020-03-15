<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	var $data = array();
  public function __construct() {
    parent::__construct();
    $this->load->library('session');
  }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('templates/header', $this->data);
		$this->load->view('templates/navigation', $this->data);
		if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) {
			$this->load->view('main/index', $this->data);
		}
		else {
			$this->load->view('welcome_message', $this->data);
		}

		$this->load->view('templates/footer', $this->data);
	}

}
