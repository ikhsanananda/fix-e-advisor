<?php
include ('config.php');
if(isset($_POST['submit']))
{
    $nama = $_POST['nama']; $sekolah = $_POST['sekolah'];
    $jabatan = $_POST['jabatan']; $email=$_POST['email'];
    $username = $_POST['username']; $password=$_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($db, "INSERT INTO admin VALUES ('$nama', '$sekolah', '$jabatan', '$email', '$username', '$password')");
    header('Location:index.php');
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

    <title>E-Advisor | Daftarkan Akun Anda</title>

    <link rel="canonical" href="https://appstack.bootlab.io/pages-sign-up.html" />
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
                                <h1 class="h2">Selamat Datang di E-Advisor</h1>
                                <p class="lead">
                                    Buatlah akun anda, eksplorasi, dan manfaatkan website E-Advisor
                                </p>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="m-sm-4">
                                        <form method="POST" action="signup.php">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input class="form-control form-control-lg" type="text" required="required" name="nama" placeholder="Masukkan Nama Lengkap Anda" />
                                            </div>
                                            <div class="form-group">
                                                <label>Asal Sekolah</label>
                                                <input class="form-control form-control-lg" type="text" required="required" name="sekolah" placeholder="Masukkan Asal Sekolah Anda" />
                                            </div>
                                            <div class="form-group">
                                                <label>Jabatan</label>
                                                <input class="form-control form-control-lg" type="text" required="required" name="jabatan" placeholder=" Masukkan Jabatan Anda" />
                                            </div>
                                            <div class="form-group ">
                                                <label>Email</label>
                                                <input class="form-control form-control-lg " type="email" required="required" name="email" placeholder="Masukkan Alamat Email Anda" />
                                            </div>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input class="form-control form-control-lg" type="text" required="required" name="username" placeholder="Masukkan Username Anda" />
                                            </div>
                                            <div class="form-group ">
                                                <label>Password</label>
                                                <input class="form-control form-control-lg " type="password" required="required" name="password" placeholder="Masukkan Password Anda" />
                                            </div>
                                            <div class="text-center mt-3 ">
                                                <button type="submit" name="submit" class="btn btn-lg btn-primary">Daftar</button>
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
    <script src="docs/js/app.js "></script>
</body>
</html>