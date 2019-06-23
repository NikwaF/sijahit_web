 <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Data Tables</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">List Pemesanan</h5>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Pemesan</th>
                                                    <th>Tanggal Masuk Pesanan</th>
                                                    <th>Tanggal Minta</th>
                                                    <th>Method Order</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>JHT00011</td>
                                                    <td>Willian</td>
                                                    <td>2019/04/04</td>
                                                    <td>2019/04/25</td>
                                                    <td>Online</td>
                                                    <td>
                                                        <a href="" class="btn btn-success btn-rounded btn-sm">
                                                            <i class="fa fa-pencil"></i>Terima
                                                        </a>
                                                        <a href="<?= site_url('admin/pemesanan/list_pemesanan/detail') ?>" class="btn btn-danger btn-rounded btn-sm">
                                                            <i class="fa fa-close"></i>Tolak
                                                        </a>
                                                    </td>
                                                </tr>    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
					</div>
                </div>


                