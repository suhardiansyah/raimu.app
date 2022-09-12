<?php
    class Model_user extends CI_Model{
        
        function ceklogin ($email,$password){
            //pemanggilan query email  dan password dari database
            $this->db->where('email',$email);      // nama kolom yang ingin di ambil atau digunakan
            $this->db->where('password',$password);
            $user = $this->db->get('v_tbl_user')->row_array(); // menggunakan tabel yang mana lalau di jadikan array
            return $user;

        }

        function save($foto){
          
            $data= array (
                'user_id'=>$this->input->post('userid',TRUE),
                'nama'=>$this->input->post('nama',TRUE),
                'tgl_lahir'=>$this->input->post('tgl_lahir',TRUE),
                'email'=>$this->input->post('email',TRUE),                
                'password'=>hash("sha256",$this->input->post('password',TRUE)),
                'level_akses'=>$this->input->post('level_akses',TRUE),
                'level_penjualan'=>$this->input->post('level_penjualan',TRUE),
                'foto'=>$foto,
                'kuota'=>$this->input->post('kuota',TRUE),
                'tgl_daftar'=>$this->input->post('tgl_daftar',TRUE)

            );

            //print_r($data);
            $this->db->insert('tabel_detail_user',$data); // fungsi menyimpan data
            redirect('user_agent/list_user');
        }

        
    }