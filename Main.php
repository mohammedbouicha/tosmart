<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');   /* This helper is used to load your URL */
        $this->load->model('Contact_model');  /* This used to load model */
    }

    public function index()
    {
        $this->load->view('include/header');
        $this->load->view('template/index');
        $this->load->view('include/footer');
    }

    public function savedata()
    {
        $data = [
         'prenom' => $this->input->post('prenom'),
         'nom' => $this->input->post('nom'),
         'email' => $this->input->post('email'),
         'tel' => $this->input->post('tel'),
         'objet' => $this->input->post('objet'),
             ];
        $this->load->model('Contact_model');
        $result = $this->Contact_model->insert_contact($data);
        if ($result) {
            echo  1;
        } else {
            echo  0;
        }
    }
}
