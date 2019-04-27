<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    function createData() {
        $data = array (           
 'nama_instansi' => $this->input->post('nama_instansi'),
            'kota_instansi' => $this->input->post('kota_instansi'),
            'alamat' => $this->input->post('alamat'),
		  
            'email' => $this->input->post('email'),
            'telp' => $this->input->post('telp')
        );
        $this->db->insert('instansi', $data);
    }

    function getAllData() {
        $query = $this->db->query('SELECT * FROM instansi');
        return $query->result();
    }

    function getData($id_instansi) {
        $query = $this->db->query('SELECT * FROM instansi WHERE `id_instansi` =' .$id_instansi);
        return $query->row();
    }

    function updateData($id_instansi) {
        $data = array (
            'nama_instansi' => $this->input->post('nama_instansi'),
            'kota_instansi' => $this->input->post('kota_instansi'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'telp' => $this->input->post('telp')
        );
        $this->db->where('id_instansi', $id_instansi);
        $this->db->update('instansi', $data);
    }

    function deleteData($id_instansi) {
        $this->db->where('id_instansi', $id_instansi);
        $this->db->delete('instansi');
    }
}
