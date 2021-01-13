<?php
require_once 'core/init.php';
$title = "Beranda";
include('templates/header.php');
?>
<section class="section sc-benefit mb-6 mt-5">
	<div class="columns">
		<div class="column">
			<div class="has-text-left">
				<figure>
					<img src="assets/img/bf1.png" alt="" width="80" height="80">
					<figcaption class="mt-4">
						<p class="title is-size-4 has-text-weight-bold has-text-grey-dark mb-5">Informatif</p>
						<p class="subtitle is-size-6 has-text-grey">Lorem, ipsum dolor sit amet consectetur adipisicing elit Necessitatibus</p>
					</figcaption>
				</figure>
			</div>
		</div>
		<div class="column">
			<div class="has-text-left">
				<figure>
					<img src="assets/img/bf2.png" alt="" width="80" height="80">
					<figcaption class="mt-4">
						<p class="title is-size-4 has-text-weight-bold has-text-grey-dark mb-5">Lengkap</p>
						<p class="subtitle is-size-6 has-text-grey">Lorem, ipsum dolor sit amet consectetur adipisicing elit Necessitatibus</p>
					</figcaption>
				</figure>
			</div>
		</div>
		<div class="column">
			<div class="has-text-left">
				<figure>
					<img src="assets/img/bf3.png" alt="" width="80" height="80">
					<figcaption class="mt-4">
						<p class="title is-size-4 has-text-weight-bold has-text-grey-dark mb-5">Hasil Teruji</p>
						<p class="subtitle is-size-6 has-text-grey">Lorem, ipsum dolor sit amet consectetur adipisicing elit Necessitatibus</p>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
</section>

<section class="section sc-beasiswa mb-6 mt-5">
	<div class="columns" style="align-items: center;">
		<div class="column is-4 pr-5">
			<p class="title is-size-2 has-text-weight-bold">Mulai dari yang Terbaru</p>
			<p class="subtitle is-size-5 has-text-grey mt-2" style="width: 80%">Akses dan daftar berbagai macam beasiswa secara gratis</p>
			<a href="beasiswa.php" class="button is-link mt-5 is-medium">Eksplor Beasiswa</a>
		</div>
		<div class="column is-4">
			<div class="card">
				<div class="card-content px-5 pt-4 pb-5">
					<a href="detail.php">
						<div class="media mb-3">
							<div class="media-left">
								<figure class="image is-48x48">
									<img src="https://files.planet.ung.ac.id/fak/102/ristekdikti-2.jpg" class="is-radiused">
								</figure>
							</div>
							<div class="media-content">
								<p class="has-text-grey-dark title is-size-4 has-text-weight-bold">Bidikmisi 2021/2022</p>
								<p class="has-text-grey subtitle is-size-6">Ristek Dikti</p>
							</div>
						</div>
						<p><span class="tag is-medium is-primary is-light">Beasiswa Penuh</span></p>
					</a>
					<hr class="divider mt-4 mb-3">
					<div>
						<div class="is-flex is-spaced-between">
							<span class="">
								<p class="has-text-right is-size-6 has-text-grey">Kuota</p>
								<p class="is-size-5 has-text-link has-text-weight-bold">75</p>
							</span>
							<span class="">
								<p class="has-text-right is-size-6 has-text-grey">Sisa Waktu</p>
								<p class="has-text-right is-size-5 has-text-danger has-text-weight-bold">25 Hari</p>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="column is-4">
			<div class="card">
				<div class="card-content px-5 pt-4 pb-5">
					<a href="detail.php">
						<div class="media mb-3">
							<div class="media-left">
								<figure class="image is-48x48">
									<img src="https://daftarbeasiswa.com/wp-content/uploads/2020/11/Beasiswa-Jadi-PNS.png" class="is-radiused">
								</figure>
							</div>
							<div class="media-content">
								<p class="has-text-grey-dark title is-size-4 has-text-weight-bold">Jadi PNS 2021</p>
								<p class="has-text-grey subtitle is-size-6">Zemy Prabowo</p>
							</div>
						</div>
						<p><span class="tag is-medium is-primary is-light">Beasiswa Penuh</span></p>
					</a>
					<hr class="divider mt-4 mb-3">
					<div>
						<div class="is-flex is-spaced-between">
							<span class="">
								<p class="has-text-right is-size-6 has-text-grey">Kuota</p>
								<p class="is-size-5 has-text-link has-text-weight-bold">50</p>
							</span>
							<span class="">
								<p class="has-text-right is-size-6 has-text-grey">Sisa Waktu</p>
								<p class="has-text-right is-size-5 has-text-danger has-text-weight-bold">18 Hari</p>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section sc-testimoni mb-6 mt-5">
	<div class="columns">
		<div class="column is-4">
			<figure>
				<img src="assets/img/student-2.jpg">
			</figure>
		</div>
		<div class="column is-8 pl-6">
			<p class="is-size-4 has-text-grey has-text-weight-semibold mb-6">Ulasan Alumni</p>
			<p class="title is-size-2 has-text-weight-bold mb-6">Terima kasih ITeka karna telah memudahkan kami terhubung dengan beasiswa luar dalam negeri</p>
			<span class="subtitle">
				<p class="title is-size-4 has-text-weight-semibold has-text-link">Muhammad Zidan Ramadhan</p>
				<p class="subtitle is-size-6 has-text-grey">Mahasiswa Informatika</p>
			</span>
		</div>
	</div>
</section>
<?php include('templates/footer.php') ?>