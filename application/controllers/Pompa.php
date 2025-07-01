<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pompa extends CI_Controller {

    public function dashboard() 
    { 
        $this->load->view('pompa/dashboard'); 
    }
    public function list()      
    { 
        $this->load->view('pompa/list'); 
    }
    public function jadwal()    
    { 
        $this->load->view('pompa/jadwal'); 
    }
    public function log()       
    { 
        $this->load->view('pompa/log'); 
    }
    
}
