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
                                    <th>No nota</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Dikirim ke</th>
                                    <th>Total Pembelian</th>
                                    <th>Ongkir</th>
                                    <th>Total Biaya</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No nota</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Dikirim ke</th>
                                    <th>Total Pembelian</th>
                                    <th>Ongkir</th>
                                    <th>Total Biaya</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php foreach($invoices as $invoice) : ?>
                                <tr>
                                    <td><?=$invoice->no_nota?></td>
                                    <td><?=$invoice->tgl_jual?></td>
                                    <td><?=$invoice->tujuan?></td>
                                    <td class="text-right">Rp. <?=number_format($invoice->pembelian)?></td>
                                    <td class="text-right">Rp. <?=number_format($invoice->ongkir)?></td>
                                    <td class="text-right">Rp. <?=number_format($invoice->total_biaya)?></td>
                                    <td>
                                        <?=anchor(	'order/my_order_detail/' . $invoice->no_nota, 'Details',['class'=>'btn btn-info btn-sm'])?> 
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
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
</html>