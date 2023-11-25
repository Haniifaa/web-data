<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_Model {
// public function getData($tabel){
    // $datanih = $this->db->query("SELECT * FROM ".$tabel);
    // return $datanih->result_array();
    // }

    // query builder, pakek
    public function getData($tabel){
        $databrg=$this->db->get($tabel);
        return $databrg->result_array();
    }

    public function masukkan($tabel, $data){
        $databrg = $this->db->insert($tabel, $data);
        return $databrg;
    }



    public function getData_khusus($tabel, $where){
        $databrg = $this->db->get_where($tabel, $where);
        return $databrg->result_array();
    }
    
    public function find($id){
        $result=$this->db->where('no',$id)
                         ->limit(1)
                         ->get('barang');
        if($result->num_rows() >0){
            return $result->row();
        }else{
            return array();
        }
        

    }
}