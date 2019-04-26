<?php
    $args = [
      'post_type' => 'services',
      'posts_per_page' => 9,
      'order' => 'asc',
      // asc dans l'ordre croissant et desc dans l'ordre décroissant
    ];
    $ninequery = new WP_Query($args);
    ?>

<?php while ($ninequery->have_posts()): $ninequery->the_post(); ?>
<!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-023-flask"></i>
            </div>
            <div class="service-text">
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>
<?php 
endwhile;
wp_reset_postdata();
?>
        
      