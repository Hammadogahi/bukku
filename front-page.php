<?php get_header('home');
?>

<section id="book">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="book-preview">
					<img src="<?php echo get_theme_file_uri('img/kindle.png') ; ?>" class="background-device" alt="">
					<div class="owl-book">
						<div class="item">
							<img src="<?php echo get_field('slide_1')['url']; ?>" alt="">
							<div class="overlay">
								<a href="<?php echo get_field('slide_1')['url']; ?>" class="expand" data-lightbox="book-collection" data-title="Image Caption"><i class="fa fa-expand"></i></a>
							</div>
						</div>
						<div class="item">
							<img src="<?php echo get_field('slide_2')['url'] ; ?>" alt="">
							<div class="overlay">
								<a href="<?php echo get_field('slide_2')['url'] ; ?>" class="expand" data-lightbox="book-collection" data-title="Image Caption"><i class="fa fa-expand"></i></a>
							</div>
						</div>
						<div class="item">
							<img src="<?php echo get_field('slide_3')['url'] ; ?>" alt="">
							<div class="overlay">
								<a href="<?php echo get_field('slide_3')['url'] ; ?>" class="expand" data-lightbox="book-collection" data-title="Image Caption"><i class="fa fa-expand"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="heading wow animated fadeInUp"><?php
				if(get_field('about_heading')):
					the_field('about_heading');
				endif;
				?></h2>
				<h4 class="subheading wow animated fadeInUp"><?php
				if(get_field('about_sub_heading')):
					the_field('about_sub_heading');
				endif;
				?></h4>
				<p class="small wow animated fadeInUp"><?php 
				if(get_field('about_text')):
					the_field('about_text');
				endif; 
				?>
				</p>
			</div>
		</div>
	</div>
</section>

<section class="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center wow animated fadeInUp">
				<p class="white">A few hundred years of type and typography have established rules that <b>only a fool would ignore.</b></p>
			</div>
		</div>
	</div>
</section>

<section id="reviews" class="reviews">
	<div class="container">
		<div class="row">	
			<div class="col-sm-6 text-left">
				<h2 class="heading">Reviews</h2>
			</div>
			<div class="col-sm-6 text-right text-left-mobile">
				<div class="rate-amount text-right">
					4/5 <span>(16 Reviews)</span>
				</div>
				<div class="rating">
					<span class="rate active"></span>
					<span class="rate active"></span>
					<span class="rate active"></span>
					<span class="rate active"></span>
					<span class="rate"></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="owl-reviews">
			<?php $testimonials = new WP_Query(array('post_type' => 'testimonial', 'post_status' => 'publish'));
					if($testimonials->have_posts()) {
						while ($testimonials->have_posts()) {
							$testimonials->the_post(); ?>
							<div class="item">
								<div class="review text-center wow animated fadeInUp">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="reviewer-pic" alt="">
									<h4 class="subheading reviewer-name"><?php the_title(); ?></h4>
									<h6 class="subheading muted reviewer-city"><?php the_field('testimonial_location'); ?></h6>
									<div class="rating">
										<?php $rating = get_field('testimonial_rating');
											for ($x = 0; $x < $rating; $x++) {
													echo '<span class="rate active"></span>';
												}
											for ($x = 5; $x > $rating; $x--) {
													echo '<span class="rate"></span>';
												}
										?>
									</div>
									<p class="small"><?php the_field('testimonial_text'); ?></p>
								</div>
							</div>
				<?php		}
					}
				 wp_reset_postdata();	
			?>
			</div>
		</div>
	</div>
</section>

