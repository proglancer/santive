<section class="testimonials pt-5 pb-5 min-vh-100" id="testimonials_section">
  <!-- Video Background -->
  <?php if (have_rows('visitor_testimonials')) : ?>
  <?php while (have_rows('visitor_testimonials')) : the_row(); ?>
    <?php 
    // Extract video URL from the `testimonial_background` field (assuming it contains a shortcode or embedded HTML)
    $bvid = get_sub_field('testimonial_background');
    preg_match('/src="([^"]+)"/', $bvid, $matches);
    $video_url = $matches[1] ?? '';
    ?>
    <?php if ($video_url) : ?>
      <video class="bg-video" autoplay muted loop>
        <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    <?php else : ?>
      <p>No video available</p>
    <?php endif; ?>
  <?php endwhile; ?>
<?php else : ?>
  <p>No visitor testimonials found.</p>
<?php endif; ?>


  <!-- Content -->
  <div class="container position-relative z-index-1">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="gift-image">
          <?php if (have_rows('visitor_testimonials')) : while (have_rows('visitor_testimonials')) : the_row(); ?>
            <?php if (get_sub_field('block_image')) : ?>
              <img src="<?php the_sub_field('block_image'); ?>" class="img-fluid" alt="Gift Image">
            <?php endif; ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="col-md-6">
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
          <h1 class="text-center text-white">
            <?php if (have_rows('visitor_testimonials')) : while (have_rows('visitor_testimonials')) : the_row(); ?>
              <?php the_sub_field('testimonial_heading'); ?>
            <?php endwhile; endif; ?>
          </h1>

          <!-- Indicators -->
          <div class="carousel-indicators">
            <?php 
            $indicator_index = 0;
            if (have_rows('visitor_testimonials')) : while (have_rows('visitor_testimonials')) : the_row();
              if (have_rows('testimonial_slider')) :
                while (have_rows('testimonial_slider')) : the_row(); ?>
                  <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="<?php echo $indicator_index; ?>" class="<?php echo $indicator_index === 0 ? 'active' : ''; ?>" aria-current="<?php echo $indicator_index === 0 ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $indicator_index + 1; ?>"></button>
                  <?php $indicator_index++; ?>
                <?php endwhile;
              endif;
            endwhile; endif; ?>
          </div>

          <!-- Slides -->
          <div class="carousel-inner">
            <?php 
            $slide_index = 0;
            if (have_rows('visitor_testimonials')) : while (have_rows('visitor_testimonials')) : the_row();
              if (have_rows('testimonial_slider')) :
                while (have_rows('testimonial_slider')) : the_row(); ?>
                  <div class="carousel-item <?php echo $slide_index === 0 ? 'active' : ''; ?>">
                    <div class="testimonial-slide">
                      <p class="testimonial-text">"<?php the_sub_field('testimonial_sentence'); ?>"</p>
                      <p class="testimonial-name"><?php the_sub_field('name'); ?></p>
                      <p class="testimonial-position"><?php the_sub_field('designation_and_orginazation'); ?></p>
                    </div>
                  </div>
                  <?php $slide_index++; ?>
                <?php endwhile;
              endif;
            endwhile; endif; ?>
          </div>

          <!-- Navigation Controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>