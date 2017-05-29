<?php /* Loop Name: Single */ ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
	// The following determines what the post format is and shows the correct file accordingly
	$format = get_post_format();
	get_template_part( 'includes/post-formats/'.$format );
	if($format == '')
		get_template_part( 'includes/post-formats/standard' );
	
	wp_link_pages('before=<div class="pagination">&after=</div>');
?>
<div class="info-block">
	<?php 
		get_template_part('includes/post-formats/post-meta');
		get_template_part('includes/post-formats/share-buttons');
	?>
	<div class="post-author">	
		<p class="post-author_gravatar"><?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '130' ); /* This avatar is the user's gravatar (http://gravatar.com) based on their administrative email address */  } ?></p>
		<div class="post-author_desc">
			<h3 class="post-author_h"><?php echo theme_locals("written_by"); ?> <?php the_author_posts_link() ?></h3>
			<?php the_author_meta('description') ?> 
			<div class="post-author_link">
				<p><?php echo theme_locals("view_all"); ?>: <?php the_author_posts_link() ?></p>
			</div>
		</div>
		<div class="clear"></div>
	</div><!--.post-author-->
</div>
<div class="related-comments">
	<?php
		get_template_part( 'includes/post-formats/related-posts' );
		comments_template('', true);
		endwhile; endif; 
	?>
</div>