<?php get_header(); ?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="article-title title-page">
                    <?php the_title(); ?>
                </div>
                <?php if( have_posts()) : while ( have_posts()) : the_post(); ?>

                    <div class="article-image"><img src="img/post-image.jpg" alt="Image поста"></div>
                    <div class="article-info">
                        <div class="post-date"><?php the_date(); ?></div>
                    </div>
                    <div class="article-text">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; else: ?>
                    Ничего не найдено
                <?php endif; ?>
                <div class="article-pagination">
                    <?php $prev = get_previous_post(); ?>
                    <?php if (!empty($prev)) :?>
                    <div class="article-pagination__block pagination-prev-left"><a href="<?php echo get_permalink($prev->ID); ?>" class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                        <div class="wrap-pagination-preview pagination-prev-left">
                            <div class="preview-article__img"><img src="<?php echo get_pic($prev->ID); ?>" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#" class="post-date"><?php echo $prev->post_date; ?></a></div>
                                <div class="preview-article__text"><?php echo $prev->post_title; ?><br>
                                  <?php //the_excerpt(); ?></div>
                                  <?php //echo $prev->post_content; ?>
                                  <?php echo "<br>". "(Чтобы почитать предыдущую статью, кликните на слове 'Предыдущая'.)"; ?>

                                </div>
                            </div>
                    </div>
                    <?php endif; ?>
                    <?php $next = get_next_post(); ?>
                    <?php if (!empty($next)) :?>
                    <div class="article-pagination__block pagination-prev-right"><a href="<?php echo get_permalink($next->ID); ?>" class="article-pagination__link">Сдедующая статья<i class="icon icon-angle-double-right"></i></a>
                        <div class="wrap-pagination-preview pagination-prev-right">
                            <div class="preview-article__img"><img src="<?php echo get_pic($next->ID); ?>" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#" class="post-date"><?php echo $next->post_date; ?></a></div>
                                <div class="preview-article__text"><?php echo $next->post_title; ?><br>
                                  <?php //the_excerpt(); ?>
                                  <?php //echo $next->post_content; ?>
                                  <?php echo  "<br>". "(Чтобы почитать следующую статью, кликните на слове 'Следующая'.)"; ?>
                                </div>

                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php get_template_part('part/sidebar'); ?>
        </div>
    </div>
<?php get_footer(); ?>
