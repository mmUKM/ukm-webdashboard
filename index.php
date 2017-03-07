<?php
/**
 *
 */

get_header(); ?>
<div class="uk-grid">
<div class="uk-width-medium-1-4">
  <div class="uk-panel uk-panel-box">
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
        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>&nbsp;<?php edit_post_link( __( 'Edit','ukmtheme'),'<button class="uk-button uk-button-mini uk-button-primary">','</button>' ); ?>
        <?php endwhile; ?>
        </li>
      </ul>
  </div>
</div>

<div class="uk-width-medium-1-4">
  <div class="uk-panel uk-panel-box">
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
      <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>&nbsp;<?php edit_post_link( __( 'Edit','ukmtheme'),'<button class="uk-button uk-button-mini uk-button-primary">','</button>' ); ?>
      <?php endwhile; ?>
      </li>
    </ul>
  </div>
</div>
<div class="uk-width-medium-1-4">
  <div class="uk-panel uk-panel-box">
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
      <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>&nbsp;<?php edit_post_link( __( 'Edit','ukmtheme'),'<button class="uk-button uk-button-mini uk-button-primary">','</button>' ); ?>
      <?php endwhile; ?>
      </li>
    </ul>
  </div>
</div>

<div class="uk-width-medium-1-4">
  <div class="uk-panel uk-panel-box">
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
      <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>&nbsp;<?php edit_post_link( __( 'Edit','ukmtheme'),'<button class="uk-button uk-button-mini uk-button-primary">','</button>' ); ?>
      <?php endwhile; ?>
      </li>
    </ul>
  </div>
</div>

</div>

<?php get_footer(); ?>