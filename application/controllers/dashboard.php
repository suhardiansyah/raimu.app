<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    Class Dashboard extends ci_controller{
        function index(){
            $this->template->load('menu','dashboard');
           // $this->load->view('login');
        }
        public function konfirmasi(){
            $this->template->load('menu','detailkonfirmasi');
           // $this->load->view('login');
        }
    }

    
    
