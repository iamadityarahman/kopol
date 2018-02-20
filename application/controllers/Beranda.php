<?php
    class Beranda extends CI_Controller {
        function __construct()
        {
            parent::__construct();
        }

        function index()
        {
            $data['title'] = "Home";
            $data['link'] = 'beranda';
            $this->template_website->display('website/beranda', $data);
        }

    }