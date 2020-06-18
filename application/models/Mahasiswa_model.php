<?php
class Mahasiswa_model extends CI_Model{
 
    function get_all_mahasiswa(){
        $hasil=$this->db->get('mahasiswa');
        return $hasil;
    }
     
    function simpan_mahasiswa($nim,$nama,$prodi,$image_name){
        $data = array(
            'nim'       => $nim,
            'nama'      => $nama,
            'prodi'     => $prodi, 
            'qr_code'   => $image_name
        );
        $this->db->insert('mahasiswa',$data);
    }
    function delete($nim){
        $this->db->where('nim',$nim);
        $this->db->delete('mahasiswa');
    }
}