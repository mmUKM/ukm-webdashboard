<?php
/**
 *
 */

get_header(); ?>
<ul>
<?php while( have_posts() ) : the_post(); ?>

<?php the_title( '<h3>', '</h3>' ); ?>
  <ul>
    <li>PTj: <?php echo get_the_term_list( $post->ID, 'wdash_page_ptj', '', ', ', '' ); ?></li>
    <li>Tag: <?php echo get_the_term_list( $post->ID, 'wdash_page_tag', '#', ', #', '' ); ?></li>
  </ul>
<?php endwhile; ?>
</ul>

<?php get_footer(); ?>