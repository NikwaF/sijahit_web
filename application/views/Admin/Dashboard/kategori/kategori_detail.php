 <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Kategori</h4>
                </div>

                <!-- /Title -->
                      <?php $kunci = $this->session->flashdata('kunci'); $pesan = $this->session->flashdata('pesan'); if($this->session->flashdata('kunci')): ?>
         <?= '<div class="'.$kunci.'" alert-dismissible role="alert">'?>
			<?='<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'?>
            <?=' <p class="text-center">'.$pesan.'</p>' ?>
           <?= '</div>' ?>
         <?php endif; ?>

         
     
                <!-- Row -->
                <div class="row">
 
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Detail Kategori</h5>
                            <div class="row">
                                <div class="col-sm">
                                	<div class="pull-right">
										<a class="btn btn-success mb-10" href="<?= site_url('admin/kategori/kategori/update_form_kategori/'.$datanya[0]['id_kategori']) ?>">Update</a>

										<a class="btn btn-warning mb-10" href="<?= site_url('admin/kategori/kategori') ?>">Back</a>
									</div>
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                <?php
                                                    $no = 1;
                                                ?>
                                                    <tr>
                                                        <th>Tipe</th>
                                                        <th>Ukuran</th>
                                                        <th>Range Harga</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <td><?= $datanya[0]['nama_tipe'] ?></td>
                                                    <td><?= $datanya[0]['nama_ukuran'] ?></td>
                                                    <td><?= rupiah($datanya[0]['harga_min']).' - '.rupiah($datanya[0]['harga_max']);?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
												</div>