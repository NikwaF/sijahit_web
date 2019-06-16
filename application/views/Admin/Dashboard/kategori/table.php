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
                                                    <th>No.</th>
                                                    <th>Nama kategori</th>
                                                    <th>Tipe</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
													<td style="width:5%;">.</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center" width="300px">
                                                        <a href="<?= site_url('admin/kategori/kategori/view') ?>" class="btn btn-info btn-sm">
                                                            <i class="fa fa-pencil"></i>View
                                                        </a>
                                                        <a href="" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil"></i>Update
                                                        </a>
                                                        <a href="" onclick="return confirm('Apakah yakin hapus data?')" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash"></i>Delete
                                                        </a>
                                                    </td>									
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
												</div>