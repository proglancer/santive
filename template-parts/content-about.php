<section class="level-one min-vh-100 pt-5 pb-5" id="about_section">
  <div class="container">
    <?php if ( have_rows( 'about_section' ) ) : ?>
      <?php while ( have_rows( 'about_section' ) ) : the_row(); ?>
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="inner-img">
              <?php 
              $about_image = get_sub_field( 'about_image' ); // Replace 'about_image' with the actual field name
              if ( $about_image ) : ?>
                <img src="<?php echo esc_url( $about_image['url'] ); ?>" class="img-fluid" alt="<?php echo esc_attr( $about_image['alt'] ); ?>">
              <?php endif; ?>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="inner-cont pt-5 pb-5">
              <h1 class="level-one-heading"><?php the_sub_field( 'title' ); ?></h1>
              <?php the_sub_field( 'about_content' ); ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <?php // No rows found ?>
    <?php endif; ?>
  </div>
</section>