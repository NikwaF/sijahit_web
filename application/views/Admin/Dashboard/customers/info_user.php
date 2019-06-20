 <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>List User</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">List Informasi User</h5>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>No_hp</th>
                                                    <th>Email</th>
                                                    <th>Posisi</th>
                                                    <th>Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
																						<?php foreach($user_info as $info): ?>
                                                <tr>
                                                    <td><?= $info['nama_customer'];?></td>
                                                    <td><?=$info['no_hp'];?></td>
                                                    <td><?=$info['email'];?></td>
                                                    <td><?=$info['nama_roles'];?></td>
                                                    <td><button class="btn btn-primary" style="color:#fff" data-toggle="modal" data-target="#modal_alamat_user<?= $info['id_customer'] ?>">Lihat Alamat</button></td>
                                                </tr>
																						<?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
												</div>
												<?php include_once('info_alamat_user.php'); ?>
