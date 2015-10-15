<article <?php post_class('uk-article') ?> id="post-<?php the_ID(); ?>">
	<?php

	do_action( 'basey_post_inside_before' );
	apply_filters( 'basey_show_breadcrumbs', basey_breadcrumbs() ); ?>

	<header>
		<h2 class="uk-article-title"><?php the_title(); ?></h2>
		<?php if (has_post_thumbnail()){
			the_post_thumbnail('full', array('class' => 'uk-margin-small-bottom uk-align-center uk-width-1-1', 'itemprop'=>'image')); 
		}?>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<?php

	get_template_part( 'templates/single/post-meta' );
	do_action( 'basey_post_inside_after' ); ?>
</article>
