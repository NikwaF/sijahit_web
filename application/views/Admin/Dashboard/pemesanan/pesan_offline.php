<div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Pesan Offline</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Pemesanan offline</h5>
                            <p class="mb-25">Silahkan Input pesanan offline.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <form action="<?= site_url('admin/pemesanan/pesan_offline/tambah_data_action') ?>" method="POST">
                                        <div class="row">
                                            <div class="form-group col-md-7">
                                                <label for="namapemesan">Nama Pemesan</label>
                                                <input class="form-control" name="namapemesan" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <label for="tanggal_minta">Taggal Minta Selesai</label>
                                                <input class="form-control" type="text" name="date" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7">
                                                <label for="alamat">Alamat Pemesan</label>
                                                <input class="form-control" name="alamat" placeholder="" value="" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7">
                                                <label for="firstName">No Hp Pemesan</label>
                                                <input class="form-control" name="nohppemesan" placeholder="" value="" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="form-group col-md-7">
                                                <label for="firstName">Ukuran</label>
                                                <select class="form-control custom-select d-block w-100" name="ukuran" placeholder="Pilih Ukuran">
                                                    <option value="anak-anak">Anak-anak</option>
                                                    <option value="remaja">Remaja</option>
                                                    <option value="dewasa">Dewasa</option>
                                                </select>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <label for="deskripsi">Detail Ukuran</label>
                                                <textarea class="form-control" rows="3" placeholder="" name="detail_ukuran"></textarea>
                                            </div>
                                        </div>
										<hr>
                                        <button class="btn btn-primary" type="submit">Tambah Pesanan</button>
									</form>
                                </div>
                            </div>
						</section>
					</div>
				</div>
<div class="hk-pg-header">
	<h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Pemesanan Offline</h4>
	</div>
	<!-- /Title -->

	<!-- Row -->
	<div class="row">
	<div class="col-xl-12">
		 <section class="hk-sec-wrapper">
				 <h5 class="hk-sec-title">#Kode Pemesanan</h5>
				 <div class="row">
						 <div class="col-sm">
										 <div class="row">
												 <div class="form-group col-md-12">
														 <label for="firstName">Nama Pemesan</label>
														 <input class="form-control" name="namatipe" id="namatipe" placeholder="" value="" type="text">
												 </div>
												 <div class="form-group col-md-6">
														 <label for="firstName">Nomer HP</label>
														 <input class="form-control" name="namatipe" id="namatipe" placeholder="089xxxxxxxxx" value="" type="text">
												 </div>
												 <div class="form-group col-md-6">
														 <label for="firstName">Tanggal Request</label>
														 <input class="form-control" type="text" name="reqtanggal" autocomplete="off" value="" />
													<script>
	$(function() {
	$('input[name="reqtanggal"]').daterangepicker({
	locale: {
	format : 'DD-MM-YYYY'
	},
	singleDatePicker: true,
	showDropdowns: true
	}, function(start, end, label) {
	// alert(start.format('YYYY-MM-DD'));
	$('input[name="reqtanggal"]').val(start.format('YYYY-MM-DD'));
	});
	});
	</script>
												 </div>

												 <div class="form-group col-md-6">
														<label for="Kategori">Kategori Barang</label>
														<select class="form-control custom-select d-block w-100" name="">
															<option value="">1</option>
															<option value="">1</option>
															<option value="">1</option>
														</select>
												 </div>
												 <div class="form-group col-md-6">
													 <label for="Upload">Upload model Pesanan</label>
													<div class="fileinput fileinput-new input-group" data-provides="fileinput">
															<div class="input-group-prepend">
																<span class="input-group-text">Upload</span>
															</div>
															<div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
															<span class="input-group-append">
															 <span class=" btn btn-primary btn-file"><span class="fileinput-new">Pilih file</span><span class="fileinput-exists">Change</span>
															<input type="file" name="...">
															</span>
															<a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
															</span>
													</div>
											</div>
										 </div>
											<h5 class="hk-sec-title">Ukuran Pesanan</h5>
											<div class="row">
													<div class="form-group col-md-4">
															<label for="firstName">Panjang Dada</label>
															<input class="form-control" name="namatipe" id="namatipe" placeholder="" value="" type="text">
													</div>
													<div class="form-group col-md-4">
															<label for="firstName">Lingkar Dada</label>
															<input class="form-control" name="namatipe" id="namatipe" placeholder="" value="" type="text">
													</div>
													<div class="form-group col-md-4">
															<label for="firstName">Lebar Dada</label>
															<input class="form-control" type="text" name="" value="" />
													</div>
													<div class="form-group col-md-4">
															<label for="firstName">Lingkar Pinggang</label>
															<input class="form-control" name="namatipe" id="namatipe" placeholder="" value="" type="text">
													</div>
													<div class="form-group col-md-4">
															<label for="firstName">Panjang Lengan</label>
															<input class="form-control" name="namatipe" id="namatipe" placeholder="" value="" type="text">
													</div>
													<div class="form-group col-md-4">
															<label for="firstName">Lingkar Lengan</label>
															<input class="form-control" type="text" name="" value="" />
													</div>
													<div class="form-group col-md-4">
															<label for="firstName">Lingkar Pinggul</label>
															<input class="form-control" name="namatipe" id="namatipe" placeholder="" value="" type="text">
													</div>
													<div class="form-group col-md-4">
															<label for="firstName">Panjang Celana</label>
															<input class="form-control" name="namatipe" id="namatipe" placeholder="" value="" type="text">
													</div>
													<div class="form-group col-md-4">
															<label for="firstName">Lingkar Celana</label>
															<input class="form-control" type="text" name="" value="" />
													</div>
													<div class="form-group col-md-4">
															<label for="firstName">Lingkar Paha</label>
															<input class="form-control" name="namatipe" id="namatipe" placeholder="" value="" type="text">
													</div>
													<div class="form-group col-md-4">
															<label for="firstName">Panjang Bahu</label>
															<input class="form-control" name="namatipe" id="namatipe" placeholder="" value="" type="text">
													</div>
													<div class="form-group col-md-4">
															<label for="firstName">Panjang Punggung</label>
															<input class="form-control" type="text" name="" value="" />
													</div>
													<div class="form-group col-md-12">
															<label for="firstName">Jenis Kelamin Pesanan</label>
															<select class="form-control custom-select d-block w-100" name="">
																<option value="">Laki-laki</option>
																<option value="">Perempuan</option>
															</select>
													</div>
												</div>
											 </div>
											</div>
											<hr>
										 <button id="simpan_nama_tipe" class="btn btn-primary" >Simpan pesanan</button>
										<button id="pesanlagi" class="btn btn-primary">Masih ada lagi?</button>
						 </div>
				 </div>
		 </section>
	</div>
	</div>
