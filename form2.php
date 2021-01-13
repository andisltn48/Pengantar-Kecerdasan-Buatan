<?php
require_once 'core/init.php';
$title = "Form";
include('templates/header.php') ?>

<section class="section sc-form">
	<p class="title is-size-3 has-text-centered">Data Aset</p>
	<hr class="divider">
	<form action="">
		<div class="columns is-centered is-multiline">
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Nama Barang</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Merk</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Jenis Barang</label>
					<div class="control">
						<div class="select">
							<select>
								<option>Select dropdown</option>
								<option>With options</option>
							</select>
						</div>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Tahun Perolehan</label>
					<div class="control">
						<input class="input" type="number">
					</div>
				</div>
			</div>
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Metode Perolehan</label>
					<div class="control">
						<div class="select">
							<select>
								<option>Select dropdown</option>
								<option>With options</option>
							</select>
						</div>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Kondisi Barang</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Harga Beli</label>
					<div class="control">
						<input class="input" type="number">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">BPKPB/STNK</label>
					<div class="control">
						<input class="input" type="file" accept=".png, .jpg, .jpeg, application/pdf">
					</div>
				</div>
			</div>
			<div class="column is-8">
				<div class="field mb-4 is-grouped" style="justify-content: flex-end;">
					<div class="control">
						<a href="form.php" class="button is-link is-light">Kembali</a>
					</div>
					<div class="control">
						<a href="form3.php" class="button is-link">Selanjutnya</a>
					</div>
				</div>
			</div>
		</div>

	</form>
</section>

<?php include('templates/footer.php') ?>