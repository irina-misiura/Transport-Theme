<?php 
if ( !function_exists( "redux_add_metaboxes" ) ):
    function redux_add_metaboxes($metaboxes) {

		$homepage_options = array();

 		// $homepage_options[] = array(
			// 'icon' 		=> 'el-icon-th-large',
			// 'title'		=> __('Main Image', 'transport'),
			// 'fields' 	=> array(
			// 	array(
	  //               'id'		=> 'home-large-image',
	  //               'type'		=> 'media',
	  //           ),
	  //       )
	  //   );

	    $homepage_options[] = array(
			'icon' 		=> 'el-icon-th-large',
			'title'		=> __('Направления Работы', 'transport'),
			'fields' 	=> array(
   				array(
	                'id'		=> 'home-left-block-title',
	                'type'		=> 'text',
	                'title'		=> __( 'Название левого блока', 'transport' ),
	            ),
	            array(
	                'id'		=> 'home-left-block-image',
	                'type'		=> 'media',
	                'title'		=> __( 'Изображение левого блока', 'transport' ),
	            ),
   				array(
	                'id'		=> 'home-left-block-url',
	                'type'		=> 'text',
	                'title'		=> __( 'URL левого блока', 'transport' ),
	            ),
   				array(
	                'id'		=> 'home-right-block-title',
	                'type'		=> 'text',
	                'title'		=> __( 'Название правого блока', 'transport' ),
	            ),
	            array(
	                'id'		=> 'home-right-block-image',
	                'type'		=> 'media',
	                'title'		=> __( 'Изображение правого блока', 'transport' ),
	            ),
   				array(
	                'id'		=> 'home-right-block-url',
	                'type'		=> 'text',
	                'title'		=> __( 'URL правого блока', 'transport' ),
	            ),
	        )
	    ); 

	    $homepage_options[] = array(
			'icon' 		=> 'el-icon-th-large',
			'title'		=> __('Наши достижения', 'transport'),
			'fields' 	=> array(
   				array(
	                'id'		=> 'home-block1-title',
	                'type'		=> 'text',
	                'title'		=> __( 'Название блока 1', 'transport' ),
	            ),
	            array(
	                'id'		=> 'home-block1-description',
	                'type'		=> 'editor',
	                'title'		=> __( 'Описание блока 1', 'transport' ),
	            ),
   				array(
	                'id'		=> 'home-block2-title',
	                'type'		=> 'text',
	                'title'		=> __( 'Название блока 2', 'transport' ),
	            ),
	            array(
	                'id'		=> 'home-block2-description',
	                'type'		=> 'editor',
	                'title'		=> __( 'Описание блока 2', 'transport' ),
	            ),
   				array(
	                'id'		=> 'home-block3-title',
	                'type'		=> 'text',
	                'title'		=> __( 'Название блока 3', 'transport' ),
	            ),
	            array(
	                'id'		=> 'home-block3-description',
	                'type'		=> 'editor',
	                'title'		=> __( 'Описание блока 3', 'transport' ),
	            ),
   				array(
	                'id'		=> 'home-block4-title',
	                'type'		=> 'text',
	                'title'		=> __( 'Название блока 4', 'transport' ),
	            ),
	            array(
	                'id'		=> 'home-block4-description',
	                'type'		=> 'editor',
	                'title'		=> __( 'Описание блока 4', 'transport' ),
	            ),
   				array(
	                'id'		=> 'home-block5-title',
	                'type'		=> 'text',
	                'title'		=> __( 'Название блока 5', 'transport' ),
	            ),
	            array(
	                'id'		=> 'home-block5-description',
	                'type'		=> 'editor',
	                'title'		=> __( 'Описание блока 5', 'transport' ),
	            )
	        )
	    ); 

	    $slider_options = array();

		$slider_options[] = array(
			'icon'		=> 'el-icon-th-large',
			'fields'	=> array(
				array(
	                'id'		=> 'slider-button-text',
	                'type'		=> 'text',
	                'title'		=> __( 'Текст кнопки', 'transport' ),
	            ),
	            array(
	                'id'		=> 'slider-button-url',
	                'type'		=> 'text',
	                'title'		=> __( 'URL кнопки', 'transport' ),
	            )
            )
		);

	  //   $homepage_options[] = array(
			// 'icon' 		=> 'el-icon-th-large',
			// 'title'		=> __('Наши достижения', 'transport'),
			// 'fields' 	=> array(
   // 				array(
	  //               'id'		=> 'home-right-title1',
	  //               'type'		=> 'text',
	  //               'title'		=> __( 'Title Line One', 'transport' ),
	  //           ),
			// 	array(
	  //               'id'		=> 'home-right-title2',
	  //               'type'		=> 'text',
	  //               'title'		=> __( 'Title Line Two', 'transport' ),
	  //           ),
			// 	array(
	  //               'id'		=> 'home-right-text',
	  //               'type'		=> 'editor',
	  //               'title'		=> __( 'Text', 'transport' ),
	  //           ),
			// 	array(
	  //               'id'		=> 'home-right-login',
	  //               'type'		=> 'text',
	  //               'title'		=> __( 'Log In Link', 'transport' ),
	  //           ),
	  //       )
	  //   );

	  //   $homepage_options[] = array(
			// 'icon' 		=> 'el-icon-th-large',
			// 'title'		=> __('Promo Banner', 'transport'),
			// 'fields' 	=> array(
   // 				array(
	  //               'id'		=> 'home-banner-displays',
	  //               'type'		=> 'checkbox',
	  //               'title'		=> __( 'Enable Promo Banner', 'transport' ),
	  //           ),
			// 	array(
	  //               'id'		=> 'home-banner-text',
	  //               'type'		=> 'text',
	  //               'title'		=> __( 'Promo Text', 'transport' ),
	  //           ),
			// 	array(
	  //               'id'		=> 'home-banner-link-text',
	  //               'type'		=> 'text',
	  //               'title'		=> __( 'Link Text', 'transport' ),
	  //           ),
	  //           array(
	  //               'id'		=> 'home-banner-link-url',
	  //               'type'		=> 'text',
	  //               'title'		=> __( 'Link Url', 'transport' ),
	  //           ),
	  //           array(
	  //               'id'		=> 'home-banner-bg',
	  //               'type'		=> 'select',
	  //               'options'	=> array(
	  //               	'rgba(54, 192, 201, 0.8)'	=> __('Light Blue', 'transport'),
	  //               	'rgba(54, 201, 71, 0.8)'	=> __('Green', 'transport'),
	  //               	'rgba(243, 163, 10, 0.8)'	=> __('Orange', 'transport'),
	  //               ),
	  //               'title'		=> __( 'Banner Background', 'transport' ),
	  //           ),
	  //       )
	  //   );

	 //    $about_options = array();

 	// 	$about_options[] = array(
		// 	'icon' 		=> 'el-icon-th-large',
		// 	'title'		=> __('Header', 'transport'),
		// 	'fields' 	=> array(
  //  				array(
	 //                'id'		=> 'about-title1',
	 //                'type'		=> 'text',
	 //                'title'		=> __( 'Title Line One', 'transport' ),
	 //            ),
		// 		array(
	 //                'id'		=> 'about-title2',
	 //                'type'		=> 'text',
	 //                'title'		=> __( 'Title Line Two', 'transport' ),
	 //            ),
	 //            array(
	 //                'id'		=> 'about-bg-image',
	 //                'type'		=> 'media',
	 //                'title'		=> __( 'Background Image', 'transport' ),
	 //            ),
	 //        )
	 //    );
		
		// $about_options[] = array(
		// 	'icon' 		=> 'el-icon-th-large',
		// 	'title'		=> __('Text Block 1', 'transport'),
		// 	'fields' 	=> array(
  //  				array(
	 //                'id'		=> 'about-block1-title',
	 //                'type'		=> 'text',
	 //                'title'		=> __( 'Title', 'transport' ),
	 //            ),
		// 		array(
	 //                'id'		=> 'about-block1-text',
	 //                'type'		=> 'editor',
	 //                'title'		=> __( 'Text', 'transport' ),
	 //            ),
	 //        )
	 //    );

	 //    $about_options[] = array(
		// 	'icon' 		=> 'el-icon-th-large',
		// 	'title'		=> __('Text Block 2', 'transport'),
		// 	'fields' 	=> array(
  //  				array(
	 //                'id'		=> 'about-block2-title',
	 //                'type'		=> 'text',
	 //                'title'		=> __( 'Title', 'transport' ),
	 //            ),
		// 		array(
	 //                'id'		=> 'about-block2-text',
	 //                'type'		=> 'editor',
	 //                'title'		=> __( 'Text', 'transport' ),
	 //            ),
	 //        )
	 //    );

	 //    $about_options[] = array(
		// 	'icon' 		=> 'el-icon-th-large',
		// 	'title'		=> __('Founders', 'transport'),
		// 	'fields' 	=> array(
		// 		array(
	 //                'id'		=> 'about-founders-title',
	 //                'type'		=> 'text',
	 //                'title'		=> __( 'Title', 'transport' ),
	 //            ),
  //  				array(
		// 			'id'			=> 'about-founders',
	 //   				'accordion'		=> true,
	 //   				'type'			=> 'repeatable_list',
	 //   				'items_title'	=> __('Founder'),
	 //   				'fixed'			=> 3,
	 //   				'fields'      	=> array(
		// 				array(
		// 	                'id'		=> 'about-founders-img',
		// 	                'type'		=> 'media',
		// 	                'title'		=> __( 'Upload Image', 'transport' ),
		// 	            ),
		// 	            array(
		// 	                'id'		=> 'about-founders-name',
		// 	                'type'		=> 'text',
		// 	                'title'		=> __( 'Name', 'transport' ),
		// 	            ),
		// 	            array(
		// 	                'id'		=> 'about-founders-position',
		// 	                'type'		=> 'text',
		// 	                'title'		=> __( 'Position', 'transport' ),
		// 	            ),
		// 	            array(
		// 	                'id'		=> 'about-founders-description',
		// 	                'type'		=> 'editor',
		// 	                'title'		=> __( 'Description', 'transport' ),
		// 	            ),
		//             )
  //  				),
	 //        )
	 //    );

		// $about_options[] = array(
		// 	'icon' 		=> 'el-icon-th-large',
		// 	'title'		=> __('Expand Blocks', 'transport'),
		// 	'fields' 	=> array(
  //  				array(
		// 			'id'			=> 'about-text-blocks',
	 //   				'accordion'		=> true,
	 //   				'type'			=> 'repeatable_list',
	 //   				'items_title'	=> __('Block'),
	 //   				'fields'      	=> array(
		// 	            array(
		// 	                'id'		=> 'about-block-title',
		// 	                'type'		=> 'text',
		// 	                'title'		=> __( 'Title', 'transport' ),
		// 	            ),
		// 	            array(
		// 	                'id'		=> 'about-block-text',
		// 	                'type'		=> 'editor',
		// 	                'title'		=> __( 'Text', 'transport' ),
		// 	            ),
		//             )
  //  				),
	 //        )
	 //    );

	 //    $about_options[] = array(
		// 	'icon' 		=> 'el-icon-th-large',
		// 	'title'		=> __('About Pages', 'transport'),
		// 	'fields' 	=> array(
		// 		array(
		// 			'id'			=> 'about-pages',
	 //   				'accordion'		=> true,
	 //   				'type'			=> 'repeatable_list',
	 //   				'items_title'	=> __('About Pages', 'transport'),
	 //   				'fields'      	=> array(
		// 				array(
		// 	                'id'		=> 'about-pages-list',
		// 	                'type'		=> 'select',
		// 	                'options'	=> get_all_pages(),
		// 	                'title'		=> __( 'Select Page to Display', 'transport' ),
		// 	            ),
		//             )
  //  				),
  //  			)
  //  		);

	 //    $water_crisis_options = array();

 	// 	$water_crisis_options[] = array(
		// 	'icon' 		=> 'el-icon-th-large',
		// 	'title'		=> __('Header', 'transport'),
		// 	'fields' 	=> array(
	 //            array(
	 //                'id'		=> 'water-crisis-bg-image',
	 //                'type'		=> 'media',
	 //                'title'		=> __( 'Background Image', 'transport' ),
	 //            ),
  //  				array(
	 //                'id'		=> 'water-crisis-title1',
	 //                'type'		=> 'text',
	 //                'title'		=> __( 'Title Line One', 'transport' ),
	 //            ),
		// 		array(
	 //                'id'		=> 'water-crisis-title2',
	 //                'type'		=> 'text',
	 //                'title'		=> __( 'Title Line Two', 'transport' ),
	 //            ),
	 //            array(
	 //                'id'		=> 'water-crisis-video',
	 //                'type'		=> 'text',
	 //                'title'		=> __( 'Video Url', 'transport' ),
	 //            ),
	 //        )
	 //    );

	 //    $water_crisis_options[] = array(
		// 	'icon' 		=> 'el-icon-th-large',
		// 	'title'		=> __('Content', 'transport'),
		// 	'fields' 	=> array(
	 //            array(
	 //                'id'		=> 'water-crisis-content',
	 //                'type'		=> 'editor',
	 //            ),
	 //        )
	 //    );

	 //    $water_crisis_options[] = array(
		// 	'icon' 		=> 'el-icon-th-large',
		// 	'title'		=> __('Infographic', 'transport'),
		// 	'fields' 	=> array(
	 //            array(
	 //                'id'		=> 'water-crisis-infographic',
	 //                'type'		=> 'media',
	 //                'title'		=> __('Upload Image', 'transport'),
	 //            ),
	 //            array(
	 //                'id'		=> 'water-crisis-infographic-mobile',
	 //                'type'		=> 'media',
	 //                'title'		=> __('Upload Image for Mobile', 'transport'),
	 //            ),
	 //        )
	 //    );

	 //    $project_types_options = array();

 	// 	$project_types_options[] = array(
		// 	'icon' 		=> 'el-icon-th-large',
		// 	'title'		=> __('Header', 'transport'),
		// 	'fields' 	=> array(
	 //            array(
	 //                'id'		=> 'project-types-bg-image',
	 //                'type'		=> 'media',
	 //                'title'		=> __( 'Background Image', 'transport' ),
	 //            ),
  //  				array(
	 //                'id'		=> 'project-types-title1',
	 //                'type'		=> 'text',
	 //                'title'		=> __( 'Title Line One', 'transport' ),
	 //            ),
		// 		array(
	 //                'id'		=> 'project-types-title2',
	 //                'type'		=> 'text',
	 //                'title'		=> __( 'Title Line Two', 'transport' ),
	 //            ),
	 //            array(
	 //                'id'		=> 'project-types-intro',
	 //                'type'		=> 'editor',
	 //                'title'		=> __( 'Intro Text', 'transport' ),
	 //            ),
	 //        )
	 //    );

	 //    $project_types_options[] = array(
		// 	'icon' 		=> 'el-icon-th-large',
		// 	'title'		=> __('Project Types', 'transport'),
		// 	'fields' 	=> array(
		// 		array(
		// 			'id'			=> 'project-types-blocks',
	 //   				'accordion'		=> true,
	 //   				'type'			=> 'repeatable_list',
	 //   				'items_title'	=> __('Project Types'),
	 //   				'fields'      	=> array(
		// 	            array(
		// 	                'id'		=> 'project-types-image',
		// 	                'type'		=> 'media',
		// 	                'title'		=> __( 'Upload Image', 'transport' ),
		// 	            ),
		// 	            array(
		// 	                'id'		=> 'project-types-title',
		// 	                'type'		=> 'text',
		// 	                'title'		=> __( 'Title', 'transport' ),
		// 	            ),
		// 	            array(
		// 	                'id'		=> 'project-types-content',
		// 	                'type'		=> 'editor',
		// 	                'title'		=> __( 'Content', 'transport' ),
		// 	            ),
		//             )
  //  				),
   				
	 //        )
	 //    );

	 //    $whyus_options = array();

 	// 	$whyus_options[] = array(
		// 	'icon' 		=> 'el-icon-th-large',
		// 	'fields' 	=> array(				
  //  				array(
	 //                'id'		=> 'whyus-title1',
	 //                'type'		=> 'text',
	 //                'title'		=> __( 'Title Line One', 'transport' ),
	 //            ),
		// 		array(
	 //                'id'		=> 'whyus-title2',
	 //                'type'		=> 'text',
	 //                'title'		=> __( 'Title Line Two', 'transport' ),
	 //            ),
	 //            array(
	 //                'id'		=> 'whyus-bg-image',
	 //                'type'		=> 'media',
	 //                'title'		=> __( 'Background Image', 'transport' ),
	 //            ),
	 //            array(
	 //                'id'		=> 'whyus-content',
	 //                'type'		=> 'editor',
	 //                'title'		=> __( 'Content', 'transport' ),
	 //            ),
	 //        )
	 //    );

		$metaboxes = array();
		
		$metaboxes[] = array(
	        'id'            => 'homepage-options',
	        'title'         => __( 'Опции главной страницы', 'transport' ),
	        'post_types'    => array( 'page' ),
	        'page_template'	=> array('templates/page-home.php'),
	        'position'      => 'normal', // normal, advanced, side
	        'priority'      => 'high', // high, core, default, low
	        'sidebar'		=> false, // enable/disable the sidebar in the normal/advanced positions
	        'sections'      => $homepage_options
	    );

	    $metaboxes[] = array(
	        'id'			=> 'slider-options',
	        'title'			=> __('Опции Слайдера', 'transport'),
	        'post_types'	=> array('transport_slider'),
	        'position'		=> 'normal',
	        'priority'		=> 'high',
	        'sections'		=> $slider_options
	    );

	    // $metaboxes[] = array(
	    //     'id'            => 'about-options',
	    //     'title'         => __( 'About Page Options', 'transport' ),
	    //     'post_types'    => array( 'page' ),
	    //     'page_template'	=> array('templates/page-about.php'),
	    //     'position'      => 'normal', // normal, advanced, side
	    //     'priority'      => 'high', // high, core, default, low
	    //     'sidebar'		=> false, // enable/disable the sidebar in the normal/advanced positions
	    //     'sections'      => $about_options
	    // );

	    // $metaboxes[] = array(
	    //     'id'            => 'water-crisis-options',
	    //     'title'         => __( 'Water Crisis Page Options', 'transport' ),
	    //     'post_types'    => array( 'page' ),
	    //     'page_template'	=> array('templates/page-water-crisis.php'),
	    //     'position'      => 'normal', // normal, advanced, side
	    //     'priority'      => 'high', // high, core, default, low
	    //     'sidebar'		=> false, // enable/disable the sidebar in the normal/advanced positions
	    //     'sections'      => $water_crisis_options
	    // );

	    // $metaboxes[] = array(
	    //     'id'            => 'project-types-options',
	    //     'title'         => __( 'Project Types Page Options', 'transport' ),
	    //     'post_types'    => array( 'page' ),
	    //     'page_template'	=> array('templates/page-project-types.php'),
	    //     'position'      => 'normal', // normal, advanced, side
	    //     'priority'      => 'high', // high, core, default, low
	    //     'sidebar'		=> false, // enable/disable the sidebar in the normal/advanced positions
	    //     'sections'      => $project_types_options
	    // );

	    // $metaboxes[] = array(
	    //     'id'            => 'whyus-options',
	    //     'title'         => __( 'Why Us Page Options', 'transport' ),
	    //     'post_types'    => array( 'page' ),
	    //     'page_template'	=> array('templates/page-why-us.php'),
	    //     'position'      => 'normal', // normal, advanced, side
	    //     'priority'      => 'high', // high, core, default, low
	    //     'sidebar'		=> false, // enable/disable the sidebar in the normal/advanced positions
	    //     'sections'      => $whyus_options
	    // );

		return $metaboxes;
	}
	add_action('redux/metaboxes/transport/boxes', 'redux_add_metaboxes');
endif;
?>