
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

	<div class="blog-post">
	
		<div class="entry-thumb">
				<a href="<?php esc_url( the_permalink() ); ?>" title="<?php esc_attr( the_title_attribute() ); ?>"><?php the_post_thumbnail('construct-large-thumb'); ?></a>
		</div>
		<p class="meta-post"> <?php construct_posted_on(); construct_edit_link();?> </p>
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="title-post entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			
		</header>
		
		<div class="entry-post">
			<?php if ( (get_theme_mod('full_post') == 1 && is_home() ) || (get_theme_mod('full_archives') == 1 && is_archive() ) ) : ?>
				<?php the_content(); ?>
			<?php else : ?>
				<?php the_excerpt(); ?>
			<?php endif ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'construct-ex' ),
					'after'  => '</div>',
				) );
			?>
		</div>

	</div>
	
</article><!-- /article -->