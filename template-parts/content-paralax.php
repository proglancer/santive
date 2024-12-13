<section class="paralax min-vh-100" id="event_section">
<?php if(have_rows('event_block')) : while(have_rows('event_block')) : the_row();
$bvid = get_sub_field('video_background');
// Extract URL from shortcode
preg_match('/src="([^"]+)"/', $bvid, $matches);
$video_url = $matches[1] ?? '';
$etitle = get_sub_field('event_title');
$stitle = get_sub_field('sub_title');
$btn = get_sub_field('button_name');
?>

<!-- Parallax Video Background -->
<video class="video-bg" autoplay muted loop playsinline>
    <source src="<?php echo $video_url; ?>" type="video/mp4">
    Your browser does not support the video tag.
</video>

<!-- Parallax Content Section -->
<div class="parallax-section text-center">
    <div class="container content">
        <h1><?php echo esc_html($etitle); ?></h1>
        <p><?php echo esc_html($stitle); ?></p>
        <a href="#learn-more" class="btn btn-primary btn-lg mt-4" data-bs-toggle="modal" data-bs-target="#exampleModalLg"><?php echo esc_html($btn); ?></a>
    </div>
</div>

<?php endwhile; endif; ?>
</section>