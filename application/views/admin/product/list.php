<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("admin/_partials/head.php") ?>
    </head>
    <body class="sb-nav-fixed">
        <?php $this->load->view("admin/_partials/navbar.php") ?>
        <div id="layoutSidenav">
            <?php $this->load->view("admin/_partials/sidebar.php") ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="<?php echo site_url('admin/products/add') ?>"><i class="fas fa-plus"></i> Tambah Produk</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <!-- <th>No</th> -->
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <!-- <th>No</th> -->
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        
                                        <?php 
                                            // $no = 0;
                                            foreach ($products as $product): 
                                            // $no++;
                                        ?>
                                        <tr>
                                            <!-- <td width ="50" class="text-center">
                                                <?php //echo $no ?>
                                            </td> -->
                                            <td>
                                                <?php echo $product->produk_nama ?>
                                            </td>
                                            <td width="150">
                                                <?php echo "Rp. ".number_format($product->produk_harga) ?>
                                            </td>
                                            <td width="150">
                                                <img src="<?php echo base_url('assets/images/'.$product->produk_image) ?>" width="64" class="mx-auto d-block"/>
                                            </td>
                                            <td width="200">
                                                <a href="<?php echo site_url('admin/products/edit/'.$product->produk_id) ?>"
                                                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                <a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->produk_id) ?>')"
                                                href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
        <?php $this->load->view("admin/_partials/js.php") ?>
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <script>
            function deleteConfirm(url){
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }
        </script>
    </body>
</html>
