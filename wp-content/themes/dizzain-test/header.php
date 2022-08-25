<?php 
$front_page_id = get_option('page_on_front');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>    
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <?php if( get_field('header_logo', $front_page_id) ): ?>
            <a href="<?php echo home_url('/'); ?>">
                <img class="header__logo" src="<?php the_field('header_logo', $front_page_id); ?>" alt="dizzain.com">
            </a>
            <?php endif; ?>
        </div>
    </div>    
</header>