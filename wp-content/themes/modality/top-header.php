<?php
/**
 * @package Modality
 */
$modality_theme_options = modality_get_options( 'modality_theme_options' );
?>
<div id="header-top">
	<div class="pagetop-inner clearfix">
	<div class="col-md-4 col-md-offset-4 "id="mtu-logo" id="logo">
        </div>
	<!--TODO Add logo in top-header centered>	
		<div id="logo">
			<Adnane Part><img style="width:100%;" src="https://photos-2.dropbox.com/t/2/AABK2P0qlBbDt4DZSHN-m4Q8vPDR34JmVjX0EniBtxM4LA/12/172254576/jpeg/32x32/1/_/1/2/Logo.jpeg/EMHqhtYDGMskIAcoBw/3oGQOXmf_w_F11eIhCTrPVfC4hUYH1zVJTxBYuXU2PQ?size=1600x1200&size_mode=2" >
			</Adnane Part>
			<?php if ( $modality_theme_options['logo'] != '' ) { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ) ?>"><img src="<?php echo 
				esc_url($modality_theme_options['logo']); ?>" alt="<?php echo
				esc_attr($modality_theme_options['logo_alt_text']); ?>"/></a>
				<?php if ($modality_theme_options['enable_logo_tagline'] == '1' ) { ?> 
					<h5 class="site-description"><?php echo esc_attr(bloginfo('description')); ?></h5>
				<?php } ?>
			<?php } else { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ) ?>"><?php esc_attr(bloginfo( 'name' )); ?></a>
				<?php if ($modality_theme_options['enable_logo_tagline'] == '1' ) { ?> 
					<h5 class="site-description"><?php echo esc_attr(bloginfo('description')); ?>
					</h5>
				<?php } ?>
			<?php } ?>
		</div-->
		
		<div class="top-left left">
			<p class="no-margin"><?php echo esc_attr($modality_theme_options['header_address']); ?></p>
		</div>
		<div class="top-right right" id="social-links">
			<?php if($modality_theme_options['facebook_link']): ?>
				<a href="<?php echo esc_url($modality_theme_options['facebook_link']); ?>" target="_blank" 
				title="<?php _e('Facebook','modality'); ?>"><i class="fa fa-facebook-square"></i></a>
			<?php endif; ?>	
			<?php if($modality_theme_options['twitter_link']): ?>
				<a href="<?php echo esc_url($modality_theme_options['twitter_link']); ?>" target="_blank" 
				title="<?php _e('Twitter','modality'); ?>"><i class="fa fa-twitter"></i></a>
			<?php endif; ?>	
			<?php if($modality_theme_options['google_link']): ?>
				<a href="<?php echo esc_url($modality_theme_options['google_link']); ?>" target="_blank" 
				title="<?php _e('Google+','modality'); ?>"><i class="fa fa-google-plus"></i></a>
			<?php endif; ?>	
			<?php if($modality_theme_options['linkedin_link']): ?>
				<a href="<?php echo esc_url($modality_theme_options['linkedin_link']); ?>" target="_blank" 
				title="<?php _e('LinkedIn','modality'); ?>"><i class="fa fa-linkedin"></i></a>
			<?php endif; ?>
			<?php if($modality_theme_options['instagram_link']): ?>
				<a href="<?php echo esc_url($modality_theme_options['instagram_link']); ?>" target="_blank" 
				title="<?php _e('Instagram','modality'); ?>"><i class="fa fa-instagram"></i></a>
			<?php endif; ?>
			<?php if($modality_theme_options['vimeo_link']): ?>
				<a href="<?php echo esc_url($modality_theme_options['vimeo_link']); ?>" target="_blank" 
				title="<?php _e('Vimeo','modality'); ?>"><i class="fa fa-vimeo-square"></i></a>
			<?php endif; ?>		

<!--<span class="top-phone"><i class="fa fa-phone"></i><?php echo esc_attr($modality_theme_options['header_phone']); ?></span>-->
			<!--<span class="top-email"><i class="fa fa-envelope"></i><a href="mailto:<?php echo esc_attr($modality_theme_options['header_email']); ?>"><?php echo esc_attr($modality_theme_options['header_email']); ?></a></span>-->
		</div>
	</div>
</div>