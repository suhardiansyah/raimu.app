<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
    Class Tester extends ci_controller{
        function __construct(){
            parent::__construct();
            $this->load->library('mpdf/mpdf');
            $this->load->library('ssp');
            $this->load->helper('form');
            $this->load->model('Model_tester');
            
        }
        
        function data_tester(){  //ini untuk kueri data tester yang akan di tampilkan dalam tabel
            $tabel='v_face';
            $primarykey='kode';
            $columns = array(
                array('db'=>'kode','dt'=>'kode'), //db untuk data yg di database, dt untuk data yang di tampilkan
                array('db'=>'tgl_sekarang','dt'=>'tgl_sekarang'),
                array('db'=>'id','dt'=>'id'),
                array('db'=>'nama','dt'=>'nama'),
                array('db'=>'tgl_lahir','dt'=>'tgl_lahir'),
                array('db'=>'total','dt'=>'total'),
                array('db'=>'keterangan_kepribadian','dt'=>'keterangan_kepribadian'),
                array('db'=>'keterangan_konfirmasi','dt'=>'keterangan_konfirmasi'),
                
                
                array(
                        'db'=>'kode',
                        'dt'=>'aksi',
                        'formatter'=>function($d){
                            //return "<a hfref='edit.php?id=$d'>periksa</a>";
                            return anchor('tester/periksa/'.$d,'periksa');
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
        public function periksa(){
           $idnya              = $this->uri->segment(3);
            $data['wajahmu']      =$this->db->get_where('face',array('kode'=>$this->uri->segment(3)))->row_array(); //variabel array $data['wajahmu] akan mengenerate  menjadi variabel $wajahmu sebagai objek
           $this->template->load('menu','tester/periksa',$data);
        }
        function index(){
            $this->template->load('menu','tester/list');
        }

        public function tt(){
            $idnya = $_POST['kode'];
           
            if (isset ($_POST['tt'])){
               $this->Model_tester->tt();
               // ini load template print
                $pdf = new Mpdf('utf-8', array(215,330));
                $stylesheet = file_get_contents(base_url() . 'assets/new_pdf.css');
                 $add_html = $this->load->view('tt/print.php', $this->data, true);#menambahkan template dari HTML
                #$add_html='Coba';
                $pdf->WriteHTML($add_html);
                $filename = str_replace(' ','','The Thinker_' .'id_'.$idnya.'_dites'.date('dmY') . '.pdf');
                $filepath = 'c:\\xampp1\\htdocs\\raimu.app\\hasil\\'; //nama direktori tempat penyimpanan
                $pdf->Output($filepath.$filename, 'f'); //menyimpan
                //$pdf->Output($filepath.$filename,'i'); //melihat  
                //script update link ke db
                $data= array (
                    'link'=> $filepath.$filename  
                );
                $this->db->update('face',$data,array('kode' => $idnya));       
                //end script update link ke db

                 redirect('tester');
            }else{  
                $idnya              = $this->uri->segment(3);
                $data['wajahmu']      =$this->db->get_where('face',array('id'=>$this->uri->segment(3)))->row_array(); //variabel array $data['wajahmu] akan mengenerate  menjadi variabel $wajahmu sebagai objek
               $this->template->load('menu','tester/list',$data);
            }
        }


        public function tkm(){
            $idnya = $_POST['kode'];
              if (isset ($_POST['tkm'])){
               $this->Model_tester->tkm(); //jika menambahkah foto user wajib menambahkan parameter
               // ini load template print
               $pdf = new Mpdf('utf-8', array(215,330));
               $stylesheet = file_get_contents(base_url() . 'assets/new_pdf.css');
                $add_html = $this->load->view('tt/print.php', $this->data, true);#menambahkan template dari HTML
               #$add_html='Coba';
               $pdf->WriteHTML($add_html);
               
               $filename = str_replace(' ','','The King Maker_' .'id_'.$idnya.'_dites'.date('dmY') . '.pdf');
               $filepath = 'c:\\xampp1\\htdocs\\raimu.app\\hasil\\'; //nama direktori tempat penyimpanan
               $pdf->Output($filepath.$filename, 'f'); //menyimpan
               //$pdf->Output($filepath.$filename,'i'); //melihat  
               //script update link ke db
               $data= array (
                   'link'=> $filepath.$filename  
               );
               $this->db->update('face',$data,array('kode' => $idnya));       
               //end script update link ke db

               redirect('tester');
            }else{  
                $idnya              = $this->uri->segment(3);
                $data['wajahmu']      =$this->db->get_where('face',array('id'=>$this->uri->segment(3)))->row_array(); //variabel array $data['wajahmu] akan mengenerate  menjadi variabel $wajahmu sebagai objek
               $this->template->load('menu','tester/list',$data);
            }
        }

        public function td(){
            $idnya = $_POST['kode'];
            if (isset ($_POST['td'])){
               $this->Model_tester->td(); //jika menambahkah foto user wajib menambahkan parameter
               // ini load template print
               $pdf = new Mpdf('utf-8', array(215,330));
               $stylesheet = file_get_contents(base_url() . 'assets/new_pdf.css');
                $add_html = $this->load->view('tt/print.php', $this->data, true);#menambahkan template dari HTML
               #$add_html='Coba';
               $pdf->WriteHTML($add_html);
               
               $filename = str_replace(' ','','The Diligent_' .'id_'.$idnya.'_dites'.date('dmY') . '.pdf');
               $filepath = 'c:\\xampp1\\htdocs\\raimu.app\\hasil\\'; //nama direktori tempat penyimpanan
               $pdf->Output($filepath.$filename, 'f'); //menyimpan
               //$pdf->Output($filepath.$filename,'i'); //melihat  
               //script update link ke db
               $data= array (
                   'link'=> $filepath.$filename  
               );
               $this->db->update('face',$data,array('kode' => $idnya));       
               //end script update link ke db
               redirect('tester');
            }else{  
                $idnya              = $this->uri->segment(3);
                $data['wajahmu']      =$this->db->get_where('face',array('id'=>$this->uri->segment(3)))->row_array(); //variabel array $data['wajahmu] akan mengenerate  menjadi variabel $wajahmu sebagai objek
               $this->template->load('menu','tester/list',$data);
            }
        }

        public function tg(){
            $idnya = $_POST['kode'];
            if (isset ($_POST['tg'])){
               $this->Model_tester->tg(); //jika menambahkah foto user wajib menambahkan parameter
               // ini load template print
               $pdf = new Mpdf('utf-8', array(215,330));
               $stylesheet = file_get_contents(base_url() . 'assets/new_pdf.css');
                $add_html = $this->load->view('tt/print.php', $this->data, true);#menambahkan template dari HTML
               #$add_html='Coba';
               $pdf->WriteHTML($add_html);
               
               $filename = str_replace(' ','','The Generous_' .'id_'.$idnya.'_dites'.date('dmY') . '.pdf');
               $filepath = 'c:\\xampp1\\htdocs\\raimu.app\\hasil\\'; //nama direktori tempat penyimpanan
               $pdf->Output($filepath.$filename, 'f'); //menyimpan
               //$pdf->Output($filepath.$filename,'i'); //melihat  
               //script update link ke db
               $data= array (
                   'link'=> $filepath.$filename  
               );
               $this->db->update('face',$data,array('kode' => $idnya));       
               //end script update link ke db
               redirect('tester');
            }else{  
                $idnya              = $this->uri->segment(3);
                $data['wajahmu']      =$this->db->get_where('face',array('id'=>$this->uri->segment(3)))->row_array(); //variabel array $data['wajahmu] akan mengenerate  menjadi variabel $wajahmu sebagai objek
               $this->template->load('menu','tester/list',$data);
            }
        }

        public function tl(){
            $idnya = $_POST['kode'];
            if (isset ($_POST['tl'])){
               $this->Model_tester->tl(); //jika menambahkah foto user wajib menambahkan parameter
               // ini load template print
               $pdf = new Mpdf('utf-8', array(215,330));
               $stylesheet = file_get_contents(base_url() . 'assets/new_pdf.css');
                $add_html = $this->load->view('tt/print.php', $this->data, true);#menambahkan template dari HTML
               #$add_html='Coba';
               $pdf->WriteHTML($add_html);
               
               $filename = str_replace(' ','','The Leader_' .'id_'.$idnya.'_dites'.date('dmY') . '.pdf');
               $filepath = 'c:\\xampp1\\htdocs\\raimu.app\\hasil\\'; //nama direktori tempat penyimpanan
               $pdf->Output($filepath.$filename, 'f'); //menyimpan
               //$pdf->Output($filepath.$filename,'i'); //melihat  
               //script update link ke db
               $data= array (
                   'link'=> $filepath.$filename  
               );
               $this->db->update('face',$data,array('kode' => $idnya));       
               //end script update link ke db
               redirect('tester');
            }else{  
                $idnya              = $this->uri->segment(3);
                $data['wajahmu']      =$this->db->get_where('face',array('id'=>$this->uri->segment(3)))->row_array(); //variabel array $data['wajahmu] akan mengenerate  menjadi variabel $wajahmu sebagai objek
               $this->template->load('menu','tester/list',$data);
            }
        }

        public function tc(){
            $idnya = $_POST['kode'];
            if (isset ($_POST['tc'])){                
               $this->Model_tester->tc(); //jika menambahkah foto user wajib menambahkan parameter
               // ini load template print
               $pdf = new Mpdf('utf-8', array(215,330));
               $stylesheet = file_get_contents(base_url() . 'assets/new_pdf.css');
                $add_html = $this->load->view('tt/print.php', $this->data, true);#menambahkan template dari HTML
               #$add_html='Coba';
               $pdf->WriteHTML($add_html);
               
               $filename = str_replace(' ','','The Conceptor_' .'id_'.$idnya.'_dites'.date('dmY') . '.pdf');
               $filepath = 'c:\\xampp1\\htdocs\\raimu.app\\hasil\\'; //nama direktori tempat penyimpanan
               $pdf->Output($filepath.$filename, 'f'); //menyimpan
               //$pdf->Output($filepath.$filename,'i'); //melihat  
               //script update link ke db
               $data= array (
                   'link'=> $filepath.$filename  
               );
               $this->db->update('face',$data,array('kode' => $idnya));       
               //end script update link ke db
               redirect('tester');
            }else{  
                $idnya              = $this->uri->segment(3);
                $data['wajahmu']      =$this->db->get_where('face',array('id'=>$this->uri->segment(3)))->row_array(); //variabel array $data['wajahmu] akan mengenerate  menjadi variabel $wajahmu sebagai objek
               $this->template->load('menu','tester/list',$data);
            }
        }

        public function ti(){
            $idnya = $_POST['kode'];
            if (isset ($_POST['ti'])){
               $this->Model_tester->ti(); //jika menambahkah foto user wajib menambahkan parameter
               // ini load template print
               $pdf = new Mpdf('utf-8', array(215,330));
               $stylesheet = file_get_contents(base_url() . 'assets/new_pdf.css');
                $add_html = $this->load->view('tt/print.php', $this->data, true);#menambahkan template dari HTML
               #$add_html='Coba';
               $pdf->WriteHTML($add_html);
               
               $filename = str_replace(' ','','The Inspirator_' .'id_'.$idnya.'_dites'.date('dmY') . '.pdf');
               $filepath = 'c:\\xampp1\\htdocs\\raimu.app\\hasil\\'; //nama direktori tempat penyimpanan
               $pdf->Output($filepath.$filename, 'f'); //menyimpan
               //$pdf->Output($filepath.$filename,'i'); //melihat  
               //script update link ke db
               $data= array (
                   'link'=> $filepath.$filename  
               );
               $this->db->update('face',$data,array('kode' => $idnya));       
               //end script update link ke db
               redirect('tester');
            }else{  
                $idnya              = $this->uri->segment(3);
                $data['wajahmu']      =$this->db->get_where('face',array('id'=>$this->uri->segment(3)))->row_array(); //variabel array $data['wajahmu] akan mengenerate  menjadi variabel $wajahmu sebagai objek
               $this->template->load('menu','tester/list',$data);
            }
        }

        public function tm(){
            $idnya = $_POST['kode'];
            if (isset ($_POST['tm'])){
                $this->Model_tester->tm(); //jika menambahkah foto user wajib menambahkan parameter
               // ini load template print
               $pdf = new Mpdf('utf-8', array(215,330));
               $stylesheet = file_get_contents(base_url() . 'assets/new_pdf.css');
                $add_html = $this->load->view('tt/print.php', $this->data, true);#menambahkan template dari HTML
               #$add_html='Coba';
               $pdf->WriteHTML($add_html);
               
               $filename = str_replace(' ','','The Manager' .'id_'.$idnya.'_dites'.date('dmY') . '.pdf');
               $filepath = 'c:\\xampp1\\htdocs\\raimu.app\\hasil\\'; //nama direktori tempat penyimpanan
               $pdf->Output($filepath.$filename, 'f'); //menyimpan
               //$pdf->Output($filepath.$filename,'i'); //melihat  
               //script update link ke db
               $data= array (
                   'link'=> $filepath.$filename  
               );
               $this->db->update('face',$data,array('kode' => $idnya));       
               //end script update link ke db
               
               redirect('tester');
            }else{  
                $idnya              = $this->uri->segment(3);
                $data['wajahmu']      =$this->db->get_where('face',array('id'=>$this->uri->segment(3)))->row_array(); //variabel array $data['wajahmu] akan mengenerate  menjadi variabel $wajahmu sebagai objek
               $this->template->load('menu','tester/list',$data);
            }
        }

        public function te(){
            $idnya = $_POST['kode'];
            if (isset ($_POST['te'])){
               $this->Model_tester->te(); //jika menambahkah foto user wajib menambahkan parameter
                 // ini load template print
                 $pdf = new Mpdf('utf-8', array(215,330));
                 $stylesheet = file_get_contents(base_url() . 'assets/new_pdf.css');
                  $add_html = $this->load->view('tt/print.php', $this->data, true);#menambahkan template dari HTML
                 #$add_html='Coba';
                 $pdf->WriteHTML($add_html);
                 
                 $filename = str_replace(' ','','The Equalizer_' .'id_'.$idnya.'_dites'.date('dmY') . '.pdf');
                 $filepath = 'c:\\xampp1\\htdocs\\raimu.app\\hasil\\'; //nama direktori tempat penyimpanan
                 $pdf->Output($filepath.$filename, 'f'); //menyimpan
                 //$pdf->Output($filepath.$filename,'i'); //melihat  
                 //script update link ke db
                 $data= array (
                     'link'=> $filepath.$filename  
                 );
                 $this->db->update('face',$data,array('kode' => $idnya));       
                 //end script update link ke db
               redirect('tester');
            }else{  
                $idnya              = $this->uri->segment(3);
                $data['wajahmu']      =$this->db->get_where('face',array('id'=>$this->uri->segment(3)))->row_array(); //variabel array $data['wajahmu] akan mengenerate  menjadi variabel $wajahmu sebagai objek
               $this->template->load('menu','tester/list',$data);
            }
        }
}