<?php
class Laporan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = "Laporan";
        $data['link'] = uri_string(2);
        $this->template_website->display('website/laporan', $data);
    }

}