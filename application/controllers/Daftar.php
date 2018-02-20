<?php
    class Daftar extends CI_Controller {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $data['title'] = 'Daftar';
            $data['link'] = uri_string(2);
            $this->template_website->display('website/daftar', $data);
        }
    }