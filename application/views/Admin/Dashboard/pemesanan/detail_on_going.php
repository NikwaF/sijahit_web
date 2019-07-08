<section class="hk-sec-wrapper">
    <div class="pull-right">
        <a href="<?= site_url('admin/pemesanan/on_going') ?>" class="btn btn-warning btn-sm">
            <i class="fa fa-undo"></i> Back</a>
    </div>
    <h3 class="hk-sec-title">Detail On Going</h3>
    <hr>
    <h4 class=hk-sec-tittle>#<?= $detail_on_going[0]['kode_pesanan']  ?></h4><br>
    <div class="row">
        <?php foreach ($detail_on_going as $data): ?>
        <div class="col-sm">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-8 mb-20">
                    <div class="card w-260p w-sm-290p">
                        <img class="card-img-top" src="<?= base_url(). '/assets/gambar/model_pesanan/'.$data['gambar_pesanan']?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['nama_tipe'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $data['deskripsi_pesanan'] ?></h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $data['jumlah'] ?></li>
                            <li class="list-group-item">Status</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>