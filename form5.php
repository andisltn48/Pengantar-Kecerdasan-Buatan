<?php
require_once 'core/init.php';
$title = "Form";
$db = new Database();

if(isset($_POST['next4'])){
	Session::set('tmp_tinggal', $_POST['tmp_tinggal']);
	Session::set('dukungan', $_POST['dukungan']);
	Session::set('transportasi', $_POST['transportasi']);
	Session::set('biaya', $_POST['biaya']);
}
$email = Session::get('email');
$id = "SELECT id_user FROM tbl_user WHERE email = '$email'";
var_dump($_FILES);
if (isset($_POST['submit'])) {
	$idUser = $db->get_idUser($id);
	$db->insert('tbl_biodata', [
		'NIM' => Session::get('nim'),
		'Nama' => Session::get('nama'),
		'Jenis_Kelamin' => Session::get('jk'),
		'Tempat_Lahir' => Session::get('tmp_lahir'),
		'Tanggal_Lahir' => Session::get('tgl_lahir'),
		'Alamat' => Session::get('alamat'),
		'Kode_Pos' => Session::get('pos'),
		'No_Telepon' => Session::get('telp'),
		'No_Handphone' => Session::get('hp'),
		'IPK' => Session::get('ipk'),
		'Foto' => Session::get('foto'),
		'id_user' => $idUser
	]) . $db->insert('tbl_aset', [
		'Nama_Barang' => Session::get('nama_barang'),
		'Merk' => Session::get('merk'),
		'Jenis_Barang' => Session::get('jenis_barang'),
		'Tahun_Perolehan' => Session::get('tahun_perolehan'),
		'Metode_Perolehan' => Session::get('metode_perolehan'),
		'Kondisi_Barang' => Session::get('kondisi'),
		'Harga_Beli' => Session::get('harga'),
		'BPKB_STNK' => Session::get('bpkb'),
		'id_user' => $idUser
	]) . $db->insert('tbl_kondisiekonomi', [
		'Pekerjaan_Ayah_Wali' => Session::get('pk_ayah'),
		'Penghasilan_Ayah_Wali' => Session::get('pg_ayah'),
		'Detail_Pekerjaan_Ayah_Wali' => Session::get('detail_ayah'),
		'Bantuan_Pemerintah' => Session::get('bantuan'),
		'Nominal' => Session::get('nominal'),
		'Pekerjaan_Ibu' => Session::get('pk_ibu'),
		'Penghasilan_Ibu' => Session::get('pg_ibu'),
		'Detail_Pekerjaan_Ibu' => Session::get('detail_ibu'),
		'id_user' => $idUser
	]) . $db->insert('tbl_rencana_hidup', [
		'Tempat_Tinggal' => Session::get('tmp_tinggal'),
		'Dukungan_Keluarga' => Session::get('dukungan'),
		'Transportasi_Harian' => Session::get('transportasi'),
		'Biaya_Transportasi' => Session::get('biaya'),
		'id_user' => $idUser
	]) . $db->insert('tbl_rumah', [
		'Jenis_Kepemilikan' => $_POST['jenis_kepemilikan'],
		'Sumber_Listrik' => $_POST['sumber_listrik'],
		'Daya_Listrik' => $_POST['daya_listrik'],
		'Penggunaan_air' => $_POST['penggunaan_air'],
		'Luas_Tanah' => $_POST['luas_tanah'],
		'Luas_Bangunan' => $_POST['luas_bangunan'],
		'Bahan_Atap' => $_POST['bahan_atap'],
		'Bahan_Lantai' => $_POST['bahan_lantai'],
		'Bahan_Tembok' => $_POST['bahan_tembok'],
		'PBB' => $_POST['pbb'],
		'Mandi_Cuci_Kakus' => $_POST['kakus'],
		'Sumber_Air_Utama' => $_POST['sumber_air'],
		'Jarak' => $_POST['jarak'],
		'Jumlah_orang_tinggal' => $_POST['jml_orang'],
		'id_user' => $idUser
	]);
}


include('templates/header.php')
?>

<section class="section sc-form">
	<p class="title is-size-3 has-text-centered">Data Rumah</p>
	<hr class="divider">
	<form action="" method="post">
		<div class="columns is-centered is-multiline">
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Jenis Kepemilikan <span class="has-text-danger">*</span></label>
					<div class="control">
						<div class="select">
							<select name="jenis_kepemilikan">
								<option value="" selected hidden disabled>Pilih</option>
								<?php foreach ($db->get_enum("tbl_rumah", "Jenis_Kepemilikan") as $kepemilikan) : ?>
									<option><?= $kepemilikan ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Sumber Listrik <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="sumber_listrik">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Daya Listrik <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="daya_listrik">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Penggunaan Air <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="file" accept=".png, .jpg, .jpeg, application/pdf" name="penggunaan_air">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Luas Tanah <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="luas_tanah">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Luas Bangunan <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="luas_bangunan">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Bahan Atap <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="bahan_atap">
					</div>
				</div>
			</div>
			<div class="column is-4">
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Bahan Lantai <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="bahan_lantai">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Bahan Tembok <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="bahan_tembok">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">PBB <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="pbb">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Mandi Cuci Kakus <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="kakus">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Sumber Air Utama <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="text" name="sumber_air">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Jarak <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="jarak">
					</div>
				</div>
				<div class="field mb-4">
					<label class="label has-text-weight-normal">Jumlah Orang Tinggal <span class="has-text-danger">*</span></label>
					<div class="control">
						<input class="input" type="number" name="jml_orang">
					</div>
				</div>
			</div>
			<div class="column is-8">
				<div class="field mb-4 is-grouped" style="justify-content: flex-end;">
					<div class="control">
						<a href="form4.php" class="button is-link is-light">Kembali</a>
					</div>
					<div class="control">
						<button type="submit" name="submit" class="button is-link">Submit</button>
					</div>
					<!-- <button class="button" type="submit" name="submit5">tes</button> -->
				</div>
			</div>
		</div>

	</form>
</section>

<?php include('templates/footer.php') ?>