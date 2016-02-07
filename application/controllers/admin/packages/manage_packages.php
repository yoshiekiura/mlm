<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_packages extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
        function __construct() {
        parent::__construct();
        $this->layout->set_layout('admin_layout');     
        authenticate();
    }

    public function index()
    {	
        $this->layout->view('admin/packages/list_packages');		
    }
    
    public function add()
    {	
        $this->layout->view('admin/packages/add_package');		
    }
}
