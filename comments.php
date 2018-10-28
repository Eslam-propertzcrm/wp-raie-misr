<?php 
// --------------- replaies and comment list to view  (not used now)
	$args = array(
		'walker'            => null,
		'max_depth'         => '',
		'style'             => 'ul',
		'callback'          => null,
		'end-callback'      => null,
		'type'              => 'all',
		'reply_text'        => 'Reply',
		'reply_class'        => 'btn-reply',
		'page'              => '',
		'per_page'          => '',
		'avatar_size'       => 50,
		'reverse_top_level' => null,
		'reverse_children'  => '',
		'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
		'short_ping'        => false,   // @since 3.6
	        'echo'              => true     // boolean, default is true
	); 

// --------------- comment form fields customization


	$fields =  array(

	  'author' =>
	    '<p class="col-md-4 col-sm-12 col-xs-12">'.
	    '<input id="author" name="author" placeholder="Full Name '.( $req ? '*' : '' ).'" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
	    '" size="30"' . $aria_req . ' /></p>',

	  'email' =>
	    '<p class="col-md-4 col-sm-12 col-xs-12">'.
	    '<input id="email" placeholder="Email '.( $req ? '*' : '' ).'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	    '" size="30"' . $aria_req . ' /></p>',

	  'url' =>
	    '<p class="col-md-4 col-sm-12 col-xs-12">'.
	    '<input id="url" placeholder="Website" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
	    '" size="30" /></p>',
	);

// --------------- comment form
	$comments_args = array(

			'fields' => apply_filters( 'comment_form_default_fields', $fields ),

			'comment_notes_before' => '<p class="comment-notes">' .
		    __( 'عنوان بريدك الالكترونى لن يكون ظاهر للعامة. ' ) . ( $req ? 'الحقول المطلوبة سوف تكون بهذة العلامة *' : '' ) .
		    '</p>',

			// change the class of form tag 
	        'logged_in_as' => '<p class="logged-in-as">' .
							    sprintf(
							    __( 'تم تسجيل الدخول  من <a href="%1$s">%2$s</a>. <a href="%3$s" title="تسجيل الخروج من ">تسجيل الخروج  ؟</a>' ),
							      admin_url( 'profile.php' ),
							      $user_identity,
							      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
							    ) . '</p>',
			// change the class of form tag 
	        'class_form'=>'cp-comments-form',
	        // change the class submit of send button 
	        // 'class_submit'=>'cp-btn-style btn-submit',
	        'submit_button'=>'<button class="cp-btn-style btn-submit" type="submit" id="submit" name="submit">
	        Submit COmment</button>',
	        // change the title of send button 
	        'label_submit'=>'Submit COm',
	        // change the title of the reply section
	        'title_reply'=>'أترك تعليقك بالاسفل',
	        // remove "Text or HTML to be displayed after the set of comment fields"
	        'comment_notes_after' => '',
	        // redefine your own textarea (the comment body)
	        'comment_field' => '
	        					<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="inner-holder">
											<textarea id="comment" name="comment" cols="30" rows="10" placeholder="أكتب تعليقك هنا ..."></textarea>
										</div>
									</div>
								</div>

	        			',
	);
?>

<div class="cp-author-holder">
	<h3>التعليقات</h3>
	<ul class="cp-comments-listed">
		<?php wp_list_comments( 'type=comment&callback=format_comment' ); ?> <!-- $args, $comments   'type=comment&callback=format_comment'-->
	</ul>
</div>
<div class="cp-comments-outer">
	<!-- <h3>Leave Your Comments</h3> -->
	<?php 

		comment_form($comments_args);

	?>
</div>

<?php function format_comment($comment, $args, $depth) {   $GLOBALS['comment'] = $comment; ?>

	<div class="cp-author-holder">
		<ul class="cp-comments-listed">
			<li>
				<div class="cp-comments-item">
					<figure class="comments-thumb">
						<!-- <img src="../falah/assets/images/resources/comment-img-02.jpg" alt=""> -->
						<?php if ( $args['avatar_size'] != 0 ) {
						                echo get_avatar( $comment, $args['avatar_size'] ); 
						            } 
						  ?>
					</figure>
					<div class="comments-info" style="width: 100%;">
						<div class="top">
							<h5><?php printf(__('%s'), get_comment_author_link()) ?> </h5>
							<ul class="meta-listed">
								<li>
									<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<?php
							                /* translators: 1: date, 2: time */
							                printf( 
							                    __('%1$s at %2$s'), 
							                    get_comment_date(),  
							                    get_comment_time() 
							                ); ?>
									</a>
								</li>
							</ul>
							<!-- <a href="#" class="btn-reply">Reply</a> -->
							<?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
							<?php 
				                comment_reply_link( 
				                    array_merge( 
				                        $args, 
				                        array( 
				                            'add_below' => $add_below, 
				                            'depth'     => $depth, 
				                            'max_depth' => $args['max_depth'] 
				                        ) 
				                    ) 
				                ); 
				             ?>
						</div>
						<p><?php comment_text(); ?></p>
					</div>
				</div>
				<!-- <ul class="cp-comments-listed">
					<li>
						<div class="cp-comments-item">
							<figure class="comments-thumb">
								<img src="../falah/assets/images/resources/comment-img-03.jpg" alt="">
							</figure>
							<div class="comments-info">
								<div class="top">
									<h5>Kevin Richard </h5>
									<ul class="meta-listed">
										<li>
											<i class="fa fa-clock-o" aria-hidden="true"></i>
											10 May, 2018
										</li>
									</ul>
									<a href="#" class="btn-reply">Reply</a>
								</div>
								<p>Mauris hendrerit quis nunc id tempus. Suspendisse vehicula et neque eget rutrum. Sed iaculis quam nec augue iaculis ultricies. Donec fringilla ligula non sem porta, et consectetur dolor auctor.</p>
							</div>
						</div>
					</li>
				</ul> -->
			</li>
		</ul>
	</div>

<?php } ?>



<!-- <div class="cp-comments-outer">
	<h3>Leave Your Comments</h3>
	<form class="cp-comments-form" method="get">
		<div class="row">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="inner-holder">
					<input type="text" name="fullname" placeholder="Full Name">
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="inner-holder">
					<input type="email" name="email" placeholder="Email">
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="inner-holder">
					<input type="text" name="subject" placeholder="Subject">
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="inner-holder">
					<textarea name="comments" cols="30" rows="10" placeholder="Comments"></textarea>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="inner-holder text-right">
					<button class="cp-btn-style btn-submit" type="submit" name="submit">Submit COmment</button>
				</div>
			</div>
		</div>
	</form>
</div> -->