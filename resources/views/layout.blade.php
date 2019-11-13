<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
	<title>CronoTime</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{url('/')}}/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{url('/')}}/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{url('/')}}/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{url('/')}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('/')}}/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{url('/')}}/css/demo.css">
</head>
<body data-background-color="dark">
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">
				<a href="index.html" class="logo">
                                    <h2 class="colorinput-color">CronoTime</h2>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
				
				<div class="container-fluid">
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
						
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{url('/')}}/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{url('/')}}/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
            
                

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="dark2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{url('/')}}/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									
								</span>
							</a>
							<div class="clearfix"></div>

							
						</div>
					</div>
					<ul class="nav nav-primary">
						
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-th-list"></i>
								<p>Produtos</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="listarProdutos.html">
											<span class="sub-item">Listar</span>
										</a>
									</li>
									<li>
										<a href="cadastrarProdutos.html">
											<span class="sub-item">Cadastrar</span>
										</a>
									</li>	
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-clipboard"></i>
								<p>Operações</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="listarOperacoes.html">
											<span class="sub-item">Listar</span>
										</a>
									</li>
									<li>
										<a href="cadastrarOperacoes.html">
											<span class="sub-item">Cadastrar</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a  href="tomadaDeTempo.html">
								<i class="fas fa-pen-square"></i>
								<p>Tomada de Tempo</p>
								
							</a>
							
						</li>
						<li class="nav-item">
							<a href="cronometragem.html">
								<i class="fas fa-table"></i>
								<p>Cronometragem</p>	
							</a>
						</li>
                                                <li class="nav-item">
							<a href="relatorios.html">
								<i class="fas fa-paperclip"></i>
                                                                <p>Relatórios</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#maps">
								<i class="fas fa-user"></i>
								<p>Usuários</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="listarUsuarios.html">
											<span class="sub-item">Listar</span>
										</a>
									</li>
                                                                        <li>
										<a href="cadastrarUsuarios.html">
											<span class="sub-item">Cadastrar</span>
										</a>
									</li>
                                                                        
								</ul>
							</div>
						</li>
						
						
					</ul>
				</div>
			</div>
		</div>
                
                <div class="main-panel">
			<div class="content">
                            <div class="page-inner">
                                                              
                                
                            </div>
                        </div>
                </div>
                
		<!-- End Sidebar -->
                <div>
                    <footer class="footer">
                            <div class="container-fluid">
                                <h4>CronoTime Todos os direitos reservados, copyright © 2019</h4>				
                            </div>
                    </footer>
		</div>
		
		
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="{{url('/')}}/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{url('/')}}/js/core/popper.min.js"></script>
	<script src="{{url('/')}}/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="{{url('/')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{url('/')}}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{url('/')}}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="{{url('/')}}/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="{{url('/')}}/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="{{url('/')}}/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="{{url('/')}}/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="{{url('/')}}/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{url('/')}}/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="{{url('/')}}/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="{{url('/')}}/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="{{url('/')}}/js/atlantis.min.js"></script>

	
</body>
</html>