<?php
require_once 'core/init.php';

// if (Session::exists('username')) {
//   header('Location: profile.php');
// }

$errors = [];

if (isset($_POST['login'])) {
	$validation = new Validation();

	$validation = $validation->check([
		'email' => ['required' => true],
		'password' => ['required' => true]
	]);

	if ($validation->passed()) {
		if ($login->cek_email($_POST['email'])) {
			if ($login->login_user($_POST['email'], $_POST['password'])) {
				Session::set('email', $_POST['email']);
				header('Location: index.php');
			} else {
				$errors[] = 'Email dan Password Anda Tidak Sesuai';
			}
		} else {
			$errors[] = 'Email Anda Belum Terdaftar';
		}
	} else {
		$errors = $validation->errors();
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Login - Beasiswa ITeka</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<!-- Bulma -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.css">
	<!-- Custom Design -->
	<link rel="stylesheet" type="text/css" href="assets/css/design.css">

</head>

<body>
	<div id="wrapLayout">
		<main>
			<section class="sc-login">
				<div class="columns">
					<div class="column is-5">
						<!-- <img src="https://images.unsplash.com/photo-1600104055491-a1b4740563e7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=401&q=80" alt=""> -->
					</div>
					<div class="column is-3 is-offset-1">
						<br>
						<br>
						<a class="is-size-4 mt-6" href="index.php">
							<span class="has-text-grey-dark">Beasiswa</span>
							<span class="has-text-weight-bold ml-1 has-text-link"> ITeka</span>
						</a>

						<p class="title is-size-2 has-text-weight-bold mt-6">Masuk</p>
						<p class="subtitle is-size-6 has-text-grey-light mb-5">
							Belum punya akun ? <a href="signup.php">Daftar</a>
						</p>

						<form action="" method="post">
							<?php if (!empty($errors)) : ?>
								<div id="errors">
									<?php foreach ($errors as $error) : ?>
										<li class="has-text-danger"><?= $error ?></li>
									<?php endforeach ?>
								</div>
							<?php endif ?>
							<div class="field mb-5">
								<label class="label has-text-weight-normal">Email</label>
								<div class="control">
									<input class="input" name="email" type="text" placeholder="yourmail@gmail.com">
								</div>
							</div>
							<div class="field mb-5">
								<label class="label has-text-weight-normal">Password</label>
								<div class="control">
									<input class="input" name="password" type="password" placeholder="***">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<button type="submit" name="login" class="button is-normal is-link">Masuk Akun</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
		</main>
	</div>


	<!-- Jquery -->
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<!-- Fontawesome -->
	<!-- <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script> -->
	<script type="text/javascript" src="assets/font/fontawesome/js/all.js"></script>
	<!-- custom js -->
	<script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>