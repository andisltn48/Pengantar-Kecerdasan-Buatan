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
								<!-- <div class="navbar-item">
									<figure class="image is-32x32">
										<img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
									</figure>
								</div> -->
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
										<input class="input is-medium" type="text" placeholder="Cari Beasiswa" name="cari">
									</div>
									<div class="control">
										<a class="button is-medium is-primary">
											<span class="icon is-light">
												<input type="submit" value="Cari">
											</span>
										</a>
									</div>
								</div>
							</form>
				
						</div>
						<div class="sc-detailBeasiswa <?= ($title != 'Bidikmisi') ? 'is-hidden' : '' ?>">
							<p class="tag is-primary is-light is-medium mb-2">Beasiswa Penuh</p>
							<p class="title is-size-1">Beasiswa Bidikmisi 2021/2022</p>

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
								<img src="https://files.planet.ung.ac.id/fak/102/ristekdikti-2.jpg" class="is-radiused mx-2">
								<span class="has-text-weight-semibold has-text-light">Riset Teknologi Pendidikan Tinggi</span>
							</div>

							<div class="sc-dbApply control">
								<?php if (Session::exists('email')) { ?>
									<a href="profil.php">
										<div class="tags are-large has-addons">
											<span class="tag is-white px-5 py-5">
												<span class="icon is-small has-text-link">
													<i class="fas fa-location-arrow"></i>
												</span>
											</span>
											<span class="tag is-white py-5 has-text-grey-dark has-text-weight-semibold">Daftar Sekarang</span>
										</div>
									</a>
								<?php } else { ?>
									<a href="login.php">
										<div class="tags are-large has-addons">
											<span class="tag is-white px-5 py-5">
												<span class="icon is-small has-text-link">
													<i class="fas fa-location-arrow"></i>
												</span>
											</span>
											<span class="tag is-white py-5 has-text-grey-dark has-text-weight-semibold">Daftar Sekarang</span>
										</div>
									</a>

								<?php  } ?>
							</div>
							<span class="has-text-light-light ml-3">
								<span class="icon is-small mr-1">
									<i class="fas fa-info-circle"></i>
								</span>
								<span>
									Pastikan telah membaca keseluruhan informasi
								</span>
							</span>
						</div>
						<div class="sc-profil <?= ($title != 'Profil') ? 'is-hidden' : '' ?>">
							<div class="columns">
								<div class="column is-narrow">
									<figure style="width: 200px; height: 250px; overflow: hidden; border-radius: 8px; box-shadow: -5px 10px 15px 0 rgba(0,0,0,0.35)">
										<img src="https://1.bp.blogspot.com/-L5Zp77_zXxw/XbCRJRaO1nI/AAAAAAAADo0/YvgCVjnQ8QYJ-fbBWC7ZeL8nshlLYQIJQCLcBGAsYHQ/s1600/contoh%2Bfoto%2Buntuk%2Bcpns.jpeg" alt="" style="object-fit: cover; object-position: top;">
									</figure>
								</div>
								<div class="column is-8">
									<div class="columns is-multiline">
										<div class="column is-8">
											<p class="is-size-2 has-text-weight-bold mb-2">Melinda Ayu Ratna</p>
											<div class="tags are-medium">
												<p class="tag is-dark is-light has-text-weight-semibold">NISN. 02392443</p>
												<p class="tag is-primary is-light has-text-weight-semibold">IPK. 3.4</p>
											</div>
										</div>
										<div class="column is-4" style="align-self: center;">
											<a href="form.php" class="button is-light">
												<span class="icon is-small has-text-link">
													<i class="fas fa-edit"></i>
												</span>
												<span class="has-text-weight-semibold">Ubah / Lengkapi Data</span>
											</a>
										</div>
										<div class="column is-6">
											<span>
												<p class="has-text-light is-size-6">Email</p>
												<p class="has-text-light is-size-5 has-text-weight-semibold"><?= Session::get('email') ?></p>
											</span>
											<br>
											<span>
												<p class="has-text-light is-size-6">Tempat Tanggal Lahir</p>
												<p class="has-text-light is-size-5 has-text-weight-semibold">Samarindu, 18 September 2000</p>
											</span>
										</div>
										<div class="column is-6">
											<span>
												<p class="has-text-light is-size-6">Jenis Kelamin</p>
												<p class="has-text-light is-size-5 has-text-weight-semibold">Perempuan</p>
											</span>
											<br>
											<span>
												<p class="has-text-light is-size-6">Alamat</p>
												<p class="has-text-light is-size-5 has-text-weight-semibold">Jalan Sei wain 07234, Balikpapan</p>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="sc-form <?= ($title != 'Form') ? 'is-hidden' : '' ?>">
							<p class="title is-size-2">Ubah / Lengkapi Data</p>
							<p class="subtitle is-size-4">Melinda Ayu Ratna</p>
						</div>
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
