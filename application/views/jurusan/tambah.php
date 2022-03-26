<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					<?= $title; ?>
				</div>
				<div class="card-body">

					<?php if (validation_errors()) : ?>
						<div class="alert alert-danger" role="alert">
							<?= validation_errors(); ?>
						</div>
					<?php endif; ?>

					<form action="" method="post">
						<div class="form-group">
							<label for="nama_jurusan">Nama Jurusan</label>
							<input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan">
						</div>

						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
