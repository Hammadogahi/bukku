<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="behind">
<header style="background: url( <?php echo get_theme_file_uri('img/slider1.jpg') ; ?>)">
	<div class="container">
			<div class="col-md-6 col-sm-12 wow animated fadeInUp">
				<div class="intro-book">
					<img src="<?php echo get_theme_file_uri('img/book1.png') ; ?>" alt="">
				</div>
			</div>
			<div class="col-md-6 intro-text hidden-sm hidden-xs wow animated fadeInUp">
				<h2 class="heading">Swiss Typography</h2>
				<h4 class="subheading">Review of typefaces with examples.</h4>
				<p>Our all time best selling book is now available in a revised and expanded second edition. Swiss Typography is the definitive guide to using type in visual communication, from the printed page to PC screen.</p>
				<a href="#book" class="scrollto btn btn-white">About The Book</a>
				<a href="#" class="btn btn-green">Purchase eBook <span class="price">$11.99</span></a>
			</div>
	</div>
</header>

<nav class="navbar navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
            <?php the_custom_logo(); ?>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
        <?php wp_nav_menu(
                            array(
                            'theme_location' => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'bs-example-navbar-collapse-1',
                            'menu_class' => 'nav navbar-nav navbar-right main-nav'
                            
                             )
                        ); 
        ?>
<!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

