<article <?php post_class('uk-article uk-grid uk-grid-match') ?> id="post-<?php the_ID(); ?>" data-uk-grid-match="{target:'.zz-content'}" data-uk-grid-margin>
	<?php do_action( 'basey_post_inside_before' ); ?>

	<div class="uk-width-small-1-1 uk-width-medium-3-10">
		<header>
			<?php

			if (has_post_thumbnail()) {
				$width = get_option('thumbnail_size_w');
				$height = get_option('thumbnail_size_h');
			?>
			<figure class="">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(array($width, $height), array('class' => '')); ?>
				</a>
			</figure>
			<?php } ?>
		</header>
	</div>
	<?php
	echo '<div class="zz-content uk-width-small-1-1  uk-width-medium-7-10"><div class="entry-content">';
	echo '<h3 class="zz-link-muted uk-text-bold"><a href="'.get_permalink().'">'.get_the_title().'</i></a></h3>';
		if (has_excerpt()) {
			the_excerpt();
		}
		else {
			$content = strip_shortcodes(get_the_content());
			$content = apply_filters( 'the_content', $content );
			$content = str_replace( ']]>', ']]>', $content);

			echo '<p>' . wp_trim_words( $content, apply_filters( 'basey_teaser_word_count', 30) ) . '</p>';
			$date = '<time datetime="' . get_the_date('Y-m-d') . '">' . get_the_date() . '</time>';
			printf(__('<span class="uk-text-muted zz-link-muted">%s | %s</span>', 'basey'), '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '" title="' .get_the_author() . '">' . get_the_author() . '</a>', $date);

		}?>
	<?php echo '</div></div>';

	//get_template_part('templates/teaser/post-meta');

	do_action( 'basey_post_inside_after' ); ?>
</article>
