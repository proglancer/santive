<section class="faq pt-5 pb-5 min-vh-100" id="faqs_section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-lg-6">
        <div class="faq-img d-flex align-items-center">
          <?php if (have_rows('faq_section')) : while (have_rows('faq_section')) : the_row(); ?>
            <?php if (get_sub_field('faq_image')) : ?>
              <img src="<?php the_sub_field('faq_image'); ?>" class="img-fluid" alt="FAQ Image">
            <?php endif; ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="accordion-faq">
          <?php if (have_rows('faq_section')) : while (have_rows('faq_section')) : the_row(); ?>
            <h1 class="text-white"><?php the_sub_field('faq_heading'); ?></h1>
            <p class="text-white"><?php the_sub_field('faq_subheading'); ?></p>
          <?php endwhile; endif; ?>

          <div class="accordion mt-4" id="accordionExample">
            <?php 
            $faq_counter = 0; // Counter to ensure unique IDs
            if (have_rows('faq_section')) : while (have_rows('faq_section')) : the_row(); ?>
              <?php if (have_rows('q&a')) : ?>
                <?php while (have_rows('q&a')) : the_row(); 
                  $faq_counter++; // Increment counter for unique ID
                  $question = get_sub_field('question');
                  $answer = get_sub_field('answer');
                  ?>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?php echo $faq_counter; ?>">
                      <button class="accordion-button <?php echo $faq_counter === 1 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $faq_counter; ?>" aria-expanded="<?php echo $faq_counter === 1 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $faq_counter; ?>">
                        <?php echo esc_html($question); ?>
                      </button>
                    </h2>
                    <div id="collapse<?php echo $faq_counter; ?>" class="accordion-collapse collapse <?php echo $faq_counter === 1 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $faq_counter; ?>" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <?php echo wp_kses_post($answer); ?>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>