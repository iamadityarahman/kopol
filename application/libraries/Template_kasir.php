<?php
    class Template_kasir {
        protected $_ci;

        function __construct()
        {
            $this->_ci =&get_instance();
        }

        function display($template_kasir, $data=null)
        {
            $data['_content'] = $this->_ci->load->view($template_kasir, $data, true);
            $data['_head'] = $this->_ci->load->view('template_kasir/head', $data, true);
            $data['_javascript'] = $this->_ci->load->view('template_kasir/javascript', $data, true);
            $data['_navbar'] = $this->_ci->load->view('template_kasir/navbar', $data, true);
            $data['_leftsidebar'] = $this->_ci->load->view('template_kasir/leftsidebar', $data, true);
            $this->_ci->load->view('/template_kasir.php', $data);
        }
    }