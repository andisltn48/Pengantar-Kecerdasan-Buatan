<?php
require_once 'core/init.php';
$title = "Form";
$db = new Database();

$email = Session::get('email');

include('templates/header.php'); ?>

<section class="section sc-form">
	<p class="title is-size-3 has-text-centered">Biodata Diri</p>
	<hr class="divider">
	<form action="form2.php" method="post" enctype="multipart/form-data">
		<div class="columns is-centered is-multiline">
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Nama <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="nama">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">NIM <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="nim">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Jenis Kelamin <span class="has-text-danger">*</span></label>
					<div class="control">
						<label class="radio">
							<?php foreach ($db->get_enum("tbl_biodata", "Jenis_Kelamin") as $jk) : ?>
								<input type="radio" value="<?= $jk ?>" name="jk">
								<?= $jk ?>
							<?php endforeach ?>
						</label>

					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Tempat Lahir <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="tmp_lahir">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Tanggal Lahir <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="date" name="tgl_lahir">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">IPK <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="ipk" step="0.01">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Pas Foto <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="file" accept=".png, .jpg, .jpeg" name="foto" id="foto">
					</div>
				</div>
			</div>
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Alamat <span class="has-text-danger">*</span></label>
					<div class="control">
						<textarea class="textarea" name="alamat"></textarea>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Kode POS <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="pos">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">No Telepon </label>
					<div class="control">
						<input class="input" type="number" name="telp">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">No Handphone <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="hp">
					</div>
				</div>
			</div>
			<div class="column is-8">
				<div class="field mb-4 is-grouped" style="justify-content: flex-end;">
					<div class="control">
						<a href="profil.php" class="button is-link is-light">Batal</a>
					</div>
					<div class="control">
						<button class="button is-link" type="submit" name="next">Selanjutnya</button>
					</div>
				</div>
			</div>
		</div>

	</form>
</section>

<?php include('templates/footer.php') ?>