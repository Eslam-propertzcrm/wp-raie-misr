 <!--<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>"> !-- raiemisr/style.css --
<p>eslama is here</p> -->
<?php //get_header(); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name') .'|'. wp_title(); ?></title>
	<link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/animate.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/fast-select.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/responsive.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/theme-color.css" rel="stylesheet" title="color">
	<!-- <link href="<?php bloginfo('template_url'); ?>/assets/css/theme-color_v2.css" rel="alternate stylesheet" title="color2">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/theme-color_v3.css" rel="alternate stylesheet" title="color3">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/theme-color_v4.css" rel="alternate stylesheet" title="color4">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/theme-color_v5.css" rel="alternate stylesheet" title="color5"> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="alternate stylesheet" title="color5">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap-lightbox.min.css" rel="alternate stylesheet" title="color5">
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<?php wp_footer(); ?>
	<div class="cp-wrapper">
		<header class="style1">
			<div class="topbar">
				<div class="container">
					<!-- <div class="top-links">
						<a href="#" title=""><i class="fa fa-sign-in th-color"></i> Login</a>
						<a href="#" title=""><i class="fa fa-user th-color"></i> Sign Up</a>
					</div> -->
					<ul class="top-info">
						<li>
							<i class="fa fa-globe th-color"></i> اللغة:
							<span class="select-wrap1">
								<select>
									<option>العربية</option>
									<option>ENG</option>
									<option>HIN</option>
								</select>
							</span>
						</li>
					</ul>
					<span class="account-no"><i class=" th-color"></i> رقم حسابى المصرفى  &nbsp;&nbsp;&nbsp;&nbsp; <span>4000 4000</span></span>
					<div class="social-btns1">
						<!-- <span>FOLLOW US</span> -->
						<a href="#" title="Facebook" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-19.png"></a>
						<a href="#" title="Facebook" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-20.png"></a>
						<a href="#" title="Facebook" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-21.png"></a>
						<a href="#" title="Facebook" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-22.png"></a>
						<a href="#" title="Linkedin" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-23.png"></a>
						<a href="#" title="Twitter" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-24.png"></a>
						<a href="#" title="Google Plus" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-25.png"></a>
					</div>
				</div>
			</div>
			<div class="menu-wrapper">
				<div class="container">
					<div class="menu-inner">
						<div class="logo"><a href="/" title="Logo"><img style="height: 115px;" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="logo.png"></a></div>
						<nav>
							<?php
								wp_nav_menu( array(
									'menu'              => 'primary',
									'theme_location'    => 'primary',
									'depth'             => 3,
									'container'         => 'div',
									// 'container_class'         => 'collapse navbar-collapse',
									'menu_class'        => false,
									'fallback_cb'       => 'WP_Bootstrap_Navwalker ::fallback',
									'walker'			=> new WP_Bootstrap_Navwalker ())
								);
							?>
							<!-- <div class="">
								<ul>
									<li class="menu-item-has-children"><a href="#" title="">وظائف راعى مصر</a>
										<ul>
											<li><a href="../falah/index.html" title="">Home Page 1</a></li>
											<li><a href="../falah/index2.html" title="">Home Page 2</a></li>
											<li><a href="../falah/index3.html" title="">Home Page 3</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children"><a href="#" title="">اتصل بنا</a>
										<ul>
											<li><a href="../falah/blog.html" title="">Our Blog</a></li>
											<li><a href="../falah/blog-list.html" title="">Blog List</a></li>
											<li><a href="../falah/blog-detail.html" title="">Blog Detail</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children"><a href="#" title="">المركز الاعلامى</a>
										<ul>
											<li><a href="../falah/project.html" title="">Our Projects</a></li>
											<li><a href="../falah/project-col2.html" title="">Projects 2 Column</a></li>
											<li><a href="../falah/project-col3.html" title="">Projects 3 Column</a></li>
											<li><a href="../falah/project-filter-grid.html" title="">Projects Filter Grid</a></li>
											<li><a href="../falah/project-filter-list.html" title="">Projects Filter List</a></li>
											<li><a href="../falah/project-detail.html" title="">Project Detail</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children"><a href="#" title="">وسائل التبرع</a>
										<ul>
											<li><a href="../falah/project.html" title="">Our Projects</a></li>
											<li><a href="../falah/project-col2.html" title="">Projects 2 Column</a></li>
											<li><a href="../falah/project-col3.html" title="">Projects 3 Column</a></li>
											<li><a href="../falah/project-filter-grid.html" title="">Projects Filter Grid</a></li>
											<li><a href="../falah/project-filter-list.html" title="">Projects Filter List</a></li>
											<li><a href="../falah/project-detail.html" title="">Project Detail</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children"><a href="#" title="">التبرعات</a>
										<ul>
											<li class="menu-item-has-children"><a href="#" title="">التبرعات</a>
												<ul>
													<li><a href="../falah/event.html" title="">Our Events</a></li>
													<li><a href="../falah/event-list.html" title="">Events List</a></li>
													<li><a href="../falah/event-detail.html" title="">Event Detail</a></li>
													<li><a href="../falah/event-calendar.html" title="">Event Calendar</a></li>
												</ul>
											</li>
											<li class="menu-item-has-children"><a href="#" title="">التبرعات</a>
												<ul>
													<li><a href="../falah/product.html" title="">Our Products</a></li>
													<li><a href="../falah/product-detail.html" title="">Product Detail</a></li>
												</ul>
											</li>
											<li class="menu-item-has-children"><a href="#" title="">التبرعات</a>
												<ul>
													<li><a href="../falah/cause.html" title="">Our Cause</a></li>
													<li><a href="../falah/cause-list.html" title="">Cause List</a></li>
													<li><a href="../falah/cause-detail.html" title="">Cause Detail</a></li>
												</ul>
											</li>
											<li class="menu-item-has-children"><a href="#" title="">التبرعات</a>
												<ul>
													<li><a href="../falah/gallery.html" title="">Gallery Style 1</a></li>
													<li><a href="../falah/gallery2.html" title="">Gallery Style 2</a></li>
													<li><a href="../falah/gallery3.html" title="">Gallery Style 3</a></li>
												</ul>
											</li>
											<li class="menu-item-has-children"><a href="#" title="">التبرعات</a>
												<ul>
													<li><a href="../falah/team.html" title="">Our Team</a></li>
													<li><a href="../falah/team-detail.html" title="">Team Detail</a></li>
												</ul>
											</li>
											<li class="menu-item-has-children"><a href="#" title="">التبرعات</a>
												<ul>
													<li><a href="../index.html" title="">Our Services</a></li>
													<li><a href="../index.html" title="">Service Detail</a></li>
												</ul>
											</li>
											<li class="menu-item-has-children"><a href="#" title="">التبرعات</a>
												<ul>
													<li><a href="../falah/donation-form.html" title="">Donation Form</a></li>
													<li><a href="../falah/donors.html" title="">Our Donors</a></li>
													<li><a href="../falah/comingsoon.html" title="">Comingsoon</a></li>
													<li><a href="../falah/p404.html" title="">Error Page</a></li>
													<li><a href="../falah/testimonial.html" title="">Testimonials</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="../falah/about.html" title="">المجالات</a></li>
									<li class="menu-item-has-children"><a href="#" title="">عن راعى مصر</a>
										<ul>
											<li><a href="../falah/contact.html" title="">كلام عربى</a></li>
											<li><a href="../falah/contact2.html" title="">كلام عربى 2</a></li>
										</ul>
									</li>
								</ul>
							</div> -->

						</nav>
					</div>
				</div>
			</div>
		</header>
		<div class="res-header">
			<div class="res-header-top">
				<div class="res-top-links">
					<div class="social-btns1">
						<!-- <span>FOLLOW US</span> -->
						<a href="#" title="Facebook" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-19.png"></a>
						<a href="#" title="Twitter" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-20.png"></a>
						<a href="#" title="Linkedin" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-21.png"></a>
						<a href="#" title="Youtub" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-22.png"></a>
						<a href="#" title="Instagram" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-23.png"></a>
						<a href="#" title="Apple" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-24.png"></a>
						<a href="#" title="Google Play" data-toggle="tooltip" data-placement="bottom" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/socials/web-25.png"></a>
					</div>
					<!-- <a href="#" title=""><i class="fa fa-shopping-basket theme-clr"></i> Shop</a>
					<a href="#" title=""><i class="fa fa-sign-in theme-clr"></i> Login</a>
					<a href="#" title=""><i class="fa fa-user theme-clr"></i> Sign Up</a> -->
				</div>
				<div class="res-top-links2">
					<span class="account-no" style="margin: 0px "><i class=" th-color"></i> رقم حسابى المصرفى   <span>4000 4000</span></span>
					<ul class="top-info">
						<li>
							<i class="fa fa-globe th-color"></i> اللغة:
							<span class="select-wrap1">
								<select>
									<option>العربية</option>
									<option>ENG</option>
									<option>HIN</option>
								</select>
							</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="res-logo-sec">
				<div class="logo"><a href="/" title=""><img src="<?php bloginfo('template_url'); ?>/assets/images/logo2.png" alt=""></a></div>
				<span class="res-menu-btn"><i class="fa fa-align-justify"></i></span>
			</div>
			<div class="res-menu">
				<span class="res-menu-close"><i class="fa fa-close"></i></span>
				<div class="res-logo-sec">
					<div class="logo"><a href="../falah/index.html" title=""><img src="<?php bloginfo('template_url'); ?>/assets/images/logo2.png" alt=""></a></div>
				</div>
				<ul>
					<li class="menu-item-has-children"><a href="#" title="">عن راعى مصر</a>
						<ul>
							<li><a href="../falah/index.html" title="">Home Page 1</a></li>
							<li><a href="../falah/index2.html" title="">Home Page 2</a></li>
							<li><a href="../falah/index3.html" title="">Home Page 3</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="#" title="">المجالات</a>
						<ul>
							<li><a href="../falah/blog.html" title="">Our Blog</a></li>
							<li><a href="../falah/blog-list.html" title="">Blog List</a></li>
							<li><a href="../falah/blog-detail.html" title="">Blog Detail</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="#" title="">التبرعات</a>
						<ul>
							<li><a href="../falah/project.html" title="">Our Projects</a></li>
							<li><a href="../falah/project-col2.html" title="">Projects 2 Column</a></li>
							<li><a href="../falah/project-col3.html" title="">Projects 3 Column</a></li>
							<li><a href="../falah/project-filter-grid.html" title="">Projects Filter Grid</a></li>
							<li><a href="../falah/project-filter-list.html" title="">Projects Filter List</a></li>
							<li><a href="../falah/project-detail.html" title="">Project Detail</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="#" title="">وسائل التبرع</a>
						<ul>
							<li class="menu-item-has-children"><a href="#" title="">Our Events</a>
								<ul>
									<li><a href="../falah/event.html" title="">Our Events</a></li>
									<li><a href="../falah/event-list.html" title="">Events List</a></li>
									<li><a href="../falah/event-detail.html" title="">Event Detail</a></li>
									<li><a href="../falah/event-calendar.html" title="">Event Calendar</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#" title="">شركاؤنا</a>
								<ul>
									<li><a href="../falah/product.html" title="">Our Products</a></li>
									<li><a href="../falah/product-detail.html" title="">Product Detail</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#" title="">المركز الإعلامى</a>
								<ul>
									<li><a href="../falah/cause.html" title="">Our Cause</a></li>
									<li><a href="../falah/cause-list.html" title="">Cause List</a></li>
									<li><a href="../falah/cause-detail.html" title="">Cause Detail</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#" title="">اتصل بنا</a>
								<ul>
									<li><a href="../falah/gallery.html" title="">Gallery Style 1</a></li>
									<li><a href="../falah/gallery2.html" title="">Gallery Style 2</a></li>
									<li><a href="../falah/gallery3.html" title="">Gallery Style 3</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#" title="">وظائف راعى مصر</a>
								<ul>
									<li><a href="../falah/team.html" title="">Our Team</a></li>
									<li><a href="../falah/team-detail.html" title="">Team Detail</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#" title="">Our Services</a>
								<ul>
									<li><a href="../index.html" title="">Our Services</a></li>
									<li><a href="../index.html" title="">Service Detail</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#" title="">Extra Pages</a>
								<ul>
									<li><a href="../falah/donation-form.html" title="">Donation Form</a></li>
									<li><a href="../falah/donors.html" title="">Our Donors</a></li>
									<li><a href="../falah/comingsoon.html" title="">Comingsoon</a></li>
									<li><a href="../falah/p404.html" title="">Error Page</a></li>
									<li><a href="../falah/testimonial.html" title="">Testimonials</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="../falah/about.html" title="">شركاؤنا</a></li>
					<li class="menu-item-has-children"><a href="#" title="">المركز الاعلامى</a>
						<ul>
							<li><a href="../falah/contact.html" title="">Contact Us Style 1</a></li>
							<li><a href="../falah/contact2.html" title="">Contact Us Style 2</a></li>
						</ul>
					</li>
					<li><a href="../falah/about.html" title="">اتصل بنا</a></li>
					<li><a href="../falah/about.html" title="">وظائف راعى مصر</a></li>
				</ul>
			</div>
		</div>