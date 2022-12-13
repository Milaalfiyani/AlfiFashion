<div class="row text-center mt-5">

    <?php foreach ($produk as $prdk) : ?>

        <div class="card ml-3 " style="width: 16rem;">
            <img src="<?= base_url() . '/uploads/' . $prdk->image ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $prdk->nama_barang ?></h5>
                <h4><span class="badge  badge-success mb-3 ">Rp.<?= $prdk->harga_barang ?></span></h4>
                <hr>

                <?= anchor('dashboard/tambah_ke_keranjang/' . $prdk->id, '<div class="btn btn-sm btn-primary"> Tambah Ke Keranjang</div>') ?>
                <a href="#" class="btn btn-success btn-sm "><i class="fa fa-search"></i> Detail</a>

            </div>
        </div>


    <?php endforeach; ?>
</div>
</div>