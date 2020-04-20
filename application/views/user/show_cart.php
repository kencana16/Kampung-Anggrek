<!DOCTYPE html>
<html lang="en">
	<head>
        <?php $this->load->view('user/_partials/head') ?>
	</head>
	<body>
		<?php $this->load->view('user/_partials/navbar') ?>
		
		<div  style="min-height: 80vh">
			<div class="row my-5 col-lg-8 mx-auto">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover"  id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No</th>
								<th>Gambar</th>
								<th>Produk</th>
								<th>Jumlah</th>
								<th class="text-right">Harga</th>
								<th class="text-right">Subtotal</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody class="detail_cart"></tbody>
						<tfoot>
							<tr>
								<th class="text-right" colspan="5">Total </th>
								<th class="text-right" id="total"><?= "Rp. ".number_format($this->cart->total()); ?></th>
								<th class="text-center"><?= anchor('produk/clear_cart','Clear Cart',['class'=>'btn btn-sm btn-danger']) ?> </td>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="mx-auto">
					<?= anchor('order/','Check Out',['class'=>'btn btn-success btn-md']) ?>
				</div>
			</div>
		</div>
		<?php $this->load->view('user/_partials/footer') ?>
		<?php $this->load->view('user/_partials/js') ?>
		<script>
			$('.cart-nav').remove();
			$(document).ready(function() {
				// Load shopping cart
				$('.detail_cart').load("<?php echo base_url();?>index.php/produk/load_cart",);

				//Hapus Item Cart
				$(document).on('click','.hapus_cart',function(){
					var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
					$.ajax({
						url : "<?php echo base_url();?>index.php/produk/hapus_cart",
						headers: {  'Access-Control-Allow-Origin': '*' },
						method : "POST",
						data : {row_id : row_id},
						success :function(data){
							$('.detail_cart').html(data);
							$('#total').html('<?= "Rp. ".number_format($this->cart->total())?>');
						}
					});
					
				});
			} );
		</script>
	</body>
</html>