<div class="hk-pg-header">
									 <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Pemesanan Offline</h4>
							 </div>
							 <!-- /Title -->

							 <!-- Row -->
							 <div class="row">
									 <div class="col-xl-12">
											 <section class="hk-sec-wrapper">
													<form enctype="multipart/form-data" action="<?= site_url('admin/pemesanan/pesan_offline/handlerpesanoffline') ?>" method="post">
													 <h5 class="hk-sec-title">#<?= $kode_pemesanan; ?></h5>
													 <div class="row">
															 <div class="col-sm">
																			 <div class="row">
																					 <div class="form-group col-md-12">
																							 <label for="firstName">Nama Pemesan</label>
																							 <input class="form-control" name="namapemesan" id="namatipe" placeholder="" value="" type="text">
																					 </div>
																					 <div class="form-group col-md-6">
																							 <label for="firstName">Nomer HP</label>
																							 <input class="form-control" name="nohp" id="namatipe" placeholder="089xxxxxxxxx" value="" type="text">
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
																							<select class="form-control custom-select d-block w-100" name="kategori">
																							<?php
																								foreach($kategori as $kat):
																							?>
																								<option value="<?= $kat['id_kategori'] ?>"><?= $kat['nama_tipe'] . ' - '. $kat['nama_ukuran'] ?></option>
																								<?php
																									endforeach;
																								?>
																							</select>
																					 </div>
																					 <div class="form-group col-md-6">
																						 <label for="Upload">Upload model Pesanan</label>
																						 <br>
																						 <input type="file" name="uploadmodel">
																				</div>
																				<div class="clearfix"></div>
																					<div class="form-group col-md-12">
																					<label for="deskripsi">Deskripsi Jahitan</label>
																					 	<textarea class="form-control mt-15" name="deskripsi_pesanan" rows="3" placeholder="deskripsi pesanannya .."></textarea>
																					 </div>
																					 <div class="form-group col-md-3">
																					 <label for="jumlah">Jumlah Dipesan</label>
																						<input class="form-control" type="number" placeholder="jumlahnya .." name="jumlah" min="1">
																					 </div>
																					 			<div class="form-group col-md-9">
																								<label for="firstName">Jenis Kelamin Jahitan</label>
																								<select class="form-control custom-select d-block w-100" name="jenis_kelamin">
																									<option value="laki-laki">Laki-laki</option>
																									<option value="perempuan">Perempuan</option>
																								</select>
																						</div>
																			 </div>
																				<h5 class="hk-sec-title">Ukuran Pesanan</h5>
																				<div class="row">
																						<div class="form-group col-md-4">
																								<label for="firstName">Panjang Dada</label>
																								<input class="form-control" name="panjang_dada" id="namatipe" placeholder="" value="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lingkar Dada</label>
																								<input class="form-control" name="lingkar_dada" id="namatipe" placeholder="" value="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lebar Dada</label>
																								<input class="form-control" type="text" name="lebar_dada" value="" />
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lingkar Pinggang</label>
																								<input class="form-control" name="lingkar_pinggang" id="namatipe" placeholder="" value="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Panjang Lengan</label>
																								<input class="form-control" name="panjang_lengan" id="namatipe" placeholder="" value="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lingkar Lengan</label>
																								<input class="form-control" type="text" name="lingkar_lengan" value="" />
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lingkar Pinggul</label>
																								<input class="form-control" name="lingkar_pinggul" id="namatipe" placeholder="" value="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Panjang Celana</label>
																								<input class="form-control" name="panjang_celana" id="namatipe" placeholder="" value="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lingkar Celana</label>
																								<input class="form-control" type="text" name="lingkar_celana" value="" />
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lingkar Paha</label>
																								<input class="form-control" name="lingkar_paha" id="namatipe" placeholder="" value="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Panjang Bahu</label>
																								<input class="form-control" name="panjang_bahu" id="namatipe" placeholder="" value="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Panjang Punggung</label>
																								<input class="form-control" type="text" name="panjang_punggung" value="" />
																						</div>
																			
																					</div>
																				 </div>
																				</div>
																				<hr>
																			 <button id="simpan_nama_tipe" name="simpandatapesanan" class="btn btn-primary" >Simpan pesanan</button>
																			<button id="pesanlagi" name="nambahpesanan" class="btn btn-primary">Masih ada lagi?</button>
																			</form>
															 </div>
													 </div>
											 </section>
									 </div>
							 </div>


