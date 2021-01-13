<?php
require_once 'core/init.php';
$title = "Form";
include('templates/header.php'); ?>

<section class="section sc-form">
	<p class="title is-size-3 has-text-centered">Biodata Diri</p>
	<hr class="divider">
	<form action="">
		<div class="columns is-centered is-multiline">
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Nama</label>
					<div class="control">
						<input class="input" type="text" name="nama">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Nisn</label>
					<div class="control">
						<input class="input" type="number" name="nisn">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Jenis Kelamin</label>
					<div class="control">
						<label class="radio">
							<input type="radio" name="jk">
							Laki-laki
						</label>
						<label class="radio">
							<input type="radio" name="jk">
							Perempuan
						</label>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Tempat Lahir</label>
					<div class="control">
						<input class="input" type="text" name="tmp_lahir">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Tanggal Lahir</label>
					<div class="control">
						<input class="input" type="date" name="tgl_lahir">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">IPK</label>
					<div class="control">
						<input class="input" type="number" name="ipk">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Pas FOTO</label>
					<div class="control">
						<input class="input" type="file" accept=".png, .jpg, .jpeg, application/pdf" name="foto">
					</div>
				</div>
			</div>
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Alamat</label>
					<div class="control">
						<textarea class="textarea" name="alamat"></textarea>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Email</label>
					<div class="control">
						<input class="input" type="text" name="email">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Kode POS</label>
					<div class="control">
						<input class="input" type="number" name="pos">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">No Telepon</label>
					<div class="control">
						<input class="input" type="number" name="telp">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">No Handphone</label>
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
						<a href="form2.php" class="button is-link">Selanjutnya</a>
					</div>
				</div>
			</div>
		</div>

	</form>
</section>

<?php include('templates/footer.php') ?>