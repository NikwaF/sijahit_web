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
<<<<<<< HEAD
									<a class="btn btn-primary mb-10" href="<?= site_url('admin/kategori/kategori/tambah_data') ?>">Tambah</a>
=======
                            <a class="btn btn-primary mb-10"href="<?= site_url('admin/kategori/kategori/tambah_data') ?>">Tambah</a>
>>>>>>> d32dcdd825fba954ca80c1caecdb925a7683a6b6
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
<<<<<<< HEAD
                                                    <tr>
    													<td style="width:5%;">.</td>
                                                        <td></td>
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
                                                    </tr>								
=======
                                              <td>Kemeja</td>
                                              <td><a class="btn btn-primary" data-togle="modal" data-target="#viewlah">view</a></td>
>>>>>>> d32dcdd825fba954ca80c1caecdb925a7683a6b6
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                        </div>



<div class="modal fade" id="viewlah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
