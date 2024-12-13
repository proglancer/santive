<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Santive
 */

?>

	<footer id="colophon" class="site-footer">
	
	<div class="container">
				<div class="row">
	<div class="site-info">


  <div class="d-flex justify-content-center">
    <?php if (have_rows('santive_footer', 'option')) : ?>
        <?php while (have_rows('santive_footer', 'option')) : the_row(); ?>
            <?php 
            $footer_image = get_sub_field('footer_image'); 
            if ($footer_image) : 
            ?>
                <img src="<?php echo esc_url($footer_image); ?>" class="img-fluid" alt="Footer Image">
            <?php endif; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No footer images found.</p>
    <?php endif; ?>
</div>




		<div class="text-center">
        <p>&copy; <?php echo date('Y'); ?>, <?php echo get_bloginfo('name'); ?>. All rights reserved.</p>
    	</div>
</div><!-- .site-info -->
		</div><!-- row -->
		</div><!-- container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<div class="modal fade" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLgLabel">Santive</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="text-center">
                <h1>Want to Join<br/>Santive Event, 23<sup>rd</sup> December, 2024</h1>
                <h5>Researve Your Seat Now</h5>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="69f219d" title="Booking Form"]'); ?>
        </div>

      </div>
    </div>
  </div>
</html>

