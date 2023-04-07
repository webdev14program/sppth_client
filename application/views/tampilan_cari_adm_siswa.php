<div class="jumbotron jumbotron-fluid text-center text-uppercase bg-info">
	<h1 class="display-4 text-white text-uppercase font-weight-bold">pencariana adm sekolh <br> siswa (per nis)</h1>
</div>


<div class="container">
	<div class="row">
		<div class="col-md mt-4">
			<div class="card">
				<div class="card-header bg-info">
					<h5 class=" text-uppercase font-weight-bold text-white"><?= $header['nama_siswa'] ?> (<?= $header['nis'] ?>)</h5>
				</div>
				<div class="card-body">
					<table class="table table-striped table-bordered">
						<thead>
							<tr class="text-uppercase">
								<th scope="col">#</th>
								<th scope="col">ID</th>
								<th scope="col">Kelas</th>
								<th scope="col">jurusan</th>
								<th scope="col">tahun ajaran</th>
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
									<td><?= $row['id_siswa']; ?></td>
									<td><?= $row['kelas']; ?></td>
									<td><?= $row['jurusan']; ?></td>
									<td><?= $row['tahun_ajaran']; ?></td>
									<td>
										<h5 class="text-center">
											<a class="btn btn-primary btn-sm" href="<?= base_url() ?>/Pencarian_siswa/detail/<?= $row['siswa_tahun']; ?>">Detail</a>
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
