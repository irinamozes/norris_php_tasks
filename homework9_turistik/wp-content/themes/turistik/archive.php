<?php
get_header(); ?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
                <div class="posts-list">

                    <?php if( have_posts()) : while ( have_posts()) : the_post(); ?>
                        <!-- post-mini-->
                        <div class="post-wrap">
                            <div class="post-thumbnail"><img src="<?php echo get_pic($post->ID); ?>" alt="Image поста" class="post-thumbnail__image"></div>
                            <div class="post-content">
                                <div class="post-content__post-info">
                                    <div class="post-date"><?php the_date(); ?></div>
                                </div>
                                <div class="post-content__post-text">
                                    <div class="post-title">
                                        <?php the_title(); ?>
                                    </div>
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="post-content__post-control">
                                    <a href="<?php the_permalink(); ?>" class="btn-read-post">Читать далее >></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; else: ?>
                        Ничего не найдено
                    <?php endif; ?>                    <!-- post-mini_end-->
                    <!-- post-mini-->
                </div>

                <?php
                $args = array(
                    'show_all'     => false, // показаны все страницы участвующие в пагинации
                    'end_size'     => 1,     // количество страниц на концах
                    'mid_size'     => 1,     // количество страниц вокруг текущей
                    'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                    'prev_text'    => __('«'),
                    'next_text'    => __('»'),
                    'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                    'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                    'screen_reader_text' => __( ' ' ),
                );
                the_posts_pagination($args);
                wp_reset_query();
                wp_reset_postdata();
                ?>
            </div>
            <!-- sidebar-->
            <?php get_template_part('part/sidebar'); ?>
        </div>
    </div>
<?php get_footer(); ?>
