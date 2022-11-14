<?php
    /**
     * Hero  section template
     * 
     * @package Imagify
     */
?>

<div class="hero">
    <div class="hero-text">

        <h1>
            <?php echo get_theme_mod('hero_section_title'); ?>
        </h1>

        <p>

            <?php echo get_theme_mod('hero_section_text'); ?>
            
        </p>

        <a href="#" class="btn-hero">GET STARTED <i class="fa fa-arrow-right"></i></a>

    </div>

    <div class="hero-image">

        <img src="<?php echo get_theme_file_uri('/assets/images/Hero-Image.png'); ?>" alt="">

    </div>
</div>

