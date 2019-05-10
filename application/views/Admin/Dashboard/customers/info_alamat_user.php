<?php foreach($user_info as $info) :?>
<div class="modal fade" id="modal_alamat_user<?= $info['id_customer'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal_alamat_user" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
					<div class="modal-header">
							<h5 class="modal-title">Info Alamat User</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
							</button>
					</div>
					<div class="modal-body">
					<div class="row">
										<div class="table-wrap">
												<table id="datable_1" class="table table-hover w-100 display pb-30">
														<thead>
																<tr>
																		<th>Desa</th>
																		<th>Kecamatan</th>
																		<th>Kelurahan</th>
																		<th>Kode Pos</th>
																		<th>Detail Alamat</th>
																</tr>
														</thead>
														<tbody>
														<?php foreach($user_info as $infos): ?>
														<?php if($info['id_customer'] == $infos['id_customer']): ?>
																<tr>
																		<td><?= $infos['desa'] ?></td>
																		<td><?=$infos['kecamatan']?></td>
																		<td><?=$infos['kelurahan']?></td>
																		<td><?=$infos['kode_pos']?></td>
																		<td><?=$infos['detail_alamat']?></td>
																</tr>
																<?php endif; ?>
														<?php endforeach; ?> 
														</tbody>
												</table>
										</div>						
						</div>
					</div>
					<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
			</div>
	</div>
</div>
<?php endforeach; ?>