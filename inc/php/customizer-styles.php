<style>
	/*customizer image for landing page background*/
	.banner{
		background-image: url(<?php echo get_theme_mod('banner_background_image', get_bloginfo('template_url') . '/inc/img/stock-banner.jpg'); ?>);
	}
	.banner-title{
		color: <?php echo get_theme_mod('banner_page_title_color', 'white'); ?> !important;
	}
	.landing{
		background: url(<?php echo get_theme_mod('landing_background_image', get_bloginfo('template_url') . '/inc/img/backgroundark.jpg'); ?>);
		background-size: 100% 100%;
		background-repeat: no-repeat;
		height: 100vh;
	}
	.landing-name{
		color: <?php echo get_theme_mod('heading_color', 'white'); ?> !important;		
	}
	.landing-description{
		color: <?php echo get_theme_mod('description_color', 'white'); ?> !important;				
	}
	/* customizer color for logo */
	.navbar-brand{
		color: <?php echo get_theme_mod('logo_color', 'white'); ?> !important;
	}
	/*call to action and secondary button colors*/
	.btn-info,
	.btn-info:hover,
	.btn-info:focus,
	.btn-info:active,
	.btn-info.active {
		color: <?php echo get_theme_mod('secondary_btn_text_color', 'white'); ?> !important;
	  	background-color: <?php echo get_theme_mod('secondary_btn_color', 'gray'); ?> !important; 
	 	border-color: <?php echo get_theme_mod('secondary_btn_color', 'gray'); ?> !important;
	}

	.btn-primary,
	.btn-primary:hover,
	.btn-primary:focus,
	.btn-primary:active,
	.btn-primary.active {
		color: <?php echo get_theme_mod('cta_btn_text_color', 'white'); ?> !important;
	  	background-color: <?php echo get_theme_mod('cta_btn_color', 'gray'); ?> !important; 
	 	border-color: <?php echo get_theme_mod('cta_btn_color', 'gray'); ?> !important;
	}
	.navbar-nav li a{
		color: <?php echo get_theme_mod('banner_link_color', 'white'); ?> !important;
	}	

	.blog-title a{
		color: <?php echo get_theme_mod('post_title_color', 'black'); ?> !important;
	}
	.blog-excerpt a{
		color: <?php echo get_theme_mod('post_read_color', 'red'); ?> !important;
	}
	.blog-author a{
		color: <?php echo get_theme_mod('post_author_color', 'black'); ?> !important;
	}
	.blog-date{
		color: <?php echo get_theme_mod('post_date_color', 'color'); ?> !important;
	}
	.blog-comments a{
		color: <?php echo get_theme_mod('post_comment_color', 'black'); ?> !important;
	}
	.blog-divider{
		height: 4px;
		background-color: <?php echo get_theme_mod('post_divider_color', 'black'); ?> !important;
	}
	.post-categories li a{
		color: <?php echo get_theme_mod('post_category_color', 'black'); ?> !important;
	}
	.blog-tag a{
		color: <?php echo get_theme_mod('post_tag_color', 'black'); ?> !important;
		background-color: <?php echo get_theme_mod('post_category_bg_color', 'gray'); ?> !important;
	}

	body{
		background-color: <?php echo get_theme_mod('general_page_color', 'white'); ?> !important;
	}

	footer{
		background-color: <?php echo get_theme_mod('footer_color', 'black'); ?> !important;
		color: <?php echo get_theme_mod('footer_text_color', 'black'); ?> !important; 		
	}
	footer a{
		color: <?php echo get_theme_mod('footer_link_color', 'blue'); ?> !important;
	}
	.searchForm div #searchSubmit{
		background-color: <?php echo get_theme_mod('footer_link_color', 'blue'); ?> !important;
		border-color: <?php echo get_theme_mod('footer_link_color', 'blue'); ?> !important;
	}	
</style>