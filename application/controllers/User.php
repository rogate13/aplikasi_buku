<?php

/** 
 * @property load $load
 * @property M_User $M_User
 * @property session $session
 * @property input $input
 */

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }

    public function register()
    {
        $this->load->view('user/register');
    }

    public function store()
    {
        $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $password,
            'role' => $this->input->post('role'),
        );
        $this->M_User->register($data);
        redirect('user/login');
    }

    public function login()
    {
        $this->load->view('user/login');
    }

    public function authenticate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->M_User->login($username, $password);
        if ($user) {
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $user['username']);
            $this->session->set_userdata('role', $user['role']);
            redirect('Buku');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('user/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('user/login');
    }
}