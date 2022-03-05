<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeList extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['result'] = $this->user_model->getAllEmployee();
        $this->load->view('employeeList', $data);

    }

    public function updateinfo()
    {
        $data = array();
        $data["userName"] = $this->input->post('userName');
        $data["password"] = $this->input->post('password');
        //$data["repassword"] = $this->input->post('repassword');
        $data["employeeID"] = $this->input->post('employeeID');
        $data["email"] = $this->input->post('email');
        $data["number"] = $this->input->post('number');

        $result = $this->user_model->insertinfo($data);

        if ($result) {

            redirect(base_url());

        }

    }
}