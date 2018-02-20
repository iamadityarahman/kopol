<?php
    class Anggota extends CI_Controller {
        function __construct()
        {
            parent::__construct();
        }

        function index()
        {
            $data['title'] = "Home";
            $data['link'] = "home";

            // Biodata
            $data['no_anggota'] = "ABC123456";
            $data['nama'] = "Siti Munaroh";
            $data['pekerjaan'] = "Ibu Kantin";
            $data['nik'] = "012345678901";
            $data['jenis_kelamin'] = "Perempuan";
            $data['no_hp'] = "080123456789";
            $data['tempat_lahir'] = "Surabaya";
            $data['tanggal_lahir'] = "16-10-1960";
            $data['agama'] = "Islam";
            $data['lama_kontrak'] = 1461;
            $data['email'] = "siti.munaroh@um.ac.id";
            $data['anggota_sejak'] = "12 Oktober 2015";

            $this->template_anggota->display('anggota/home', $data);
        }

        function konfirmasi() {
            $data['title'] = "Konfirmasi Transaksi";
            $data['link'] = 'konfirmasi';

            $this->template_anggota->display('anggota/konfirmasi', $data);
        }

        function simpan() {
            $data['title'] = "Transaksi Simpan";
            $data['link'] = "simpan";

            $this->template_anggota->display('anggota/simpan', $data);
        }

        function pinjam() {
            $data['title'] = "Transaksi Pinjam";
            $data['link'] = "pinjam";

            $this->template_anggota->display('anggota/pinjam', $data);
        }
    }