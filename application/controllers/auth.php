<?php

    Class Auth extends ci_controller{

        function __construct(){
            parent::__construct();
            $this->load->helper('form');
            $this->load->model('Model_user');
        }

        function index(){
            //$this->template->load('login');
            $this->load->view('auth/login');
        }

        function cek_login(){
            if (isset($_POST['submit'])){

                //proses login
                $email      = $this->input->post('email'); // pengambilan data dari textbox
                $password   = hash("sha256",$this->input->post('password'));
                $result     = $this->Model_user->ceklogin($email,$password); // mengambil fungsi ceklogin( parameter yang ingin di tes) yang ada di model user
                //print_r($result);
                if (!empty($result)) { //apabila $result tidak ksosong maka eksekusi sesion dan user datanya di ambil dari result, yang di mana result terdapat query data tabel_detail_user
                    $this->session->set_userdata($result);
                    redirect('dashboard');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-warning">Username atau Password Anda tidak valid!</div>');
                    redirect('auth');
                }
            }else{
                redirect('auth');
            }
        }

        function logout(){
            $this->session->sess_destroy();
            redirect('auth');
        }
        
    }
