 <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>List Pesan Offline</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <?php if($this->session->flashdata('kunci')): ?>
                                <div class="alert <?= $this->session->flashdata('kunci'); ?> alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <?=' <p class="text-center">'.$this->session->flashdata('pesan').'</p>' ?>
                                </div>
                             <?php endif; ?>
                            <h5 class="hk-sec-title">List Kategori</h5>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>Nama Pemesan</th>
                                                    <th>Alamat Pemesan</th>
                                                    <th>No Hp</th>
                                                    <th>Tanggal Minta</th>
                                                    <th>Ukuran</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<?php foreach($data_offline as $info): ?>
                                                <tr>
                                                    <td><?= $info['nama_pemesan'];?></td>
                                                    <td><?=$info['alamat_pemesan'];?></td>
                                                    <td><?=$info['no_hp'];?></td>
                                                    <td><?=$info['tanggal_minta'];?></td>
                                                    <td><?=$info['ukuran'];?></td>
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