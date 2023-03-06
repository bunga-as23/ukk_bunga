<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        // untuk memberi perintah jika belum login maka tidak bisa masuk
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $user = $this->db->query("SELECT * FROM tb_user");
        $member = $this->db->query("SELECT * FROM tb_member");
        $outlet = $this->db->query("SELECT * FROM tb_outlet");
        $transaksi = $this->db->query("SELECT * FROM tb_transaksi");
        $data['user'] = $user->num_rows();
        $data['member'] = $member->num_rows();
        $data['outlet'] = $outlet->num_rows();
        $data['transaksi'] = $transaksi->num_rows();
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->User_m->get_user();
        $this->load->view('templates/header', $data);
        $this->load->view('profile', $data);
        $this->load->view('templates/footer');
    }
}
