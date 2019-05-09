<section class="hk-sec-wrapper">
        <h5 class="hk-sec-title">Tagihan Harga</h5>
            <div class="row">
                    <div class="col-sm">
                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-10">
                                                <label for="validationCustom01">ID pemesanan</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="ID Pemesanan" value="" required>
                                                <div class="valid-feedback">
                                                    ID ditemukan!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-10">
                                                <label for="validationCustom02">Nama Pemesan</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Nama Pemesan" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustom03">Deskripsi</label>
                                                <textarea type="text" class="form-control" id="validationCustom03" placeholder="Deskripsi" required></textarea>
                                            </div>
                                            <div class="col-md-3 mb-10">
                                                <label for="validationCustom04">Total Harga</label>
                                                <input type="text" class="form-control" id="validationCustom04" placeholder="Total Harga" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input custom-control-input" id="invalidCheck" required>
                                                <label class="form-check-label custom-control-label" for="invalidCheck">
                                                    Setuju?!
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Kirim Tagihan</button>
                                    </form>
                    </div>
            </div>
</section>
<div class="hk-row">
        <div class="col-sm-6">
                <div class="card-group hk-dash-type-2">
                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-5">
                                                <div>
                                                    <span class="d-block font-15 text-dark font-weight-500">Pesanan yang telah ditagih</span>
                                                </div>
                                                <div>
                                                    <span class="text-success font-14 font-weight-500">+</span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block display-4 text-dark mb-5">0</span>
                                                <small class="d-block">yang sudah bayar</small>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-5">
                                                <div>
                                                    <span class="d-block font-15 text-dark font-weight-500">Pesanan yang belum ditagih</span>
                                                </div>
                                                <div>
                                                    <span class="text-success font-14 font-weight-500">+</span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block display-4 text-dark mb-5"><span class="counter-anim">0</span></span>
                                                <small class="d-block">yang belum dibayar</small>
                                            </div>
                                        </div>
                                    </div>
                </div>
        </div>  
</div>