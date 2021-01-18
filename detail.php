<?php
require_once 'core/init.php';
$title = "Bidikmisi";
$db = new Database();
include('templates/header.php');
?>

<section class="section sc-detailBeasiswa">
	<div class="content is-medium">
	<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$data = "SELECT * FROM daftarbeasiswa where id = '$id'";
	}	
	?>
	<?php
	foreach($db->tampil($data) as $d):
	?>
		<p class="has-text-weight-semibold">Deskripsi</p>
		<p class="has-text-grey"><?= $d['deskripsi']?></p>

		<br>
		<?php
		$kolom = 4;
		$arr = array($d['syarat1'],$d['syarat2'],$d['syarat3'],$d['syarat4']);
		?> 
		<p class="has-text-weight-semibold">Persyaratan</p>
		<ol class="is-lower-alpha has-text-grey">
		<?php
		for($i = 0; $i<$kolom; $i++){
		
			if ($arr[$i]!=null){
		?>
				<li><?= $arr[$i]?></li>
			<?php } ?>
		
		<?php  } ?>
		</ol>
		
		<hr class="divider">

		<p class="has-text-weight-semibold">Dokumen yang perlu disiapkan</p>
		<?php
		$kolom = 6;
		$arr2 = array($d['dokument1'],$d['dokument2'],$d['dokument3'],$d['dokument4'],$d['dokument5'],$d['dokument6']);
		?> 
		<ul class="is-lower-alpha has-text-grey">
		<?php
		for($i = 0; $i<$kolom; $i++){
		
			if ($arr2[$i]!=null){
		?>
				<li><?= $arr2[$i]?></li>
			<?php } ?>
		
		<?php  } ?>
		</ul>
	<?php endforeach ?>
		<div class="columns sc-dbApply2 px-5 py-3 mt-6">
			<div class="column is-6">
				<p class="title is-size-4 has-text-grey-dark">Dokumen kamu sudah siap ?</p>
				<p class="subtitle is-size-6 has-text-grey">Yuk lakukan pendaftaran dengan menekan tombol disebelah!</p>
			</div>
			<div class="column has-text-right">
				<div class="sc-dbApply control">
					<a href="#">
						<div class="tags are-large has-addons">
							<span class="tag is-link px-5 py-5">
								<span class="icon is-small has-text-light">
									<i class="fas fa-location-arrow"></i>
								</span>
							</span>
							<span class="tag is-white py-5 has-text-grey-dark has-text-weight-semibold">Daftar Sekarang</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('templates/footer.php') ?>
