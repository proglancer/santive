<section class="event-list min-vh-100" id="tickets_section">
  <div class="container wid-50">
    <div class="row">
      <?php if ( have_rows( 'pricing_table' ) ) : ?>
        <?php while ( have_rows( 'pricing_table' ) ) : the_row(); ?>
          <div class="text-center pt-3 pb-5">
            <h1><?php the_sub_field( 'heading' ); ?></h1>
            <p><?php the_sub_field( 'sub_heading' ); ?></p>
          </div>

          <?php if ( have_rows( 'table_pricing' ) ) : ?>
            <?php while ( have_rows( 'table_pricing' ) ) : the_row(); ?>
              <div class="col-md-12 mb-4">
                <div class="d-flex align-items-center justify-content-between event-inner">
                  <!-- Image and Details -->
                  <div class="d-flex align-items-center">
                    <?php if ( get_sub_field( 'icon' ) ) : ?>
                      <img src="<?php echo esc_url( get_sub_field( 'icon' ) ); ?>" class="img-fluid me-3" style="width: 80px; height: auto;">
                    <?php endif; ?>
                    <div class="event-details">
                      <h2 class="text-white"><?php the_sub_field( 'ticket_name' ); ?></h2>
                      <p class="mb-0"><?php the_sub_field( 'desription' ); ?></p>
                    </div>
                  </div>
                  <!-- Price -->
                  <div class="ticket-price d-flex align-items-center ps-3 pe-3">
                    <img src="https://demo.proglancer.online/wp-content/uploads/2024/11/bell_16752420.png" class="img-fluid me-3" alt="Icon" style="width: 50px; height: auto;">
                    <h1 class="mb-0 text-white"><?php the_sub_field( 'price' ); ?></h1>
                  </div>
                  <!-- Button -->
                  <a href="#" class="btn btn-primary ms-4 me-4" data-bs-toggle="modal" data-bs-target="#exampleModalLg">
                    <?php the_sub_field( 'button_name' ); ?>
                  </a>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <p class="text-white">No pricing details found.</p>
          <?php endif; ?>

        <?php endwhile; ?>
      <?php else : ?>
        <p class="text-white">No pricing tables found.</p>
      <?php endif; ?>
    </div>
  </div>
</section>
