<div class="jumbotron jumbotron-fluid text-center text-uppercase">
	<h1 class="display-4">STATISTIK DATA ADMINISTRASI SISWA</h1>
	<div class="container">
		<div class="row">
			<div class="col-md mt-4">

				<div class="card">
					<div class="card-header bg-secondary text-white">
						<h3 class="text-center text-uperrcase">PENCARIAN SISWA <br> (NIS)</h3>
					</div>
					<div class="card-body">
						<form action="<?= base_url() ?>Home/cari_siswa" method="post">
							<div class="form-group">
								<input type="text" name="nama_siswa" class="form-control">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>