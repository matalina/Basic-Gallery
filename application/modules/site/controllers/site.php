<?php
    class Site extends MY_Controller {
        public function __contstruct() {
            parent::__construct();
        }
        
        public function index() {
            $this->_template();
        }
        
        protected function _template($view = false) {
            $header['title'] = 'Basic Gallery';
            $this->load->view('header',$header);
            if(!$view) {
                $data['content'] = '';
            }
            else{
               $data['content'] = modules::run($view);
            }
            $this->load->view('content',$data);
            $this->load->view('footer');
        }
        
    }