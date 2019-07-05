<section class="hk-sec-wrapper">
	<div class="pull-right">
		<a href="<?= site_url('admin/pemesanan/pesanan_menunggu_acc') ?>" class="btn btn-warning btn-sm">
			<i class="fa fa-undo"></i> Back</a>
	</div>
    <h5 class="hk-sec-title">Detail pemesanan</h5>
    <?php foreach($datas as $data): ?>
    <div class="row mt-5">
        <div class="col-sm">
            <div class="row">
                <div class="col-5">
                    <a href="<?= base_url(). '/assets/gambar/model_pesanan/'.$data['gambar_pesanan'] ?>" target="_blank"><img class="w-80"  src="<?= base_url(). '/assets/gambar/model_pesanan/'.$data['gambar_pesanan'] ?>" alt=""></a>
                </div>
                <div class="col-6">
                    <h3><?= $data['nama_tipe'].' - '.$data['nama_ukuran'] ?></h3>
                    <p>Jumlah : <?= $data['jumlah'] ?></p>
                    <p>Deskripsi : <?= $data['deskripsi_pesanan'] ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</section>