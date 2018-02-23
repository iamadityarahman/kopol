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

    function tarik()
    {
        $data['title'] = "Tarik simpaan";
        $data['link'] = "tarik";

        $this->template_kasir->display('kasir/tarik', $data);
    }

    function angsur ()
    {
        $data['title'] = "Angsur pinjaman";
        $data['link'] = "angsur";

        $this->template_kasir->display('kasir/angsur', $data);
    }
}