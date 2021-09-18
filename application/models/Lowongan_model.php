<?php 
class Lowongan_model extends CI_Model{

    public function getAllLowongan(){
        $this->db->from('lowongan');
        $this->db->join('mitra','mitra.id = lowongan.mitra_id ');
        return $this->db->get();
    }

    public function getAllMitra(){
        return $this->db->get('mitra');
    }

    public function TambahDataLowongan($data){
        $this->db->insert('lowongan',$data);
        
    }

    public function DeleteData($data){
        $sql = "DELETE FROM lowongan WHERE lowongan_id=?";
        $this->db->query($sql,$data);
    }

    public function getLowonganById($id){
        $this->db->from('lowongan');
        $this->db->join('mitra', 'mitra.id = lowongan.mitra_id ');
        return $this->db->get_where('',['lowongan_id' => $id])->row_array();
    }
}