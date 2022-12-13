<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>

<link href="<?= base_url(); ?>assets/assets/css/style.css" rel="stylesheet">

<body>
    <div class="pagetitle">
        <h1>Produk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('index.php/admin/dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item active">Edit Data Barang</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="ml-5">
        <h3>Edit Data Barang</h3>

        <?php foreach ($produk as $prdk) : ?>

            <form method="post" action="<?= base_url() . 'admin/data_barang/update' ?>">
                <div class="form-group">
                    <label>nama barang</label>
                    <input type="text" name="nama_barang" class="form-control" value="<?= $prdk->nama_barang ?>">
                </div>

                <div class="form-group">
                    <label>harga barang</label>
                    <input type="text" name="harga_barang" class="form-control" value="<?= $prdk->harga_barang ?>">
                </div>

                <div class="form-group">
                    <label>detail produk</label>
                    <input type="hidden" name="id" class="form-control" value="<?= $prdk->id ?>">
                    <input type="text" name="detail_produk" class="form-control" value="<?= $prdk->detail_produk ?>">
                </div>

                <div class="form-group">
                    <label>image</label>
                    <input type="text" name="detail_produk" class="form-control" value="<?= $prdk->image ?>">
                </div>

                <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
            </form>
        <?php endforeach; ?>
    </div>
</body>