<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Artikel</h1>
	</div>

	<div class="card mx-auto mb-4" style="width: 500px">
		<img src="<?= base_url('assets/img/' . $detail['gambar']) ?>" class="card-img-top" style="width: 500px;">
		<div class="card-body">
			<h5 class="card-title font-weight-bold"><?= $detail['judul'] ?></h5>
			<h6><?= $detail['tanggal'] ?></h6>
			<p class="card-text"><?= $detail['isi'] ?>.</p>
			<p class="card-text float-right"><?= $detail['tanggal'] ?></p>
			<a href="<?= base_url('home/index') ?>" class="btn btn-primary mt-3">Back</a>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
