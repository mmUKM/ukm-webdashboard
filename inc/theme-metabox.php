<?php

if ( file_exists(  get_template_directory() . '/vendor/cmb2/init.php' ) ) {
  require_once  get_template_directory() . '/vendor/cmb2/init.php';
} elseif ( file_exists(  get_template_directory()  . '/vendor/CMB2/init.php' ) ) {
  require_once  get_template_directory()  . '/vendor/CMB2/init.php';
}

function wdash_post_type_metabox() {

$prefix = '_wdash_';

$wdash_page = new_cmb2_box( array(
    'id'            => $prefix . 'wdash_page',
    'title'         => __( 'Maklumat Tambahan', 'wdash' ),
    'object_types'  => array( 'page' ),
    'closed'        => false,
) );

$wdash_page->add_field( array(
    'name'    => __( 'Pegawai', 'wdash' ),
    'desc'    => __( 'field description (optional)', 'wdash' ),
    'id'      => $prefix . 'page_nama',
    'type'    => 'text',
) );

$wdash_page->add_field( array(
    'name'    => __( 'Emel', 'wdash' ),
    'desc'    => __( 'field description (optional)', 'wdash' ),
    'id'      => $prefix . 'page_emel',
    'type'    => 'text',
) );

$wdash_page->add_field( array(
    'name'    => __( 'No. Telefon', 'wdash' ),
    'desc'    => __( 'field description (optional)', 'wdash' ),
    'id'      => $prefix . 'page_tel',
    'type'    => 'text',
) );

}

add_action( 'cmb2_admin_init', 'wdash_post_type_metabox' );