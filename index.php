<?php
/**
 *
 */

get_header(); ?>

<h2>Push Info</h2>
  <ul>
    <?php
      $pushinfo = new WP_Query(
        array(
        'post_type' => 'page',
        'tax_query' => array(
            array(
              'taxonomy' => 'wdash_page_category',
              'field'    => 'slug',
              'terms'    => 'pushinfo',
            ),
          ),
        'posts_per_page'  => -1
      ) );
    
    while( $pushinfo->have_posts() ) : $pushinfo->the_post(); ?>
    <li>
    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>&nbsp;<?php edit_post_link( __( '>>Edit','ukmtheme'),'','' ); ?>
    <?php endwhile; ?>
    </li>
  </ul>

  <h2>Push Respond</h2>
  <ul>
    <?php
      $pushinfo = new WP_Query(
        array(
        'post_type' => 'page',
        'tax_query' => array(
            array(
              'taxonomy' => 'wdash_page_category',
              'field'    => 'slug',
              'terms'    => 'pushrespond',
            ),
          ),
        'posts_per_page'  => -1
      ) );
    
    while( $pushinfo->have_posts() ) : $pushinfo->the_post(); ?>
    <li>
    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>&nbsp;<?php edit_post_link( __( '>>Edit','ukmtheme'),'','' ); ?>
    <?php endwhile; ?>
    </li>
  </ul>

  <h2>Pull Info</h2>
  <ul>
    <?php
      $pushinfo = new WP_Query(
        array(
        'post_type' => 'page',
        'tax_query' => array(
            array(
              'taxonomy' => 'wdash_page_category',
              'field'    => 'slug',
              'terms'    => 'pullinfo',
            ),
          ),
        'posts_per_page'  => -1
      ) );
    
    while( $pushinfo->have_posts() ) : $pushinfo->the_post(); ?>
    <li>
    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>&nbsp;<?php edit_post_link( __( '>>Edit','ukmtheme'),'','' ); ?>
    <?php endwhile; ?>
    </li>
  </ul>

  <h2>Pull Respond</h2>
  <ul>
    <?php
      $pushinfo = new WP_Query(
        array(
        'post_type' => 'page',
        'tax_query' => array(
            array(
              'taxonomy' => 'wdash_page_category',
              'field'    => 'slug',
              'terms'    => 'pullrespond',
            ),
          ),
        'posts_per_page'  => -1
      ) );
    
    while( $pushinfo->have_posts() ) : $pushinfo->the_post(); ?>
    <li>
    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>&nbsp;<?php edit_post_link( __( '>>Edit','ukmtheme'),'','' ); ?>
    <?php endwhile; ?>
    </li>
  </ul>

<?php get_footer(); ?>