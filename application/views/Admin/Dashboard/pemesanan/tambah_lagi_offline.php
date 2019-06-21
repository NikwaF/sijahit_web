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
																					<div class="col-md-12 mt-10 mb-20">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="ukuransama" class="custom-control-input haloyekan" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Apakah ukuran sama dengan yang barusan diinput?</label>
                                            </div>

																					
                                        	</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Panjang Dada</label>
																								<input class="form-control" name="panjang_dada" id="panjang_dada" placeholder="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lingkar Dada</label>
																								<input class="form-control" name="lingkar_dada" id="lingkar_dada" placeholder="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lebar Dada</label>
																								<input class="form-control" type="text" name="lebar_dada" id="lebar_dada" />
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lingkar Pinggang</label>
																								<input class="form-control" name="lingkar_pinggang" id="lingkar_pinggang" placeholder="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Panjang Lengan</label>
																								<input class="form-control" name="panjang_lengan" id="panjang_lengan" placeholder="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lingkar Lengan</label>
																								<input class="form-control" type="text" name="lingkar_lengan" id="lingkar_lengan" />
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lingkar Pinggul</label>
																								<input class="form-control" name="lingkar_pinggul" id="lingkar_pinggul" placeholder="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Panjang Celana</label>
																								<input class="form-control" name="panjang_celana" id="panjang_celana" placeholder="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lingkar Celana</label>
																								<input class="form-control" type="text" name="lingkar_celana" id="lingkar_celana" />
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Lingkar Paha</label>
																								<input class="form-control" name="lingkar_paha" id="lingkar_paha" placeholder="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Panjang Bahu</label>
																								<input class="form-control" name="panjang_bahu" id="panjang_bahu" placeholder="" type="text">
																						</div>
																						<div class="form-group col-md-4">
																								<label for="firstName">Panjang Punggung</label>
																								<input class="form-control" type="text" name="panjang_punggung" id="panjang_punggung" />
																						</div>

																							<script>
																							$('[name="ukuransama"]').change(function(){
																								if($(this).is(':checked')){

																									$.ajax({
																										method: "POST",
																										url: "<?php echo site_url('admin/pemesanan/pesan_offline/get_profile_ukuran') ?>",
																										dataType: "json",
																										data: {
																											"idnya_profile" : "<?php echo($_SESSION['id_profile_ukuran']) ?>"
																										},
																										success: function(halo){
																												$('#panjang_dada').val(halo[0].panjang_dada)
																												$('#lingkar_dada').val(halo[0].lingkar_dada)
																												$('#lebar_dada').val(halo[0].lebar_dada)
																												$('#lingkar_pinggang').val(halo[0].lingkar_pinggang)
																												$('#lingkar_lengan').val(halo[0].lingkar_lengan)
																												$('#lingkar_pinggul').val(halo[0].lingkar_pinggul)
																												$('#panjang_celana').val(halo[0].panjang_celana)
																												$('#lingkar_celana').val(halo[0].lingkar_celana)
																												$('#panjang_punggung').val(halo[0].panjang_punggung)																										
																														$('#panjang_bahu').val(halo[0].panjang_bahu)
																												$('#lingkar_paha').val(halo[0].lingkar_paha)
																												$('#panjang_lengan').val(halo[0].panjang_lengan)

																										}, error: function(){
																											console.log('errrorr')
																										}
																									})

																								} else {
																									$('#panjang_dada').val('').removeAttr("disabled", true);
																									$('#lingkar_dada').val('').removeAttr("disabled", true);
																									$('#lebar_dada').val('').removeAttr("disabled", true);
																									$('#lingkar_pinggang').val('').removeAttr("disabled", true);
																									$('#lingkar_lengan').val('').removeAttr("disabled", true);
																									$('#lingkar_pinggul').val('').removeAttr("disabled", true);
																									$('#panjang_celana').val('').removeAttr("disabled", true);
																									$('#lingkar_celana').val('').removeAttr("disabled", true);
																									$('#panjang_punggung').val('').removeAttr("disabled", true);
																									$('#panjang_bahu').val('').removeAttr("disabled", true);
																									$('#lingkar_paha').val('').removeAttr("disabled", true);
																									$('#panjang_lengan').val('').removeAttr("disabled", true);
																								}
																							})
																						</script>
																			
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


