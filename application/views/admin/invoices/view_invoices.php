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
                                                <th>No nota</th>
                                                <th>Konsumen</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Tujuan</th>
                                                <th>Total Pembelian</th>
                                                <th>Ongkir</th>
                                                <th>Total Biaya</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No nota</th>
                                                <th>Konsumen</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Tujuan</th>
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
                                                <td><?=$invoice->nm_konsumen."<br>(".$invoice->email.")"?></td>
                                                <td><?=$invoice->tgl_jual?></td>
                                                <td><?=$invoice->tujuan?></td>
                                                <td class="text-right">Rp. <?=number_format($invoice->pembelian)?></td>
                                                <td class="text-right">Rp. <?=number_format($invoice->ongkir)?></td>
                                                <td class="text-right">Rp. <?=number_format($invoice->total_biaya)?></td>
                                                <td>
                                                    <?=anchor(	'admin/penjualan/detail/' . $invoice->no_nota, 'Details',['class'=>'btn btn-info btn-sm'])?> 
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

            $(document).ready(function() {
                $('#dataTable').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'copy',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                            }
                        },
                        {
                            extend: 'excel',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                            }
                        },
                        {
                            extend: 'csv',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                            }
                        },
                        
                        {
                            extend: 'pdf',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                            }
                        },
                        
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                            }
                        },
                    ]
                } );
            } );

        </script>
    </body>

</html>

