 <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Kategori Pakaian</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Kategori pakaian</h5>
                            <p class="mb-25">Silahkan masukkan kategori pakaian.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <form action="<?= site_url('admin/kategori/kategori/tambah_data_action') ?>" method="POST">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="firstName">Nama Kategori</label>
                                                <input class="form-control" name="namaKategori" placeholder="" value="" type="text">
                                            </div>
                                        </div>
																				<div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="firstName">Ukuran</label>
                                                <select class="form-control custom-select d-block w-100" name="ukuran" placeholder="Pilih Ukuran">
                                                    <option value="anak-anak">Anak-anak</option>
                                                    <option value="remaja">Remaja</option>
                                                    <option value="dewasa">Dewasa</option>
                                                </select>
                                            </div>
                                        </div>
																				 <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Harga Minimal</label>
                                                <input class="form-control" id="hargamin" name="hargamin" placeholder="" value="" type="number">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="lastName">Harga Maximal</label>
                                                <input class="form-control" id="hargamax" name="hargamax" placeholder="" value="" type="number">
                                            </div>
                                        </div>
																				<hr>
                                        <button class="btn btn-primary" type="submit">Simpan Data</button>
																		</form>
                                </div>
                            </div>
												</section>
												</div>
								</div>