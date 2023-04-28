<div class="container">
	<div class="row">
		<div class="col-md mt-4">
			<div class="card">
				<div class="card-header bg-info">
					<h5 class=" text-uppercase font-weight-bold text-white text-center"><?= $header['nama_siswa'] ?> (<?= $header['nis'] ?>)</h5>
				</div>
				<!-- <div class="row">
					<div class="col-md mt-2">
						<div class="card">
							<div class="card-body">

							</div>
						</div>
					</div>
				</div> -->
				<div class="row">
					<div class="col-md mt-2">
						<div class="card">
							<div class="card-header">
								<h6 class="text-uppercase font-weight-bold text-center">Pembayaran SPP</h6>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table">
										<table class="table table-striped table-bordered text-uppercase text-center">
											<thead>
												<tr class="text-uppercase">
													<th scope="col">Kls</th>
													<th scope="col">Lunas</th>
													<th scope="col">Blm Lns</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<?php
													$no = 1;
													foreach ($siswa as $row) {
													?>
														<td><?= $row['kelas']; ?></td>
														<td><?= $row['jumlah_bulan']; ?> Bulan</td>
														<td><?= $row['sisa']; ?> Bulan</td>
												</tr>
											<?php } ?>
											</tbody>
										</table>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


</div>