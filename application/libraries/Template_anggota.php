<?php
    class Template_anggota {
        protected $_ci;

        function __construct()
        {
            $this->_ci =&get_instance();
        }

        function display($template_anggota, $data=null)
        {
            $data['_content'] = $this->_ci->load->view($template_anggota, $data, true);
            $data['_head'] = $this->_ci->load->view('template_anggota/head', $data, true);
            $data['_javascript'] = $this->_ci->load->view('template_anggota/javascript', $data, true);
            $data['_navbar'] = $this->_ci->load->view('template_anggota/navbar', $data, true);
            $data['_leftsidebar'] = $this->_ci->load->view('template_anggota/leftsidebar', $data, true);
            $this->_ci->load->view('/template_anggota.php', $data);
        }
    }