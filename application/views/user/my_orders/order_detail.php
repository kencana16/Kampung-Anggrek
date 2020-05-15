<!DOCTYPE html>
<html lang="en">
	<head>
    <?php $this->load->view('user/_partials/head') ?>
	</head>
	<body>
		<?php $this->load->view('user/_partials/navbar') ?>
        <div style="min-height: 60vh">
            <div class="col-10 m-auto">
                    <div class="table-responsive mt-5">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Harga Satuan</th>
                                    <th>Jumlah beli</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                foreach($orders as $order) : 
                                $subtotal = $order->jml_brg * $order->harga;
                            ?>
                            <tr>
                                <td><?=$order->nm_barang?></td>
                                <td><?="Rp. ".number_format($order->harga)?></td>
                                <td><?=$order->jml_brg?></td>
                                <td><?="Rp. ".number_format($subtotal)?></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Harga Satuan</th>
                                    <th>Jumlah beli</th>
                                    <th>Subtotal</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
            </div>
        </div>
		<?php $this->load->view('user/_partials/footer') ?>
		<?php $this->load->view('user/_partials/js') ?>
        <script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
                $('#dataTable').DataTable();
            } );
		</script>

	</body>

</html