<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Add Article</h1>
	</div>

	<div class="row">
		<div class="col-xl-9 col-md-3 mb-4">
			<?php echo form_open_multipart('artikel/index'); ?>
			<div class="form-group row">
				<label for="judul" class="col-sm-2 col-form-label">Judul</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="judul" id="judul" value="<?= set_value('judul'); ?>">
					<?php echo form_error('judul', '<small class="text-danger pl-1">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="isi" class="col-sm-2 col-form-label">Isi Artikel</label>
				<div class="col-sm-6">
					<textarea class="form-control" id="isi" name="isi" rows="5"><?= set_value('isi') ?></textarea>
					<?php echo form_error('isi', '<small class="text-danger pl-1">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="penulis" id="penulis" value="<?= set_value('penulis') ?>">
					<?php echo form_error('penulis', '<small class="text-danger pl-1">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= set_value('tanggal'); ?>">
					<?php echo form_error('tanggal', '<small class="text-danger pl-1">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
				<div class="col-sm-5">
					<input type="file" class="form-control-file" id="gambar" name="gambar" value="<?= set_value('gambar') ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-5">
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</div>
			</form>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
