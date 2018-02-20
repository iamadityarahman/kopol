<?php
class Kasir extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = "Dashboard";
        $data['link'] = "dashboard";

        $this->template_kasir->display('kasir/dashboard', $data);
    }

    function simpan()
    {
        $data['title'] = "Simpan";
        $data['link'] = "simpan";

        $this->template_kasir->display('kasir/simpan', $data);
    }

    function pinjam()
    {
        $data['title'] = "Pinjam";
        $data['link'] = "pinjam";

        $this->template_kasir->display('kasir/pinjam', $data);
    }

    function konfirmasi()
    {
        $data['title'] = "Konfrmasi Transaksi";
        $data['link'] = "konfirmasi";

        $this->template_kasir->display('kasir/konfirmasi', $data);
    }
}