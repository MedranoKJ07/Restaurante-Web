<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from riday-admin-template.multipurposethemes.com/bs5/main-mini/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2024 15:26:29 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--<link rel="icon" href="https://riday-admin-template.multipurposethemes.com/bs5/images/favicon.ico">-->

	<title>Riday</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?php echo base_url("") ?>assets/css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="<?php echo base_url("") ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url("") ?>assets/css/skin_color.css">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(<?php echo base_url("") ?>assets/images/auth-bg/bg-1.jpg)">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Bienvenido</h2>
								<p class="mb-0">Inicia sesión para ingresar.</p>
							</div>
							<div class="p-40">
								<form method="post" action=  "<?php echo base_url('index.php/login')?>">
								
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" name="UserName" class="form-control ps-15 bg-transparent" placeholder="Usuario">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Contraseña">
										</div>
									</div>
									<div class="row">
										<div class="col-12 text-center">
											<button type="submit" class="btn btn-danger mt-10">Iniciar Sesión</button>
										</div>
										<!-- /.col -->
									</div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0">Aún no tienes una cuenta?
										<a href="<?php echo base_url("index.php/signUp") ?>" class="text-warning ms-5">
											Registrate</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--*
								
	*--->

	<!-- Vendor JS -->
	<script src="<?php echo base_url("") ?>assets/js/vendors.min.js"></script>
	<script src="<?php echo base_url("") ?>assets/js/pages/chat-popup.js"></script>
	<script src="<?php echo base_url("") ?>assets/vendor_components/apexcharts-bundle/dist/apexcharts.min.js"></script>
	<script src="<?php echo base_url("") ?>assets/icons/feather-icons/feather.min.js"></script>

</body>

<!-- Mirrored from riday-admin-template.multipurposethemes.com/bs5/main-mini/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2024 15:26:29 GMT -->

</html>