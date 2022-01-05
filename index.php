<?php
include('config.php');
if(isset($_POST['submit']))
{
	$username=$_POST['username']; $password=$_POST['password'];
	$data = mysqli_query($db, "SELECT username, password FROM admin where username='$username'");
	if(mysqli_num_rows($data)==0) 
	{
		echo 
            "<script>
                window.location.href='index.php';
                alert('Username atau Password Salah! Pastikan input dengan benar. Perhatikan juga huruf kapital.');
            </script>";
	}
	else 
	{
		$pass = mysqli_fetch_array($data);
		if($username==$pass[0] && password_verify($password,$pass[1]))
		{
			header('Location:dashboard.php');
		}
		else 
		{
			echo 
            "<script>
                window.location.href='index.php';
                alert('Username atau Password Salah! Pastikan input dengan benar. Perhatikan juga huruf kapital.');
            </script>";
		}
	}
}
else 
{}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>E-Advisor | Masuk ke Akun Anda</title>

	<link rel="canonical" href="https://appstack.bootlab.io/pages-sign-in.html" />
	<link rel="shortcut icon" href="docs/img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<!-- <link href="docs/css/light.css" rel="stylesheet"> -->
	<link href="docs/css/dark.css" rel="stylesheet">
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="main d-flex justify-content-center w-100">
		<main class="content d-flex p-0">
			<div class="container d-flex flex-column">
				<div class="row h-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">

							<div class="text-center mt-4">
								<h1 class="h2">Selamat Datang!</h1>
								<p class="lead">
									Masuk ke Akun Anda
								</p>
							</div>

							<div class="card">
								<div class="card-body">
									<div class="m-sm-4">
										<div class="text-center">
											<img src="docs/img/avatars/avatar.jpg" alt="Chris Wood" class="img-fluid rounded-circle" width="132" height="132" />
										</div>
										<form action="index.php" method="POST">
											<div class="form-group">
												<label>Username</label>
												<input class="form-control form-control-lg" type="text" name="username" placeholder="Masukkan Username Anda" />
											</div>
											<div class="form-group">
												<label>Password</label>
												<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan Password Anda" />
												<small>
            										<a href="signup.php">Belum Memiliki Akun?</a>
          										</small>
											</div>
											<div class="text-center mt-3">
												<button type="submit" name="submit" class="btn btn-lg btn-primary">Masuk</button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

	<script src="docs/js/app.js"></script>

</body>

</html>