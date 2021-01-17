<?php
require_once 'core/init.php';
$title = "Form";
$db = new Database();

if(isset($_POST['next3'])){
	Session::set('pk_ayah', $_POST['pk_ayah']);
	Session::set('pg_ayah', $_POST['pg_ayah']);
	Session::set('detail_ayah', $_POST['detail_ayah']);
	Session::set('bantuan', $_POST['bantuan']);
	Session::set('nominal', $_POST['nominal']);
	Session::set('pk_ibu', $_POST['pk_ibu']);
	Session::set('pg_ibu', $_POST['pg_ibu']);
	Session::set('detail_ibu', $_POST['detail_ibu']);
}
// $email = Session::get('email');
// $id = "SELECT id_user FROM tbl_user WHERE email = '$email'";

// if(isset($_POST['submit4'])){
// 	$idUser = $db->get_idUser($id);
// 	$db->insert('tbl_rencana_hidup', [
// 		'Tempat_Tinggal' => $_POST['tmp_tinggal'],
// 		'Dukungan_Keluarga' => $_POST['dukungan'],
// 		'Transportasi_Harian' => $_POST['transportasi'],
// 		'Biaya_Transportasi' => $_POST['biaya'],
// 		'id_user' => $idUser
// 	]);
// }
include('templates/header.php')
?>

<section class="section sc-form">
	<p class="title is-size-3 has-text-centered">Data Rencana Hidup</p>
	<hr class="divider">
	<form action="form5.php" method="post">
		<div class="columns is-centered is-multiline">
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Tempat Tinggal <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="tmp_tinggal">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Dukungan Keluarga <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="dukungan">
					</div>
				</div>
			</div>
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Transportasi Harian <span class="has-text-danger">*</span></label>
					<div class="control">
						<div class="select">
							<select name="transportasi">
								<option value="" selected hidden disabled>Pilih</option>
								<?php foreach ($db->get_enum("tbl_rencana_hidup", "Transportasi_Harian") as $transportasi) : ?>
									<option><?= $transportasi ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Biaya Transportasi <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="biaya">
					</div>
				</div>
			</div>
			<div class="column is-8">
				<div class="field mb-4 is-grouped" style="justify-content: flex-end;">
					<div class="control">
						<a href="form3.php" class="button is-link is-light">Kembali</a>
					</div>
					<div class="control">
						<button name="next4" class="button is-link">Selanjutnya</button>
					</div>
					<!-- <button class="button" type="submit" name="submit4">tes</button> -->
				</div>
			</div>
		</div>

	</form>
</section>

<?php include('templates/footer.php') ?>