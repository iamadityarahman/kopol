<?php
    class Kontak extends CI_Controller {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $data['title'] = 'Kontak';
            $data['link'] = uri_string(2);
            $this->template_website->display('website/kontak', $data);
        }
    }