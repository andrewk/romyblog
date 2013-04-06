<?php get_header(); ?>

	<section id="main" role="main">


	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h1 class="entry-title"><?php the_title(); ?>
					<small><time class="updated" datetime="<?php the_time('c'); ?>" pubdate>
						<?php the_time('F jS'); ?> <span><?php the_time('Y'); ?></span>
					</time></small>
				</h1>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</section>
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
