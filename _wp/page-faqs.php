<?php
/**
 * Template name: MZ - FAQs
 */
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="accordionMz">
    <?php if( have_rows('faqs') ) : while ( have_rows('faqs') ) : the_row(); ?>
    <div class="accordion_item mb-0">
        <div class="accordion_header">
            <span><?php the_sub_field('title'); ?></span>
        </div>

        <div class="accordion_content table-responsive hidden">
            <?php the_sub_field('description'); ?>
        </div>

    </div>
    <?php endwhile;endif; ?>
</div> <!-- id accordion end -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>