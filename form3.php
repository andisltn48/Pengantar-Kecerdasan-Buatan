<?php
require_once 'core/init.php';
$db = new Database();
$title = "Form";
// if (isset($_POST['next2'])) {
// 	Session::set('nama_barang', $_POST['nama_barang']);
// 	Session::set('merk', $_POST['merk']);
// 	Session::set('jenis_barang', $_POST['jenis_barang']);
// 	Session::set('tahun_perolehan', $_POST['tahun_perolehan']);
// 	Session::set('metode_perolehan', $_POST['metode_perolehan']);
// 	Session::set('kondisi', $_POST['kondisi']);
// 	Session::set('harga', $_POST['harga']);
// 	Session::set('bpkb', $_POST['bpkb']);
// }

$email = Session::get('email');
$id = "SELECT id_user FROM tbl_user WHERE email = '$email'";

if (isset($_POST['submit3'])) {
	$idUser = $db->get_idUser($id);
	$db->insert('tbl_kondisiekonomi', [
		'Pekerjaan_Ayah_Wali' => $_POST['pk_ayah'],
		'Penghasilan_Ayah_Wali' => $_POST['pg_ayah'],
		'Detail_Pekerjaan_Ayah_Wali' => $_POST['detail_ayah'],
		'Bantuan_Pemerintah' => $_POST['bantuan'],
		'Nominal' => $_POST['nominal'],
		'Pekerjaan_Ibu' => $_POST['pk_ibu'],
		'Penghasilan_Ibu' => $_POST['pg_ibu'],
		'Detail_Pekerjaan_Ibu' => $_POST['detail_ibu'],
		'id_user' => $idUser
	]);
}
include('templates/header.php');
?>

<section class="section sc-form">
	<p class="title is-size-3 has-text-centered">Data Ekonomi</p>
	<hr class="divider">
	<form action="" method="post">
		<div class="columns is-centered is-multiline">
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Pekerjaan Ayah/Wali <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="pk_ayah">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Penghasilan Ayah/Wali <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="pg_ayah">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Detail Pekerjaan Ayah/Wali <span class="has-text-danger">*</span></label>
					<div class="control">
						<textarea class="textarea" name="detail_ayah"></textarea>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Bantuan Pemerintah <span class="has-text-danger">*</span></label>
					<div class="control">
						<div class="select">
							<select id="bantuan" name="bantuan" onchange="showNominal()">
								<option value="" selected hidden disabled>Pilih</option>
								<?php foreach ($db->get_enum("tbl_kondisiekonomi", "Bantuan_Pemerintah") as $key => $bantuan) : ?>
									<option value="<?= $bantuan ?>"><?= $bantuan ?></option>
								<?php endforeach ?>
							</select>
							<input type="hidden" name="bantuan_hidden" id="bantuan_hidden" value="">
						</div>
					</div>
				</div>
				<div id="nominal" class="field mb-4 is-hidden">
					<label class="label has-text-weight-normal">Nominal <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="nominal">
					</div>
				</div>
			</div>
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Pekerjaan Ibu <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="pk_ibu">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Penghasilan Ibu <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="pg_ibu">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Detail Pekerjaan Ibu <span class="has-text-danger">*</span></label>
					<div class="control">
						<textarea class="textarea" name="detail_ibu"></textarea>
					</div>
				</div>
			</div>
			<div class="column is-8">
				<div class="field mb-4 is-grouped" style="justify-content: flex-end;">
					<div class="control">
						<a href="form2.php" class="button is-link is-light">Kembali</a>
					</div>
					<div class="control">
						<button class="button is-link" name="next3">Selanjutnya</button>
					</div>
					<button class="button" type="submit" name="submit3">tes</button>

				</div>
			</div>
		</div>

	</form>
</section>
<script>
	function showNominal() {
		val = document.getElementById('bantuan').value;
		if (val == 'Ada') {
			document.getElementById('nominal').classList.remove('is-hidden');
			document.getElementById('bantuan_hidden').value = val.options[val.selectedIndex].text;
		} else {
			document.getElementById('nominal').classList.add('is-hidden');
			document.getElementById('bantuan_hidden').value = val.options[val.selectedIndex].text;
		}
		
	}
</script>

<?php include('templates/footer.php') ?>