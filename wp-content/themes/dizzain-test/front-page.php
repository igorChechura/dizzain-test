<?php get_header(); ?>

<?php 
$bg_image = get_field('first_screen_bg');

$bg_style = $bg_image ? ' style="background-image:url('. $bg_image .')"' : '';
?>
<section class="first-screen"<?php echo $bg_style; ?>>
    <div class="container">
        <?php if( get_field('first_screen_title') ): ?>
        <h1 class="first-screen__title"><?php the_field('first_screen_title'); ?></h1>
        <?php endif; ?>
        <?php if( get_field('first_screen_desc') ): ?>
        <p class="first-screen__desc"><?php the_field('first_screen_desc'); ?></p>
        <?php endif; ?>
    </div>
</section>
<section class="about">

</section>
<section class="portfolio">

</section>

<?php get_footer(); ?>