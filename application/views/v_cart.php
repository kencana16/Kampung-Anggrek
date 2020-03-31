<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoping Cart dengan CI dan AJAX</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">

</head>
<body class="bg-light">
    <div class="container">
        <br>
        <h2>Shoping Cart Dengan Ajax dan Codeigniter</h2>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <h4>Produk</h4>
                <div class="row">
                    <?php foreach ($data as $row) : ?>
                        <div class="col-md-3 col-6 p-1">
                            <div class="card shadow-sm h-100">
                                <img class="card-img-top" src="<?php echo base_url().'assets/images/'.$row->produk_image; ?> " alt=" <?php echo $row->produk_nama; ?>">
                                <div class="card-body">
                                    <div class="card-title"> <?php echo $row->produk_nama; ?> </div>
                                    <div class="row">
                                        <div class="col-md-7 pr-1 m-0"><small><?php echo 'Rp.'.number_format($row->produk_harga); ?></small></div>
                                        <div class="col-md-5 pl-1 m-0"><input type="number" name="quantity" id="<?php echo $row->produk_id;?>" value="1" class="quantity form-control form-control-sm"></div>
                                    </div>
                                    <button class="add_cart btn btn-success btn-block mt-2 btn-sm" 
                                                data-produkid="<?php echo $row->produk_id;?>" 
                                                data-produknama="<?php echo $row->produk_nama;?>" 
                                                data-produkharga="<?php echo $row->produk_harga;?>">
                                                    Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card ">
                <div class="card-body p-2">
                    <h4 class="card-title  px-2 pt-1 ">Shoping Cart</h4>
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="detail_cart"></tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var produk_id = $(this).data("produkid");
            var produk_nama = $(this).data("produknama");
            var produk_harga = $(this).data("produkharga");
            var quantity = $('#' + produk_id).val();
            $.ajax({
                url : "<?php echo base_url();?>index.php/cart/add_to_cart",
                method : "POST",
                data : {
                    produk_id: produk_id, 
                    produk_nama:produk_nama, 
                    produk_harga: produk_harga, 
                    quantity: quantity},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
        });

        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url();?>index.php/cart/load_cart");
            
        //Hapus Item Cart
        $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : "<?php echo base_url();?>index.php/cart/hapus_cart",
                headers: {  'Access-Control-Allow-Origin': '*' },
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
    });
</script>
</body>
</html>