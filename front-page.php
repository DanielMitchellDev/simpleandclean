<?php get_header(); ?>
<?php require_once('inc/php/customizer-styles.php'); ?>
<body>
	<div class="container-fluid landing">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><?php echo get_theme_mod('banner_logo', 'Johnathon Doe'); ?></a>
						</div>

				        <?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'depth'             => 2,
				                'container'         => 'div',
				                'container_class'   => 'collapse navbar-collapse',
				        		'container_id'      => 'bs-example-navbar-collapse-1',
				                'menu_class'        => 'nav navbar-nav navbar-right',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
				            );
				        ?>
					</div><!-- /.container-fluid -->
				</nav>
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->
		<div class="row landing-plate">
			<div class="col-md-12 text-center">
				<h1 class="landing-name"><?php echo get_theme_mod('landing_heading', 'Johnathon Doe'); ?></h1>
				<h3 class="landing-description"><?php echo get_theme_mod('landing_description', 'A Simple And Clean Custom Theme'); ?></h3>
				<span class="hidden-xs">	
				<a href="#about"><button class="btn btn-info btn-lg" style="margin-right: 30px;">Follow</button></a>
				<a href="#contact"><button class="btn btn-primary btn-lg" style="margin-left: 30px;">Blog</button></a>
				</span>
			</div>
		</div><!-- /.row -->	
	</div><!-- /.container-fluid -->
<?php get_footer(); ?>