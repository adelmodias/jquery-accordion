<?php
/**
 * Template name: MZ - FAQs
 */
get_header(); ?>

<div class="accordion">
    <?php if( have_rows('faqs') ) : while ( have_rows('faqs') ) : the_row(); ?>

    <?php
    if ( get_sub_field('text_before_faq_group') ) {
        the_sub_field('text_before_faq_group');
    }
    ?>

    <?php if( have_rows('faq_group') ) : while ( have_rows('faq_group') ) : the_row(); ?>
    <div class="accordion__item">
        <div class="accordion__item__header">
            <?php the_sub_field('title'); ?>
        </div>

        <div class="accordion__item__content">
            <?php the_sub_field('description'); ?>
        </div>
    </div>
    <?php endwhile;endif; ?>

    <?php endwhile;endif; ?>
</div> <!-- id accordion end -->

<?php get_footer(); ?>