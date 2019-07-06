<div class="hk-pg-header">
	<h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Update Pengerjaan</h4>
</div>

<!-- Row -->
<div class="row">
	<div class="col-xl-12">
		<section class="hk-sec-wrapper">
			<form enctype="multipart/form-data" action="<?= site_url('admin/pemesanan/pesan_offline/handlerpesanoffline') ?>" method="post">
				<h5 class="hk-sec-title"><?= $update_on_going[0]['kode_pesanan']  ?></h5>
				<div class="row">
                    <div class="col-sm">
                        <div class="row">
                        	<?php foreach ($update_on_going as $key => $data) { ?>
                            <div class="col-6 mb-5">
                                <label><?= $data['nama_tipe'].' - '.$data['nama_ukuran'] ?></label>
                            </div>
                            <div class="col-md-6 mb-5">
                                <select class="form-control">
                                	<option>Belum dikerjakan</option>
                                	<option>Jumlah barang</option>
                                	<option>Barang selesai dikerjakan</option>
                                	<option>Barang belum dijemput/antar</option>
                                	<option>Barang sudah dijemput</option>
                                	<option>Selesai</option>
                                </select>
                            </div>
                        	<?php } ?>
                        </div><hr>
						<button id="" name="" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
			</form>
		</section>
	</div>
</div>