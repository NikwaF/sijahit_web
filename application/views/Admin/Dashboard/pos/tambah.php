<section class="hk-sec-wrapper">
	<div class="pull-right">
		<a href="<?= site_url('admin/kodepos/kode_pos') ?>" class="btn btn-warning btn-sm">
			<i class="fa fa-undo"></i>Back</a>
	</div>
    <h5 class="hk-sec-title">Tambah Data KodePos</h5>
    <div class="row">
        <div class="col-sm">
            <form method="post" action="">
                <div class="form-group">
                    <div class="col-md-4 mb-10">
                        <label>Kode Pos *</label>
                        <input type="number" class="form-control" name"kode_pos" required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 mb-10">
                        <label for="03">Harga *</label>
                        <input type="number" class="form-control" id="03" name="harga" required="">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Tambah</button>
            </form>
        </div>
    </div>
</section>