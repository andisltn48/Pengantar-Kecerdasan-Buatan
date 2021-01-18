<?php
require_once 'core/init.php';
$title = "Form";
$db = new Database();

if (isset($_POST['next'])) {
	Session::set('nama', $_POST['nama']);
	Session::set('nim', $_POST['nim']);
	Session::set('jk', $_POST['jk']);
	Session::set('tmp_lahir', $_POST['tmp_lahir']);
	Session::set('tgl_lahir', $_POST['tgl_lahir']);
	Session::set('ipk', $_POST['ipk']);
	Session::set('foto', $db->upload());
	Session::set('alamat', $_POST['alamat']);
	Session::set('pos', $_POST['pos']);
	Session::set('telp', $_POST['telp']);
	Session::set('hp', $_POST['hp']);
}
include('templates/header.php') ?>

<section class="section sc-form">
	<p class="title is-size-3 has-text-centered">Data Aset</p>
	<hr class="divider">
	<form action="form3.php" method="post">
		<div class="columns is-centered is-multiline">
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Jumlah Mobil <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="jml_mobil" required>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Jumlah Motor <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="jml_motor" required>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Nama Barang <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="nama_barang" required>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Merk <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="merk" required>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Jenis Barang <span class="has-text-danger">*</span></label>
					<div class="control">
						<div class="select">
							<select name="jenis_barang">
								<option value="" selected hidden disabled>Pilih</option>
								<?php foreach ($db->get_enum("tbl_aset", "Jenis_Barang") as $barang) : ?>
									<option><?= $barang ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Tahun Perolehan <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="tahun_perolehan" required>
					</div>
				</div>
			</div>
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Metode Perolehan <span class="has-text-danger">*</span></label>
					<div class="control">
						<div class="select">
							<select name="metode_perolehan">
								<option value="" selected disabled hidden>Pilih</option>
								<?php foreach ($db->get_enum("tbl_aset", "Metode_Perolehan") as $metode) : ?>
									<option><?= $metode ?></option>
								<?php endforeach ?>
							</select>

						</div>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Kondisi Barang <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="kondisi">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Harga Beli <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="harga">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">BPKPB/STNK <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="file" accept=".png, .jpg, .jpeg, application/pdf" name="bpkb">
					</div>
				</div>
			</div>
			<div class="column is-8">
				<div class="field mb-4 is-grouped" style="justify-content: flex-end;">
					<div class="control">
						<a href="form1.php" class="button is-link is-light">Kembali</a>
					</div>
					<div class="control">
						<button type="submit" name="next2" class="button is-link">Selanjutnya</button>
					</div>
					<!-- <button class="button" type="submit" name="submit2">tes</button> -->

				</div>
			</div>
		</div>
	</form>
</section>

<?php include('templates/footer.php') ?>