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
	include('templates/header.php');
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

					<?php
					ini_set('display_errors', 'Off');
					$data = $db->tampil("SELECT * FROM ambilbeasiswa WHERE id = '$idUser'");
					$defuzi = $db->tampil("SELECT * FROM hasil_fuzzy WHERE id_user = '$idUser'");
					if (count($data) > 0) {
						foreach ($data as $x) {
					?>
							<div class="columns px-3 py-2" style="border: 1px solid lightgrey; width: 60%; border-radius: 6px;">
								<div class="column">
									<a href="#">
										<p class="title is-size-4 has-text-grey-dark"><?= $x['nama_beasiswa'] ?></p>
										<p class="subtitle is-size-6 has-text-grey"><?= $x['penerbit'] ?></p>
									</a>
								</div>
								<div class="column is-narrow">
									<div class="has-text-centered">
										<?php
										foreach ($defuzi as $def) {
											if ($def['defuzzifikasi'] > 60) { ?>
												<p class="tag is-medium is-success has-text-weight-semibold">Diterima</p>
												<p class="mt-2">
													<span class="has-text-grey">Peluang : </span>
													<span class="has-text-weight-semibold has-text-info"><?= $def['defuzzifikasi'] ?>%</span>
												</p>
											<?php } else { ?>
												<p class="tag is-medium is-danger has-text-weight-semibold">Tidak Diterima</p>
										<?php
											}
										} ?>
										<p class="tag is-medium is-warning has-text-weight-semibold <?= count($def['defuzzifikasi']) > 0 ? 'is-hidden' : '' ?>">Proses Verifikasi</p>
										<p class="mt-2">
											<span class="has-text-grey">Status : </span>
											<span class="has-text-weight-semibold has-text-info">Pendaftar</span>
										</p>
									</div>
								</div>
							</div>
						<?php
						}
					} else { ?>
						<h1 class="title is-5 has-text-centered has-text-danger">Anda belum mendaftar Beasiswa!</h1>
						<p class="has-text-centered">Silahkan cari Beasiswa <a style="text-decoration: underline;" href="beasiswa.php">disini</a></p>
					<?php } ?>
				</div>
				<?php foreach ($aset as $ast) : ?>
					<div id="menu1" class="tab-content">
						<div class="columns">
							<div class="column is-4">
								<span>
									<p class="has-text-grey is-size-6">Jumlah Mobil</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $ast['Jumlah_Mobil'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Jumlah Motor</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $ast['Jumlah_Motor'] ?></p>
								</span>
								<br>
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
				<?php foreach ($ekonomi as $eko) : ?>
					<div id="menu2" class="tab-content">
						<div class="columns">
							<div class="column is-4">
								<span>
									<p class="has-text-grey is-size-6">Pekerjaan Ayah/Wali</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $eko['Pekerjaan_Ayah_Wali'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Penghasilan Ayah/Wali</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Rp. <?= $eko['Penghasilan_Ayah_Wali'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Detail Pekerjaan Ayah/Wali</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $eko['Detail_Pekerjaan_Ayah_Wali'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Bantuan Pemerintah</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Rp. <?= $eko['Nominal'] ?></p>
								</span>
							</div>
							<div class="column is-4">
								<span>
									<p class="has-text-grey is-size-6">Pekerjaan Ibu</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $eko['Pekerjaan_Ibu'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Penghasilan Ibu</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Rp. <?= $eko['Penghasilan_Ibu'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Detail Pekerjaan Ibu</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $eko['Detail_Pekerjaan_Ibu'] ?></p>
								</span>
							</div>
						</div>
					</div>
				<?php endforeach ?>
				<?php foreach ($rencana as $rcn) : ?>
					<div id="menu3" class="tab-content">
						<div class="columns">
							<div class="column is-4">
								<span>
									<p class="has-text-grey is-size-6">Tempat Tinggal</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rcn['Tempat_Tinggal'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Dukungan Keluarga</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rcn['Dukungan_Keluarga'] ?></p>
								</span>
							</div>
							<div class="column is-4">
								<span>
									<p class="has-text-grey is-size-6">Transportasi Harian</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rcn['Transportasi_Harian'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Biaya Transportasi</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Rp. <?= $rcn['Biaya_Transportasi'] ?></p>
								</span>
							</div>
						</div>
					</div>
				<?php endforeach ?>
				<?php foreach ($rumah as $rm) : ?>
					<div id="menu4" class="tab-content">
						<div class="columns">
							<div class="column is-4">
								<span>
									<p class="has-text-grey is-size-6">Jumlah Rumah</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Jumlah_Rumah'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Jenis Kepemilikan</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Jenis_Kepemilikan'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Sumber Listrik</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Sumber_Listrik'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Daya Listrik</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Daya_Listrik'] ?> Watt</p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Penggunaan Air</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Rp. <?= $rm['Penggunaan_air'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Penggunaan Listrik</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Rp. <?= $rm['Penggunaan_listrik'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Sumber Air Utama</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Sumber_Air_Utama'] ?></p>
								</span>
							</div>
							<div class="column is-4">
								<span>
									<p class="has-text-grey is-size-6">Luas Tanah</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Luas_Tanah'] ?> m</p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Luas Bangunan</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Luas_Bangunan'] ?> m</p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Bahan Atap</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Bahan_Atap'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Bahan Lantai</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Bahan_Lantai'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Bahan Tembok</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Bahan_Tembok'] ?></p>
								</span>
								<br>
							</div>
							<div class="column is-4">
								<span>
									<p class="has-text-grey is-size-6">PBB</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold">Rp. <?= $rm['PBB'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Mandi Cuci Kakus</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Mandi_Cuci_Kakus'] ?></p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Jarak</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Jarak'] ?> Km</p>
								</span>
								<br>
								<span>
									<p class="has-text-grey is-size-6">Jumlah Orang Tinggal</p>
									<p class="has-text-grey-dark is-size-5 has-text-weight-semibold"><?= $rm['Jumlah_orang_tinggal'] ?></p>
								</span>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>

<?php include('templates/footer.php');
} else {
	$title = "not_login";
	include('templates/header.php') ?>

<?php } ?>