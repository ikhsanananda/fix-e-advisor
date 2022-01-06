<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>E-Advisor | Dashboard</title>

	<link rel="canonical" href="https://appstack.bootlab.io/dashboard-default.html" />
	<link rel="shortcut icon" href="docs/img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<link href="docs/css/light.css" rel="stylesheet">
	<!-- <link href="css/dark.css" rel="stylesheet"> -->
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
            <path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
              C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z"/>
            <path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z"/>
            <path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z"/>
          </svg>
    
          <span class="align-middle mr-3">E-Advisor</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Halaman
					</li>

					<li class="sidebar-item active">
						<a href="#dashboards" data-toggle="collapse" class="sidebar-link">
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Dashboards</span>
                            <span class="badge badge-sidebar-primary"></span>
                        </a>
                            <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
                                <li class="sidebar-item active">
                                    <a class="sidebar-link" href="dashboard.php">Hasil Unggah Data</a>
                                </li>
                            </ul>
					</li>

					<li class="sidebar-header">
						Formulir
					</li>

					<li class="sidebar-item">
                        <a href="#forms" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="check-square"></i> 
                            <span class="align-middle">Formulir</span>
                        </a>
                        <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="forms-layouts.html">Formulir Unggah Data</a>
                            </li>
                        </ul>
					</li>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle">
                <i class="hamburger align-self-center"></i>
                </a>

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search projects…" aria-label="Search">
						<div class="input-group-append">
							<button class="btn" type="button">
                                <i class="align-middle" data-feather="search"></i>
                            </button>
						</div>
					</div>
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                                <img src="docs/img/avatars/avatar.jpg" class="avatar img-fluid rounded-circle mr-1" alt="Chris Wood" /> <span class="text-dark">Chris Wood</span>
                            </a>
							
                            <div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="pages-profile.html">
                                    <i class="align-middle mr-1" data-feather="user"></i>
                                    Profile
                                </a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3>Dashboard</h3>
						</div>

						<div class="col-auto ml-auto text-right mt-n1">
							<span class="dropdown mr-2">
                                <button class="btn btn-light bg-white shadow-sm dropdown-toggle" id="day" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="align-middle mt-n1" data-feather="calendar"></i>Filter Bulan
                                </button>
                                <div class="dropdown-menu" aria-labelledby="day">
                                    <h6 class="dropdown-header">Pilih Bulan</h6>
                                    <a class="dropdown-item" href="#">Januari</a>
                                    <a class="dropdown-item" href="#">Februari</a>
                                    <a class="dropdown-item" href="#">Maret</a>
                                    <a class="dropdown-item" href="#">April</a>
                                    <a class="dropdown-item" href="#">Mei</a>
                                    <a class="dropdown-item" href="#">Juni</a>
                                    <a class="dropdown-item" href="#">Juli</a>
                                    <a class="dropdown-item" href="#">Agustus</a>
                                    <a class="dropdown-item" href="#">September</a>
                                    <a class="dropdown-item" href="#">Oktober</a>
                                    <a class="dropdown-item" href="#">November</a>
                                    <a class="dropdown-item" href="#">Desember</a>
                                </div>
                            </span>

                            <span class="dropdown mr-2">
                                <button class="btn btn-light bg-white shadow-sm dropdown-toggle" id="day" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="align-middle mt-n1" data-feather="calendar"></i>Filter Tahun
                                </button>
                                <div class="dropdown-menu" aria-labelledby="day">
                                    <h6 class="dropdown-header">Pilih Tahun</h6>
                                    <a class="dropdown-item" href="#">2022</a>
                                    <a class="dropdown-item" href="#">2023</a>
                                    <a class="dropdown-item" href="#">2024</a>
                                    <a class="dropdown-item" href="#">2025</a>
                                    <a class="dropdown-item" href="#">2026</a>
                                </div>
                            </span>

                            <button class="btn btn-primary shadow-sm">
                                <i class="align-middle" data-feather="refresh-cw">&nbsp;</i>
                            </button>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-sm-6 col-xxl d-flex">
							<div class="card illustration flex-fill">
								<div class="card-body p-0 d-flex flex-fill">
									<div class="row no-gutters w-100">
										<div class="col-6">
											<div class="illustration-text p-3 m-1">
												<h4 class="illustration-text">Selamat Datang, Budi!</h4>
												<p class="mb-0">E-Advisor Dashboard</p>
											</div>
										</div>
										<div class="col-6 align-self-end text-right">
											<img src="docs/img/illustrations/customer-support.png" alt="Customer Support" class="img-fluid illustration-img">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-6 col-xxl d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="media">
										<div class="media-body">
											<h3 class="mb-2">40 Unggah Data</h3>
											<p class="mb-2">Jumlah Unggah Data</p>
											<div class="mb-0">
												<span class="badge badge-soft-success mr-2"> <i class="mdi mdi-arrow-bottom-right"></i> 35 </span>
												<span class="text-muted">Respon atas Unggah Data</span>
											</div>
										</div>
										<div class="d-inline-block ml-3">
											<div class="stat">
												<i class="align-middle text-success" data-feather="upload-cloud"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="card flex-fill">
						<div class="card-header">
							<h5 class="card-title mb-0">Riwayat Unggah Data</h5>
						</div>

						<table id="datatables-dashboard-projects" class="table table-striped my-0">
							<thead>
								<tr>
									<th style="text-align: center;">Nama File</th>
									<th class="d-none d-xl-table-cell" style="text-align: center;">Tanggal Upload</th>
									<th class="d-none d-xl-table-cell" style="text-align: center;">Tanggal Respon</th>
									<th style="text-align: center;">Status</th>
									<th class="d-none d-md-table-cell" style="text-align: center;">Pengawas</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Project Apollo</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">01/01/2018</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">31/06/2018</td>
									<td style="text-align: center;"><span class="badge badge-success">
                                        <a href="lala.php">Done</a></span></td>
									<td class="d-none d-md-table-cell">Carl Jenkins</td>
								</tr>
								<tr>
									<td>Project Fireball</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">01/01/2018</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">31/06/2018</td>
									<td style="text-align: center;"><span class="badge badge-danger">Cancelled</span></td>
									<td class="d-none d-md-table-cell">Bertha Martin</td>
								</tr>
								<tr>
									<td>Project Hades</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">01/01/2018</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">31/06/2018</td>
									<td style="text-align: center;"><span class="badge badge-success">
                                        <a href="lala.php">Done</a></span></td>
									<td class="d-none d-md-table-cell">Stacie Hall</td>
								</tr>
								<tr>
									<td>Project Nitro</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">01/01/2018</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">31/06/2018</td>
									<td style="text-align: center;"><span class="badge badge-warning">In progress</span></td>
									<td class="d-none d-md-table-cell">Carl Jenkins</td>
								</tr>
								<tr>
									<td>Project Phoenix</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">01/01/2018</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">31/06/2018</td>
									<td style="text-align: center;"><span class="badge badge-success">
                                        <a href="lala.php">Done</a></span></td>
									<td class="d-none d-md-table-cell">Bertha Martin</td>
								</tr>
								<tr>
									<td>Project X</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">01/01/2018</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">31/06/2018</td>
									<td style="text-align: center;"><span class="badge badge-success">
                                        <a href="lala.php">Done</a></span></td>
									<td class="d-none d-md-table-cell">Stacie Hall</td>
								</tr>
								<tr>
									<td>Project Romeo</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">01/01/2018</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">31/06/2018</td>
									<td style="text-align: center;"><span class="badge badge-success" >
                                        <a href="lala.php">Done</a></span></td>
									<td class="d-none d-md-table-cell">Ashley Briggs</td>
								</tr>
								<tr>
									<td>Project Wombat</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">01/01/2018</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">31/06/2018</td>
									<td style="text-align: center;"><span class="badge badge-warning">In progress</span></td>
									<td class="d-none d-md-table-cell">Bertha Martin</td>
								</tr>
								<tr>
									<td>Project Zircon</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">01/01/2018</td>
									<td class="d-none d-xl-table-cell" style="text-align: center;">31/06/2018</td>
									<td style="text-align: center;"><span class="badge badge-danger">Cancelled</span></td>
									<td class="d-none d-md-table-cell">Stacie Hall</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Copyright | Developer E-Advisor</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Bantuan</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="docs/js/app.js"></script>

</body>

</html>