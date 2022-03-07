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

        if ($this->session->userdata('id')) {
            $data['result'] = $this->user_model->getAllEmployee();
            $this->load->view('employeeList', $data);
        } else {
            redirect(base_url());
        }

    }

    public function editinfo()
    {
        if ($this->session->userdata('id') && $this->session->userdata('admin')) {

            $id = $this->uri->segment(3);
            $data['result'] = $this->user_model->getEmployeeData($id);

            //print_r($data[0]->userName);
            $this->load->view('update_employeeList', $data);
        } else {
            redirect(base_url());
        }

    }

    public function updateinfo()
    {
        $data = array();
        $data["userName"] = $this->input->post('userName');
        $data["employeeID"] = $this->input->post('employeeID');
        $data["email"] = $this->input->post('email');
        $data["number"] = $this->input->post('number');

        $id = $this->uri->segment(3);
        $result = $this->user_model->updatinfo($id, $data);

        // print_r($id);
        // print_r($data);
        // die();

        if ($result) {

            redirect("employeeList");

        }

    }

    public function deleteinfo()
    {

        $id = $this->input->post("id");

        // print_r($id);
        // die();
        $result = $this->user_model->deleteinfo($id);
        if ($result) {
            echo "success";

        }

    }
}