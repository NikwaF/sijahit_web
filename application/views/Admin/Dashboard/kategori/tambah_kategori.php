 <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Kategori Pakaian</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-4">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Nama Tipe Kategori</h5>
                            <p class="mb-25">Silahkan masukkan Tipe kategori pakaian.</p>
                            <div class="row">
                                <div class="col-sm">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="firstName">Nama Kategori</label>
                                                <input class="form-control" name="namatipe" id="namatipe" placeholder="" value="" type="text">
                                            </div>
                                        </div>
																				<hr>
                                        <button id="simpan_nama_tipe" class="btn btn-primary" >Simpan Data</button>
                                </div>
                            </div>
												</section>
										</div>
										<div class="col-xl-8">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title d-inline-block">Ukuran dan Range Harga</h5>
														<a id="btn_tambah" class="btn btn-primary float-right" style="color:#fff;" >Tambah Form</a>
														<div class="clearfix"></div>
                            <p class="mb-25">Silahkan Ukuran dan Range Harga.</p>
                            <div class="row">
                               <div class="col-sm">
                                    <form id="form_tambahnya">
																				<div id="formnya">
																						<div class="row">
																							<div class="form-group col-md-12">
																									<label for="firstName">Tipe Kategori</label>
																									<select class="form-control custom-select d-block w-100" name="tipe_kategori" id="pilihan_tipe">
																									</select>
																							</div>
																							<div class="form-group col-md-12">
																									<label for="firstName">Ukuran</label>
																									<select class="form-control custom-select d-block w-100" name="tipe_ukuran[]" id="pilihan_ukuran_tipe" placeholder="Pilih Ukuran">
																									</select>
																							</div>
																						</div>
																						<div class="row">
																							<div class="col-md-6 form-group">
																									<label for="firstName">Harga Minimal</label>
																									<input class="form-control" id="hargamin" name="hargamin[]" placeholder="" value="" type="number">
																							</div>
																							<div class="col-md-6 form-group">
																									<label for="lastName">Harga Maximal</label>
																									<input class="form-control" id="hargamax" name="hargamax[]" placeholder="" value="" type="number">
																							</div>
																						</div>
																				</div>
                                        <a class="btn btn-primary" id="simpan_kategori" >Simpan Data</a>
																</div>
																		</form>
                            </div>
												</section>
                    </div>		
								</div>