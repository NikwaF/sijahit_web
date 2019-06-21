 <nav class="hk-nav hk-nav-dark">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <!-- <hr class="nav-separator"> -->
                    <div class="nav-header">
                        <span>User Interface</span>
                        <span>UI</span>
                    </div>
                    <ul class="navbar-nav flex-column">
										   <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('admin/Dashboard'); ?>" >
                                <span class="feather-icon"><i data-feather="book"></i></span>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
												<li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#masterdrp">
                                <span class="feather-icon"><i data-feather="layout"></i></span>
                                <span class="nav-link-text">Master Data</span>
                            </a>
                            <ul id="masterdrp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= site_url('admin/kategori/kategori'); ?>">Kategori</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= site_url('admin/kode/pos'); ?>">Kode Pos</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pemesanan_drp">
                                <span class="feather-icon"><i data-feather="clipboard"></i></span>
                                <span class="nav-link-text">Pemesanan</span>
                            </a>
                            <ul id="pemesanan_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= site_url('admin/pemesanan/list_pemesanan'); ?>">List Pemesanan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= site_url('admin/pemesanan/pesan_offline'); ?>">Tambah Pesan Offline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= site_url('admin/pemesanan/pesan_offline/list_pemesanan_offline'); ?>">List Pesan Offline</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#laporan_drp">
                                <span class="feather-icon"><i data-feather="archive"></i></span>
                                <span class="nav-link-text">Laporan</span>
                            </a>
                            <ul id="laporan_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= site_url('admin/laporan/laporan'); ?>">List Laporan</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#resi_drp">
                                <span class="feather-icon"><i data-feather="layers" class="fas fa-boxes"></i>"></i></span>
                                <span class="nav-link-text">Resi</span>
                            </a>
                            <ul id="resi_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= site_url('admin/resi/resi'); ?>">Track Pengerjaan</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#user_drp">
                                <span class="feather-icon"><i data-feather="zap"></i></span>
                                <span class="nav-link-text">User</span>
                            </a>
                            <ul id="user_drp" class="nav flex-column collapse collapse-level-1">
														    <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= site_url('admin/customer/customer'); ?>">List User</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= site_url('admin/customer/customer/tagihan_harga'); ?>">Tagihan Harga</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
