<div class="jumbotron jumbotron-fluid text-center text-uppercase bg-info">
	<h1 class="display-4 text-white text-uppercase font-weight-bold">pencarian siswa</h1>


</div>


<div class="container">
	<div class="row">
		<div class="col-md mt-4">
			<div class="card">
				<div class="card-body">
					<a href="<?= base_url() ?>" class="btn btn-success btn-sm text-uppercase font-weight-bold">kembali</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md mt-4">
			<div class="card">
				<div class="card-header bg-info">
					<h5 class="text-center text-uppercase font-weight-bold text-white">data siswa</h5>
				</div>
				<div class="card-body">
					<table class="table table-striped table-bordered">
						<thead>
							<tr class="text-uppercase">
								<th scope="col">#</th>
								<th scope="col">NAMA SIswa</th>
								<th scope="col">jurusan</th>
								<th scope="col">aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
								$no = 1;
								foreach ($siswa as $row) {
								?>
									<td class="text-center"><?php echo $no++; ?></td>
									<td><?= $row['nama_siswa']; ?></td>
									<td><?= $row['jurusan']; ?></td>
									<td>
										<h5 class="text-center text-uppercase font-weight-bold">
											<a href="<?= base_url() ?>Pencarian_siswa/adm_siswa/<?= $row['nis']; ?>" class="btn btn-sm btn-primary " target="_blank">Detail</a>
										</h5>

									</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>