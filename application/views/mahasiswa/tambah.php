<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					<?= $title; ?>
				</div>
				<div class="card-body">

					<!-- <?php if (validation_errors()) : ?>
						<div class="alert alert-danger" role="alert">
							<?= validation_errors(); ?>
						</div>
					<?php endif; ?> -->

					<form action="" method="post">
						<div class="form-group">
							<label for="nama">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama" name="nama">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>

						<div class="form-group">
							<label for="nim">NIM</label>
							<input type="text" class="form-control" id="nim" name="nim">
							<small class="form-text text-danger"><?= form_error('nim'); ?></small>
						</div>

						<div class="form-group">
							<label for="email">e-Mail</label>
							<input type="text" class="form-control" id="email" name="email">
							<small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>

						<div class="form-group">
							<label for="jurusan">Example select</label>
							<select class="form-control" id="jurusan" name="jurusan">

								<?php foreach ($jurusan as $jrsn) : ?>
									<option value="<?= $jrsn['nama_jurusan']; ?>"><?= $jrsn['nama_jurusan']; ?></option>
								<?php endforeach; ?>

							</select>
						</div>

						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
