<?php get_header(); ?>
<?php require_once('inc/php/customizer-styles.php'); ?>
<body>
	<div class="container-fluid banner">
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
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="banner-title"><?php wp_title($display = false); ?></h2>
			</div>
		</div>
	</div><!-- /.container-fluid -->	

	<div class="container-fluid blog-roll">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row blog-img-row">
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="row">
					<div class="col-md-12 img-plate">
						<?php the_post_thumbnail(); ?>
					</div>
				</div><!-- /.row -->
				<div class="row blog-title-row">
					<div class="col-md-12 text-center">
						<h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
				</div><!-- /.row -->
				<div class="row blog-excerpt-row">
					<div class="col-md-12 blog-excerpt">
						<p><?php echo get_the_excerpt(); ?><a href="<?php the_permalink(); ?>">READ MORE</a></p>
					</div>
				</div><!-- /.row -->
				<div class="row blog-info-row">
					<div class="col-md-12">
						<span class="blog-author"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span><br>
						<span class="blog-date"><?php the_time('F j, Y'); ?></span><br>
						<span class="blog-comments"><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
					</div>					
				</div><!-- /.row -->
				<div class="row blog-divider-row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 blog-divider">
					</div>
				</div><!--/.row  -->				
				<div class="row blog-category-row">
					<div class="col-md-12 text-center">
						<?php the_category(); ?>
					</div>
				</div><!-- /.row -->
				<div class="row blog-tag-row">
					<div class="col-md-12 text-center blog-tag">
						<?php the_tags('', '', ''); ?>
					</div>
				</div>
			</div>
		</div><!-- /.row -->			      
		<?php endwhile; endif; ?>
	</div><!-- /.container-fluid blog-roll -->
<?php get_footer(); ?>