<?php
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
defined('BASEPATH') OR exit('No direct script access allowed');
    class Cart extends CI_Controller{
        
        function __construct(){
            parent:: __construct();
            $this -> load -> model('cart_model');
        }

        function index(){
            $data['data'] = $this -> cart_model -> get_all_product();
            $this -> load -> view('v_cart', $data);
        }

        function add_to_cart(){
            $data = array(
                'id' => $this -> input -> post('produk_id'),
                'name' => $this -> input -> post('produk_nama'),
                'price' => $this -> input -> post('produk_harga'),
                'qty' => $this -> input -> post('quantity'),
            );
            $this -> cart -> insert($data);
            echo $this -> show_cart();
        }

        function show_cart(){
            $output = '';
            $no = 0;
            foreach ($this -> cart -> contents() as $items) {
                $no++;
                $output .= '
                    <tr><small>
                        <td >'.$items['name'].'</td>
                        <td class="text-right">'.number_format($items['price']).'</td>
                        <td class="text-right">'.$items['qty'].'</td>
                        <td class="text-right">'.number_format($items['subtotal']).'</td>
                        <td> <button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-sm"> Batal </button> </td>
                    </small></tr>
                ';
            }
            $output .= '
                <tr>
                    <th colspan="3">Total</th>
                    <th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
                </tr>
            ';
            return $output;
        }

        function load_cart(){
            echo $this -> show_cart();
        }

        function hapus_cart(){
            $data = array(
                'rowid' => $this -> input -> post('row_id'),
                'qty' => 0,
            );
            $this -> cart ->update($data);
            echo $this -> show_cart();
        }
    }
?>