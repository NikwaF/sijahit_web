 <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Data Tables</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row mb-5">
                    <div class="col-4 d-flex justify-content-center">
                     <?php $belum_acc = site_url('admin/pemesanan/pesanan_menunggu_acc'); ?>
                        <button class="btn btn-success" style="width:100%;" onclick="window.location.href='<?= $belum_acc ?>'">
                            Belum di ACC
                        </button>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <?php $belum_ukur = site_url('admin/pemesanan/pesanan_belum_diukur'); ?>
                        <button class="btn btn-danger" style="width:100%;" onclick="window.location.href='<?= $belum_ukur ?>'">
                            Belum di Ukur
                        </button>
                    </div>
                    <div class="col-4 d-flex justify-content-center" >
                        <?php $on_going = site_url('admin/pemesanan/on_going'); ?>
                        <button class="btn btn-warning" style="width:100%;" onclick="window.location.href='<?= $on_going ?>'">
                            On Going Pemesanan
                        </button>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">List Pemesanan yang belum di ACC</h5>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>Kode pemesanan</th>
                                                    <th>Nama Pemesan</th>
                                                    <th>Tanggal Masuk Pesanan</th>
                                                    <th>Tanggal Minta</th>
                                                    <th>Method Order</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($isi_belum_acc as $data): ?>
                                                <tr>
                                                    <td><?= $data['kode_pemesanan'] ?></td>
                                                    <td><?= $data['nama_customer'] ?></td>
                                                    <td><?= $data['tanggal'] ?></td>
                                                    <td><?= $data['tanggal_req'] ?></td>
                                                    <?php if($data['method_order'] == 1){ ?>
                                                     <td>Online</td>
                                                    <?php } else { ?>
                                                        <td>Offline</td>
                                                    <?php } ?>
                                                    <td>
                                                         <a href="<?= site_url('admin/pemesanan/pesanan_menunggu_acc/detail_belum_acc/'.$data['kode_pemesanan']) ?>" class="btn btn-warning btn-rounded btn-sm">
                                                            <i class="fa fa-eye"></i>Detail
                                                        </a>
                                                        <a style="color:#fff"  data-toggle="modal" data-target="#terima" class="btn btn-success btn-rounded btn-sm">
                                                            <i class="fa fa-pencil"></i>Terima
                                                        </a>
                                                        <a href="<?= site_url('admin/pemesanan/tolak_pesanan') ?>" class="btn btn-danger btn-rounded btn-sm">
                                                            <i class="fa fa-close"></i>Tolak
                                                        </a>
                                                    </td>
                                                                       <div class="modal fade" id="terima" tabindex="-1" role="dialog" aria-labelledby="terima" aria-hidden="true">
                                                                          <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="batalkan">Apakah anda benar ingin menerima pesanan?</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Tekan YA untuk menerima pesanan, dan TIDAK untuk tidak</p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TIDAK</button>
                                                                                    <?php $url_terima =  site_url('admin/pemesanan/pesanan_menunggu_acc/terima_pesanan/'.$data['kode_pemesanan']); ?>
                                                                                    <button type="button" onclick="location.href='<?= $url_terima ?>'" class="btn btn-primary">YA</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        </div>

                                                                        <div class="modal fade" id="tolak" tabindex="-1" role="dialog" aria-labelledby="tolak" aria-hidden="true">
                                                                          <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="batalkan">Apakah anda benar ingin menerima pesanan?</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Tekan YA untuk menerima pesanan, dan TIDAK untuk tidak</p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TIDAK</button>
                                                                                    <?php $url_tolak =  site_url('admin/pemesanan/pesanan_menunggu_acc/tolak_pesanan/'.$data['kode_pemesanan']); ?>
                                                                                    <button type="button" onclick="location.href='<?= $url_tolak ?>'" class="btn btn-primary">YA</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                    </div>
                                                </tr>    
                                            <?php endforeach; ?>
                                            </tbody>

                                                                    
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
					</div>
                </div>


                