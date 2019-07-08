<div class="hk-pg-header">
	<h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Tolak Pengerjaan</h4>
</div>

<!-- Row -->
<div class="row">
	<div class="col-xl-12">
		<section class="hk-sec-wrapper">
            <div class="pull-right">
                <a href="<?= site_url('admin/pemesanan/pesanan_menunggu_acc') ?>" class="btn btn-warning btn-sm">
                    <i class="fa fa-undo"></i> Back</a>
            </div>
			<form enctype="multipart/form-data" action="<?= site_url('admin/pemesanan/pesan_offline/handlerpesanoffline') ?>" method="post">
				<h5 class="hk-sec-title">Kode Pesanan</h5>
				<div class="row">
                    <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="alamat">Pesana anda:</label>
                                <div class="col-xl-10">
                                    <textarea type="text" class="form-control" id="tolak"></textarea>
                                </div>
                        </div><hr>
						<button id="" name="" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
			</form>
		</section>
	</div>
</div>