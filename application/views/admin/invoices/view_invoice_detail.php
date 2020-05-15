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
                                &nbsp;
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
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
                    </div>
                </main>
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
        <?php $this->load->view("admin/_partials/js.php") ?>
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
        </script>
    </body>
</html>
