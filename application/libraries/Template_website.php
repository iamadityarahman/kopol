<?php
    class Template_website {
        protected $_ci;

        function __construct()
        {
            $this->_ci =&get_instance();
        }

        function display($template_website, $data=null)
        {
            $data['_content'] = $this->_ci->load->view($template_website, $data, true);
            $data['_head'] = $this->_ci->load->view('template_website/head', $data, true);
            $data['_javascript'] = $this->_ci->load->view('template_website/javascript', $data, true);
            $data['_navbar'] = $this->_ci->load->view('template_website/navbar', $data, true);
            $this->_ci->load->view('/template_website.php', $data);
        }
    }