<?php
defined(('BASEPATH')) OR exit('No Direct script access allowed');

class Dashboard extends CI_Controller{
    public function index(){
        $data['content']='<h1>Welcome to Admin Lte 3</h1>';
        $this->load->view('templates/blank', $data);
    }
}