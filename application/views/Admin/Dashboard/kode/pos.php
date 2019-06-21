 <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Data Kode Pos</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">List Ongkir</h5>
                            <div class="row">
                                <div class="col-sm">
                                    <a class="btn btn-primary mb-10" href="<?= site_url('admin/kode/pos/tambah_data') ?>">Tambah</a>
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Pos</th>
                                                    <th>Biaya</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($data_pos as $data) { ?>
                                                <tr>
                                                    <td style="width:5%;"><?= $no++ ?></td>
                                                    <td><?= $data->kode_pos ?></td>
                                                    <td><?= $data->biaya ?></td>
                                                    <td class="text-center" width="300px">
                                                        <a href="<?= site_url('admin/pemesanan/list_pemesanan/resi') ?>" class="btn btn-info btn-sm">
                                                            <i class="fa fa-pencil"></i>Update
                                                        </a>
                                                        <a href="<?= site_url('admin/pemesanan/list_pemesanan/detail') ?>" class="btn btn-secondary btn-sm">
                                                            <i class="fa fa-pencil"></i>Delete
                                                        </a>
                                                    </td>
                                                </tr> 
                                                <?php } ?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
					</div>
                </div>


                