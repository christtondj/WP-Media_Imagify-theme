<?php

/**
 * Front page Template
 * 
 * @package Imagify
 */

get_header();

?>


<div class="section">


    <h2><b>Your Visitors Will Be Fulfilled</b></h2>

    <div class="capabilities">

        <?php

        for ($i = 0; $i < 4; $i++) {  ?>


            <div class="perk">

                <div class="perk-icon">
                    <img src="<?php echo get_theme_mod('perks_icon_' . $i, get_theme_file_uri('assets/images/Icons/perk_' . $i . '.png')); ?>" alt=" ">
                </div>
                <div class="perk-text">
                    <h3>
                        <?php echo nl2br(get_theme_mod('perks_section_title_' . $i, 'Card title')); ?>
                    </h3>

                    <p>
                        <span>
                            <?php echo nl2br(get_theme_mod('perks_span_' . $i, 'Lorem Ipsum dollor. This is the colored line of the card')); ?>
                        </span>
                        <?php echo nl2br(get_theme_mod('perks_text_' . $i)); ?>
                    </p>
                </div>

            </div>



        <?php    }

        ?>

    </div>
</div>


<?php
get_footer();
?>