<?php 
    /* Redux framework init */

    if ( !isset( $transport ) && file_exists( dirname( __FILE__ ) . '/admin/metaboxes.php' ) ) {
        require_once( dirname( __FILE__ ) . '/admin/metaboxes.php' );
    }

    if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/admin/ReduxFramework/ReduxCore/framework.php' ) ) {
        require_once( dirname( __FILE__ ) . '/admin/ReduxFramework/ReduxCore/framework.php' );
    }
    if ( !isset( $transport ) && file_exists( dirname( __FILE__ ) . '/admin/redux-config.php' ) ) {
        require_once( dirname( __FILE__ ) . '/admin/redux-config.php' );
    }
?>