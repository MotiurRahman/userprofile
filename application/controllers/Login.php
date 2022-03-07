<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
        $this->load->view('login');

    }

    public function userLogin()
    {
        $data = array();

        $data["employeeID"] = $this->input->post('employeeID');
        $data["password"] = $this->input->post('password');

        $result = $this->user_model->login_user($data);

        // print_r($data);
        // print_r($result[0]->userName);
        // die();

        if (!empty($result)) {
            $this->session->set_userdata('login', "Login User: " . $result[0]->userName);
            $this->session->set_userdata('id', $result[0]->id);
            $this->session->set_userdata('admin', $result[0]->admin);
            redirect("employeeList", $result);

        } else {
            $this->session->set_userdata('login', 'User Name or Password did not match. Please try again');
            redirect(base_url());
        }

    }

    public function logout()
    {
        session_destroy();
        redirect(base_url());

    }
}