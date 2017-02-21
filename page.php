<?php
/**
 * @category WordPress_Theme
 * @package WebDashboard
 * @author Jamaludin Rajalu <jrajalu@ukm.edu.my>
 */

get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>

<?php the_title( '<h1>', '</h1>' ); ?>

<?php the_content(); ?>

<p>PTj: <?php echo get_the_term_list( $post->ID, 'wdash_page_ptj', '', ', ', '' ); ?></p>
<p>Tanggungjawab: <?php echo get_post_meta( get_the_ID(), '_wdash_page_nama', true ); ?></p>
<p>No. Tel: <?php echo get_post_meta( get_the_ID(), '_wdash_page_tel', true ); ?></p>
<p>Emel: <?php echo get_post_meta( get_the_ID(), '_wdash_page_emel', true ); ?></p>
<p>Tag: <?php echo get_the_term_list( $post->ID, 'wdash_page_tag', '#', ', #', '' ); ?></p>
<p>Dikemaskini: <?php echo get_the_date('d/m/Y');?>, <?php the_time('g:i a');?></p>

<?php endwhile; ?>

<?php get_footer(); ?>