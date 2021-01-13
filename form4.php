<?php
require_once 'core/init.php';
$title = "Form";
include('templates/header.php')
?>

<section class="section sc-form">
	<p class="title is-size-3 has-text-centered">Data Rencana Hidup</p>
	<hr class="divider">
	<form action="">
		<div class="columns is-centered is-multiline">
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Tempat Tinggal</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Dukungan Keluarga</label>
					<div class="control">
						<input class="input" type="text">
					</div>
				</div>
			</div>
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Transportasi Harian</label>
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
					<label class="label has-text-weight-normal">Biaya Transportasi</label>
					<div class="control">
						<input class="input" type="number">
					</div>
				</div>
			</div>
			<div class="column is-8">
				<div class="field mb-4 is-grouped" style="justify-content: flex-end;">
					<div class="control">
						<a href="form3.php" class="button is-link is-light">Kembali</a>
					</div>
					<div class="control">
						<a href="form5.php" class="button is-link">Selanjutnya</a>
					</div>
				</div>
			</div>
		</div>

	</form>
</section>

<?php include('templates/footer.php') ?>