<?php
require_once 'core/init.php';
$title = "Form";
include('templates/header.php')
?>

<section class="section sc-form">
	<p class="title is-size-3 has-text-centered">Data Ekonomi</p>
	<hr class="divider">
	<form action="">
		<div class="columns is-centered is-multiline">
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Pekerjaan Ayah/Wali</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Penghasilan Ayah/Wali</label>
					<div class="control">
						<input class="input" type="number">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Detail Pekerjaan Ayah/Wali</label>
					<div class="control">
						<textarea class="textarea"></textarea>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Bantuan Pemerintah</label>
					<div class="control">
						<input class="input" type="number">
					</div>
				</div>
			</div>
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Pekerjaan Ibu</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Penghasilan Ibu</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Detail Pekerjaan Ibu</label>
					<div class="control">
						<textarea class="textarea"></textarea>
					</div>
				</div>
			</div>
			<div class="column is-8">
				<div class="field mb-4 is-grouped" style="justify-content: flex-end;">
					<div class="control">
						<a href="form2.php" class="button is-link is-light">Kembali</a>
					</div>
					<div class="control">
						<a href="form4.php" class="button is-link">Selanjutnya</a>
					</div>
				</div>
			</div>
		</div>

	</form>
</section>

<?php include('templates/footer.php') ?>