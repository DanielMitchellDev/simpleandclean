<?php 



	function sc_customize_register($wp_customize){

		//***********************************
		//* REMOVE BUILT IN OPTIONS
		//***********************************


		// Remove the seting for the site title
		$wp_customize -> remove_control( 'blogname' );

		// Remove the setting for blog description, AKA Site Tagline.
		$wp_customize -> remove_control( 'blogdescription' );

		// Remove the section for designating a static front page.
		$wp_customize -> remove_section( 'static_front_page' );
	
		
		//****************************************
		//*			LANDING PAGE SECTION
		//****************************************
		$wp_customize->add_section('landing', array(
			'title'			=> __('Landing', 'simpleandclean'),
			'description'	=> sprintf(__('Options for landing Page.'), 'simpleandclean'),
			'priority'		=> 130
		));
			//*************************************************
			//*			LANDING PAGE SETTINGS AND CONTROLS
			//*************************************************
			
			//HEADING TEXT
			$wp_customize->add_setting('landing_heading', array(
				'default' 	=> _x('Johnathon Doe', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('landing_heading', array(
				'label'		=> __('Heading', 'simpleandclean'),
				'section'	=> 'landing',
				'priority'	=> 1

			));

			//HEADING TEXT COLOR
			$wp_customize->add_setting('heading_color', array(
				'default' 	=> _x('white', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'heading_color', 
				array(
					'label'      => __( 'Heading Color', 'simpleandclean' ),
					'section'    => 'landing',
					'priority' 	 => 2,	
					'settings'   => 'heading_color',
				) ) 
			);			


			//DESCRIPTION TEXT
			$wp_customize->add_setting('landing_description', array(
				'default' 	=> _x('This is an example description', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('landing_description', array(
				'label'		=> __('Landing Description', 'simpleandclean'),
				'section'	=> 'landing',
				'priority'	=> 3

			));

			//DESCRIPTION TEXT COLOR
			$wp_customize->add_setting('description_color', array(
				'default' 	=> _x('white', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'description_color', 
				array(
					'label'      => __( 'Description Color', 'simpleandclean' ),
					'section'    => 'landing',
					'priority'	 => 4,
					'settings'   => 'description_color',
				) ) 
			);			

			//CALL TO ACTION BUTTON URL
			$wp_customize->add_setting('cta_btn_url', array(
				'default' 	=> _x('localhost/simpleandclean/blog.php', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('cta_btn_url', array(
				'label'		=> __('Call To Action Button Url', 'simpleandclean'),
				'section'	=> 'landing',
				'priority'	=> 5

			));

			//CALL TO ACTION BUTTON TEXT
			$wp_customize->add_setting('cta_btn_text', array(
				'default' 	=> _x('Blog', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('cta_btn_text', array(
				'label'		=> __('Call To Action Button Text', 'simpleandclean'),
				'section'	=> 'landing',
				'priority'	=> 6

			));
			//CALL TO ACTION BUTTON COLOR
			$wp_customize->add_setting('cta_btn_color', array(
				'default' 	=> _x('gray', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'cta_btn_color', 
				array(
					'label'      => __( 'CTA Button Color', 'simpleandclean' ),
					'section'    => 'landing',
					'priority'	 => 7,
					'settings'   => 'cta_btn_color',
				) ) 
			);	
			//CALL TO ACTION BUTTON TEXT COLOR
			$wp_customize->add_setting('cta_btn_text_color', array(
				'default' 	=> _x('white', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'cta_btn_text_color', 
				array(
					'label'      => __( 'CTA Button Text Color', 'simpleandclean' ),
					'section'    => 'landing',
					'priority'	 => 8,
					'settings'   => 'cta_btn_text_color',
				) ) 
			);	

			//SECONDARY BUTTON URL
			$wp_customize->add_setting('secondary_btn_url', array(
				'default' 	=> _x('localhost/simpleandclean/about.php', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('secondary_btn_url', array(
				'label'		=> __('Secondary Button Url', 'simpleandclean'),
				'section'	=> 'landing',
				'priority'	=> 9
			));

			//SECONDARY BUTTON TEXT
			$wp_customize->add_setting('secondary_btn_text', array(
				'default' 	=> _x('About', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('secondary_btn_text', array(
				'label'		=> __('Secondary Button Text', 'simpleandclean'),
				'section'	=> 'landing',
				'priority'	=> 10
			));

			//SECONDARY BUTTON COLOR
			$wp_customize->add_setting('secondary_btn_color', array(
				'default' 	=> _x('gray', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'secondary_btn_color', 
				array(
					'label'      => __( 'Secondary Button Color', 'simpleandclean' ),
					'section'    => 'landing',
					'priority'	 => 11,
					'settings'   => 'secondary_btn_color',
				) ) 
			);	
			//SECONDARY BUTTON TEXT COLOR
			$wp_customize->add_setting('secondary_btn_text_color', array(
				'default' 	=> _x('white', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'secondary_btn_text_color', 
				array(
					'label'      => __( 'Secondary Button Text Color', 'simpleandclean' ),
					'section'    => 'landing',
					'priority'	 => 12,
					'settings'   => 'secondary_btn_text_color',
				) ) 
			);							

			//CUSTOM LANDING PAGE BACKGROUND IMAGE
			$wp_customize->add_setting('landing_background_image', array(
				'default' 	=>  get_bloginfo('template_directory') . '/inc/img/backgroundark.jpg',
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'landing_background_image', array(
				'label' => __('Landing Background Image', 'simpleandclean'),
				'section' => 'landing',
				'settings' => 'landing_background_image',
				'priority'	=> 13
			)));



		//****************************************
		//*			BANNER SETTINGS
		//****************************************
		$wp_customize->add_section('banner', array(
			'title'			=> __('Banner', 'simpleandclean'),
			'description'	=> sprintf(__('Option for the banner.'), 'simpleandclean'),
			'priority'		=> 131
		));
			//*************************************************
			//*			LANDING PAGE SETTINGS AND CONTROLS
			//*************************************************
					
			//CUSTOM BANNER BACKGROUND IMAGE
			$wp_customize->add_setting('banner_background_image', array(
				'default' 	=>  get_bloginfo('template_directory') . '/inc/img/stock-banner.jpg',
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner_background_image', array(
				'label' => __('Banner Background Image', 'simpleandclean'),
				'section' => 'banner',
				'settings' => 'banner_background_image',
				'priority'	=> 1
			)));
			//SITE LOGO TEXT
			$wp_customize->add_setting('banner_logo', array(
				'default' 	=> _x('Johnathon Doe', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('banner_logo', array(
				'label'		=> __('Logo', 'simpleandclean'),
				'section'	=> 'banner',
				'priority'	=> 2

			));
			//SITE LOGO COLOR
			$wp_customize->add_setting('banner_logo_color', array(
				'default' 	=> _x('white', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'banner_logo_color', 
				array(
					'label'      => __( 'Logo Color', 'simpleandclean' ),
					'section'    => 'banner',
					'priority'	 => 3,
					'settings'   => 'banner_logo_color',
				) ) 
			);
			// NAV LINK COLOR
			$wp_customize->add_setting('banner_link_color', array(
				'default' 	=> _x('white', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'banner_link_color', 
				array(
					'label'      => __( 'Link Color', 'simpleandclean' ),
					'section'    => 'banner',
					'priority'	 => 4,
					'settings'   => 'banner_link_color',
				) ) 
			);
			//PAGE TITLE COLOR
			$wp_customize->add_setting('banner_page_title_color', array(
				'default' 	=> _x('white', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'banner_page_title_color', 
				array(
					'label'      => __( 'Page Title Color', 'simpleandclean' ),
					'section'    => 'banner',
					'priority'	 => 5,
					'settings'   => 'banner_page_title_color',
				) ) 
			);		



		//****************************************
		//*			BLOG POST SETTINGS
		//****************************************
		$wp_customize->add_section('blog_post', array(
			'title'			=> __('Blog Post', 'simpleandclean'),
			'description'	=> sprintf(__('Option for blog post.'), 'simpleandclean'),
			'priority'		=> 132
		));
			//*************************************************
			//*			BLOG POST SETTINGS AND CONTROLS
			//*************************************************
			//POST TITLE COLOR
			$wp_customize->add_setting('post_title_color', array(
				'default' 	=> _x('black', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'post_title_color', 
				array(
					'label'      => __( 'Post Title Color', 'simpleandclean' ),
					'section'    => 'blog_post',
					'priority'	 => 1,
					'settings'   => 'post_title_color',
				) ) 
			);
			//READ MORE LINK COLOR
			$wp_customize->add_setting('post_read_color', array(
				'default' 	=> _x('black', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'post_read_color', 
				array(
					'label'      => __( 'Post Read More Link Color', 'simpleandclean' ),
					'section'    => 'blog_post',
					'priority'	 => 2,
					'settings'   => 'post_read_color',
				) ) 
			);			
			//AUTHOR LINK COLOR
			$wp_customize->add_setting('post_author_color', array(
				'default' 	=> _x('blue', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'post_author_color', 
				array(
					'label'      => __( 'Post Author Color', 'simpleandclean' ),
					'section'    => 'blog_post',
					'priority'	 => 3,
					'settings'   => 'post_author_color',
				) ) 
			);
			//DATE LINK COLOR
			$wp_customize->add_setting('post_date_color', array(
				'default' 	=> _x('black', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'post_date_color', 
				array(
					'label'      => __( 'Post Date Color', 'simpleandclean' ),
					'section'    => 'blog_post',
					'priority'	 => 4,
					'settings'   => 'post_date_color',
				) ) 
			);
			//COMMENT COUNT COLOR
			$wp_customize->add_setting('post_comment_color', array(
				'default' 	=> _x('black', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'post_comment_color', 
				array(
					'label'      => __( 'Post Comment Color', 'simpleandclean' ),
					'section'    => 'blog_post',
					'priority'	 => 5,
					'settings'   => 'post_comment_color',
				) ) 
			);
			//DIVIDER COLOR
			$wp_customize->add_setting('post_divider_color', array(
				'default' 	=> _x('black', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'post_divider_color', 
				array(
					'label'      => __( 'Post Divider Color', 'simpleandclean' ),
					'section'    => 'blog_post',
					'priority'	 => 6,
					'settings'   => 'post_divider_color',
				) ) 
			);
			//CATEGORY LINK COLOR
			$wp_customize->add_setting('post_category_color', array(
				'default' 	=> _x('black', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'post_category_color', 
				array(
					'label'      => __( 'Post Category Color', 'simpleandclean' ),
					'section'    => 'blog_post',
					'priority'	 => 7,
					'settings'   => 'post_category_color',
				) ) 
			);
			//TAG TEXT COLOR
			$wp_customize->add_setting('post_tag_color', array(
				'default' 	=> _x('black', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'post_tag_color', 
				array(
					'label'      => __( 'Post Tag Color', 'simpleandclean' ),
					'section'    => 'blog_post',
					'priority'	 => 8,
					'settings'   => 'post_tag_color',
				) ) 
			);
			//TAG BACKGROUND COLOR		
			$wp_customize->add_setting('post_category_bg_color', array(
				'default' 	=> _x('black', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'post_category_bg_color', 
				array(
					'label'      => __( 'Post Category Background Color', 'simpleandclean' ),
					'section'    => 'blog_post',
					'priority'	 => 9,
					'settings'   => 'post_category_bg_color',
				) ) 
			);

		//****************************************
		//*			 GENERAL PAGE SECTION
		//****************************************
		$wp_customize->add_section('general', array(
			'title'			=> __('General Page', 'simpleandclean'),
			'description'	=> sprintf(__('Options for general page settings.'), 'simpleandclean'),
			'priority'		=> 133
		));
			//*************************************************
			//*			GENERAL PAGE SETTINGS AND CONTROLS
			//*************************************************
			//BACKGROUND COLOR		
			$wp_customize->add_setting('general_page_color', array(
				'default' 	=> _x('black', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'general_page_color', 
				array(
					'label'      => __( 'General Page Background Color', 'simpleandclean' ),
					'section'    => 'general',
					'priority'	 => 1,
					'settings'   => 'general_page_color',
				) ) 
			);			



		//****************************************
		//*			FOOTER SETTINGS
		//****************************************
		$wp_customize->add_section('footer', array(
			'title'			=> __('Footer', 'simpleandclean'),
			'description'	=> sprintf(__('Option for the footer.'), 'simpleandclean'),
			'priority'		=> 134
		));
			//*************************************************
			//*			FOOTER SETTINGS AND CONTROLS
			//*************************************************
			//FOOTER COLOR		
			$wp_customize->add_setting('footer_color', array(
				'default' 	=> _x('black', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'footer_color', 
				array(
					'label'      => __( 'Footer Background Color', 'simpleandclean' ),
					'section'    => 'footer',
					'priority'	 => 1,
					'settings'   => 'footer_color',
				) ) 
			);
			//FOOTER LINK COLOR
			$wp_customize->add_setting('footer_link_color', array(
				'default' 	=> _x('blue', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'footer_link_color', 
				array(
					'label'      => __( 'Footer Link Color', 'simpleandclean' ),
					'section'    => 'footer',
					'priority'	 => 2,
					'settings'   => 'footer_link_color',
				) ) 
			);			
			//FOOTER TEXT COLOR
			$wp_customize->add_setting('footer_text_color', array(
				'default' 	=> _x('black', 'simpleandclean'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
				$wp_customize, 
				'footer_text_color', 
				array(
					'label'      => __( 'Footer Text Color', 'simpleandclean' ),
					'section'    => 'footer',
					'priority'	 => 3,
					'settings'   => 'footer_text_color',
				) ) 
			);				

	}//end of sc_customize_register() function
	add_action('customize_register', 'sc_customize_register');
