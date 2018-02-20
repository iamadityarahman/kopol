<?php
    class Admin extends CI_Controller {
        function __construct()
        {
            parent::__construct();
        }

        function index()
        {
            $data['title'] = "Dashboard";
            $data['link'] = "dashboard";

            $this->template_admin->display('admin/dashboard', $data);
        }

        function registrasi()
        {
            $data['title'] = "Registrasi";
            $data['link'] = "registrasi";

            $this->template_admin->display('admin/registrasi', $data);
        }
    }