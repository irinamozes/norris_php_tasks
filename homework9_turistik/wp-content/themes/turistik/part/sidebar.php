<div class="sidebar">
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Метки</div>
        <div class="sidebar-item__content">
                        <ul class="tags-list">
            <?php

            $tags = get_tags();
            foreach ($tags as $tag) :
            ?>

                <li class="tags-list__item">
                    <a href="<?php echo get_term_link($tag); ?>" class="tags-list__item__link"><?php echo $tag->name; ?></a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>

        <?php

//echo get_the_category_list();

        ?>
    </div>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Рубрики</div>
        <div class="sidebar-item__content">
            <ul class="category-list">
                <?php wp_list_categories("title_li="); ?>
            </ul>
        </div>
    </div>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Календарь</div>
        <div class="sidebar-item__content">
            <?php
            $initial = false;
            get_calendar( $initial ); ?>
        </div>
    </div>
</div>
