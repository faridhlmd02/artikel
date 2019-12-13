<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Edit Artikel</h1>
	</div>

	<div class="row">
		<div class="col-xl-9 col-md-3 mb-4">
			<?php echo form_open_multipart(''); ?>
			<input type="hidden" name="id" value="<?= $ubah_artikel['id']; ?>">
			<div class="form-group row">
				<label for="judul" class="col-sm-2 col-form-label">Judul</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="judul" id="judul" value="<?= $ubah_artikel['judul'] ?>">
					<?php echo form_error('judul', '<small class="text-danger pl-1">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="isi" class="col-sm-2 col-form-label">Isi Artikel</label>
				<div class="col-sm-6">
					<textarea class="form-control" id="isi" name="isi" rows="5"><?= $ubah_artikel['isi'] ?></textarea>
					<?php echo form_error('isi', '<small class="text-danger pl-1">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="penulis" id="penulis" value="<?= $ubah_artikel['penulis'] ?>">
					<?php echo form_error('penulis', '<small class="text-danger pl-1">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $ubah_artikel['tanggal'] ?>">
					<?php echo form_error('tanggal', '<small class="text-danger pl-1">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-2">Picture</div>
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-3">
							<img src="<?= base_url('assets/img/' . $ubah_artikel['gambar']) ?>" class="img-thumbnail">
						</div>
						<div class="col-sm-9">
							<div class="custom-file">
								<input type="file" class="form-control-file" id="gambar" name="gambar">
								<label class="form-control-file" for="gambar"></label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-5">
					<button type="submit" class="btn btn-primary">Ubah</button>
				</div>
			</div>
			</form>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
