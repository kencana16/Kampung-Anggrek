<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Product_model extends CI_Model{
    private $_table = "tbl_produk";

    public $produk_id;
    public $produk_nama;
    public $produk_harga;
    public $produk_image = "default.jpg";

    public function rules(){
        return[
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            
            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'required'],
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["produk_id" => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->produk_id = "";
        $this->produk_nama = $post["nama"];
        $this->produk_harga = $post["harga"];
        $this->produk_image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }
    
    public function update(){
        $post = $this->input->post();
        $this->produk_id = $post["id"];
        $this->produk_nama = $post["nama"];
        $this->produk_harga = $post["harga"];
        if (!empty($_FILES["image"]["name"])) {
            $this->produk_image = $this->_uploadImage();
        } else {
            $this->produk_image = $post["gambar_lama"];
        }
        return $this->db->update($this->_table, $this, array('produk_id'=>$post['id']));
    }
    
    public function delete($id){
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('produk_id'=>$id));
    }

    private function _uploadImage(){
        $config['upload_path']          = './assets/images';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->produk_id;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    private function _deleteImage($id){
        $product = $this->getById($id);
        if ($product->image != "default.jpg") {
            $filename = explode(".", $product->produk_image)[0];
            return array_map('unlink', glob(FCPATH."/assets/images/$filename.*"));
        }
    }
}
?>