<?php
    class Ketua extends CI_Controller {
        function __construct()
        {
            parent::__construct();
        }

        function index()
        {
            $data['title'] = "Dashboard";
            $data['link'] = "dashboard";

            $this->template_ketua->display('ketua/dashboard', $data);
        }

        function anggota()
        {
            $data['title'] = "Daftar Anggota";
            $data['link'] = "anggota";

            $this->template_ketua->display('ketua/anggota', $data);
        }
    }