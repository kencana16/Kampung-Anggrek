<?php
    class Cart_model extends CI_Model{
        function get_all_product(){
            $hasil = $this -> db -> get('tbl_produk');
            return $hasil -> result();
            
        }
    }
?>