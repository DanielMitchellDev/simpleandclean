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
							<a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
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
				<h2 class="banner-title">Blog</h2>
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
						<h3 class="blog-title"><?php the_title(); ?></h3>
					</div>
				</div><!-- /.row -->
				<div class="row blog-excerpt-row">
					<div class="col-md-12 blog-excerpt">
						<p><?php the_content(); ?><span style="color:red;">READ MORE</span></p>
					</div>
				</div><!-- /.row -->
				<div class="row blog-info-row">
					<div class="col-md-12">
						<span class="blog-author"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span><br>
						<span class="blog-date"><?php the_date(); ?></span><br>
					</div>					
				</div><!-- /.row -->
				<div class="row blog-comments-row">
					<div class="col-md-12">
						<?php comments_template(); ?>
					</div>
				</div><!-- /.row -->
				<div class="row blog-divider-row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 blog-divider">
					</div>
				</div><!--/.row  -->				
				<div class="row blog-category-row">
					<div class="col-md-12 text-center">
						<span class="blog-category">Football</span>
						<span class="blog-category">Fishing</span>
						<span class="blog-category">Racing</span>
					</div>
				</div><!-- /.row -->
				<div class="row blog-tag-row">
					<div class="col-md-12 text-center">
						<span class="blog-tag">dog</span>
						<span class="blog-tag">cat</span>
						<span class="blog-tag">hamster</span>
						<span class="blog-tag">ice</span>
						<span class="blog-tag">sun</span>
						<span class="blog-tag">moon</span>
						<span class="blog-tag">green</span>
					</div>
				</div>
			</div>
		</div><!-- /.row -->			      
		<?php endwhile; endif; ?>
	</div><!-- /.container-fluid blog-roll -->
<?php get_footer(); ?>