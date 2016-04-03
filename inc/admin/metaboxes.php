<?php 
if ( !function_exists( "redux_add_metaboxes" ) ):
    function redux_add_metaboxes($metaboxes) {

		$homepage_options = array();

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

	    $contact_options = array();

		$contact_options[] = array(
			'icon'		=> 'el-icon-th-large',
			'fields'	=> array(
				array(
	                'id'		=> 'our-contacts',
	                'type'		=> 'editor',
	                'title'		=> __( 'Наши контакты', 'transport' ),
	            ),
	            array(
	                'id'		=> 'contacts-map-address',
	                'type'		=> 'text',
	                'title'		=> __( 'Google Maps адрес', 'transport' ),
	            )
            )
		);

	    $product_options = array();

	    $product_options[] =  array(
			'icon' 		=> 'el-icon-th-large',
			'title'		=> __('Возможности', 'transport'),
			'fields' 	=> array(
				array(
	                'id'		=> 'product-capabilities',
	                'type'		=> 'multi_text'
	            ),
	        )
	    );

	    $product_options[] =  array(
			'icon' 		=> 'el-icon-th-large',
			'title'		=> __('Характеристики', 'transport'),
			'fields' 	=> array(
				array(
	                'id'		=> 'product-characteristics-names',
	                'type'		=> 'multi_text',
	                'title'		=> __( 'Названия полей таблицы', 'transport' ),
	            ),
				array(
	                'id'		=> 'product-characteristics-values',
	                'type'		=> 'multi_text',
	                'title'		=> __( 'Значения полей таблицы', 'transport' ),
	            ),
	        )
	    );

	    $product_options[] =  array(
			'icon' 		=> 'el-icon-th-large',
			'title'		=> __('Загрузки', 'transport'),
			'fields' 	=> array(
				array(
	                'id'		=> 'product-downloads-url',
	                'type'		=> 'multi_text',
	                'title'		=> __( 'URL Загрузок', 'transport' ),
	            ),
				array(
	                'id'		=> 'product-downloads-names',
	                'type'		=> 'multi_text',
	                'title'		=> __( 'Названия Загрузок', 'transport' ),
	            ),
	        )
	    );

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

		$metaboxes[] = array(
	        'id'            => 'contacts-options',
	        'title'         => __( 'Опции страницы контактов', 'transport' ),
	        'post_types'    => array( 'page' ),
	        'page_template'	=> array('templates/page-contact.php'),
	        'position'      => 'normal', // normal, advanced, side
	        'priority'      => 'high', // high, core, default, low
	        'sidebar'		=> false, // enable/disable the sidebar in the normal/advanced positions
	        'sections'      => $contact_options
	    );

	    $metaboxes[] = array(
	        'id'			=> 'product-options',
	        'title'			=> __('Опции Продуктов', 'transport'),
	        'post_types'	=> array('tr_product'),
	        'position'		=> 'normal',
	        'priority'		=> 'high',
	        'sections'		=> $product_options
	    );

		return $metaboxes;
	}
	add_action('redux/metaboxes/transport/boxes', 'redux_add_metaboxes');
endif;
?>