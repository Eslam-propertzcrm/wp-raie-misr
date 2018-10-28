<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
	<aside class="cp-asidebar-outer">
		<?php if (is_active_sidebar('sidebar')) : 
			dynamic_sidebar('sidebar');
		 endif ; ?>
		<!-- <div class="widget widget-search">
			<h4>Search</h4>
			<form method="get" class="search-form">
				<input type="text" placeholder="Enter Keywords">
				<button class="btn-submit" type="submit">
					<i class="fa fa-search" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<div class="widget widget-text">
			<h4>Text Widget</h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
		</div>
		<div class="widget widget-recentpost">
			<h4>Recent post</h4>
			<ul class="cp-recent-listed">
				<li class="recent-list">
					<div class="sm-thumb">
						<img src="../falah/assets/images/resources/recent-sm-img-05.jpg" alt="">
					</div>
					<div class="cp-text">
						<h6><a href="#">It is a long established fact for child</a></h6>
						<ul class="meta-listed">
							<li>
								<i class="fa fa-calendar" aria-hidden="true"></i>
								15 May, 2018
							</li>
						</ul>
					</div>
				</li>
				<li class="recent-list">
					<div class="sm-thumb">
						<img src="../falah/assets/images/resources/recent-sm-img-06.jpg" alt="">
					</div>
					<div class="cp-text">
						<h6><a href="#">Animals Migration to Save their Lives</a></h6>
						<ul class="meta-listed">
							<li>
								<i class="fa fa-calendar" aria-hidden="true"></i>
								10 June, 2018
							</li>
						</ul>
					</div>
				</li>
				<li class="recent-list">
					<div class="sm-thumb">
						<img src="../falah/assets/images/resources/recent-sm-img-04.jpg" alt="">
					</div>
					<div class="cp-text">
						<h6><a href="#">Wind Turbines and Solar Panels Energy</a></h6>
						<ul class="meta-listed">
							<li>
								<i class="fa fa-calendar" aria-hidden="true"></i>
								20 Aug, 2018
							</li>
						</ul>
					</div>
				</li>
				<li class="recent-list">
					<div class="sm-thumb">
						<img src="../falah/assets/images/resources/recent-sm-img-03.jpg" alt="">
					</div>
					<div class="cp-text">
						<h6><a href="#">Animals Migration to Save their Lives</a></h6>
						<ul class="meta-listed">
							<li>
								<i class="fa fa-calendar" aria-hidden="true"></i>
								20 Dec, 2018
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
		<div class="widget widget-news">
			<h4>Recent News</h4>
			<div class="owl-carousel" id="cp-news-slider">
				<div class="slider-item">
					<figure class="cp-thumb">
						<img src="../falah/assets/images/resources/recent-img-01.jpg" alt="">
					</figure>
					<div class="cp-text">
						<h6><a href="#">It’s Right for Everyone to get Healthy Food</a></h6>
					</div>
				</div>
				<div class="slider-item">
					<figure class="cp-thumb">
						<img src="../falah/assets/images/resources/recent-img-02.jpg" alt="">
					</figure>
					<div class="cp-text">
						<h6><a href="#">Animals Migration to Save their Lives</a></h6>
					</div>
				</div>
			</div>
		</div>
		<div class="widget widget-event">
			<h4>Upcoming Events</h4>
			<ul class="cp-event-listed">
				<li class="event-list-item">
					<div class="event-inner-info">
						<span class="date-box">
							<strong class="th-color">30</strong>
							<span class="th-color">Dec 2018</span>
						</span>
						<div class="cp-text">
							<h6><a href="#">Village Electrition Committgoing to</a></h6>
							<ul class="meta-listed">
								<li><i class="fa fa-clock-o" aria-hidden="true"></i>10:00 am - 05:00 pm</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="event-list-item">
					<div class="event-inner-info">
						<span class="date-box">
							<strong class="th-color">20</strong>
							<span class="th-color">Aug 2018</span>
						</span>
						<div class="cp-text">
							<h6><a href="#">Fusce fermentum augue quam sagittis</a></h6>
							<ul class="meta-listed">
								<li><i class="fa fa-clock-o" aria-hidden="true"></i>09:00 am - 04:00 pm</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="event-list-item">
					<div class="event-inner-info">
						<span class="date-box">
							<strong class="th-color">28</strong>
							<span class="th-color">Sep 2018</span>
						</span>
						<div class="cp-text">
							<h6><a href="#">Morbi maximus lacus semegestas, ut.</a></h6>
							<ul class="meta-listed">
								<li><i class="fa fa-clock-o" aria-hidden="true"></i>10:00 am - 05:00 pm</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="widget widget-donation">
			<h4>Make Donation</h4>
			<form method="get" class="cp-donation-form">
				<div class="inner-holder">
					<input type="text" name="fullname" placeholder="Full Name">
				</div>
				<div class="inner-holder">
					<input type="email" name="email" placeholder="Email">
				</div>
				<div class="inner-holder">
					<input type="text" name="contact" placeholder="Contact">
				</div>
				<div class="inner-holder">
					<select name="project" class="cp-select">
						<option value="select">Select Project,Causes</option>
						<option value="project">Project</option>
						<option value="causes">Causes</option>
					</select>
				</div>
				<div class="inner-holder">
					<select name="project" class="cp-select">
						<option value="donation">Donation Amount</option>
						<option value="amount">$3000</option>
						<option value="amount">$6000</option>
						<option value="amount">$8000</option>
						<option value="amount">$9200</option>
					</select>
				</div>
				<div class="inner-holder">
					<button class="cp-btn-style btn-submit" type="submit" name="submit">Donate Now</button>
				</div>
			</form>
		</div> -->
	</aside>
</div>