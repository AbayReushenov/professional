<!DOCTYPE html>
<html lang="ru">
<head>
<title><?= $page->getTitle(); ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/public/styles/bootstrap4/bootstrap.min.css">
<link href="/public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/public/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/public/styles/about.css">
<link rel="stylesheet" type="text/css" href="/public/styles/about_responsive.css">
<style>
  <?= $page->getCss(); ?>
</style>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="/">Главная</a></li>
									<li><a href="/#course_name">Содержание курса</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>
							</nav>

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-center justify-content-center">
		<div class="menu_content">
			<div class="cross_1 d-flex flex-column align-items-center justify-content-center"><img src="/public/images/logo.png" alt=""></div>
			<form action="#" class="menu_search_form">
				<input type="search" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button d-flex flex-column align-items-center justify-content-center">
				<i class="fa fa-search" aria-hidden="true"></i>
			</button>
			</form>
			<nav class="menu_nav">
				<ul>
						<li><a href="/">Главная</a></li>
						<li><a href="/#course_name">Содержание курса</a></li>
				</ul>
			</nav>
		</div>
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background" style="background-image:url(/public/images/events.jpg)"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row align-items-center justify-content-start">
						<div class="home_title"><?= $page->getTitle(); ?></div>
						<div class="breadcrumbs ml-auto">
							<ul>
								<li><a href="/public/index.html">Home</a></li>
								<li>About</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container py-5">
	  <?= $page->getHtml(); ?>
	</div>
	<!-- Footer -->

	<footer class="footer" style="background-image: url(/public/images/footer.jpg)">
<!--         <div class="footer_background parallax-window" data-parallax="scroll" data-image-src="/public/images/footer.jpg" data-speed="0.3"></div> -->
		<div class="container">
			<div class="row">

				<!-- Footer - Contact -->
				<div class="col-lg-4 footer_col">
					<div class="footer_column footer_contact_column">
						<div class="footer_logo_container">
							<a href="/public/#">
								<div class="footer_logo"><img src="/public/images/logo_2.png" alt=""></div>
								<div class="footer_logo_text">mimosan</div>
							</a>
						</div>
						<div class="footer_contact">
							<ul>
								<li><div><i class="fa fa-map-marker" aria-hidden="true"></i></div><span>1195 Lobortis Rd, New Orleans, New Hampshire</span></li>
								<li><div><i class="fa fa-phone" aria-hidden="true"></i></div><span>+1 234 800 8080</span></li>
								<li><div><i class="fa fa-envelope" aria-hidden="true"></i></div><span>info.deercreative@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer - Links -->
				<div class="col-lg-4 footer_col">
					<div class="footer_column footer_links">
						<div class="footer_title">useful links</div>
						<ul class="footer_links_list">
								<li><a href="/">Главная</a></li>
								<li><a href="/#course_name">Содержание курса</a></li>
						</ul>
					</div>
				</div>

				<!-- Footer - Subscribe -->
				<div class="col-lg-4 footer_col">
					<div class="footer_column footer_subscribe">
						<div class="footer_title">subscribe</div>
						<div class="footer_text">Join our weekly email newsletter to receive news, events and other announcements about what is going on at our church.</div>
						<div class="footer_form_container">
							<form action="#" class="footer_form">
								<div>
									<input type="email" class="subscribe_input" placeholder="Enter your email" required="required">
									<button class="subscribe_button trans_200" type="submit">subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
			<div class="row copyright_row">
				<div class="col">
					<div class="copyright_container d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="/public/https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="/public/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="/public/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="/public/#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="/public/#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="/public/#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="/public/js/jquery-3.2.1.min.js"></script>
<script src="/public/styles/bootstrap4/popper.js"></script>
<script src="/public/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/public/plugins/easing/easing.js"></script>
<script src="/public/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/public/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="/public/js/about.js"></script>
<script>
  <?= $page->getJs(); ?>
</script>
</body>
</html>