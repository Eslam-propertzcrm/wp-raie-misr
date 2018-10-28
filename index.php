<?php get_header(); ?>
		<?php //if (is_front_page()) : 
				//get_template_part('front-page1');
			// elseif (is_single):
		 	//endif; ?>
		 	<?php //if (is_single()) : ?>
		<section class="slider">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100 h-100" src="<?php bloginfo('template_url'); ?>/assets/images/sliders/web--01.png" alt="First slide">
				      <div class="carousel-caption d-none d-md-block">
					    <h5 style="float: right; color: white; text-align: right;">
					    	<?php echo get_theme_mod('header_text'); ?>	
					    </h5>
					    <h4 style=" display: inline-block; color: white; text-align: left;">
					    	<?php echo get_theme_mod('header_heading'); ?>		
					    </h4>
					  </div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100 h-100" src="<?php bloginfo('template_url'); ?>/assets/images/sliders/web--02.jpg" alt="Second slide">
				      <div class="carousel-caption d-none d-md-block">
					    <h5 style="float: right; color: white; text-align: right;">أدعم ... أعطى <br> ياحتاجون مساعدتك</h5>
					    <h4 style=" display: inline-block; color: white; text-align: left;">راعى مصر <br> للخير </h4>
					  </div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100 h-100" src="<?php bloginfo('template_url'); ?>/assets/images/sliders/web--03.png" alt="Third slide">
				      <div class="carousel-caption d-none d-md-block">
					    <h5 style="float: right; color: white; text-align: right;">أدعم ... أعطى <br> ياحتاجون مساعدتك</h5>
					    <h4 style=" display: inline-block; color: white; text-align: left;">راعى مصر <br> للخير </h4>
					  </div>
				    </div>
				  </div>
				</div>
		</section>
		
		<div class="cp-main-content" style="background: url(<?php bloginfo('template_url') ?>/assets/images/web-31.png) top center; z-index: 11; background-size: contain;">

			<section class="cp-welcome-section cp-welcome-section_v2 pd-tb100">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<?php  $id=47; 
												//$page = get_post($id);
												$page = get_page_by_title( 'عن راعى مصر' );
												// $my_query = new WP_Query( array( 'p' =>  'عن راعى مصر'  ) );
												// if ( $my_query->have_posts() ) : 
												// while ($my_query->have_posts()) : 
												// 	$my_query->the_post();
											?>
											<h5><a href="<?php echo get_page_link($page) ?>"><?php echo $page->post_title; ?></a></h5>
											<p> <?php
												// echo $page->post_excerpt;
												$content = apply_filters('the_content', $page->post_content ); 
												echo implode(' ', array_slice(explode(' ', $content), 0, 50)) . '...';
												?>	
											</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<?php 
												$page = get_page_by_title( 'رؤية راعى مصر' );
											?>
											<h5><a href="<?php echo get_page_link($page) ?>"><?php echo $page->post_title; ?></a></h5>
											<p>
												<?php
												$content = apply_filters('the_content', $page->post_content ); 
												echo implode(' ', array_slice(explode(' ', $content), 0, 50)) . '...';
												?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="cp-welcome-section cp-welcome-section_v2 pd-tb100 services no-top-padding">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
							<div class="cp-heading-outer cp-heading-outer_v3">
								<h5 ><img src="<?php bloginfo('template_url') ?>/assets/images/web-28.png" alt="">الخدمات المباشرة</h5>
							</div>
						</div>
						<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
							<div class="row">
								<div class="col-lg-2 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<p><?php echo get_theme_mod('services_text1','التكافل الاجتماعى'); ?></p>
											<p><?php echo get_theme_mod('number1','4,000,000'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<p><?php echo get_theme_mod('services_text2','التعليم'); ?></p>
											<p><?php echo get_theme_mod('number2','4,000,000'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<p><?php echo get_theme_mod('services_text3','الصحة'); ?></p>
											<p><?php echo get_theme_mod('number3','4,000,000'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<p><?php echo get_theme_mod('services_text4','البحث العلمى'); ?></p>
											<p><?php echo get_theme_mod('number4','4,000,000'); ?></p>
										</div>
									</div>
								</div> 
								<div class="col-lg-2 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<p><?php echo get_theme_mod('services_text5','مناحى الحياة'); ?></p>
											<p><?php echo get_theme_mod('number5','4,000,000'); ?></p>
										</div>
									</div>
								</div> 
								<div class="col-lg-2 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<p><?php echo get_theme_mod('services_text6','الجميع'); ?></p>
											<p><?php echo get_theme_mod('number6','4,000,000'); ?></p>
										</div>
									</div>
								</div> 

								<!-- <div class="col-md-12 col-sm-12">
									<div class="text-left">
										<a href="../index.html" class="cp-btn-style_v3 btn-donation">Learn More</a>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</section>

			<section class="cp-welcome-section cp-welcome-section_v2 pd-tb100 no-top-padding">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
							<div class="row">
								<div class="col-lg-1 col-md-6 col-sm-12">
								</div>
								<div class="col-lg-2 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<img src="<?php echo get_theme_mod('features_image1', get_bloginfo('template_directory').'/assets/images/web-04.png'); ?>">
											<p><?php echo get_theme_mod('features_text1','التعليم'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<img src="<?php echo get_theme_mod('features_image2', get_bloginfo('template_directory').'/assets/images/web-05.png'); ?>">
											<p><?php echo get_theme_mod('features_text2','التكافل الاجتماعى'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<img src="<?php echo get_theme_mod('features_image3', get_bloginfo('template_directory').'/assets/images/web-06.png'); ?>">
											<p><?php echo get_theme_mod('features_text3','الصحة'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<img src="<?php echo get_theme_mod('features_image4', get_bloginfo('template_directory').'/assets/images/web-07.png'); ?>">
											<p><?php echo get_theme_mod('features_text4','البحث العلمى'); ?></p>
										</div>
									</div>
								</div> 
								<div class="col-lg-2 col-md-6 col-sm-12">
									<div class="cp-donation-box">
										<div class="cp-text">
											<img src="<?php echo get_theme_mod('features_image5', get_bloginfo('template_directory').'/assets/images/web-08.png'); ?>">
											<p><?php echo get_theme_mod('features_text5','مناحى الحياة'); ?></p>
										</div>
									</div>
								</div> 

								<!-- <div class="col-md-12 col-sm-12">
									<div class="text-left">
										<a href="../index.html" class="cp-btn-style_v3 btn-donation">Learn More</a>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</section>

			<section class="cp-causes-section cp-causes-masonary-section pd-tb100 no-top-padding">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
							<div class="cp-heading-outer cp-heading-outer_v3">
								<h5 ><img src="<?php bloginfo('template_url') ?>/assets/images/web-27.png" alt="">أخبار راعى مصر</h5>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="cp-causes-inner-outer">
							<div class="cp-masonary-layout">
								<?php $my_query = new WP_Query( 'category_name="أخبار راعى مصر"' );  ?>
								<?php if($my_query->have_posts()) : ?>
									<?php while($my_query->have_posts()) : $my_query->the_post(); ?>
										<div class="col-xs-12">
											<div class="cp-masonary-item" >
												<div class="cp-causes-item">
													<?php if( has_post_thumbnail() ) : ?>
													<figure class="cp-thumb">
														<?php the_post_thumbnail(); ?>
														<!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/news/1.jpg" alt=""> -->
													</figure>
													<?php endif; ?>
													<div class="cp-text">
														<!-- <span class="cp-mapicon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> -->
														<ul class="meta-listed">
															<li>
																<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
																	<i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?>
																</a>
															</li>
															<li>
																<!-- those two lines are equevet -->
																<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('F j,Y g:i a'); ?>
																<?php //the_date();  ?>  <?//php the_time(); ?>
															</li> 
														</ul>
														<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
														<div class="cp-progressbar-outer">
															<?php the_excerpt(); ?> <?php // the_content(); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php endwhile; ?>
								<?php else: ?>
									<h2>عذرا لا يوجد اخبار </h2>
								<?php endif; ?>
							</div>
							<div class="cp-btns-holder text-center">
								<a href="../falah/cause.html" class="cp-btn-style_v3">عرض المزيد من الأخبار</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="cp-causes-section cp-causes-masonary-section pd-tb100">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
							<div class="cp-heading-outer cp-heading-outer_v3">
								<h5 ><img src="<?php bloginfo('template_url') ?>/assets/images/web-29.png" alt="">التمويل الجماعى</h5>
							</div>
						</div>
					</div>
					<div class="cp-causes-inner-outer">
						<div class="cp-masonary-layout">
							<?php $my_query = new WP_Query( 'category_name="التمويل الجماعى"' );  ?>
							<?php if($my_query->have_posts()) : ?>
								<?php while($my_query->have_posts()) : $my_query->the_post(); ?>
									<div class="col-xs-12">
										<div class="cp-masonary-item">
											<div class="cp-causes-item">
												<?php if( has_post_thumbnail() ) : ?>
													<figure class="cp-thumb">
														<?php the_post_thumbnail(); ?>
														<!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/news/1.jpg" alt=""> -->
													</figure>
												<?php endif; ?>
												<div class="cp-text">
													<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
													<div class="cp-progressbar-outer">
														<div class="cp-progressbar-inner">
																<span class="percentage bar-left">1,000,000 ج.م</span>
															<div class="progress-bar" style="width: 80%;">
																<span class="percentage">1,000,000 ج.م</span>
															</div>
														</div>
														<?php the_excerpt() ?>
													</div>
													<div class="bottom-holder">
														<a href="../falah/cause-detail.html" class="cp-btn-style btn-donors">أتبرع الأن</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php endwhile; ?>
								<?php else: ?>
									<h2>عذرا لا يوجد اخبار </h2>
								<?php endif; ?>
							</div>
							
						</div>
						<div class="cp-btns-holder text-center">
							<a href="../falah/cause.html" class="cp-btn-style_v3">عرض المزيد من التمويل الاجتماعى</a>
						</div>
					</div>
				</div>
			</section>

			<section class="cp-newsletter-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="cp-news-letter-inner" style="    
								background: url(<?php bloginfo('template_url') ?>/assets/images/web-12.png) top center;
							    z-index: 11;
							    background-size: contain;
							    height: 185px;
							    background-repeat: no-repeat;
    							background-size: cover;">
								<div class="news-text col-xs-offset-3 col-xs-6" >
									<h2>ياحتاجون مساعدتك</h2>
									<h3>ابداء بأحد برامجنا و قدم المساعدة</h3>
								</div>
								<!-- <form method="get" class="cp-newsform-outer">
									<input type="text" placeholder="Enter your Email">
									<button class="btn-submit cp-btn-style_v2" type="submit">Subscribe Now</button>
								</form> -->
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="cp-sponsors-section pd-tb100 slider-1" >
				<div class="container">
					<!-- <h2>Join over <span class="th-color"><i>200</i> Charities</span> on Causes & make a difference today.</h2> -->
					<div class="row" style="direction: rtl">
						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-6 ">
							<div class="cp-heading-outer cp-heading-outer_v3">
								<h5 ><img src="<?php bloginfo('template_url') ?>/assets/images/web-30.png" alt="">الصور</h5>
							</div>
						</div>
					</div>
					<div id="cp-photos-slider" class="owl-carousel" style="direction: ltr;">
						<div class="item">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/grouping_Finance/6.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/grouping_Finance/6.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/grouping_Finance/6.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/grouping_Finance/6.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/grouping_Finance/6.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/grouping_Finance/6.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</section>

			<section class="cp-sponsors-section pd-tb100" >
				<div class="container">
					<h2>الداعمين</h2>
					<div id="cp-sponsors-slider" class="owl-carousel" style="direction: ltr;">
						<div class="item">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/web-09.png" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/web-10.png" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/web-09.png" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/web-10.png" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/web-09.png" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/web-10.png" alt=""></a>
						</div>
					</div>
				</div>
			</section>

		</div>


<?php get_footer(); ?>