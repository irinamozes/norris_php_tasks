<?php get_header(); ?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <?php if( have_posts()) : while ( have_posts()) : the_post(); ?>
                    <h1 class="title-page"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; else: ?>
                    Ничего не найдено
                <?php endif; ?>

            </div>
            <?php get_template_part('part/sidebar'); ?>
        </div>
    </div>
<?php get_footer(); ?>
