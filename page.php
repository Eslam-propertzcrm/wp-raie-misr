<?php get_header(); ?>

	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			
			<section class="cp-inner-banner-section" style="background-image: url(<?php the_post_thumbnail_url(); ?>) ;">
				<div class="container">
					<div class="cp-breadcrumb-outer">
						<div class="row">
							<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
								<div class="cp-inner-banner-info">
									<h1><?php the_title(); ?></h1>
									<p>
										<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
											<i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?>
										</a>

										<p>
											<!-- those two lines are equevet -->
											<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('F j,Y g:i a'); ?>
											<?php //the_date();  ?>  <?//php the_time(); ?>
										</p>
									</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
								<ol class="breadcrumb">
									<li class="breadcrumb-item  active">الخبر الاول</li>
									<li class="breadcrumb-item">
									</li>
									<li class="breadcrumb-item">
										<a href="../falah/blog.html">الاخبار</a>
									</li>
									<li class="breadcrumb-item">
										<a href="../falah/index.html">الرئيسية</a>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="cp-main-content">
				<section class="cp-blog-section cp-blog-detail-section pd-tb100">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
								<div class="cp-blog-detail-inner">
									<div class="cp-blog-item cp-blog-item_v2">
										<figure class="cp-thumb">
											<!-- <img src="../falah/assets/images/resources/blog-lrg-img-01.jpg" alt=""> -->
											<?php the_post_thumbnail(); ?>
										</figure>
										<div class="cp-text">
											<h4><?php the_title(); ?></h4>
											<div class="bottom-holder">
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
													<li>
														<i class="fa fa-comment-o" aria-hidden="true"></i>
														<a href="#"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<p><?php the_content(); ?></p>
									<!-- <blockquote class="cp-blogquotes-outer">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo tempor incididunt ut <span class="th-color">labore</span> et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <span class="th-color">ullamco laboris</span> nisi ut aliquip.</p>
									</blockquote>
									<p>Mauris hendrerit quis nunc id tempus. Suspendisse vehicula et neque eget rutrum. Sed iaculis quam nec augue iaculis ultricies. Donec fringilla ligula non sem porta, et consectetur dolor auctor. Nam a arcu aliquam, molestie augue vitae, vulputate ex. Etiam iaculis imperdiet enim nec dapibus. Ut mauris elit, laoreet sed faucibus ut, tempor a mi. Cras mattis cursus metus ornare tempus.</p>
									<ul class="cp-check-listed">
										<li>
											Donec semper augue id pharetra feugiat.
										</li>
										<li>
											Duis at mi mattis risus lacinia viverra ut ac sapien.
										</li>
										<li>
											Morbi sed nulla et risus porttitor egestas id eget nibh.
										</li>
									</ul>
									<div class="cp-tags-outer">
										<strong>Tags:</strong>
										<ul class="tags">
											<li>
												<a href="#">Charity</a>,
											</li>
											<li>
												<a href="#">NGO</a>,
											</li>
											<li>
												<a href="#">Poor People</a>,
											</li>
											<li>
												<a href="#">Organizations</a>
											</li>
										</ul>
									</div>
									<div class="cp-social-outer_v2">
										<span>Share:</span>
										<ul class="cp-social-links cp-social-links_v3">
											<li><a href="#" title="Google Plus" data-toggle="tooltip" data-placement="top" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Twitter" data-toggle="tooltip" data-placement="top" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Linkedin" data-toggle="tooltip" data-placement="top" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Facebook" data-toggle="tooltip" data-placement="top" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Pinterest" data-toggle="tooltip" data-placement="top" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Youtube" data-toggle="tooltip" data-placement="top" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="cp-author-holder">
										<ul class="cp-comments-listed">
											<li>
												<div class="cp-comments-item">
													<figure class="comments-thumb">
														<img src="../falah/assets/images/resources/comment-img-01.jpg" alt="">
													</figure>
													<div class="comments-info">
														<div class="top">
															<h5>KATY PERRY </h5>
															<ul class="cp-social-links cp-social-links_v3">
																<li><a href="#" title="Google Plus" data-toggle="tooltip" data-placement="top" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Twitter" data-toggle="tooltip" data-placement="top" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Linkedin" data-toggle="tooltip" data-placement="top" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Facebook" data-toggle="tooltip" data-placement="top" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<p>Mauris hendrerit quis nunc id tempus. Suspendisse vehicula et neque eget rutrum. Sed iaculis quam nec augue iaculis ultricies. Donec fringilla ligula non sem porta, et consectetur dolor auctor.</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="cp-related-outer">
										<div class="cp-heading-outer">
											<span class="th-color">Our Latest Updates</span>
											<h1>Related Posts</h1>
											<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
										</div>
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="cp-blog-item">
													<figure class="cp-thumb">
														<img src="../falah/assets/images/resources/blog-sm-img-05.jpg" alt="">
													</figure>
													<div class="cp-text">
														<h5><a href="../falah/blog-detail.html">Children have Best Future</a></h5>
														<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus maxime placeat facere.</p>
														<div class="bottom-holder bottom-line">
															<ul class="meta-listed">
																<li>
																	<div class="sm-thumb">
																		<img src="../falah/assets/images/resources/comment-sm-img-01.jpg" alt="">
																	</div>
																	Walter Lewis
																</li>
																<li>
																	<i class="fa fa-clock-o" aria-hidden="true"></i>
																	15 May, 2018
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="cp-blog-item">
													<figure class="cp-thumb">
														<img src="../falah/assets/images/resources/blog-sm-img-04.jpg" alt="">
													</figure>
													<div class="cp-text">
														<h5><a href="../falah/blog-detail.html">Education of Children in...</a></h5>
														<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus maxime placeat facere.</p>
														<div class="bottom-holder bottom-line">
															<ul class="meta-listed">
																<li>
																	<div class="sm-thumb">
																		<img src="../falah/assets/images/resources/comment-sm-img-02.jpg" alt="">
																	</div>
																	Smith Alvin
																</li>
																<li>
																	<i class="fa fa-clock-o" aria-hidden="true"></i>
																	10 March, 2018
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="cp-blog-item">
													<figure class="cp-thumb">
														<img src="../falah/assets/images/resources/blog-sm-img-06.jpg" alt="">
													</figure>
													<div class="cp-text">
														<h5><a href="../falah/blog-detail.html">Feed My Starving ChildrenM</a></h5>
														<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus maxime placeat facere.</p>
														<div class="bottom-holder bottom-line">
															<ul class="meta-listed">
																<li>
																	<div class="sm-thumb">
																		<img src="../falah/assets/images/resources/comment-sm-img-03.jpg" alt="">
																	</div>
																	Walter Lewis
																</li>
																<li>
																	<i class="fa fa-clock-o" aria-hidden="true"></i>
																	20 April, 2018
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> -->
									
									
									
								</div>
							</div>
							<?php get_sidebar(); ?>
						</div>
					</div>
				</section>
			</div>

		<?php endwhile; ?>
	<?php else: ?>
		<h2>عذرا لا يوجد اخبار </h2>
	<?php endif; ?>

<?php get_footer(); ?>