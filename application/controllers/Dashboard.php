<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view('dashboard_view');
    }

}

/* End of file Dashboard.php */
 
?>