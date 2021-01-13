<?php
require_once 'core/init.php';
$title = "Form";
include('templates/header.php')
?>

<section class="section sc-form">
	<p class="title is-size-3 has-text-centered">Data Rumah</p>
	<hr class="divider">
	<form action="">
		<div class="columns is-centered is-multiline">
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Jenis Kepemilikan</label>
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
					<label class="label has-text-weight-normal">Sumber Listrik</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Daya Listrik</label>
					<div class="control">
						<input class="input" type="number">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Penggunaan Air</label>
					<div class="control">
						<input class="input" type="file">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Luas Tanah</label>
					<div class="control">
						<input class="input" type="number">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Bahan Atap</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
			</div>
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Bahan Lantai</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Bahan Tembok</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">PBB</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Mandi Cuci Kakus</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Sumber Air Utama</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Jarak</label>
					<div class="control">
						<input class="input" type="number">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Jumlah Orang Tinggal</label>
					<div class="control">
						<input class="input" type="number" >
					</div>
				</div>
			</div>
			<div class="column is-8">
				<div class="field mb-4 is-grouped" style="justify-content: flex-end;">
					<div class="control">
						<a href="form4.php" class="button is-link is-light">Kembali</a>
					</div>
					<div class="control">
						<a href="#" class="button is-link">Submit</a>
					</div>
				</div>
			</div>
		</div>

	</form>
</section>

<?php include('templates/footer.php') ?>