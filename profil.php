<?php
require_once 'core/init.php';
if (Session::exists('email')) {
	$title = "Profil";
	$db = new Database();
	$email = Session::get('email');
	$id = "SELECT id_user FROM tbl_user WHERE email = '$email'";
	$idUser = $db->get_idUser($id);
	$aset = $db->tampil("SELECT * FROM tbl_aset WHERE id_user = '$idUser'");
	$ekonomi = $db->tampil("SELECT * FROM tbl_kondisiekonomi WHERE id_user = '$idUser'");
	$rencana = $db->tampil("SELECT * FROM tbl_rencana_hidup WHERE id_user = '$idUser'");
	$rumah = $db->tampil("SELECT * FROM tbl_rumah WHERE id_user = '$idUser'");
	$aset = $db->tampil("SELECT * FROM tbl_aset WHERE id_user = '$idUser'");
	include('templates/header.php')
?>

	<section class="section sc-profil">
		<div class="columns sc-subProfil">
			<div class="column">
				<div class="tabs is-boxed">
					<ul>
						<li class="is-active" data-tab="menu0">
							<a class="has-text-weight-bold is-uppercase">
								Beasiswa
							</a>
						</li>
						<li data-tab="menu1">
							<a>
								Data Aset
							</a>
						</li>
						<li class="" data-tab="menu2">
							<a>
								Data Ekonomi
							</a>
						</li>
						<li class="" data-tab="menu3">
							<a>
								Data Rencana Hidup
							</a>
						</li>
						<li class="" data-tab="menu4">
							<a>
								Data Rumah
							</a>
						</li>
					</ul>
				</div>
				<div id="menu0" class="tab-content current-tab">
					<p>Beasiswa yang sedang didaftarkan :</p>
					<br>
					<div class="columns px-3 py-2" style="border: 1px solid lightgrey; width: 60%; border-radius: 6px;">
						<div class="column">
							<a href="#">
								<p class="title is-size-4 has-text-grey-dark">Bidikmisi 2021/2022</p>
								<p class="subtitle is-size-6 has-text-grey">Ristek Dikti</p>
							</a>
						</div>
						<div class="column is-narrow">
							<div class="has-text-centered">
								<p class="tag is-medium is-warning has-text-weight-semibold">Proses Verifikasi</p>
								<p class="mt-2">
									<span class="has-text-grey">status : </span>
									<span class="has-text-weight-semibold has-text-success">Pendaftar</span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<?php foreach($aset as $ast): ?>
				<div id="menu1" class="tab-content">
					<div class="columns">
						<div class="column is-4">
							<span>
								<p class="has-text-grey is-size-6">Nama Barang</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $ast['Nama_Barang'] ?></p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Merk</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $ast['Merk'] ?></p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Jenis</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $ast['Jenis_Barang'] ?></p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Tahun Perolehan</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $ast['Tahun_Perolehan'] ?></p>
							</span>
						</div>
						<div class="column is-4">
							<span>
								<p class="has-text-grey is-size-6">Metode Perolehan</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $ast['Metode_Perolehan'] ?></p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Kondisi Barang</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $ast['Kondisi_Barang'] ?></p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Harga Beli</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $ast['Harga_Beli'] ?></p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">BPKPB-STNK</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><a href="#"><?= $ast['BPKB_STNK'] ?></a></p>
							</span>
						</div>
					</div>
				</div>
				<?php endforeach ?>
				<div id="menu2" class="tab-content">
					<div class="columns">
						<div class="column is-4">
							<span>
								<p class="has-text-grey is-size-6">Pekerjaan Ayah/Wali</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Penghasilan Ayah/Wali</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Detail Pekerjaan Ayah/Wali</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Bantuan Pemerintah</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">200X</p>
							</span>
						</div>
						<div class="column is-4">
							<span>
								<p class="has-text-grey is-size-6">Pekerjaan Ibu</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Penghasilan Ibu</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Detail Pekerjaan Ibu</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><a href="#">lorem ipsyun</a></p>
							</span>
						</div>
					</div>
				</div>
				<div id="menu3" class="tab-content">
					<div class="columns">
						<div class="column is-4">
							<span>
								<p class="has-text-grey is-size-6">Tempat Tinggal</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Dukungan Keluarga</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
						</div>
						<div class="column is-4">
							<span>
								<p class="has-text-grey is-size-6">Transportasi Harian</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Biaya Transportasi</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
						</div>
					</div>
				</div>
				<div id="menu4" class="tab-content">
					<div class="columns">
						<div class="column is-4">
							<span>
								<p class="has-text-grey is-size-6">Jenis Kepemilikan</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Sumber Listrik</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Daya Listrik</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Penggunaan Air</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Sumber Air Utama</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
						</div>
						<div class="column is-4">
							<span>
								<p class="has-text-grey is-size-6">Luas Tanah</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Luas Bangunan</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Bahan Atap</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Bahan Lantai</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Bahan Tembok</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
							<br>
						</div>
						<div class="column is-4">
							<span>
								<p class="has-text-grey is-size-6">PBB</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Mandi Cuci Kakus</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Jarak</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
							<br>
							<span>
								<p class="has-text-grey is-size-6">Jumlah Orang Tinggal</p>
								<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Lorem ipsum dolor</p>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include('templates/footer.php');
} else {
	$title = "not_login";
	include('templates/header.php') ?>

<?php } ?>