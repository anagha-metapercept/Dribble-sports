<?php
	// Loads child theme textdomain
	load_child_theme_textdomain( CURRENT_THEME, CHILD_DIR . '/languages' );

	add_filter( 'cherry_stickmenu_selector', 'cherry_change_selector' );
	function cherry_change_selector($selector) {
		$selector = 'header .nav-wrap';
		return $selector;
	}
	
	if ( !function_exists( 'mytheme_comment' ) ) {
		function mytheme_comment($comment, $args, $depth) {
			$GLOBALS['comment'] = $comment;
		?>
		<li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">
			<div id="comment-<?php comment_ID(); ?>" class="comment-body clearfix">
				<div class="wrapper">
					<div class="comment-author vcard">
						<?php echo get_avatar( $comment->comment_author_email, 130 ); ?>
						<?php printf('<span class="author">%1$s</span>', get_comment_author_link()) ?>
					</div>
					<?php if ($comment->comment_approved == '0') : ?>
						<em><?php echo theme_locals("your_comment") ?></em>
					<?php endif; ?>
					<div class="extra-wrap">
						<?php echo esc_html( get_comment_text() ); ?>

						<div class="wrapper">
					<div class="reply">
						<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
					</div>
					<div class="comment-meta commentmetadata"><?php printf('%1$s', get_comment_date()) ?></div>
				</div>
					</div>
				</div>
				
			</div>
		<?php }
	}
	function svg_mime_types( $mimes ){ $mimes['svg'] = 'image/svg+xml'; return $mimes;} add_filter( 'upload_mimes', 'svg_mime_types' );

	function svg_size() { echo '<style> svg, img[src*=".svg"] { max-width: 150px !important; max-height: 150px !important; } </style>'; } add_action('admin_head', 'svg_size'); 
	function custom_admin_head() {
	  $css = '';

	  $css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';

	  echo '<style type="text/css">'.$css.'</style>';
	}
	add_action('admin_head', 'custom_admin_head');
	
	// Loads custom scripts.
	require_once( 'custom-js.php' );
	require_once( 'shortcodes/service-box.php' );
	require_once( 'shortcodes/circle-stat.php' );
	require_once( 'shortcodes/progressbar.php' );
	require_once( 'shortcodes/post-cycle.php' );
	require_once( 'shortcodes/posts-grid.php' );
?>