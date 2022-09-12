<?php
    class Model_tester extends CI_Model{
        function tt(){          
            $data= array (
                'hasil'=>'1',
                'konfirmasi'=>'1'   
            );
            //print_r($data);
            $id = $this->input->post('kode');
            //$this->db->where->('kode',$id);
            $this->db->update('face',$data,array('kode' => $id)); // fungsi menyimpan data
        }

        function tkm(){          
            $data= array (
                'hasil'=>'2',
                'konfirmasi'=>'1'   
            );
            //print_r($data);
            $id = $this->input->post('kode');
            //$this->db->where->('kode',$id);
            $this->db->update('face',$data,array('kode' => $id)); // fungsi menyimpan data
        }

        function td(){          
            $data= array (
                'hasil'=>'3',
                'konfirmasi'=>'1'   
            );
            //print_r($data);
            $id = $this->input->post('kode');
            //$this->db->where->('kode',$id);
            $this->db->update('face',$data,array('kode' => $id)); // fungsi menyimpan data
        }

        function tg(){          
            $data= array (
                'hasil'=>'4',
                'konfirmasi'=>'1'   
            );
            //print_r($data);
            $id = $this->input->post('kode');
            //$this->db->where->('kode',$id);
            $this->db->update('face',$data,array('kode' => $id)); // fungsi menyimpan data
        }

        function tl(){          
            $data= array (
                'hasil'=>'5',
                'konfirmasi'=>'1'   
            );
            //print_r($data);
            $id = $this->input->post('kode');
            //$this->db->where->('kode',$id);
            $this->db->update('face',$data,array('kode' => $id)); // fungsi menyimpan data
        }

        function tc(){          
            $data= array (
                'hasil'=>'6',
                'konfirmasi'=>'1'   
            );
            //print_r($data);
            $id = $this->input->post('kode');
            //$this->db->where->('kode',$id);
            $this->db->update('face',$data,array('kode' => $id)); // fungsi menyimpan data
        }

        function ti(){          
            $data= array (
                'hasil'=>'7',
                'konfirmasi'=>'1'   
            );
            //print_r($data);
            $id = $this->input->post('kode');
            //$this->db->where->('kode',$id);
            $this->db->update('face',$data,array('kode' => $id)); // fungsi menyimpan data
        }

        function tm(){          
            $data= array (
                'hasil'=>'8',
                'konfirmasi'=>'1'   
            );
            //print_r($data);
            $id = $this->input->post('kode');
            //$this->db->where->('kode',$id);
            $this->db->update('face',$data,array('kode' => $id)); // fungsi menyimpan data
        }

        function te(){          
            $data= array (
                'hasil'=>'9',
                'konfirmasi'=>'1'   
            );
            //print_r($data);
            $id = $this->input->post('kode');
            //$this->db->where->('kode',$id);
            $this->db->update('face',$data,array('kode' => $id)); // fungsi menyimpan data
        }

        
    }