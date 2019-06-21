            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div id="example-basic">
                            <section>
                                <h3 class="display-4 mb-40">Keranjang Penjahitan</h3>
                                <div class="row">
                                    <div class="col-xl-8 mb-20">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="2">Product</th>
                                                            <th>Harga</th>
                                                            <th>Jumlah</th>
                                                            <th>Total</th>
                                                        </tr>
                                                        <?php
                                                          $i = 0;
                                                          $harga_total =0;
                                                          if(isset($_SESSION['pemesanan_detail'])){

                                                          
                                                          foreach($_SESSION['pemesanan_detail'] as $ea):
                                                        ?>
                                                        <tr>
                                                            <td><img class="w-80p" src="<?= base_url(). '/assets/gambar/model_pesanan/'.$ea['gambar_pesanan'] ?>" alt="icon" /></td>
                                                            <th scope="row"><?= $kategorinya[$i][0]['nama_tipe'] .'-'. $kategorinya[$i][0]['nama_ukuran'] ?></th>
                                                            <td><?=rupiah($kategorinya[$i][0]['harga_max'])?></td>
                                                            <td>
                                                              <!-- <input type="number" class="normal" value="1" min="0" max="100" step="10" style="display: none;"> -->
                                                                <!-- <input type="number" class="form-control" value="<?= $ea['jumlah'] ?>" min="1" max="100" /> -->
                                                                <?= $ea['jumlah'] ?>
                                                                <!-- <div class="input-group input-group-sm w-100p">
                                                                <div class="input-group-prepend">
                                                                <button style="min-width: 2.5em" class="btn btn-decrement btn-outline-light" type="button"><strong>-</strong></button>
                                                                </div>
                                                                <input type="text" style="text-align: center" class="form-control">
                                                                <div class="input-group-append">
                                                                <button style="min-width: 2.5em" class="btn btn-increment btn-outline-light" type="button"><strong>+</strong>
                                                                </button>
                                                                </div>
                                                                </div> -->
                                                            </td>
                                                            <td class="text-dark"><?= rupiah($kategorinya[$i][0]['harga_max']* $ea['jumlah']) ?></td>
                                                        </tr>
                                                        <?php
                                                        $harga_total = $harga_total+$kategorinya[$i][0]['harga_max']* $ea['jumlah'];
                                                        $i++;
                                                            endforeach;
                                                            } else {
                                                        ?>
                                                            <tr>
                                                            <td colspan="5">
                                                              Belum ada data yang diinput
                                                            </td>
                                                        </tr>
                                                            


                                                            <?php } ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-right" colspan="12"><small class="pr-5 text-muted font-weight-500">Sub Total:</small><span class="text-dark font-weight-500"><?= rupiah($harga_total); ?></span></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 mb-20">
                                        <div class="card">
                                            <h6 class="card-header border-0">
												<i class="ion ion-md-clipboard font-21 mr-10"></i>Perkiraan biaya
											</h6>
                                            <div class="card-body pa-0">
                                                <div class="table-wrap">
                                                    <div class="table-responsive">
                                                        <table class="table table-sm mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="w-20" scope="row">Total</th>
                                                                    <th class="w-80" scope="row"><?= rupiah($harga_total); ?></th>
                                                                </tr>
                                                                <tr>
                                                                <th class="w-20"></th>
                                                                    <th class="w-80" scope="row"><a class="btn btn-primary ml-5 mr-5" style="color:#fff;" type="submit" data-toggle="modal" data-target="#selesaikan" name="selesaikan_pesanan">Selesai</a><a class="btn btn-primary" data-toggle="modal" data-target="#batalkan" style="color:#fff;" name="Batalkan">Batalkan</a></th>

                                                                    <div class="modal fade" id="batalkan" tabindex="-1" role="dialog" aria-labelledby="batalkan" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="batalkan">Apakah anda ingin membatalkannya?</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Tekan YA untuk membatalkan, dan TIDAK untuk tidak membatalkannya</p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TIDAK</button>
                                                                                    <?php $url_batal = site_url('admin/pemesanan/pesan_offline/batalkan_pesanan'); ?>
                                                                                    <button type="button" onclick="location.href='<?= $url_batal ?>'" class="btn btn-primary">YA</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                     </div>


                                                                     <div class="modal fade" id="selesaikan" tabindex="-1" role="dialog" aria-labelledby="batalkan" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="batalkan">Apakah anda ingin menginputkan data pemesanan?</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>data akan di inputkan saat anda menekan YA, pastikan data sudah benar sebelum menginputkan data pesanan</p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TIDAK</button>
                                                                                    <?php $url_batal = site_url('admin/pemesanan/pesan_offline/selesaikan_pesanan'); ?>
                                                                                    <button type="button" onclick="location.href='<?= $url_batal ?>'" class="btn btn-primary">YA</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                     </div>
                                                                    <!-- <th class="w-100" scope="row"><button class="btn btn-primary" type="submit" name="Batalkan">Batalkan</button></th> -->
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->