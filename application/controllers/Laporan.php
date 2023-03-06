<?php

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        // untuk memanggil nama model
        $this->load->model('Laporan_m');
        $this->load->model('Outlet_m');
        $this->load->model('Paket_m');
    }

    public function index()
    {
        $data['title'] = 'Data Laporan';

        $data['outlet'] = $this->Outlet_m->get_outlet();
        $data['paket'] = $this->Paket_m->get_paket();
        $data['transaksi'] = $this->Transaksi_m->get_transaksi();

        $this->load->view('templates/header', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function cetak_laporan()
    {
        $dari = $this->input->post('tgl');
        $sampai = $this->input->post('tgl_bayar');
        $id_paket = $this->input->post('id_paket');
        $id_outlet = $this->input->post('id_outlet');
        $dibayar = $this->input->post('dibayar');

        $data['title'] = 'Cetak Transaksi';
        $data['laporan'] = $this->Laporan_m->filter_laporan($dari, $sampai, $id_paket, $id_outlet, $dibayar);
        $this->session->set_userdata('tgl', $dari);
        $this->session->set_userdata('tgl_bayar', $sampai);
        $this->load->view('laporan/cetak_laporan', $data);
    }
}
