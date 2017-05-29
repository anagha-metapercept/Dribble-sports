<?php /* Wrapper Name: Header */ ?>
<?php if(of_get_option('promo_banner')) { ?>
	<?php if(of_get_option('promo_banner') == 'all_pages_with_home') { $onHome = 'with-home-page'; } ?>
	<div class="full-width-block-wrap <?php echo $onHome; ?>">
		<div class="full-width-block">
			<div class="banner-wrap" style="background-image:url(<?php echo of_get_option('promo_banner_bg'); ?>)">
				<div class="container">
					<div class="row">
						<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-banner.php">
							<?php get_template_part("static/static-banner"); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container banner-btn-show-container">
			<div class="row">
				<div class="span12">
					<button id="bannerBtnShow" class="i-down-open-1"></button>
				</div>
			</div>
		</div>
	</div>
	<div class="header-spacer"></div>
<?php } ?>
<div class="nav-wrap">
	<div class="row">
		<div class="span3" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
			<?php get_template_part("static/static-logo"); ?>
		</div>
		<div class="span9">
			<div class="menu-wrap" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
				<?php get_template_part("static/static-nav"); ?>
			</div>
			
		</div>
	</div>
</div>