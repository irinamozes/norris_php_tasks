<?php

get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle"><?php _e('Результат поиска'); ?></h2>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class(); ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?></small>

				<p class="postmetadata"><?php the_tags(__('Метка:') . ' ', ', ', '<br />'); ?> <?php printf(__('Рубрика %s'), get_the_category_list(', ')); ?></p>
			</div>

		<?php endwhile; ?>


	<?php else : ?>

		<h2 class="center"><?php _e('Ни одного поста не найдено. Повторить поиск?'); ?></h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

</div>
