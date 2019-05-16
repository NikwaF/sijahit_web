 <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Kategori</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">List Kategori</h5>
                            <div class="row">
                                <div class="col-sm">
														<a class="btn btn-primary mb-10" href="<?= site_url('admin/kategori/kategori/tambah_data') ?>">Tambah</a>
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>Nama_kategori</th>
                                                    <th>Ukuran</th>
                                                    <th>Range Harga</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
																						<?php foreach($data_kategori as $info): ?>
                                                <tr>
                                                    <td><?= $info['nama_kategori'];?></td>
                                                    <td><?=$info['ukuran'];?></td>
                                                    <td><?=rupiah($info['harga_min']) ." - " .rupiah($info['harga_max'])?></td>
                                                    <td><button class="btn btn-primary" style="color:#fff" data-toggle="modal" data-target=""></button></td>
                                                </tr>
																						<?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
												</div>