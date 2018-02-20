<?php
class Login_admin extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('login_admin');
    }
}