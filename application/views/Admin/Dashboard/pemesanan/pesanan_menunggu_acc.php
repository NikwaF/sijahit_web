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
                        <button class="btn btn-warning" style="width:100%;">
                            List Pemesanan
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
                                                        <a href="" class="btn btn-success btn-rounded btn-sm">
                                                            <i class="fa fa-pencil"></i>Terima
                                                        </a>
                                                        <a href="<?= site_url('admin/pemesanan/list_pemesanan/detail') ?>" class="btn btn-danger btn-rounded btn-sm">
                                                            <i class="fa fa-close"></i>Tolak
                                                        </a>
                                                    </td>
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


                