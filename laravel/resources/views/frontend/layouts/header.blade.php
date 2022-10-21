<!DOCTYPE html>
<html class="light">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>{{$site_title}}</title>	

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{url("frontend/img/favicon.ico")}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{url("frontend/img/apple-touch-icon.png")}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{url("frontend/vendor/bootstrap/css/bootstrap.min.css")}}">
		<link rel="stylesheet" href="{{url("frontend/vendor/fontawesome-free/css/all.min.css")}}">
		<link rel="stylesheet" href="{{url("frontend/vendor/animate/animate.compat.css")}}">
		<link rel="stylesheet" href="{{url("frontend/vendor/simple-line-icons/css/simple-line-icons.min.css")}}">
		<link rel="stylesheet" href="{{url("frontend/vendor/owl.carousel/assets/owl.carousel.min.css")}}">
		<link rel="stylesheet" href="{{url("frontend/vendor/owl.carousel/assets/owl.theme.default.min.css")}}">
		<link rel="stylesheet" href="{{url("frontend/vendor/magnific-popup/magnific-popup.min.css")}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{url("frontend/css/theme.css")}}">
		<link rel="stylesheet" href="{{url("frontend/css/theme-elements.css")}}">
		<link rel="stylesheet" href="{{url("frontend/css/theme-blog.css")}}">
		<link rel="stylesheet" href="{{url("frontend/css/theme-shop.css")}}">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{url("frontend/css/main.css")}}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{url("frontend/css/skins/skin-digital-agency-2.css")}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{url("frontend/css/custom.css")}}">

		<!-- Head Libs -->
		<script src="{{url("frontend/vendor/modernizr/modernizr.min.js")}}"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 1, 'stickyHeaderContainerHeight': 100}">
				<div class="header-body border-top-0 bg-color-dark box-shadow-none">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column header-column-logo">
								<div class="header-row">
									<div class="header-logo">
										<a href="/">
											<img alt="The Mejor Solutions" width="225" height="60" src="{{url("frontend/img/demos/digital-agency-2/logos/logo-1.png")}}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column header-column-nav-menu justify-content-end w-100">
								<div class="header-row">
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown-primary">
														<a class="nav-link text-capitalize font-weight-semibold custom-text-3 active" href="/">
															Home
														</a>
													</li>
													<li class="dropdown-primary">
														<a class="nav-link text-capitalize font-weight-semibold custom-text-3" href="/about-us">
															About Us
														</a>
													</li>
													<li class="dropdown">
														<a class="nav-link dropdown-toggle text-capitalize font-weight-semibold custom-text-3" class="dropdown-toggle" href="/services">
															Our Services
														</a>
														<ul class="dropdown-menu">

															@foreach ($services as $service)
															<li>
																<a class="dropdown-item font-weight-normal" href={{"/services/".$service->slug}}>
																	{{$service->title}}
																</a>
															</li>
															@endforeach
															
														</ul>
													</li>
													<li class="dropdown-primary">
														<a class="nav-link text-capitalize font-weight-semibold custom-text-3" href="/portfolio">
															Our Work
														</a>
													</li>
													{{-- <li class="dropdown-primary">
														<a class="nav-link text-capitalize font-weight-semibold custom-text-3" href="/blog">
															Blog
														</a>
													</li> --}}
													<li class="dropdown-primary">
														<a class="nav-link text-capitalize font-weight-semibold custom-text-3" href="/contact">
															Contact Us
														</a>
													</li>
													<li class="dropdown-primary">
														<a class="nav-link text-capitalize font-weight-semibold custom-text-3" href="/careers">
															Careers
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end d-none d-lg-flex">
								<div class="header-row">
									<ul class="header-social-icons social-icons social-icons-clean social-icons-icon-light social-icons-big d-lg-flex m-0 ms-lg-2">
										<li class="social-icons-instagram"><a href="https://www.instagram.com/themejorsolution/" target="_blank" class="text-4" title="Instagram"><i class="fab fa-instagram"></i></a></li>
										<li class="social-icons-twitter"><a href="https://twitter.com/Mejor_solution" target="_blank" class="text-4" title="Twitter"><i class="fab fa-twitter"></i></a></li>
										<li class="social-icons-facebook"><a href="https://www.facebook.com/The-Mejor-Solutions-106753398863916" target="_blank" class="text-4" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>