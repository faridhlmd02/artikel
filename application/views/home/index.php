<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Artikel</h1>
	</div>

	<table class="table">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Judul</th>
				<th scope="col">Isi</th>
				<th scope="col">Penulis</th>
				<th scope="col">Tanggal </th>
				<th scope="col">Gambar</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($artikel as $atk) : ?>
				<tr>
					<th scope="row"><?= $i ?></th>
					<td><?= $atk['judul'] ?></td>
					<td style="word-wrap: break-word"><?= character_limiter($atk['isi'], 10) ?></td>
					<td><?= $atk['penulis'] ?></td>
					<td><?= $atk['tanggal'] ?></td>
					<td><img src="<?= base_url('assets/img/' . $atk['gambar']) ?>" width=150></td>
					<td>
						<a href="<?= base_url('artikel/delete/' . $atk['id']) ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
						<a href="<?= base_url('artikel/update/' . $atk['id']) ?>" class=" badge badge-primary">update</a>
						<a href="<?= base_url('artikel/details/' . $atk['id']) ?>" class=" badge badge-secondary">detail</a>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endforeach ?>
		</tbody>
	</table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
