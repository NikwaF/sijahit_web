<section class="hk-sec-wrapper">
	<div class="pull-right">
		<a href="<?= site_url('admin/kode/pos') ?>" class="btn btn-warning btn-sm">
			<i class="fa fa-undo"></i>Back</a>
	</div>
    <h5 class="hk-sec-title">Tambah Data KodePos</h5>
    <div class="row">
        <div class="col-sm">
            <form method="post" action="">
                <div class="form-group <?= form_error('kode_pos') ? 'has-error' : null ?>">
                    <div class="col-md-4 mb-10">
                        <label>Kode Pos *</label>
                        <input type="number" class="form-control" name="kode_pos" value="<?= set_value('kode_pos') ?>">
                        <?= form_error('kode_pos') ?>
                    </div>
                </div>
                <div class="form-group <?= form_error('biaya') ? 'has-error' : null ?>">
                    <div class="col-md-4 mb-10">
                        <label for="03">Biaya *</label>
                        <input type="number" class="form-control" id="03" name="harga" value="<?= set_value('harga') ?>">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Tambah</button>
            </form>
        </div>
    </div>
</section>