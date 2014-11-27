<?php
add_action('customize_register','dt_customizer_register' ); 
function dt_customizer_register( $wp_customize ) {
	#To remove default sections
	$wp_customize->remove_section("title_tagline");
	$wp_customize->remove_section("colors");
	$wp_customize->remove_section("background_image");

	#DesignThemes Customizer
	$wp_customize->add_section("dt_customizer_settings",array(
		'title' => __("DesignThemes' Settings" , "dt_themes" ),
		'priority' => 1
	));

	#Skin
		$wp_customize->add_setting("dt_skin", array(
			'default' => dttheme_option('appearance','skin'),
			'transport' => 'postMessage'
		));
		$wp_customize->add_control("dt_skin", array(
			'section' => "dt_customizer_settings",
			'priority' =>1,
			'label' => __('Choose skin?','dt_themes'),
			'type' => 'select',
			'choices' => array(
				'avocado'=> __('Avocado','dt_themes'),
				'black' => __('Black','dt_themes'),
				'blue' => __('Blue','dt_themes'),
				'blueiris' => __('Blue iris','dt_themes'),
				'blueturquoise' => __('Blue turquoise','dt_themes'),
				'brown' => __('Brown','dt_themes'),
				'burntsienna' => __('Burnt sienna','dt_themes'),
				'chillipepper' => __('Chilli pepper','dt_themes'),
				'eggplant' => __('Eggplant','dt_themes'),
				'electricblue' => __('Electric blue','dt_themes'),
				'graasgreen' => __('Graas green','dt_themes'),
				'gray' => __('Gray','dt_themes'),
				'green' => __('Green','dt_themes'),
				'orange' => __('Orange','dt_themes'),
				'palebrown' => __('Pale brown','dt_themes'),
				'pink' => __('Pink','dt_themes'),
				'radiantorchid' => __('Radiant orchid','dt_themes'),
				'red' => __('Red','dt_themes'),
				'skyblue' => __('Sky blue','dt_themes'),
				'yellow' => __('Yellow','dt_themes')
			)
		));
	#Skin End

	#Layout
		$wp_customize->add_setting("dt_layout", array(
			'default' => dttheme_option('appearance','layout'),
			'transport' => 'postMessage'
		));
		$wp_customize->add_control("dt_layout", array(
			'section' => "dt_customizer_settings",
			'priority' =>2,
			'label' => __("Choose Layout:","dt_themes").dttheme_option('appearance','layout'),
			'type'	=> 'select',
			'choices' => array(
				'boxed' => __("Boxed","dt_themes"),
				'wide' => __("Full Width","dt_themes")
			)
		));

			#Boxed Layout Pattern
			$wp_customize->add_setting("dt_boxed_layout_bg", array(
				'default' => dttheme_option('appearance','boxed-layout-pattern'),
				'transport' => 'postMessage'));
			$wp_customize->add_control("dt_boxed_layout_bg",array(
				'section'=>"dt_customizer_settings",
				'priority' =>3,
				'label' => __("Choose Background Pattern:","dt_themes"),
				'type'	=> 'select',
				'choices' => array(
					'pattern1.jpg' => __("Pattern 1","dt_themes"),
					'pattern2.jpg' => __("Pattern 2","dt_themes"),
					'pattern3.jpg' => __("Pattern 3","dt_themes"),
					'pattern4.jpg' => __("Pattern 4","dt_themes"),
					'pattern5.jpg' => __("Pattern 5","dt_themes"),
					'pattern6.jpg' => __("Pattern 6","dt_themes"),
					'pattern7.jpg' => __("Pattern 7","dt_themes"),
					'pattern8.jpg' => __("Pattern 8","dt_themes"),
					'pattern9.jpg' => __("Pattern 9","dt_themes"),
					'pattern10.jpg' => __("Pattern 10","dt_themes"),
					'pattern11.png' => __("Pattern 11","dt_themes"),
					'pattern12.png' => __("Pattern 12","dt_themes"),
					'pattern13.png' => __("Pattern 13","dt_themes"),
					'pattern14.png' => __("Pattern 14","dt_themes"),
					'pattern15.png' => __("Pattern 15","dt_themes"),
					'pattern16.jpg' => __("Pattern 16","dt_themes"),
					'pattern17.jpg' => __("Pattern 17","dt_themes"),
					'pattern18.jpg' => __("Pattern 18","dt_themes"),
					'pattern19.jpg' => __("Pattern 19","dt_themes"),
					'pattern20.jpg' => __("Pattern 20","dt_themes"),
					'pattern21.jpg' => __("Pattern 21","dt_themes"),
					'pattern22.jpg' => __("Pattern 22","dt_themes"),
					'pattern23.jpg' => __("Pattern 23","dt_themes"),
					'pattern24.jpg' => __("Pattern 24","dt_themes"),
					'pattern25.jpg' => __("Pattern 25","dt_themes")
				)
			));
			#Boxed Layout Pattern End

			#Boxed Layout Background Color
			$wp_customize->add_setting("dt_boxed_layout_bg_color",array(
				'default' => dttheme_option('appearance','boxed-layout-pattern-color'),
				'transport' => 'postMessage'));
			$wp_customize->add_control( new WP_Customize_Color_Control(
				$wp_customize,
				"dt_boxed_layout_bg_color",
				array( 'label' => __( "Choose Background Color:","dt_themes"),
						'section' => "dt_customizer_settings",
						'priority' =>4,)
			));
			#Boxed Layout Background Color End
			
			#Boxed Layout BG Opacity
			$wp_customize->add_setting("dt_boxed_layout_bg_opacity", array(
				'default' => dttheme_option('appearance','boxed-layout-pattern-opacity'),
				'transport' => 'postMessage'));

			$wp_customize->add_control("dt_boxed_layout_bg_opacity",array(
				'section' => "dt_customizer_settings",
				'priority' =>5,
				'label' => __("Opacity:","dt_themes"),
				'type'  => 'select',
				'choices' => array("0",
					"0.1"=>"0.1",
					"0.2"=>"0.2",
					"0.3"=>"0.3",
					"0.4"=>"0.4",
					"0.5"=>"0.5",
					"0.6"=>"0.6",
					"0.7"=>"0.7",
					"0.8"=>"0.8",
					"0.9"=>"0.9",
					"1"=>"1")
			));
			#Boxed Layout BG Opacity End
	#Layout End
	
	#Hidden - Used to update the back end options by calling customize_save_dt-update-backend-options
	# dt-update-backend-options  == customize_save_dt-update-backend-options
		$wp_customize->add_setting("dt-update-backend-options", array(
			'default' => '',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control( 'dt-update-backend-options',array(
			'section' => 'dt_customizer_settings',
			'type' => 'hidden'
		));
	#Hidden End
	#DesignThemes Customizer - End
	
	#Menu Font Settings
	$wp_customize->add_section("dt_menu_settings",array( 'title' => __('Menu Font','dt_themes'),'priority' => 2 ));
		# Font Type
		$menu_font_type = dttheme_option('appearance','menu-font-type');
		$menu_font_type = ( $menu_font_type === "on" ) ? 'standard' : 'google';
		$wp_customize->add_setting('dt_menu_font_type',array(
			'default' => $menu_font_type,
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('dt_menu_font_type',array(
			'section' => 'dt_menu_settings',
			'label' => __("Choose Type:","dt_themes"),
			'type'	=> 'select',
			'priority' =>1,
			'choices' => array(
				'standard' => __("Standard","dt_themes"),
				'google' => __("Google","dt_themes"),
			)
		));

		#Standard Font
		$wp_customize->add_setting('dt_menu_standard_font', array(
			'default' => dttheme_option('appearance','menu-standard-font'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('dt_menu_standard_font', array(
			'section' => 'dt_menu_settings',
			'label' => __('Choose Font','dt_themes'),
			'priority' =>2,
			'type' => 'select',
			'choices' => array(
				"Arial" => "Arial",
				"Verdana, Geneva" => "Verdana, Geneva",
				"Trebuchet" => "Trebuchet",
				"Georgia" => "Georgia",
				"Times New Roman" => "Times New Roman",
				"Tahoma, Geneva" => "Tahoma, Geneva",
				"Palatino" => "Palatino",
				"Helvetica" => "Helvetica")
		));
		#Standard Font End
		
		#Standard Font Style
		$wp_customize->add_setting("dt_menu_standard_font_style",array(
			'default' => '',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control("dt_menu_standard_font_style",array(
			'section' => 'dt_menu_settings',
			'label' => __('Choose Font Style','dt_themes'),
			'priority' => 3,
			'type' => 'select',
			'choices' => array(
				"Normal" => "Normal",
				"Italic" => "Italic",
				"Bold" => "Bold",
				"Bold Italic" => "Bold Italic")
		));
		#Standard Font Style End
		
		#Google Font
		global $dt_google_fonts;
		$default = array_search(dttheme_option('appearance','menu-font'), $dt_google_fonts);

		$wp_customize->add_setting('dt_menu_font',array('default' => $default,'transport' => 'postMessage'));
		$wp_customize->add_control('dt_menu_font',array(
			'section' => 'dt_menu_settings',
			'priority' => 4,
			'label' => __("Choose Font:","dt_themes"),
			'type'	=> 'select',
			'choices' => $dt_google_fonts
		));
		#Google Font End
		
		#Font Size
		$wp_customize->add_setting('dt_menu_font_size', array('default' => dttheme_option('appearance','menu-font-size'),'transport' => 'postMessage'));
		$wp_customize->add_control('dt_menu_font_size',array('section' => 'dt_menu_settings','priority' =>5,'label' => __('Font Size:','dt_themes')));
		#Font Size End
		
		#Font Primary Color
		$wp_customize->add_setting('dt_menu_primary_color',array(
			'default' => dttheme_option( 'appearance','menu-primary-color'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			"dt_menu_primary_color",
			array( 'label' => __( "Choose Primary Color:",'dt_themes'),	'section' => "dt_menu_settings"	,'priority' =>6 )
		));
		#Font Primary Color End

		#Font Secondary Color
		$wp_customize->add_setting('dt_menu_secondary_color', array(
			'default' => dttheme_option( 'appearance','menu-secondary-color'),
			//'transport' => 'postMessage'
		));

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			"dt_menu_secondary_color",
			array( 'label' => __( "Choose Secondary Color:",'dt_themes'), 'section' => 'dt_menu_settings', 'priority' =>7)
		));
		#Font Secondary Color End

		#Hidden Setting for Menu
		$wp_customize->add_setting('dt-update-menu-setting',array('default'=>'', 'transport'=>'postMessage'));
		$wp_customize->add_control('dt-update-menu-setting',array('section'=>'dt_menu_settings', 'type'=>'hidden'));
		#Hidden Setting for Menu End
	#Menu Font Settings End

	#Body Font Setting
	$wp_customize->add_section("dt_body_settings",array( 'title' => __('Body Font','dt_themes'),'priority'=>3));

		# Font Type
		$c_body_font_type = dttheme_option('appearance','body-font-type');
		$c_body_font_type = ( $c_body_font_type === "on" ) ? 'standard' : 'google';
		$wp_customize->add_setting('dt_body_font_type',array(
			'default' => '',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('dt_body_font_type',array(
			'section' => 'dt_body_settings',
			'label' => __("Choose Type:","dt_themes"),
			'type'	=> 'select',
			'priority' =>1,
			'choices' => array(
				'standard' => __("Standard","dt_themes"),
				'google' => __("Google","dt_themes"),
			)
		));

		#Standard Font
		$wp_customize->add_setting('dt_body_standard_font', array(
			'default' => dttheme_option('appearance','body-standard-font'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('dt_body_standard_font', array(
			'section' => 'dt_body_settings',
			'label' => __('Choose Font','dt_themes'),
			'priority' =>2,
			'type' => 'select',
			'choices' => array(
				"Arial" => "Arial",
				"Verdana, Geneva" => "Verdana, Geneva",
				"Trebuchet" => "Trebuchet",
				"Georgia" => "Georgia",
				"Times New Roman" => "Times New Roman",
				"Tahoma, Geneva" => "Tahoma, Geneva",
				"Palatino" => "Palatino",
				"Helvetica" => "Helvetica")
		));
		#Standard Font End

		#Standard Font Style
		$wp_customize->add_setting("dt_body_standard_font_style",array(
			'default' => '',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control("dt_body_standard_font_style",array(
			'section' => 'dt_body_settings',
			'label' => __('Choose Font Style','dt_themes'),
			'priority' => 3,
			'type' => 'select',
			'choices' => array(
				"Normal" => "Normal",
				"Italic" => "Italic",
				"Bold" => "Bold",
				"Bold Italic" => "Bold Italic")
		));
		#Standard Font Style End

		#Google Font
		$b_default = array_search(dttheme_option('appearance','body-font'), $dt_google_fonts);

		$wp_customize->add_setting('dt_body_font',array('default' => $b_default,'transport' => 'postMessage'));
		$wp_customize->add_control('dt_body_font',array(
			'section' => 'dt_body_settings',
			'priority' => 4,
			'label' => __("Choose Font:","dt_themes"),
			'type'	=> 'select',
			'choices' => $dt_google_fonts
		));
		#Google Font End

		#Font Size
		$wp_customize->add_setting('dt_body_font_size', array('default' => dttheme_option('appearance','body-font-size'),'transport' => 'postMessage'));
		$wp_customize->add_control('dt_body_font_size',array('section' => 'dt_body_settings','priority' =>5,'label' => __('Font Size:','dt_themes')));
		#Font Size End
		
		#Body Font Color
		$wp_customize->add_setting('dt_body_font_color',array(
			'default' => dttheme_option('appearance','body-font-color'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'dt_body_font_color',
			array( 'label' => __("Choose body Content Color:",'dt_themes'), 'section' => "dt_body_settings", 'priority' => 6 )
		));
		#Body Font Color End

		#Font Primary Color
		$wp_customize->add_setting('dt_body_primary_color',array(
			'default' => dttheme_option( 'appearance','body-primary-color'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			"dt_body_primary_color",
			array( 'label' => __( "Choose Anchor Primary Color:",'dt_themes'),	'section' => "dt_body_settings"	,'priority' =>7 )
		));
		#Font Primary Color End

		#Font Secondary Color
		$wp_customize->add_setting('dt_body_secondary_color', array(
			'default' => dttheme_option( 'appearance','body-secondary-color'),
			/*'transport' => 'postMessage'*/
		));

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			"dt_body_secondary_color",
			array( 'label' => __( "Choose Anchor Secondary / Hover Color:",'dt_themes'), 'section' => 'dt_body_settings', 'priority' =>8)
		));
		#Font Secondary Color End

		#hidden Setting for Body font
		$wp_customize->add_setting('dt-update-body-setting', array('default'=>'','transport'=>'postMessage'));
		$wp_customize->add_control('dt-update-body-setting', array('section'=>'dt_body_settings','type'=>'hidden'));
		#hidden Setting for Body font End
	#Body Font Setting End
	
	#Footer Font Settings
	$wp_customize->add_section("dt_footer_settings",array( 'title' => __('Footer Font','dt_themes'),'priority'=>4));
		# Footer Title Font Type
		$wp_customize->add_setting('dt_footer_title_font_type',array(
			'default' => 'google',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('dt_footer_title_font_type',array(
			'section' => 'dt_footer_settings',
			'label' => __("Choose Title Font Type:","dt_themes"),
			'type'	=> 'select',
			'priority' =>1,
			'choices' => array(
				'standard' => __("Standard","dt_themes"),
				'google' => __("Google","dt_themes"),
			)
		));

		#Footer Title Standard Font
		$wp_customize->add_setting('dt_footer_title_standard_font', array(
			'default' => dttheme_option('appearance','footer-title-font'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('dt_footer_title_standard_font', array(
			'section' => 'dt_footer_settings',
			'label' => __('Choose Title Font','dt_themes'),
			'priority' =>2,
			'type' => 'select',
			'choices' => array(
				"Arial" => "Arial",
				"Verdana, Geneva" => "Verdana, Geneva",
				"Trebuchet" => "Trebuchet",
				"Georgia" => "Georgia",
				"Times New Roman" => "Times New Roman",
				"Tahoma, Geneva" => "Tahoma, Geneva",
				"Palatino" => "Palatino",
				"Helvetica" => "Helvetica")
		));
		#Footer Title Standard Font End
		
		#Footer Title Standard Font Style
		$wp_customize->add_setting("dt_footer_title_standard_font_style",array(
			'default' => '',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control("dt_footer_title_standard_font_style",array(
			'section' => 'dt_footer_settings',
			'label' => __('Choose Title Font Style','dt_themes'),
			'priority' => 3,
			'type' => 'select',
			'choices' => array(
				"Normal" => "Normal",
				"Italic" => "Italic",
				"Bold" => "Bold",
				"Bold Italic" => "Bold Italic")
		));
		#Footer Title Standard Font Style End

		#Footer Title Google Font
		$b_default = array_search(dttheme_option('appearance','footer-title-font'), $dt_google_fonts);

		$wp_customize->add_setting('dt_footer_title_font',array('default' => $b_default,'transport' => 'postMessage'));
		$wp_customize->add_control('dt_footer_title_font',array(
			'section' => 'dt_footer_settings',
			'priority' => 4,
			'label' => __("Choose Title Font:","dt_themes"),
			'type'	=> 'select',
			'choices' => $dt_google_fonts
		));
		#Footer Title Google Font End

		#Footer Title Font Size
		$wp_customize->add_setting('dt_footer_title_font_size', array(
			'default' => dttheme_option('appearance','footer-font-size'),
			'transport' => 'postMessage'
		));
		$wp_customize->add_control('dt_footer_title_font_size',array(
			'section' => 'dt_footer_settings',
			'priority' =>5,
			'label' => __('Title Font Size:','dt_themes')
		));
		#Footer Title Font Size End

		#Footer Title Font Color
		$wp_customize->add_setting('dt_footer_title_font_color',array(
			'default' => dttheme_option('appearance','footer-title-font-color'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'dt_footer_title_font_color',
			array( 'label' => __("Choose Title Font Color:",'dt_themes'), 'section' => "dt_footer_settings", 'priority' => 6 )
		));
		#Footer Title Font Color End
		
		# Footer Content Font Type
		$wp_customize->add_setting('dt_footer_content_font_type',array(
			'default' => 'google',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('dt_footer_content_font_type',array(
			'section' => 'dt_footer_settings',
			'label' => __("Choose Content Font Type:","dt_themes"),
			'type'	=> 'select',
			'priority' =>6,
			'choices' => array(
				'standard' => __("Standard","dt_themes"),
				'google' => __("Google","dt_themes"),
			)
		));

		#Footer Content Standard Font
		$wp_customize->add_setting('dt_footer_content_standard_font', array(
			'default' => dttheme_option('appearance','footer-content-standard-font'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('dt_footer_content_standard_font', array(
			'section' => 'dt_footer_settings',
			'label' => __('Choose Content Font','dt_themes'),
			'priority' =>7,
			'type' => 'select',
			'choices' => array(
				"Arial" => "Arial",
				"Verdana, Geneva" => "Verdana, Geneva",
				"Trebuchet" => "Trebuchet",
				"Georgia" => "Georgia",
				"Times New Roman" => "Times New Roman",
				"Tahoma, Geneva" => "Tahoma, Geneva",
				"Palatino" => "Palatino",
				"Helvetica" => "Helvetica")
		));
		#Footer Content Standard Font End
		
		#Footer Content Standard Font Style
		$wp_customize->add_setting("dt_footer_content_standard_font_style",array(
			'default' => '',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control("dt_footer_content_standard_font_style",array(
			'section' => 'dt_footer_settings',
			'label' => __('Choose Content Font Style','dt_themes'),
			'priority' => 8,
			'type' => 'select',
			'choices' => array(
				"Normal" => "Normal",
				"Italic" => "Italic",
				"Bold" => "Bold",
				"Bold Italic" => "Bold Italic")
		));
		#Footer Content Standard Font Style End

		#Footer Content Google Font
		$b_default = array_search(dttheme_option('appearance','footer-content-font'), $dt_google_fonts);

		$wp_customize->add_setting('dt_footer_content_font',array('default' => $b_default,'transport' => 'postMessage'));
		$wp_customize->add_control('dt_footer_content_font',array(
			'section' => 'dt_footer_settings',
			'priority' => 9,
			'label' => __("Choose Content Font:","dt_themes"),
			'type'	=> 'select',
			'choices' => $dt_google_fonts
		));
		#Footer Content Google Font End

		#Footer Content Font Size
		$wp_customize->add_setting('dt_footer_content_font_size', array(
			'default' => dttheme_option('appearance','footer-content-font-size'),
			'transport' => 'postMessage'
		));
		$wp_customize->add_control('dt_footer_content_font_size',array(
			'section' => 'dt_footer_settings',
			'priority' =>10,
			'label' => __('Content Font Size:','dt_themes')
		));
		#Footer Content Font Size End

		#Footer Content Font Color
		$wp_customize->add_setting('dt_footer_content_font_color',array(
			'default' => dttheme_option('appearance','footer-content-font-color'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'dt_footer_content_font_color',
			array( 'label' => __("Choose body Content Color:",'dt_themes'), 'section' => "dt_footer_settings", 'priority' => 11 )
		));
		#Footer Content Font Color End

		#Footer Content Primary Color
		$wp_customize->add_setting('dt_footer_primary_color',array(
			'default' => dttheme_option( 'appearance','footer-primary-color'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			"dt_footer_primary_color",
			array( 'label' => __( "Choose Anchor Primary Color:",'dt_themes'),	'section' => "dt_footer_settings"	,'priority' =>12 )
		));
		#Footer Content Primary Color End

		#Footer Content Secondary Color
		$wp_customize->add_setting('dt_footer_secondary_color', array(
			'default' => dttheme_option( 'appearance','footer-secondary-color'),
			//'transport' => 'postMessage'
		));

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			"dt_footer_secondary_color",
			array( 'label' => __( "Choose Anchor Secondary / Hover Color:",'dt_themes'), 'section' => 'dt_footer_settings', 'priority' =>13)
		));
		#Footer Content Secondary Color End

		#hidden Setting for Footer font
		$wp_customize->add_setting('dt-update-footer-setting', array('default'=>'','transpost'=>'postMessage'));
		$wp_customize->add_control('dt-update-footer-setting', array('section'=>'dt_footer_settings','type'=>'hidden'));
		#hidden Setting for Footer font End
	#Footer Font Settings End
	
	#Typography Settings
	$wp_customize->add_section("dt_typography_settings",array( 'title' => __('Typography','dt_themes'),'priority'=>5 ));
		#H1
			#H1 Font Type
			$wp_customize->add_setting( 'dt_h1_font_type',array('default' => 'google','transport' => 'postMessage'));
			$wp_customize->add_control( 'dt_h1_font_type', array(
				'section' => 'dt_typography_settings',
				'label' => "H1 ".__(" Font Type ","dt_themes"),
				'type'	=> 'select',
				'priority' =>1,
				'choices' => array(	'standard' => __("Standard","dt_themes"),'google' => __("Google","dt_themes"))
			));

			#H1 Standard Font
			$wp_customize->add_setting('dt_h1_standard_font', array('default' => dttheme_option('appearance','H1-standard-font'),'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h1_standard_font', array(
				'section' => 'dt_typography_settings',
				'label' => __('Choose Font','dt_themes'),
				'priority' =>2,
				'type' => 'select',
				'choices' => array("Arial" => "Arial","Verdana, Geneva" => "Verdana, Geneva","Trebuchet" => "Trebuchet","Georgia" => "Georgia","Times New Roman" => "Times New Roman","Tahoma, Geneva" => "Tahoma, Geneva","Palatino" => "Palatino","Helvetica" => "Helvetica")));

			#H1 Standard Font Style
			$wp_customize->add_setting("dt_h1_standard_font_style",array('default' => '','transport' => 'postMessage'));
			$wp_customize->add_control("dt_h1_standard_font_style",array(
				'section' => 'dt_typography_settings',
				'label' => __('Choose Font Style','dt_themes'),
				'priority' => 3,
				'type' => 'select',
				'choices' => array( "Normal" => "Normal", "Italic" => "Italic", "Bold" => "Bold", "Bold Italic" => "Bold Italic")));

			#H1 Google Font
			$h1_default = array_search(dttheme_option('appearance','H1-font'), $dt_google_fonts);
			$wp_customize->add_setting('dt_h1_font',array('default' => $h1_default,'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h1_font',array( 
				'section' => 'dt_typography_settings',
				'priority' => 4,
				'label' => __("Choose Font ","dt_themes"),
				'type'	=> 'select',
				'choices' => $dt_google_fonts));

			#H1 Font Size
			$wp_customize->add_setting('dt_h1_font_size', array('default' => dttheme_option('appearance','H1-size'),'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h1_font_size',array('section' => 'dt_typography_settings','priority' =>5,'label' => __('Content Font Size:','dt_themes')));
			
			#H1 Font Color
			$wp_customize->add_setting('dt_h1_font_color',array('default' => dttheme_option('appearance','H1-font-color'),'transport' => 'postMessage'));
			$wp_customize->add_control( new WP_Customize_Color_Control(	$wp_customize,'dt_h1_font_color',
				array( 'label' => __("Choose Font Color:",'dt_themes'), 'section' => "dt_typography_settings", 'priority' => 6 )));			

		#H2
			#H2 Font Type
			$wp_customize->add_setting( 'dt_h2_font_type',array('default' => 'google','transport' => 'postMessage'));
			$wp_customize->add_control( 'dt_h2_font_type', array(
				'section' => 'dt_typography_settings',
				'label' => "H2 ".__(" Font Type ","dt_themes"),
				'type'	=> 'select',
				'priority' =>7,
				'choices' => array(	'standard' => __("Standard","dt_themes"),'google' => __("Google","dt_themes"))
			));

			#H2 Standard Font
			$wp_customize->add_setting('dt_h2_standard_font', array('default' => dttheme_option('appearance','H2-standard-font'),'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h2_standard_font', array(
				'section' => 'dt_typography_settings',
				'label' => __('Choose Font','dt_themes'),
				'priority' =>8,
				'type' => 'select',
				'choices' => array("Arial" => "Arial","Verdana, Geneva" => "Verdana, Geneva","Trebuchet" => "Trebuchet","Georgia" => "Georgia","Times New Roman" => "Times New Roman","Tahoma, Geneva" => "Tahoma, Geneva","Palatino" => "Palatino","Helvetica" => "Helvetica")));

			#H2 Standard Font Style
			$wp_customize->add_setting("dt_h2_standard_font_style",array('default' => '','transport' => 'postMessage'));
			$wp_customize->add_control("dt_h2_standard_font_style",array(
				'section' => 'dt_typography_settings',
				'label' => __('Choose Font Style','dt_themes'),
				'priority' => 9,
				'type' => 'select',
				'choices' => array( "Normal" => "Normal", "Italic" => "Italic", "Bold" => "Bold", "Bold Italic" => "Bold Italic")));

			#H2 Google Font
			$h2_default = array_search(dttheme_option('appearance','H2-font'), $dt_google_fonts);
			$wp_customize->add_setting('dt_h2_font',array('default' => $h2_default,'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h2_font',array( 
				'section' => 'dt_typography_settings',
				'priority' => 10,
				'label' => __("Choose Font ","dt_themes"),
				'type'	=> 'select',
				'choices' => $dt_google_fonts));

			#H2 Font Size
			$wp_customize->add_setting('dt_h2_font_size', array('default' => dttheme_option('appearance','H2-size'),'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h2_font_size',array('section' => 'dt_typography_settings','priority' =>11,'label' => __('Content Font Size:','dt_themes')));
			
			#H2 Font Color
			$wp_customize->add_setting('dt_h2_font_color',array('default' => dttheme_option('appearance','H2-font-color'),'transport' => 'postMessage'));
			$wp_customize->add_control( new WP_Customize_Color_Control(	$wp_customize,'dt_h2_font_color',
				array( 'label' => __("Choose Font Color:",'dt_themes'), 'section' => "dt_typography_settings", 'priority' => 12 )));		
		
		#H3
			#H3 Font Type
			$wp_customize->add_setting( 'dt_h3_font_type',array('default' => 'google','transport' => 'postMessage'));
			$wp_customize->add_control( 'dt_h3_font_type', array(
				'section' => 'dt_typography_settings',
				'label' => "H3 ".__(" Font Type ","dt_themes"),
				'type'	=> 'select',
				'priority' =>13,
				'choices' => array(	'standard' => __("Standard","dt_themes"),'google' => __("Google","dt_themes"))
			));

			#H3 Standard Font
			$wp_customize->add_setting('dt_h3_standard_font', array('default' => dttheme_option('appearance','H3-standard-font'),'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h3_standard_font', array(
				'section' => 'dt_typography_settings',
				'label' => __('Choose Font','dt_themes'),
				'priority' =>14,
				'type' => 'select',
				'choices' => array("Arial" => "Arial","Verdana, Geneva" => "Verdana, Geneva","Trebuchet" => "Trebuchet","Georgia" => "Georgia","Times New Roman" => "Times New Roman","Tahoma, Geneva" => "Tahoma, Geneva","Palatino" => "Palatino","Helvetica" => "Helvetica")));

			#H3 Standard Font Style
			$wp_customize->add_setting("dt_h3_standard_font_style",array('default' => '','transport' => 'postMessage'));
			$wp_customize->add_control("dt_h3_standard_font_style",array(
				'section' => 'dt_typography_settings',
				'label' => __('Choose Font Style','dt_themes'),
				'priority' => 15,
				'type' => 'select',
				'choices' => array( "Normal" => "Normal", "Italic" => "Italic", "Bold" => "Bold", "Bold Italic" => "Bold Italic")));

			#H3 Google Font
			$h3_default = array_search(dttheme_option('appearance','H3-font'), $dt_google_fonts);
			$wp_customize->add_setting('dt_h3_font',array('default' => $h3_default,'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h3_font',array( 
				'section' => 'dt_typography_settings',
				'priority' => 16,
				'label' => __("Choose Font ","dt_themes"),
				'type'	=> 'select',
				'choices' => $dt_google_fonts));

			#H3 Font Size
			$wp_customize->add_setting('dt_h3_font_size', array('default' => dttheme_option('appearance','H3-size'),'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h3_font_size',array('section' => 'dt_typography_settings','priority' =>17,'label' => __('Content Font Size:','dt_themes')));
			
			#H3 Font Color
			$wp_customize->add_setting('dt_h3_font_color',array('default' => dttheme_option('appearance','H3-font-color'),'transport' => 'postMessage'));
			$wp_customize->add_control( new WP_Customize_Color_Control(	$wp_customize,'dt_h3_font_color',
				array( 'label' => __("Choose Font Color:",'dt_themes'), 'section' => "dt_typography_settings", 'priority' => 18 )));			
		
		#H4
			#H4 Font Type
			$wp_customize->add_setting( 'dt_h4_font_type',array('default' => 'google','transport' => 'postMessage'));
			$wp_customize->add_control( 'dt_h4_font_type', array(
				'section' => 'dt_typography_settings',
				'label' => "H4 ".__(" Font Type ","dt_themes"),
				'type'	=> 'select',
				'priority' =>19,
				'choices' => array(	'standard' => __("Standard","dt_themes"),'google' => __("Google","dt_themes"))
			));

			#H4 Standard Font
			$wp_customize->add_setting('dt_h4_standard_font', array('default' => dttheme_option('appearance','H4-standard-font'),'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h4_standard_font', array(
				'section' => 'dt_typography_settings',
				'label' => __('Choose Font','dt_themes'),
				'priority' =>20,
				'type' => 'select',
				'choices' => array("Arial" => "Arial","Verdana, Geneva" => "Verdana, Geneva","Trebuchet" => "Trebuchet","Georgia" => "Georgia","Times New Roman" => "Times New Roman","Tahoma, Geneva" => "Tahoma, Geneva","Palatino" => "Palatino","Helvetica" => "Helvetica")));

			#H4 Standard Font Style
			$wp_customize->add_setting("dt_h4_standard_font_style",array('default' => '','transport' => 'postMessage'));
			$wp_customize->add_control("dt_h4_standard_font_style",array(
				'section' => 'dt_typography_settings',
				'label' => __('Choose Font Style','dt_themes'),
				'priority' => 21,
				'type' => 'select',
				'choices' => array( "Normal" => "Normal", "Italic" => "Italic", "Bold" => "Bold", "Bold Italic" => "Bold Italic")));

			#H4 Google Font
			$h4_default = array_search(dttheme_option('appearance','H4-font'), $dt_google_fonts);
			$wp_customize->add_setting('dt_h4_font',array('default' => $h4_default,'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h4_font',array( 
				'section' => 'dt_typography_settings',
				'priority' => 22,
				'label' => __("Choose Font ","dt_themes"),
				'type'	=> 'select',
				'choices' => $dt_google_fonts));

			#H4 Font Size
			$wp_customize->add_setting('dt_h4_font_size', array('default' => dttheme_option('appearance','H4-size'),'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h4_font_size',array('section' => 'dt_typography_settings','priority' =>23,'label' => __('Content Font Size:','dt_themes')));
			
			#H4 Font Color
			$wp_customize->add_setting('dt_h4_font_color',array('default' => dttheme_option('appearance','H4-font-color'),'transport' => 'postMessage'));
			$wp_customize->add_control( new WP_Customize_Color_Control(	$wp_customize,'dt_h4_font_color',
				array( 'label' => __("Choose Font Color:",'dt_themes'), 'section' => "dt_typography_settings", 'priority' => 24 )));			
		
		#H5
			#H5 Font Type
			$wp_customize->add_setting( 'dt_h5_font_type',array('default' => 'google','transport' => 'postMessage'));
			$wp_customize->add_control( 'dt_h5_font_type', array(
				'section' => 'dt_typography_settings',
				'label' => "H5 ".__(" Font Type ","dt_themes"),
				'type'	=> 'select',
				'priority' =>25,
				'choices' => array(	'standard' => __("Standard","dt_themes"),'google' => __("Google","dt_themes"))
			));

			#H5 Standard Font
			$wp_customize->add_setting('dt_h5_standard_font', array('default' => dttheme_option('appearance','H5-standard-font'),'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h5_standard_font', array(
				'section' => 'dt_typography_settings',
				'label' => __('Choose Font','dt_themes'),
				'priority' =>26,
				'type' => 'select',
				'choices' => array("Arial" => "Arial","Verdana, Geneva" => "Verdana, Geneva","Trebuchet" => "Trebuchet","Georgia" => "Georgia","Times New Roman" => "Times New Roman","Tahoma, Geneva" => "Tahoma, Geneva","Palatino" => "Palatino","Helvetica" => "Helvetica")));

			#H5 Standard Font Style
			$wp_customize->add_setting("dt_h5_standard_font_style",array('default' => '','transport' => 'postMessage'));
			$wp_customize->add_control("dt_h5_standard_font_style",array(
				'section' => 'dt_typography_settings',
				'label' => __('Choose Font Style','dt_themes'),
				'priority' => 27,
				'type' => 'select',
				'choices' => array( "Normal" => "Normal", "Italic" => "Italic", "Bold" => "Bold", "Bold Italic" => "Bold Italic")));

			#H5 Google Font
			$h5_default = array_search(dttheme_option('appearance','H5-font'), $dt_google_fonts);
			$wp_customize->add_setting('dt_h5_font',array('default' => $h5_default,'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h5_font',array( 
				'section' => 'dt_typography_settings',
				'priority' => 28,
				'label' => __("Choose Font ","dt_themes"),
				'type'	=> 'select',
				'choices' => $dt_google_fonts));

			#H5 Font Size
			$wp_customize->add_setting('dt_h5_font_size', array('default' => dttheme_option('appearance','H5-size'),'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h5_font_size',array('section' => 'dt_typography_settings','priority' =>29,'label' => __('Content Font Size:','dt_themes')));
			
			#H5 Font Color
			$wp_customize->add_setting('dt_h5_font_color',array('default' => dttheme_option('appearance','H5-font-color'),'transport' => 'postMessage'));
			$wp_customize->add_control( new WP_Customize_Color_Control(	$wp_customize,'dt_h5_font_color',
				array( 'label' => __("Choose Font Color:",'dt_themes'), 'section' => "dt_typography_settings", 'priority' => 30 )));			
		
		#H6
			#H6 Font Type
			$wp_customize->add_setting( 'dt_h6_font_type',array('default' => 'google','transport' => 'postMessage'));
			$wp_customize->add_control( 'dt_h6_font_type', array(
				'section' => 'dt_typography_settings',
				'label' => "H6 ".__(" Font Type ","dt_themes"),
				'type'	=> 'select',
				'priority' =>31,
				'choices' => array(	'standard' => __("Standard","dt_themes"),'google' => __("Google","dt_themes"))
			));

			#H6 Standard Font
			$wp_customize->add_setting('dt_h6_standard_font', array('default' => dttheme_option('appearance','H6-standard-font'),'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h6_standard_font', array(
				'section' => 'dt_typography_settings',
				'label' => __('Choose Font','dt_themes'),
				'priority' =>32,
				'type' => 'select',
				'choices' => array("Arial" => "Arial","Verdana, Geneva" => "Verdana, Geneva","Trebuchet" => "Trebuchet","Georgia" => "Georgia","Times New Roman" => "Times New Roman","Tahoma, Geneva" => "Tahoma, Geneva","Palatino" => "Palatino","Helvetica" => "Helvetica")));

			#H6 Standard Font Style
			$wp_customize->add_setting("dt_h6_standard_font_style",array('default' => '','transport' => 'postMessage'));
			$wp_customize->add_control("dt_h6_standard_font_style",array(
				'section' => 'dt_typography_settings',
				'label' => __('Choose Font Style','dt_themes'),
				'priority' => 33,
				'type' => 'select',
				'choices' => array( "Normal" => "Normal", "Italic" => "Italic", "Bold" => "Bold", "Bold Italic" => "Bold Italic")));

			#H6 Google Font
			$h6_default = array_search(dttheme_option('appearance','H6-font'), $dt_google_fonts);
			$wp_customize->add_setting('dt_h6_font',array('default' => $h6_default,'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h6_font',array( 
				'section' => 'dt_typography_settings',
				'priority' => 34,
				'label' => __("Choose Font ","dt_themes"),
				'type'	=> 'select',
				'choices' => $dt_google_fonts));

			#H6 Font Size
			$wp_customize->add_setting('dt_h6_font_size', array('default' => dttheme_option('appearance','H6-size'),'transport' => 'postMessage'));
			$wp_customize->add_control('dt_h6_font_size',array('section' => 'dt_typography_settings','priority' =>35,'label' => __('Content Font Size:','dt_themes')));
			
			#H6 Font Color
			$wp_customize->add_setting('dt_h6_font_color',array('default' => dttheme_option('appearance','H6-font-color'),'transport' => 'postMessage'));
			$wp_customize->add_control( new WP_Customize_Color_Control(	$wp_customize,'dt_h6_font_color',
				array( 'label' => __("Choose Font Color:",'dt_themes'), 'section' => "dt_typography_settings", 'priority' => 36 )));			
		
		#hidden Setting for Footer font
		$wp_customize->add_setting('dt-update-typography-setting', array('default'=>'','transpost'=>'postMessage'));
		$wp_customize->add_control('dt-update-typography-setting', array('section'=>'dt_typography_settings','type'=>'hidden'));
		#hidden Setting for Footer font End
	#Typography Settings
	
} #dt_customizer_register() End 

#For Admin
# customize_controls_print_footer_scripts , customize_controls_print_scripts - To add scripts
# customize_controls_print_styles - to add style for customizer 
add_action( 'customize_controls_print_footer_scripts', 'dt_customiser_admin_scripts' );
function dt_customiser_admin_scripts() {
	wp_enqueue_script( 'dt-customizer' , IAMD_FW_URL.'js/admin/admin-customizer.js');
}

add_action('customize_controls_print_styles', 'dt_customiser_admin_style');
function dt_customiser_admin_style(){
	wp_enqueue_style('dttheme-customizer-css', IAMD_FW_URL.'customizer.css');
}

# For Public
add_action( 'customize_preview_init', 'dt_frontend_customizer_live_preview_js' );
function dt_frontend_customizer_live_preview_js() {
	global $dt_google_fonts;
	echo "\n <script type='text/javascript'>\n\t";
	echo "var mytheme_customize_fonts = {\n";
	echo "\n \t\tfonts:".json_encode($dt_google_fonts);
	echo "\n\t};\n";
	echo " </script>\n";

	wp_enqueue_script( 'dt-customizer' , IAMD_FW_URL.'js/public/customizer.js', array( 'jquery', 'customize-preview' ) , "0.1" , true);
}

add_action( 'customize_save_dt-update-backend-options', 'dt_update_backend_options' );
function dt_update_backend_options() {
	$options = get_option(IAMD_THEME_SETTINGS);
	$options['appearance']['skin'] = get_theme_mod('dt_skin');
	$options['appearance']['layout'] = get_theme_mod('dt_layout');
	$options['appearance']['bg-type'] = 'bg-patterns';
	$options['appearance']['boxed-layout-pattern'] = get_theme_mod('dt_boxed_layout_bg');
	$options['appearance']['boxed-layout-pattern-color'] = get_theme_mod('dt_boxed_layout_bg_color');
	$options['appearance']['boxed-layout-pattern-opacity'] = get_theme_mod('dt_boxed_layout_bg_opacity');

	$options = array_filter($options);
	update_option( IAMD_THEME_SETTINGS, $options );
}

add_action('customize_save_dt-update-menu-setting','dt_update_menu_setting');
function dt_update_menu_setting() {
	$options = get_option(IAMD_THEME_SETTINGS);
	#Menu Font
	if( get_theme_mod('dt_menu_font_type') === 'standard')
		$options['appearance']['menu-font-type'] = 'on';
	elseif( get_theme_mod('dt_menu_font_type') === 'google' )
		$options['appearance']['menu-font-type'] = null;

	#Google Menu Font
	global $dt_google_fonts;
	$options['appearance']['menu-font']  = $dt_google_fonts[get_theme_mod('dt_menu_font')];
	$options['appearance']['menu-standard-font']  = get_theme_mod('dt_menu_standard_font');

	$options['appearance']['menu-primary-color'] = get_theme_mod('dt_menu_primary_color');
	$options['appearance']['menu-secondary-color'] = get_theme_mod('dt_menu_secondary_color');

	$options['appearance']['menu-standard-font-style'] = get_theme_mod('dt_menu_standard_font_style');

	$options['appearance']['menu-font-size'] = get_theme_mod('dt_menu_font_size');

	$options = array_filter($options);
	update_option( IAMD_THEME_SETTINGS, $options );	
}

add_action( 'customize_save_dt-update-body-setting','dt_update_body_setting' );
function dt_update_body_setting(){
	$options = get_option(IAMD_THEME_SETTINGS);
	#Body Font
	if( get_theme_mod('dt_body_font_type') === 'standard')
		$options['appearance']['body-font-type'] = 'on';
	elseif( get_theme_mod('dt_body_font_type') === 'google' )
		$options['appearance']['body-font-type'] = null;

	global $dt_google_fonts;
	$options['appearance']['body-font']  = $dt_google_fonts[get_theme_mod('dt_body_font')];
	$options['appearance']['body-standard-font']  = get_theme_mod('dt_body_standard_font');

	$options['appearance']['body-font-color']  = get_theme_mod('dt_body_font_color');
	$options['appearance']['body-primary-color'] = get_theme_mod('dt_body_primary_color');
	$options['appearance']['body-secondary-color'] = get_theme_mod('dt_body_secondary_color');

	$options['appearance']['body-standard-font-style'] = get_theme_mod('dt_body_standard_font_style');

	$options['appearance']['body-font-size'] = get_theme_mod('dt_body_font_size');

	$options = array_filter($options);
	update_option( IAMD_THEME_SETTINGS, $options );
}

add_action( 'customize_save_dt-update-footer-setting','dt_update_footer_setting' );
function dt_update_footer_setting(){
	global $dt_google_fonts;
	$options = get_option(IAMD_THEME_SETTINGS);

	#Footer Title
	if( get_theme_mod('dt_footer_title_font_type') === 'standard' )
		$options['appearance']['footer-title-font-type'] = 'on';
	elseif( get_theme_mod('dt_footer_title_font_type') === 'google' )
		$options['appearance']['footer-title-font-type'] = null;

	$options['appearance']['footer-title-font']  = $dt_google_fonts[get_theme_mod('dt_footer_title_font')];

	$options['appearance']['footer-title-standard-font']  = get_theme_mod('dt_footer_title_standard_font');
	$options['appearance']['footer-title-standard-font-style'] = get_theme_mod('dt_footer_title_standard_font_style');

	$options['appearance']['footer-font-size'] = get_theme_mod('dt_footer_title_font_size');
	$options['appearance']['footer-title-font-color'] = get_theme_mod('dt_footer_title_font_color');

	#Footer Content
	if( get_theme_mod('dt_footer_content_font_type') === 'standard' )
		$options['appearance']['footer-content-font-type'] = 'on';
	elseif( get_theme_mod('dt_footer_title_font_type') === 'google' )
		$options['appearance']['footer-content-font-type'] = null;

	$options['appearance']['footer-content-font']  = $dt_google_fonts[get_theme_mod('dt_footer_content_font')];

	$options['appearance']['footer-content-standard-font']  = get_theme_mod('dt_footer_content_standard_font');
	$options['appearance']['footer-content-standard-font-style'] = get_theme_mod('dt_footer_content_standard_font_style');

	$options['appearance']['footer-content-font-size'] = get_theme_mod('dt_footer_content_font_size');

	$options['appearance']['footer-content-font-color']  = get_theme_mod('dt_footer_content_font_color');
	$options['appearance']['footer-primary-color'] = get_theme_mod('dt_footer_primary_color');
	$options['appearance']['footer-secondary-color'] = get_theme_mod('dt_footer_secondary_color');

	$options = array_filter($options);
	update_option( IAMD_THEME_SETTINGS, $options );	
}

add_action( 'customize_save_dt-update-typography-setting','dt_update_typography_setting');
function dt_update_typography_setting(){
	global $dt_google_fonts;
	$options = get_option(IAMD_THEME_SETTINGS);
	for( $i=1; $i<=6; $i++) {
		$font_type = get_theme_mod("dt_h{$i}_font_type");

		if( $font_type === 'standard' )
			$options['appearance']["H{$i}-font-type"] = 'on';
		elseif( $font_type === 'google' )
			$options['appearance']["H{$i}-font-type"] = null;

		#Standard Font
		$options['appearance']["H{$i}-standard-font"] = get_theme_mod("dt_h{$i}_standard_font");

		#Standard Font Style
		$options['appearance']["H{$i}-standard-font-style"] = get_theme_mod("dt_h{$i}_standard_font_style");

		#Google Font
		$options['appearance']["H{$i}-font"] = $dt_google_fonts[get_theme_mod("dt_h{$i}_font")];

		#Font Size
		$options['appearance']["H{$i}-size"] = get_theme_mod("dt_h{$i}_font_size");

		#Font Color
		$options['appearance']["H{$i}-font-color"] = get_theme_mod("dt_h{$i}_font_color");
	}
	$options = array_filter($options);
	update_option( IAMD_THEME_SETTINGS, $options );	
}

/* Used to set the Hover colors for items*/
add_action( 'wp_head','dt_frontend_customizer_css' );
function dt_frontend_customizer_css() {
	echo '<style type="text/css">';

	# Menu Hover Colors
	echo "#main-menu > ul > li > a:hover, #main-menu > ul > li:hover > a, #main-menu > ul > li.current_page_item > a, #main-menu > ul > li.current_page_ancestor > a, #main-menu > ul > li.current-menu-item > a, #main-menu > ul > li.current-menu-ancestor > a, #main-menu > ul > li.current_page_item > a:hover, #main-menu > ul > li.current_page_ancestor > a:hover, #main-menu > ul > li.current-menu-item > a:hover, #main-menu > ul > li.current-menu-ancestor > a:hover, #main-menu ul li.menu-item-simple-parent ul li a:hover, .megamenu-child-container ul.sub-menu > li > ul li a:hover, .megamenu-child-container ul.sub-menu > li > ul li.current_page_item a, .megamenu-child-container ul.sub-menu > li > ul li.current_page_ancestor a, .megamenu-child-container ul.sub-menu > li > ul li.current-menu-item a, .megamenu-child-container ul.sub-menu > li > ul li.current-menu-ancestor a, #main-menu ul li.menu-item-simple-parent ul li.current_page_item a, #main-menu ul li.menu-item-simple-parent ul li.current_page_ancestor a, #main-menu ul li.menu-item-simple-parent ul li.current-menu-item a, #main-menu ul li.menu-item-simple-parent ul li.current-menu-ancestor a { color: ".get_theme_mod('dt_menu_secondary_color')."!important; }\r\t";
	echo "#main-menu > ul > li.current_page_item, #main-menu > ul > li.current_page_ancestor, #main-menu > ul > li.current-menu-item, #main-menu > ul > li.current-menu-ancestor, ul.dt-sc-tabs-frame li a.current, #main-menu ul li.menu-item-simple-parent ul, .megamenu-child-container{ border-top-color:".get_theme_mod('dt_menu_secondary_color')."!important; }\r\t";	
	echo "#main-menu ul.menu .megamenu-child-container > ul.sub-menu > li > a:hover{ background-color:".get_theme_mod('dt_menu_secondary_color')."; color:#ffffff; }\r\t";

	#Body Anchor Hover Color
	echo "body a:hover{color:".get_theme_mod('dt_body_secondary_color')."!important;}";

	#Footer Secondary Color dt_footer_secondary_color
	echo "#footer h1 a:hover, #footer h2 a:hover, #footer h3 a:hover, #footer h4 a:hover, #footer h5 a:hover, #footer h6 a:hover, #footer ul li a:hover, #footer .widget.widget_recent_entries .entry-metadata .tags a:hover, #footer .categories a:hover, .copyright a:hover{ color:".get_theme_mod('dt_footer_secondary_color')."!important}";

	echo '</style>';
}?>