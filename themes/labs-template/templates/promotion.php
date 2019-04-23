 <?php 

 
$promotion_titre = get_theme_mod('promotion-text-title', __('Titre de promotion'));
$promotion_text = get_theme_mod('promotion-text-subtitle', __('Sous-titre de promotion'));
 ?>
 <!-- Promotion section -->
  <div class="promotion-section">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h2><?= $promotion_titre; ?></h2>
          <p><?= $promotion_text; ?></p>
        </div>
        <div class="col-md-3">
          <div class="promo-btn-area">
            <a href="<?php echo get_page_link('7'); ?>" class="site-btn btn-2">Browse</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Promotion section end-->