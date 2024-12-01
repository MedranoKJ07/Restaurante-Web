<header class="main-header" style="margin-right: 4vw !important;">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent hover-primary" data-toggle="push-menu" role="button">
			<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
		</a>
		<!-- Logo -->
		<a href="" class="logo">
			<!-- logo-->
			<div class="logo-lg">
				<!-- <span class="light-logo"><img src="<?php echo base_url() ?>assets/images/logo-dark-text.png" alt="logo"></span>
				<span class="dark-logo"><img src="<?php echo base_url() ?>assets/images/logo-light-text.png" alt="logo"></span> -->
			</div>
		</a>
	</div>
	<!-- Header Navbar -->
	<nav class="navbar navbar-static-top">
		<!--Para  correr las cosas del usuario-->
		<div>
		</div>
		<div class="navbar-custom-menu r-side">
			<ul class="nav navbar-nav">
				<li class="btn-group nav-item d-lg-inline-flex d-none">
					<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-info-light" title="Full Screen">
						<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
					</a>
				</li>
				<!-- User Account-->
				<li class="dropdown user user-menu"> 
					<a href="#" class="dropdown-toggle p-0 text-dark hover-primary ms-md-30 ms-10" data-bs-toggle="dropdown" title="User">
						<?php
						$nombre = $this->session->userdata('Nombre');
						$Apellido = $this->session->userdata('Apellido');
						if ($this->session->userdata('logged') == 1) {

							echo " <span class='cps-30 d-md-inline-block d-none'> Hola ,</span> <strong class='d-md-inline-block d-none'>".$nombre ." ".$Apellido."</strong>";
						}
						?>

						<img src="<?php echo base_url() ?>assets/images/avatar/avatar-15.png" class="user-image rounded-circle avatar bg-white mx-10" alt="User Image">
					</a>
					<ul class="dropdown-menu animated flipInX">
						<li class="user-body">
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href= "<?php echo base_url("index.php/logout")?>"><i class="ti-lock text-muted me-2"></i> Logout</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>

<aside class="main-sidebar">
	<!-- sidebar-->
	<section class="sidebar position-relative">
		<div class="multinav">
			<div class="multinav-scroll" style="height: 100%;">
				<!-- sidebar menu-->
				<ul class="sidebar-menu" data-widget="tree">
					<li >
						<a href="<?php echo base_url("index.php/DashBoard")?>">
							<i class="icon-Home"></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("index.php/categoria")?>">
							<i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>
							<span>Categorias de la mesas</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("index.php/categoria_platillos")?>">
							<i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>
							<span>Categorias de Platillos</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("index.php/mesas")?>">
							<i class="icon-Chart-line"><i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span></i>
							<span>Mesas</span>
						</a>
					</li>
					<li >
						<a href="<?php echo base_url("index.php/platillos")?>">
							<i class="icon-Dinner"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
							<span>Platillos</span>

						</a>
					</li>
					<li >
						<a href="<?php echo base_url("index.php/usuarios")?>">
							<i class="icon-Group"><span class="path1"></span><span class="path2"></span></i>
							<span>Crear Usuarios</span>
						</a>
					</li>

				</ul>
			</div>
		</div>
	</section>
</aside>
<div class="content-wrapper" style="margin-right: 4vw !important;">
	<div class="container-full">
		<section class="content">