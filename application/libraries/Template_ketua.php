<?php
    class Template_ketua {
        protected $_ci;

        function __construct()
        {
            $this->_ci =&get_instance();
        }

        function display($template_ketua, $data=null)
        {
            $data['_content'] = $this->_ci->load->view($template_ketua, $data, true);
            $data['_head'] = $this->_ci->load->view('template_ketua/head', $data, true);
            $data['_javascript'] = $this->_ci->load->view('template_ketua/javascript', $data, true);
            $data['_navbar'] = $this->_ci->load->view('template_ketua/navbar', $data, true);
            $data['_leftsidebar'] = $this->_ci->load->view('template_ketua/leftsidebar', $data, true);
            $this->_ci->load->view('/template_ketua.php', $data);
        }
    }