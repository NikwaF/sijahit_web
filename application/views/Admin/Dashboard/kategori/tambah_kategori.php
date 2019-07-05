 <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Kategori Pakaian</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->

                        <?php if($this->session->flashdata('kunci')): ?>
        <div class="alert <?= $this->session->flashdata('kunci'); ?> alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?=' <p class="text-center">'.$this->session->flashdata('pesan').'</p>' ?>
            </div>
         <?php endif; ?>

                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Nama Tipe Kategori</h5>
                            <p class="mb-25">Silahkan masukkan Tipe kategori pakaian.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <form action="<?= site_url('admin/kategori/kategori/insert_tipe'); ?>" method="post">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="firstName">Nama Kategori</label>
                                                <input class="form-control" name="namatipe" placeholder="" value="" type="text">
                                            </div>
                                        </div>
                                        <hr>
                                        <button id="simpan_nama_tipe" class="btn btn-primary" >Simpan Data</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>

            <div class="col-12">
            <div class="alert alert-dismissible" style="background-color:#ff9528;" role="alert">
           <p style="color:#fff;"class="text-center">Satu tipe Kategori hanya bisa satu ukuran</p>
            </div>
            </div>
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title d-inline-block">Ukuran dan Range Harga</h5>
                            <a id="btn_tambah" class="btn btn-primary float-right" style="color:#fff;" >Tambah Form</a>
                            <div class="clearfix"></div>
                            <p class="mb-25">Silahkan Ukuran dan Range Harga.</p>
                            <div class="row">
                               <div class="col-sm">
                                    <form action="<?= site_url('admin/kategori/kategori/insert_ukuran_range_harga') ?> " method="post">
                                        <div id="formnya">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                                  <label for="firstName">Tipe Kategori</label>
                                                  <select class="form-control custom-select d-block w-100" name="tipe_kategori">
                                                                                                    <?php foreach($dataTipe as $data): ?>
                                                                                                    <option value="<?= $data['id_kategori_tipe']; ?>"><?= $data['nama_tipe'];?></option>
<?php endforeach;?>
                                                  </select>
                                              </div>
                                              <div class="form-group col-md-12">
                                                  <label for="firstName">Ukuran</label>
                                                  <select class="form-control custom-select d-block w-100" name="tipe_ukuran" id="pilihan_ukuran_tipe" placeholder="Pilih Ukuran">
                                                  <?php foreach($dataUkuran as $ukuran) : ?>
                                                  <option value="<?= $ukuran['id_kategori_ukuran']; ?>"><?= $ukuran['nama_ukuran'];?></option>
                                                  <?php endforeach; ?>
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
                                        </div>
                                        <button class="btn btn-primary" type="submit" >Simpan Data</button>
                                </div>
                                    </form>
                            </div>
                        </section>
                    </div>		
                </div>
