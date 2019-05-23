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
                                                <label for="firstName">Nama Pemesan</label>
                                                <input class="form-control" name="namapemesan" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <label for="lastName">Taggal Minta Selesai</label>
                                                <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7">
                                                <label for="firstName">Alamat Pemesan</label>
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
										<hr>
                                        <button class="btn btn-primary" type="submit">Tambah Pesanan</button>
									</form>
                                </div>
                            </div>
						</section>
					</div>
				</div>