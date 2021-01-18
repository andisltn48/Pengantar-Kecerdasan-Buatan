<?php
require_once 'core/init.php';
$db = new Database();
if (Session::exists('email')) {
	$email = Session::get('email');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?= $title ?> - Beasiswa ITeka</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<!-- Bulma -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.css">
	<!-- Custom Design -->
	<link rel="stylesheet" type="text/css" href="assets/css/design.css">

</head>

<body>
	<div id="wrapLayout">
		<header>
			<nav class="navbar <?= ($title != 'Beranda') ? 'nav-white' : '' ?>" role="navigation" aria-label="main navigation">
				<div class="container">
					<div class="navbar-brand">
						<a class="navbar-item is-size-4" href="index.php">
							<span class="has-text-grey-dark">Beasiswa</span>
							<span class="has-text-weight-bold ml-1 has-text-link"> ITeka</span>
						</a>
					</div>

					<div id="navbarBasicExample" class="navbar-menu">
						<div class="navbar-end">
							<a href="index.php" class="navbar-item">Beranda</a>
							<a href="beasiswa.php" class="navbar-item">Beasiswa</a>
							<?php if (Session::exists('email')) { ?>
								<a href="profil.php" class="navbar-item">Profil</a>
								<div class="navbar-item">
									<a href="logout.php" class="button <?= ($title == 'Beranda') ? 'is-link' : 'is-light' ?>  is-outlined has-text-weight-semibold">Keluar</a>
								</div>
							<?php } else { ?>
								<a href="login.php" class="navbar-item has-text-weight-semibold">Masuk</a>
								<div class="navbar-item">
									<a href="signup.php" class="button <?= ($title == 'Beranda') ? 'is-link' : 'is-light' ?>  is-outlined has-text-weight-semibold">Daftar</a>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</nav>

			<section class="hero is-link is-medium sc-subHeader <?= ($title == 'Beranda') ? 'is-hidden' : '' ?>">
				<div class="hero-body">
					<div class="container">
						<div class="has-text-centered <?= ($title != 'Beasiswa') ? 'is-hidden' : '' ?>">
							<h1 class="title is-size-1 has-text-weight-extrabold">
								Temukan Beasiswa Dalam<br> dan Luar Negeri
							</h1>
							<h2 class="subtitle is-size-5 has-text-weight-light">
								Lorem, ipsum dolor sit amet consectetur adipisicing, elit
							</h2>
							<form action="beasiswa.php" method="get">
								<div class="field has-addons mt-3">
									<div class="control">
										<input class="input is-medium" type="search" placeholder="Cari Beasiswa" name="cari">
									</div>
									<div class="control">
										<button class="button is-medium is-primary" type="submit">
											<span class="icon is-light">
												<i class="fas fa-search"></i>
											</span>
										</button>
									</div>
								</div>
							</form>

						</div>

						<div class="sc-detailBeasiswa <?= ($title != 'Bidikmisi') ? 'is-hidden' : '' ?>">
							<?php
							if (isset($_GET['id'])) {
								$id = $_GET['id'];
								$data = $db->tampil("SELECT * FROM daftarbeasiswa WHERE id = '$id'");
							}
							foreach ($data as $x) :
							?>
								<p class="tag is-primary is-light is-medium mb-2">Buka</p>
								<p class="title is-size-1"><?= $x['nama_beasiswa'] ?></p>

								<div class="columns">
									<div class="column">
										<p class="has-text-weight-semibold">Tempat Beasiswa</p>
										<p class="has-text-light">Balikpapan, Kalimantan Timur</p>
									</div>
									<div class=" column">
										<p class="has-text-weight-semibold">Status Pendaftaran</p>
										<p class="has-text-light">Pendaftaran Dibuka</p>
									</div>
									<div class="column">
										<p class="has-text-weight-semibold">Periode Pendaftaran</p>
										<p class="has-text-light">01 Januari 2021 - 15 Februari 2021</p>
									</div>
								</div>
								<div class="sc-dbOleh mb-6">
									<span>oleh</span>
									<img src="<?= $x['image'] ?>" class="is-radiused mx-2">
									<span class="has-text-weight-semibold has-text-light"><?= $x['penerbit'] ?></span>
								</div>
								<form action="" method="post">
									<div class="sc-dbApply control">
										<?php if (Session::exists('email')) { ?>
											<button type="submit" name="submit">
												<?php
												$id = "SELECT id_user FROM tbl_user WHERE email = '$email'";
												$idUser = $db->get_idUser($id);
												$namaBeasiswa = $x['nama_beasiswa'];
												$penerbit = $x['penerbit'];
												?>
												<div class="tags are-large has-addons">
													<span class="tag is-white px-5 py-5">
														<span class="icon is-small has-text-link">
															<i class="fas fa-location-arrow"></i>
														</span>
													</span>
													<span class="tag is-white py-5 has-text-grey-dark has-text-weight-semibold">Daftar Sekarang
													</span>
												</div>
											</button>
											<?php
											if (isset($_POST['submit'])) {
												$ipk = $db->tampil("SELECT IPK FROM tbl_biodata WHERE id_user = '$idUser'");
												$po = $db->tampil("SELECT Penghasilan_Ayah_Wali, Penghasilan_Ibu FROM tbl_kondisiekonomi WHERE id_user = '$idUser'");
												$aset = $db->tampil("SELECT Jumlah_Mobil, Jumlah_Motor FROM tbl_aset WHERE id_user = '$idUser'");
												$rumah = $db->tampil("SELECT Jumlah_Rumah, Penggunaan_air, Penggunaan_listrik, Jarak, Jumlah_orang_tinggal FROM tbl_rumah WHERE id_user = '$idUser'");
												
												$db->insertBeasiswa($idUser, $namaBeasiswa, $penerbit);
												$proses = $db->prosesBeasiswa($ipk, $po, $aset, $rumah);
												$db->insert('hasil_fuzzy', [
													'defuzzifikasi' => $proses,
													'id_user' => $idUser
												]);
												echo "<script>location.href='profil.php'</script>";
											}
										} else { ?>
											<button type="submit" name="submit2" href="login.php">
												<div class="tags are-large has-addons">
													<span class="tag is-white px-5 py-5">
														<span class="icon is-small has-text-link">
															<i class="fas fa-location-arrow"></i>
														</span>
													</span>
													<span class="tag is-white py-5 has-text-grey-dark has-text-weight-semibold">Daftar Sekarang
														<!-- <button type="submit" name="submit" class="button is-link">Daftar Sekarang</button> -->
													</span>
												</div>
											</button>
										<?php
											if (isset($_POST['submit2'])) {
												echo "<script>location.href='login.php'</script>";
											}
										} ?>
									</div>
								</form>
							<?php endforeach ?>
						</div>
						<?php
						if (Session::exists('email')) {
							$id = "SELECT id_user FROM tbl_user WHERE email = '$email'";
							$idUser = $db->get_idUser($id);
							$biodata = $db->tampil("SELECT * FROM tbl_biodata WHERE id_user = '$idUser'");
							setlocale(LC_ALL, 'id-ID', 'id_ID');
							foreach ($biodata as $row) {
						?>
								<div class="sc-profil <?= ($title != 'Profil') ? 'is-hidden' : '' ?>">
									<div class="columns">
										<div class="column is-narrow">
											<figure style="width: 200px; height: 250px; overflow: hidden; border-radius: 8px; box-shadow: -5px 10px 15px 0 rgba(0,0,0,0.35)">
												<img src="assets/img/profil/<?= $row["Foto"] ?>" alt="" style="object-fit: cover; object-position: top;">
											</figure>
										</div>
										<div class="column is-8">
											<div class="columns is-multiline">
												<div class="column is-8">
													<p class="is-size-2 has-text-weight-bold mb-2"><?= $row["Nama"] ?></p>
													<div class="tags are-medium">
														<p class="tag is-dark is-light has-text-weight-semibold">NIM. <?= $row["NIM"] ?></p>
														<p class="tag is-primary is-light has-text-weight-semibold">IPK. <?= $row["IPK"] ?></p>
													</div>
												</div>
												<div class="column is-4" style="align-self: center;">
													<form action="" method="get">
														<a href="form1.php?id=<?= $idUser ?>&status=edit" class="button is-light">
															<span class="icon is-small has-text-link">
																<i class="fas fa-edit"></i>
															</span>
															<span class="has-text-weight-semibold">Ubah / Lengkapi Data</span>
														</a>
													</form>
												</div>
												<div class="column is-6">
													<span>
														<p class="has-text-light is-size-6">Email</p>
														<p class="has-text-light is-size-5 has-text-weight-semibold"><?= Session::get('email') ?></p>
													</span>
													<br>
													<span>
														<p class="has-text-light is-size-6">Tempat Tanggal Lahir</p>
														<p class="has-text-light is-size-5 has-text-weight-semibold"><?= $row["Tempat_Lahir"] . ", " . strftime(" %d %B %Y", strtotime($row["Tanggal_Lahir"])) ?></p>
													</span>
												</div>
												<div class="column is-6">
													<span>
														<p class="has-text-light is-size-6">Jenis Kelamin</p>
														<p class="has-text-light is-size-5 has-text-weight-semibold"><?= $row["Jenis_Kelamin"] ?></p>
													</span>
													<br>
													<span>
														<p class="has-text-light is-size-6">Alamat</p>
														<p class="has-text-light is-size-5 has-text-weight-semibold"><?= $row["Alamat"] ?></p>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="sc-form <?= ($title != 'Form') ? 'is-hidden' : '' ?>">
									<p class="title is-size-2">Ubah / Lengkapi Data</p>
									<p class="subtitle is-size-4"><?= $row["Nama"] ?></p>
								</div>
						<?php }
						} ?>
					</div>
				</div>
			</section>

			<section class="section sc-header <?= ($title != 'Beranda') ? 'is-hidden' : '' ?>">
				<div class="container">
					<div class="columns is-gapless">
						<div class="column is-6">
							<p class="title is-size-1 has-text-weight-bold has-text-grey-dark">Raih mimpimu dengan beasiswa andalan kampus</p>
							<p class="subtitle is-size-6 has-text-grey mt-2" style="width: 70%">Lorem ipsum dolor, sit amet consectetur adipisiamet consectetur adipisicing elit lorem ipsum</p>
							<br>
							<div class="buttons">
								<a href="beasiswa.php" class="button has-text-weight-semibold is-medium is-link">
									Eksplor Beasiswa
								</a>
								<a href="#" class="button has-text-weight-normal has-text-grey is-medium is-link is-inverted">
									Gabung Komunitas
								</a>
							</div>
						</div>
						<div class="column">
							<figure>
								<img src="assets/img/student-01.png" alt="">
							</figure>
						</div>
					</div>
				</div>
			</section>
		</header>

		<main>
			<div class="container">