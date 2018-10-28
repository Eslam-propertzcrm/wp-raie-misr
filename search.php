<?php get_header(); ?>

<?php if(have_posts()) : ?>


		<div class="cp-main-content">
			<section class="cp-blog-section cp-blog-detail-section pd-tb100">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
							<?php while(have_posts()) : the_post(); ?>
							<div class="cp-causes-item">
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12">
										<figure class="cp-thumb">
											<!-- <img src="../falah/assets/images/resources/causes-img-01.jpg" alt=""> -->
											<?php the_post_thumbnail(); ?>
										</figure>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="cp-text">
											<!-- <span class="cp-mapicon">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
											</span> -->
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
											<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
											<p><?php the_excerpt(); ?></p>
											<a href="<?php the_permalink(); ?>" class="cp-btn-style_v3">Project Details</a>
										</div>
									</div>
								</div>
							</div>
							<?php endwhile; ?>
						</div>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</section>
		</div>

	
	<?php else: ?>
		<h2>عذرا لا يوجد اخبار </h2>
	<?php endif; ?>

	<?php get_footer(); ?>