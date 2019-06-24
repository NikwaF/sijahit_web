 <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Kategori Pakaian</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                        <form action="<?= site_url('admin/kategori/kategori/update_kategori/'.$datanya[0]['id_kategori']); ?>" method="post">
                        <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="firstName">Nama Tipe</label>
                            <input class="form-control" id="hargamin" name="nama_tipe" placeholder="" value="<?= $datanya[0]['nama_tipe'] ?>" type="text" disabled required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="firstName">Nama Ukuran</label>
                            <input class="form-control" id="hargamin" name="nama_ukuran" placeholder="" value="<?= $datanya[0]['nama_ukuran'] ?>" type="text" disabled required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="firstName">Harga Minimal</label>
                            <input class="form-control" id="hargamin" name="harga_min"  min="1000" placeholder="" value="<?= $datanya[0]['harga_min'] ?>" type="number" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lastName">Harga Maximal</label>
                            <input class="form-control" id="hargamax" name="harga_max" min="1000" placeholder="" value="<?= $datanya[0]['harga_max'] ?>" type="number" required>
                        </div>
                        </div>
                        <button class="btn btn-primary" id="simpan_kategori" >Update Data</button>
                          </form>
                        </section>
                    </div>		
                </div>
