<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders_model extends CI_Model {
	
	public function process()
	{
		//create new order
		$order = array(
            'no_nota'		=> "",
            'kd_konsumen'   => $this->session->userdata('id'),
			'tgl_jual'	    => date('Y-m-d H:i:s', mktime( date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
			'total_biaya'	=> $this->cart->total()
		);
		$this->db->insert('penjualan', $order);
		$order_id = $this->db->insert_id();
		
		// put ordered items in orders table
		foreach($this->cart->contents() as $item){
			$data = array(
				'id'		        => "",
				'no_nota'		    => $order_id,
				'kd_brg'		    => $item['id'],
				'hrg_brg'		    => $item['price'],
				'jml_brg'		    => $item['qty']
			);
			$this->db->insert('detail_penjualan', $data);
        }
        
		foreach($this->cart->contents() as $item){
            $hasil = $this->db->where('kd_barang',$item['id'])->limit(1)->get('barang')->result_array();
            foreach($hasil AS $row) {
                $stok = $row['stok'];
            };
			$data = array(
                'stok'  => $stok-$item['qty']
			);
			$this->db->update('barang', $data, array('kd_barang'=>$item['id']));
		}
		
		return TRUE;
	}
	
    public function all()
    {
        $this->db->select('penjualan.no_nota, konsumen.nm_konsumen, penjualan.tgl_jual, penjualan.total_biaya, penjualan.pembayaran, penjualan.kembalian');
        $this->db->from('penjualan');
        $this->db->join('konsumen','penjualan.kd_konsumen=konsumen.kd_konsumen');
        $query=$this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_orders_by_id($id)
    {
        $hasil = $this->db->where('no_nota',$id)->limit(1)->get('penjualan');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    }

    public function get_detail_by_id($id)
    {
        $this->db->select('barang.nm_barang, barang.harga, detail_penjualan.jml_brg');
        $this->db->from('detail_penjualan');
        $this->db->join('barang','detail_penjualan.kd_brg=barang.kd_barang');
        $this->db->where('no_nota',$id);
        $query=$this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return array();
        }
    }
}