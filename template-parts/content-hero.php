<section class="hero" id="hero">

<?php if(have_rows('hero_section_block')) : while(have_rows('hero_section_block')) : the_row();
$bvid = get_sub_field('video_background');
// Extract URL from shortcode
preg_match('/src="([^"]+)"/', $bvid, $matches);
$video_url = $matches[1] ?? '';
$hheading = get_sub_field('hero_heading');
$sheading = get_sub_field('hero_subheading');
$btn = get_sub_field('button_name');
?>
<video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    <div class="hero-content hero-inner">
        <h1>		<?php echo $hheading ?></h1>
        <p>		<?php echo $sheading ?></p>

        
        <button class="book-ticket-btn" data-bs-toggle="modal" data-bs-target="#exampleModalLg"><?php echo $btn ?></button>
        <?php endwhile; endif; ?>

        <div class="row pt-5 pb-5">
       

        <?php if ( have_rows( 'numeric_counter' ) ) : ?>
          <?php while ( have_rows( 'numeric_counter' ) ) : the_row(); ?>
        <div class="col">
  <div class="d-flex justify-content-center">
    <div class="stat-item text-center ">
      <div class="d-flex flex-column justify-content-center align-items-center h-100">
        <strong data-toggle="counterUp"><?php the_sub_field( 'numeric_value' ); ?></strong>
        <span><?php the_sub_field( 'counter_name' ); ?></span>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php else : ?>
	<?php // No rows found ?>
<?php endif; ?>


    </div>        
</section>