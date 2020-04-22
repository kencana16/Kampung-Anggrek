<!DOCTYPE html>

<html lang="en">

	<head>

    <?php $this->load->view('user/_partials/head') ?>

	</head>

	<body>

		<?php $this->load->view('user/_partials/navbar') ?>

		<div class="container" style="min-height:60vh">
			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Transaksi Berhasil</h5>
					<button type="button" class="close" onclick="location.href='<?= base_url()?>'">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body py-4">
					Terimakasih,<br>
					Transaksi berhasil diproses, Silahkan kembali ke halaman utama untuk memulai transaksi kembali
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" onclick="location.href='<?= base_url()?>'">Kembali ke beranda</button>
				</div>
				</div>
			</div>
			</div>

			</div>
        

		</div>

		<?php $this->load->view('user/_partials/footer') ?>
		<?php $this->load->view('user/_partials/js') ?>
		<script type="text/javascript">
			$(window).on('load',function(){
				$('#exampleModalCenter').modal('show');
			});
		</script>

	</body>

</html