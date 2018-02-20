<?php
    class Template_admin {
        protected $_ci;

        function __construct()
        {
            $this->_ci =&get_instance();
        }

        function display($template_admin, $data=null)
        {
            $data['_content'] = $this->_ci->load->view($template_admin, $data, true);
            $data['_head'] = $this->_ci->load->view('template_admin/head', $data, true);
            $data['_javascript'] = $this->_ci->load->view('template_admin/javascript', $data, true);
            $data['_navbar'] = $this->_ci->load->view('template_admin/navbar', $data, true);
            $data['_leftsidebar'] = $this->_ci->load->view('template_admin/leftsidebar', $data, true);
            $this->_ci->load->view('/template_admin.php', $data);
        }
    }