<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
    Class User_agent extends ci_controller{
        function __construct(){
            parent::__construct();
            $this->load->library('ssp');
           
                $this->load->helper('form');
                $this->load->model('Model_user');
            
        }

        function data(){  //ini untuk kueri user yang akan di tampilkan dalam tabel
            $tabel='v_tbl_user';
            $primarykey='id';
            $columns = array(
                array('db'=>'id','dt'=>'id'),
                array('db'=>'nama','dt'=>'nama'),
                array('db'=>'email','dt'=>'email'),
                array('db'=>'tgl_daftar','dt'=>'tgl_daftar'),
                array('db'=>'level_akses','dt'=>'level_akses'),
                array('db'=>'level_user','dt'=>'level_user'),
                array('db'=>'level_penjualan','dt'=>'level_penjualan'),
                array('db'=>'level_jual','dt'=>'level_jual'),
                array('db'=>'kuota','dt'=>'kuota'),
                array(
                        'db'=>'id',
                        'dt'=>'aksi',
                        'formatter'=>function($d){
                            return anchor('user_agent/edit/'.$d,'edit');
                        }
                    )
                    );

            $sql_details = array(
                'user'=>$this->db->username, //root
                'pass'=>$this->db->password, // 
                'db'=>$this->db->database, //raimu_backend
                'host'=>$this->db->hostname //localhost
            );

        echo json_encode(
                SSP::simple($_GET,$sql_details,$tabel,$primarykey,$columns)
            );
        }


        function data_tester(){  //ini untuk kueri data tester yang akan di tampilkan dalam tabel
            $tabel='face';
            $primarykey='id';
            $columns = array(
                array('db'=>'kode','dt'=>'kode'),
                array('db'=>'tgl_sekarang','dt'=>'tgl_sekarang'),
                array('db'=>'id','dt'=>'id'),
                array('db'=>'nama','dt'=>'nama'),
                array('db'=>'tgl_lahir','dt'=>'tgl_lahir'),
                array('db'=>'total','dt'=>'total'),
                array('db'=>'hasil','dt'=>'hasil'),
                array('db'=>'konfirmasi','dt'=>'konfirmasi'),
                array(
                        'db'=>'id',
                        'dt'=>'aksi',
                        'formatter'=>function($d){
                            return "<a hfref='edit.php?id=$d'>konfirmasi</a>";
                        }
                    )
                    );

            $sql_details = array(
                'user'=>$this->db->username, //root
                'pass'=>$this->db->password, // 
                'db'=>$this->db->database, //raimu_backend
                'host'=>$this->db->hostname //localhost
            );

        echo json_encode(
                SSP::simple($_GET,$sql_details,$tabel,$primarykey,$columns)
            );
        }
       function list_user(){
            $this->template->load('menu','user/list');
        }

       function profile(){
            $this->template->load('menu','user/profile');
        }

     

        function upload_foto_user(){
            $config['upload_path'] = './upload/img/foto_user/';
            $config['allowed_types']      = '.jpg|png|jpeg';
            $config['max_size']      = 5120;
            $this->load->library('upload',$config);
            $this->upload->do_upload('foto');
            $upload = $this->upload->data();
            return $upload['file_name'];

        }

        function add_user(){
            if (isset ($_POST['submit'])){
                $uploadfoto = $this->upload_foto_user(); //script ini untuk upload foto berdasarkan function uploadnya
                $this->Model_user->save($uploadfoto); //jika menambahkah foto user wajib menambahkan parameter
            }else{ $this->template->load('menu','user/add');}
        }
       function index(){
            $this->template->load('menu','tester/list');
        }
        public function edit(){
            $idnya              = $this->uri->segment(3);
             $data['user']      =$this->db->get_where('v_tbl_user',array('id'=>$this->uri->segment(3)))->row_array(); //variabel array $data['wajahmu] akan mengenerate  menjadi variabel $wajahmu sebagai objek
            $this->template->load('menu','user/edit',$data);
         }
       
    }