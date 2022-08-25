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
    <div class="container">
        <?php if( get_field('about_title') ): ?>
        <h2 class="about__title"><?php the_field('about_title'); ?></h2>
        <?php endif; ?>
        <?php 
        $experiences = get_posts([
            'post_type' => 'experience',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
        ]);

        if($experiences):
        ?>
        <div class="about__wrapper">
            <?php foreach($experiences as $key => $experience): ?>
            <div class="about__item<?php echo $key === 0 ? ' about__item--active' : '';?>">
                <h3 class="about__item-title"><?php echo $experience->post_title; ?></h3>
                <div class="about__item-content">
                    <?php echo $experience->post_content; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>    
</section>
<section class="portfolio">
    <div class="container">
        <?php if( get_field('portfolio_title') ): ?>
        <h2 class="portfolio__title"><?php the_field('portfolio_title'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('portfolio_desc') ): ?>
        <p class="portfolio__desc"><?php the_field('portfolio_desc'); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>