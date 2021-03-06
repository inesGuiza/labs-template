  <!-- About section -->
  <div class="about-section">
    <div class="overlay"></div>
    <?php
    $args = [
      'post_type' => 'services',
      'posts_per_page'=> 3,
      'orderby' => 'rand',
      // 'category_name' => 'services-card'

    ];
    $query = new WP_Query($args);
    ?>
    <!-- card section -->
    <div class="card-section">
      <div class="container">
        <div class="row">
          <?php while ($query->have_posts()): $query->the_post();
          $icon = get_post_meta(get_the_ID() , 'labs_icon_services' , true);
           ?>
          <!-- single card -->
          <div class="col-md-4 col-sm-6">
            <div class="lab-card">
              <div class="icon">
                <i class="<?= $icon ?>"></i>
              </div>
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?>
              </p>
            </div>
          </div>
          <?php 
          endwhile;
          wp_reset_postdata(); 
          ?>
         
        </div>
      </div>
    </div>
    <!-- card section end-->