<section id="author">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="row author">
					<div class="col-sm-4">
						<img src="<?php echo get_theme_file_uri('img/author.png') ; ?>" alt="" class="pic">
					</div>
					<div class="col-sm-8 author-name">
						<h2 class="heading wow animated fadeInUp">Nicolas Adamson</h2>
						<h4 class="subheading muted wow animated fadeInUp">Typographer, Writer, Father...</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3 class="subheading gray wow animated fadeInUp">Good typog­raphy is measured by how well it reinforces the meaning of the text, not by some ab­stract scale of merit.</h3>
						<p class="small muted-light wow animated fadeInUp">Nullam quis risus eget urna mollis ornare vel eu leo Praesent commodo cursus magna, ligula porta felis euismod semper.l nisl consectetur etonec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum.</p>
					</div>
				</div>
			</div> <!-- col-md-6 author -->
			<div class="col-md-4 col-md-offset-2">
				<h3 class="heading wow animated fadeInUp">Book Presentation</h3>
				<h4 class="subheading muted no-margin wow animated fadeInUp">Stop by and meet the author</h4>

				<div class="locations">
					<div class="location">
						<h4 class="heading wow animated fadeInUp">Public Presentation, <span class="light">TX, USA</span></h4>
						<div class="date">
							<i class="fa fa-calendar"></i> 06/20/2015
						</div>
						<div class="time">
							<i class="fa fa-clock-o"></i> 8:00 PM
						</div>
						<div class="directions">
							<a href="https://www.google.com/maps/dir/760+West+Genesee+Street+Syracuse+NY+13204/314+Avery+Avenue+Syracuse+NY+13204" class="get-direction" target="_blank" data-title="Get Directions"><i class="fa fa-compass"></i></a>
						</div>
					</div>
					<div class="location">
						<h4 class="heading wow animated fadeInUp">Typography Expo, <span class="light">WA, USA</span></h4>
						<div class="date">
							<i class="fa fa-calendar"></i> 06/20/2015
						</div>
						<div class="time">
							<i class="fa fa-clock-o"></i> 8:00 PM
						</div>
						<div class="directions">
							<a href="https://www.google.com/maps/dir/760+West+Genesee+Street+Syracuse+NY+13204/314+Avery+Avenue+Syracuse+NY+13204" class="get-direction" target="_blank"  data-title="Get Directions"><i class="fa fa-compass"></i></a>
						</div>
					</div>
					<div class="location done">
						<h4 class="heading wow animated fadeInUp">New York Expo 2015, <span class="light">NYC, USA</span></h4>
					</div>
					<div class="location done">
						<h4 class="heading wow animated fadeInUp">Europe Tour, <span class="light">Paris, FR</span></h4>
					</div>
					<div class="location done">
						<h4 class="heading wow animated fadeInUp">Europe Tour, <span class="light">Belgrade, SRB</span></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-left text-center-mobile wow animated fadeInUp">
				<h2 class="heading white top-fit">Get The eBook Sample</h2>
				<h4 class="subheading white no-margin">Join over 5,600 readers and get free sample of the book.</h4>
			</div>
			<div class="col-md-4 text-right wow animated fadeInUp text-center-mobile">
				<a href="#" class="btn btn-white sample-button">Get Free Sample</a>
			</div>
		</div>
	</div>
</section>

<section id="sample-form">
	<div class="container">
		<form id="submit-frm" action="php/sampleMail.php" method="post" class="sample-form">
			<div class="row">
				<div class="col-sm-5">
					<input type="text" class="form-control" name="firstname" placeholder="Name" data-validation="required">
				</div>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="email" placeholder="Email" data-validation="email">
				</div>
				<div class="col-sm-2">
					<input type="submit" class="btn btn-green sign-up-button sample-button-done" value="Subscribe">
				</div>
			</div>
		</form>
	</div>
</section>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left text-center-mobile wow animated fadeInUp contact-details">
				<h3 class="heading no-margin wow animated fadeInUp">Contact Author</h3>
				<h4 class="subheading muted no-margin wow animated fadeInUp">Say hi or ask something.</h4>
				<div class="details">
					<h6 class="heading no-margin">Nicolas Adamson</h6>
					<p class="small muted wow animated fadeInUp no-margin">3125 Flanigan Oaks Drive <br>
					Capitol Heights, MD 20027</p>
				</div>
				<div class="details">
					<h4 class="subheading accent no-margin wow animated fadeInUp">+ 301 324 9131 <br>
					info@nicolasadamson.com</h4>
				</div>
			</div>
			<!-- <form action="php/newMail.php" method="post" class="mail-form">
			</form> -->
			<?php echo do_shortcode( '[contact-form-7 id="43" title="Contact form 1"]'); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>