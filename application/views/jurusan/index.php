<div class="container">

	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">Data Jurusan <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url('jurusan/tambah'); ?>" class="btn btn-primary">Tambah Data Jurusan</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Jurusan</h3>
			<ul class="list-group">

				<?php foreach ($jurusan as $jrsn) : ?>
					<li class="list-group-item">
						<?= $jrsn['nama_jurusan']; ?>
						<a href="<?= base_url('jurusan/hapus'); ?>/<?= $jrsn['id_jurusan']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
					</li>
				<?php endforeach; ?>

			</ul>
		</div>
	</div>
</div>
