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
                            <h5 class="hk-sec-title">On Going Pemesanan</h5>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>Kode pemesanan</th>
                                                    <th>Tanggal Update</th>
                                                    <th>Jumlah Jahitan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  foreach($data_on_going as $data): ?>
                                                <tr>
                                                    <td><?= $data['kode_pemesanan'] ?></td>
                                                    <td>gfgf</td>
                                                    <td><?= $data[0]['jumlah'] ?></td>
                                                    <td>
                                                         <a href="<?= site_url('admin/pemesanan/on_going/detail_on_going/'.$data['kode_pemesanan']) ?>" class="btn btn-light btn-rounded btn-sm">
                                                            <i class="fa fa-eye"></i>Detail
                                                        </a>
                                                        <a href="<?= site_url('admin/pemesanan/on_going/update/'.$data['kode_pemesanan']) ?>" class="btn btn-success btn-rounded btn-sm">
                                                            <i class="fa fa-pencil"></i>Update
                                                        </a>
                                                    </td>
                                                </tr>   
                                            <?php  endforeach; ?> 
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </section>
					</div>
                </div>


                