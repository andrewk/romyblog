<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2 class="entry-title">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<small><time class="updated" datetime="<?php the_time('c'); ?>" pubdate>
			<?php the_time('F jS'); ?> <span><?php the_time('Y'); ?></span>
		</time></small>
	</h2>
	<div class="entry-content">
		<?php the_content('Continue reading...'); ?>
		<h3><a href="<?php the_permalink(); ?>#comments"><?php comments_number('Comment'); ?></a></h3>
	</div>
</article>
