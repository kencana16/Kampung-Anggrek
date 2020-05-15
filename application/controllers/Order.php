<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('username'))
		{
			redirect('login');
		}
		$this->load->model('orders_model');
	}

	public function index()
	{
		$no_nota = $this->orders_model->process();
		if($no_nota > 0 && $this->cart->total() > 0){
            $this->cart->destroy();
			redirect('order/success/'.$no_nota);
		} else {
			$this->session->set_flashdata('error','Failed to processed your order, please try again!');
			redirect('produk/cart');
		}
	}

	public function success($no_nota)
	{
        $data['no_nota'] = $no_nota;
		$this->load->view('user/order_success',$data);
	}

    public function my_order()
	{
		$data['invoices'] = $this->orders_model->get_orders_by_User();
		$this->load->view('user/my_orders/orders', $data);
    }
    
    public function my_order_detail($id)
	{
        $data['orders']  = $this->orders_model->get_detail_by_id($id);
		$this->load->view('user/my_orders/order_detail', $data);
	}
	
	public function printNota($no_nota)
	{
        $this->load->library('pdf');
        $this->load->model('shipping_model');
        $this->load->model('konsumen_model');
        $beli = $this->orders_model->get_orders_by_id($no_nota);
        $detail_beli = $this->orders_model->get_detail_by_id($no_nota);
        $konsumen = $this->konsumen_model->getProfile();
        $ongkirs =  $this->shipping_model->getOngkirInfo($beli->kode_kab,$beli->kurir);     
        $ongkir = json_decode($ongkirs, true); 

		$pdf = new FPDF('P', 'mm','Letter');
        $pdf->AddPage();
        $image="assets/images/logo.png";
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell( 40, 40, $pdf->Image($image, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
        $pdf->Cell(0,4,'',0,1,'C');
        $pdf->Cell(0,7,'Nota Pembelian',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(0,4,'Kampung Anggrek - Purwosari, Kec. Mijen, Kota Semarang, Jawa Tengah',0,1,'C');
        $pdf->Cell(0,4,'(+62 857-4222-3710)',0,1,'C');
		$pdf->Cell(10,7,'',0,1);
		
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,6,'No Nota',0,0,'L');
        $pdf->Cell(69,6,$no_nota,0,0,'L');
        $pdf->Cell(69,6,'Tanggal',0,0,'R');
		$pdf->Cell(30,6,date('Y-m-d', mktime(date('m'),date('d'),date('Y'))),0,1,'R');		
        $pdf->Cell(30,6,'Konsumen',0,0,'L');
		$pdf->Cell(69,6,$this->session->userdata('username'),0,0,'L');		
        $pdf->Cell(69,6,'Waktu',0,0,'R');
		$pdf->Cell(30,6,date('H:i:s', mktime( date('H'),date('i'),date('s'))),0,1,'R');		
		$pdf->Cell(10,3,'',0,1);
		
        $pdf->Cell(8,6,'No',1,0,'C');
        $pdf->Cell(100,6,'Nama Barang',1,0,'C');
        $pdf->Cell(35,6,'Harga',1,0,'R');
        $pdf->Cell(20,6,'Qty',1,0,'R');
        $pdf->Cell(35,6,'SubTotal',1,1,'R');
        $pdf->SetFont('Arial','',10);
        $no=0;$subtot=0;$tot=0;
        foreach ($detail_beli as $data) :
        $no++;
        $pdf->Cell(8,6,$no,1,0);
        $pdf->Cell(100,6,$data->nm_barang,1,0);
        $pdf->Cell(35,6,"Rp".number_format($data->harga, 0, ".", "."),1,0,'R');
        $pdf->Cell(20,6,$data->jml_brg,1,0,'R');
        $pdf->Cell(35,6,"Rp".number_format($data->harga*$data->jml_brg, 0, ".","."),1,1,'R');
        endforeach;

		$pdf->SetFont('Arial','B',10);
        $pdf->Cell(163,6,"Total Pembelian",1,0,'R');
        $pdf->Cell(35,6,"Rp ".number_format($beli->pembelian, 0, ".", "."),1,1,'R');
        $pdf->Cell(163,6,"Biaya Pengiriman",0,0,'R');
        $pdf->Cell(35,6,"Rp ".number_format($beli->ongkir, 0, ".", "."),0,1,'R');
        $pdf->Cell(163,6,"Total Biaya",0,0,'R');
        $pdf->Cell(35,6,"Rp ".number_format($beli->total_biaya, 0, ".", "."),0,1,'R');
        
        $pdf->Cell(35,20,"",0,1,'R');

        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(0,6,"Alamat Pengiriman",0,1,'L');
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,6, $konsumen->nm_konsumen,0,1,'L');
        $pdf->Cell(0,6, $konsumen->no_hp."/".$konsumen->email,0,1,'L');
        $pdf->Cell(0,6, $beli->tujuan,0,1,'L');
        $pdf->Cell(0,6, $ongkir['rajaongkir']['destination_details']['city_name'].' - '.$ongkir['rajaongkir']['destination_details']['province'],0,0,'L');

        $pdf->Output();
	}

	

	
}