<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>

<link href="<?= base_url(); ?>assets/assets/css/style.css" rel="stylesheet">

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Produk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('index.php/admin/dashboard') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Data Barang</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col">

                    <div class=" card ">
                        <div class="card-body">
                            <h5 class="card-title">Data Barang</h5>

                            <!-- General Form Elements -->
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#tambah_produk">
                                <i class="fas fa-plus"></i> Tambah Data Barang</button>
                            <table class="table  my-3  ">
                                <tr class="table-primary   ">
                                    <th>no</th>
                                    <th>nama barang</th>
                                    <th>harga barang</th>
                                    <th>detail produk</th>
                                    <th>image</th>
                                    <th class="text-center" colspan="2">AKSI</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($produk as $prdk) : ?>
                                    <tr>
                                        <td>
                                            <?= $no++ ?>
                                        </td>
                                        <td><?= $prdk->nama_barang ?></td>
                                        <td><?= $prdk->harga_barang ?></td>
                                        <td><?= $prdk->detail_produk ?></td>
                                        <td><?= $prdk->image ?></td>

                                        <td><?php echo anchor('admin/data_barang/hapus/' . $prdk->id, '<div class="btn btn-outline-danger btn-sm">HAPUS</i></div>') ?>
                                        </td>
                                        <td><?php echo anchor('/admin/data_barang/edit_produk/' . $prdk->id, '<div class="btn btn-outline-primary btn-sm">EDIT</i></div>') ?>
                                        </td>

                                    </tr>
                                <?php endforeach ?>
                            </table>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="tambah_produk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <h4 class="modal-title fs-5" id="exampleModalLabel">Form Input Data Barang</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div><br>
                                    <div class="modal-body">
                                        <form action="<?= base_url() . 'index.php/admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label>nama barang</label>
                                                <input type="text" name="nama_barang" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>harga barang</label>
                                                <input type="text" name="harga_barang" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>detail produk</label>
                                                <input type="text" name="detail_produk" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


        </section>


    </main><!-- End #main -->

</body>