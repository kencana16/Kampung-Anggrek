<!DOCTYPE html>
<html lang="en">
	<head>
	<?php $this->load->view('user/_partials/head') ?>
	<style>
		.invalid-feedback p{ margin:0px}
	</style>
	</head>
	<body>
		<?php $this->load->view('user/_partials/navbar') ?>
		
		<div style="min-height: 100vh;" class="bg-light pt-md-5">
			<div class="card col-lg-6 col-md-8 col-12 py-5 m-auto ">
				<div class="card-head"><h3><center>Masuk</center></h3></div>
				<div class="card-body">
					<?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
					<?php endif; ?>
					<!-- form -->
					<?=form_open('login', ['class'=>'form-horizontal'])?>
						<div class="form-group row">
							<label class="col-lg-3 col-md-12  col-form-label">Nama Pengguna</label>
							<div class="col-lg-9  col-md-12 ">
								<input type="text" class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
								name="username" placeholder="Budi" value="<?php echo set_value('username'); ?>">
								<div class="invalid-feedback">
									<span><?php echo form_error('username') ?></span>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-md-12">Kata Sandi</label>
							<div class="col-lg-9  col-md-12">
								<input type="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								name="password" placeholder="Kata Sandi" >
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-success">Masuk</button>
						</div>
					</form>
					<div class="register text-center mt-4">
						Belum memiliki akun? <a href="<?php echo base_url();?>index.php/register" class="">Daftar Sekarang!</a>
					</div>
				</div>
			</div>
		</div>

		<?php $this->load->view('user/_partials/footer') ?>
		<?php $this->load->view('user/_partials/js') ?>

	</body>
</html