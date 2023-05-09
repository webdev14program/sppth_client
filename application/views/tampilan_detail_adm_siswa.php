<div class="jumbotron jumbotron-fluid text-center text-uppercase bg-info">
	<h1 class="display-4 text-white text-uppercase font-weight-bold">detail administrasi sekolah</h1>
</div>

<div class="container">
	<div class="row">
		<div class="col-md mt-2">
			<div class="card">
				<div class="card-header bg-info">
					<h5 class="text-center text-uppercase font-weight-bold text-white"><?= $header['nama_siswa'] ?> (<?= $header['kelas'] ?>) <?= $header['tahun_ajaran'] ?></h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md mt-2">
							<div class="card">
								<div class="card-header bg-info">
									<h5 class="text-center text-uppercase font-weight-bold text-white">SPP</h5>
								</div>
								<div class="card-body">
									<h5 class="text-center">
										<button type="button" class="btn btn-primary text-uppercase font-weight-bold" data-toggle="modal" data-target="#exampleModal">
											detail
										</button>
									</h5>
								</div>
							</div>
						</div>
						<div class="col-md mt-2">
							<div class="card">
								<div class="card-header bg-info">
									<h5 class=" text-uppercase font-weight-bold text-white">ADM LAIN</h5>
								</div>
								<div class="card-body">
									<h5 class="text-center">
										<button type="button" class="btn btn-primary text-uppercase font-weight-bold" data-toggle="modal" data-target="#exampleModal">
											detail
										</button>
									</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-info">
				<h5 class="modal-title text-white text-uppercase font-weight-bold">Detail SPP</h5>

			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr class="text-uppercase">
								<th scope="col">#</th>
								<th scope="col">bulan</th>
								<th scope="col">status</th>
								<th scope="col">waktu bayar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
								$no = 1;
								foreach ($spp as $row) {
								?>
									<td class="text-center"><?php echo $no++; ?></td>
									<td><?= $row['bulan']; ?></td>
									<td><?= $row['status']; ?></td>
									<td><?= $row['date']; ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
