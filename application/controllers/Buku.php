<?php

/** 
 * @property load $load
 * @property M_Buku $M_Buku
 * @property session $session
 * @property input $input
 */

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Buku');
        $this->load->helper('url');
        $this->load->library('session');
        if (!$this->session->userdata('logged_in')) {
            redirect('User/login');
        }
    }

    public function index()
    {
        $search = $this->input->get('search');
        $sort = $this->input->get('sort');
        $data['buku'] = $this->M_Buku->get_buku($search, $sort);
        $this->load->view('buku/index', $data);
    }

    public function create()
    {
        $this->load->view('buku/create');
    }

    public function store()
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'penulis' => $this->input->post('penulis'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'status' => 'tersedia'
        );
        $this->M_Buku->insert_buku($data);
        redirect('Buku');
    }

    public function edit($id)
    {
        $data['buku'] = $this->M_Buku->get_satu_buku($id);
        $this->load->view('buku/edit', $data);
    }

    public function update($id)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'penulis' => $this->input->post('penulis'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'status' => $this->input->post('status')
        );
        $this->M_Buku->update_buku($id, $data);
        redirect('Buku');
    }

    public function delete($id)
    {
        $this->M_Buku->delete_buku($id);
        redirect('Buku');
    }
}

    
?>