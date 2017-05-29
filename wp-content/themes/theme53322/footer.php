<?php $bottom_text = apply_filters( 'cherry_text_translate', of_get_option('bottom_text'), 'bottom_text' ); ?>		
		<div class="bottom-text"><div class="container"><div class="inner"><?php echo $bottom_text ?></div></div></div>
		<footer class="motopress-wrapper footer">
			<div class="container">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="wrapper/wrapper-footer.php" data-motopress-wrapper-type="footer" data-motopress-id="<?php echo uniqid() ?>">
						<?php get_template_part('wrapper/wrapper-footer'); ?>
					</div>
				</div>
			</div>
		</footer>
		<!--End #motopress-main-->
	</div>
	<div id="back-top-wrapper" class="visible-desktop">
		<p id="back-top">
			<?php echo apply_filters( 'cherry_back_top_html', '<a href="#top"><span></span></a>' ); ?>
		</p>
	</div>
	<?php if(of_get_option('ga_code')) { ?>
		<script type="text/javascript">
			<?php echo stripslashes(of_get_option('ga_code')); ?>
		</script>
		<!-- Show Google Analytics -->
	<?php } ?>
	<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->


<div class="footer_bottom">
    	<div class="spn1">Copyright ©2017 Dribble sports</div>
        <div class="spn2">
	<a href="http://test.dribblesports.com/blog/">Blog</a> | <a href="http://test.dribblesports.com/careers/">Careers</a> | <a href="http://test.dribblesports.com/privacy-policy/"> Privacy Policy</a> | <a href="#">Sitemap</a></div>
       
<div class="social-wrap" data-motopress-type="static" data-motopress-static-file="static/static-social.php">
	<ul class="social" style="display:initial;">
		<div class="social-wrap" data-motopress-type="static" data-motopress-static-file="static/static-social.php">
			<li class="twitter"><a href="#" title="twitter"><i class="i-twitter"></i></a></li>
			<li class="facebook"><a href="#" title="facebook"><i class="i-facebook"></i></a></li>
			<li class="vimeo"><a href="#" title="vimeo"><i class="i-vimeo"></i></a></li>
			
		</div>
	</ul>
	</div>
<span id="wmb">Website designed by <a href="http://www.metapercept.com" style="text-decoration:none;">Metapercept</a></span>
</div>

<script>

var $boxes = $('.boxlink');
$('.step-items .service-link').mouseover(function() {
    $boxes.hide().filter('#box' + this.id).show();
});
</script>


</body>
</html>