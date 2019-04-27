<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
 
class instansi extends REST_Controller {
function __construct()
    {
        // Construct the parent class
        parent::__construct();

}
public function index_get()
{


        $id_instansi = $this->get('id_instansi');
	if ($id_instansi == '') {
            $instansi = $this->db->get('instansi')->result();
        } else {
            $this->db->where('id_instansi', $id_instansi);
            $instansi = $this->db->get('instansi')->result();
        }
        $this->response($instansi, 200);
    }

public function index_post()
 {
        $data = array(
                    'id_instansi'           => $this->post('id_instansi'),
                    'nama_instansi'          => $this->post('nama_instansi'),
		     'kota_instansi'          => $this->post('kota_instansi'),
		    'alamat'          => $this->post('alamat'),
                    'email'          => $this->post('email'),
                    'telp'        => $this->post('telp'));
        $insert = $this->db->insert('instansi', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

// update data instansi
   public function index_put() {
        $status= $this->put('id_instansi');
        $data = array(
                    'id_instansi'       => $this->put('id_instansi'),
                    'nama_instansi'      => $this->put('nama_instansi'),
		    'kota_instansi'       => $this->put('kota_instansi'),
		      'alamat'      => $this->put('alamat'),
                    'email'      => $this->put('email'),
                    'telp'    => $this->put('telp'));
        $this->db->where('id_instansi', $id_instansi);
        $update = $this->db->update('instansi', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

// delete instansi
    public function index_delete() {
        $id_instansi = $this->delete('id_instansi');
        $this->db->where('id_instansi', $id_instansi);
        $delete = $this->db->delete('instansi');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}
?>


 

