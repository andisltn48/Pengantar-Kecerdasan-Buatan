<?php
require_once 'core/init.php';
$title = "Beasiswa";
include('templates/header.php') ?>

<section class="section sc-mainBeasiswa">
	<?php
	$dbs = $db->cari_data('daftarbeasiswa', 'nama_beasiswa', 'cari');
	?>
	<div class="columns">
		<?php
		foreach ($db->tampil($dbs) as $d) :
		?>
			<div class="column is-4">
				<div class="card">
					<div class="card-content px-5 pt-4 pb-5">
						<a href="detail.php">
							<div class="media mb-3">
								<div class="media-left">
									<figure class="image is-48x48">
										<img src="<?= $d['image'] ?>" class="is-radiused">
									</figure>
								</div>
								<div class="media-content">
									<p class="has-text-grey-dark title is-size-4 has-text-weight-bold"><?= $d['nama_beasiswa'] ?></p>
									<p class="has-text-grey subtitle is-size-6"><?= $d['penerbit'] ?></p>
								</div>
							</div>
							<p><span class="tag is-medium is-primary is-light"><?= $d['total'] ?></span></p>
						</a>
						<hr class="divider mt-4 mb-3">
						<div>
							<div class="is-flex is-spaced-between">
								<span class="">
									<p class="has-text-right is-size-6 has-text-grey">Kuota</p>
									<p class="is-size-5 has-text-link has-text-weight-bold"><?= $d['kuota'] ?></p>
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
		<?php endforeach ?>

	</div>
</section>

<?php include('templates/footer.php') ?>