<?php
$location = $options_page; // Form Action URI
?>

<div class="wrap">

	<div class="icon32" id="icon-options-general"><br /></div>
	<h2><?php _e("Fading Content Slider Settings", 'wp-fading-content-slider-locale'); ?></h2>
	<p><?php _e("Here you can adjust the Fading Content Slider's parameters.", 'wp-fading-content-slider-locale'); ?> </p>
    <p><?php _e("You have to choose manually to insert or not posts/pages in the slider on the posts/pages edit screen ('Add to the slider?' Checkbox).", 'wp-fading-content-slider-locale'); ?></p>

    <h3><?php _e("Code to insert", 'wp-fading-content-slider-locale'); ?></h3>

    <p><?php _e("The code below must be inserted in a Wordpress file, where you want to display the parallax content slider:", 'wp-fading-content-slider-locale'); ?></p>

    <code>
			if ( function_exists( 'get_wp_fading_content_slider' ) ) {
					get_wp_fading_content_slider();
			}
    </code>

    <p><?php _e("An alternative is to call the plugin with the following shortcode:", 'wp-fading-content-slider-locale'); ?></p>

    <code>
			[fadingslider]
    </code>

    <h3><?php _e("General Display Options", 'wp-fading-content-slider-locale'); ?></h3>

    <div style="margin-left:0px; float: left; width: 600px;">

	<form method="post" action="options.php"><?php wp_nonce_field('update-options'); ?>

	    <div class="inside">
		    <table class="form-table">
			    <tr>
				    <th><label for="sort"><?php _e("Sort criteria for posts/pages", 'wp-fading-content-slider-locale'); ?></label></th>
				    <td>
					    <select name="sort">
						    <option value="post_date" <?php if(get_option('sort') == "post_date") {echo "selected=selected";} ?>><?php _e("Date", 'wp-fading-content-slider-locale'); ?></option>
						    <option value="title" <?php if(get_option('sort') == "title") {echo "selected=selected";} ?>><?php _e("Title", 'wp-fading-content-slider-locale'); ?></option>
						    <option value="rand" <?php if(get_option('sort') == "rand") {echo "selected=selected";} ?>><?php _e("Random", 'wp-fading-content-slider-locale'); ?></option>
					    </select>
					    <em>&nbsp;<?php _e("('Order by' criteria)", 'wp-fading-content-slider-locale'); ?></em>
				    </td>
			    </tr>
			    <tr>
				    <th><label for="order"><?php _e("Sort order", 'wp-fading-content-slider-locale'); ?></label></th>
				    <td>
					    <select name="order">
						    <option value="ASC" <?php if(get_option('order') == "ASC") {echo "selected=selected";} ?>><?php _e("Ascending", 'wp-fading-content-slider-locale'); ?></option>
						    <option value="DESC" <?php if(get_option('order') == "DESC") {echo "selected=selected";} ?>><?php _e("Descending", 'wp-fading-content-slider-locale'); ?></option>
					    </select>
					    <em>&nbsp;<?php _e("(Order)", 'wp-fading-content-slider-locale'); ?></em>
				    </td>
			    </tr>
			    <tr>
				    <th><label for="auto_switch"><?php _e("Automatic switch", 'wp-fading-content-slider-locale'); ?></label></th>
				    <td>
					    <select name="auto_switch" disabled="disabled">
						    <option value="1" selected="selected"><?php _e("Yes", 'wp-fading-content-slider-locale'); ?></option>
					    </select>
				    </td>
			    </tr>
			    <tr>
				    <th><label for="timeout"><?php _e("Time between transitions (ms)", 'wp-fading-content-slider-locale'); ?></label></th>
				    <td>
				    	<input type="text" name="timeout" value="<?php $timeout = get_option('timeout'); if(!empty($timeout)) {echo $timeout;} else {echo "3000";}?>">
					</td>
			    </tr>
			    <tr>
				    <th><label for="fading_slider_width"><?php _e("Slider container's width", 'wp-fading-content-slider-locale'); ?></label></th>
				    <td>
				    	<input type="text" name="fading_slider_width" value="<?php $width = get_option('fading_slider_width'); if(!empty($width)) {echo $width;} else {echo "860";}?>">
				   	</td>
			    </tr>
			    <tr>
				    <th><label for="fading_slider_height"><?php _e("Slider container's height", 'wp-fading-content-slider-locale'); ?></label></th>
				    <td>
				    	<input type="text" name="fading_slider_height" value="<?php $height = get_option('fading_slider_height'); if(!empty($height)) {echo $height;} else {echo "210";}?>">
				    </td>
			    </tr>
			   <tr>
				    <th><label for="fading_slider_bg"><?php _e("Background color", 'wp-fading-content-slider-locale'); ?></label></th>
				    <td>
				    	<input type="text" name="fading_slider_bg" value="<?php $bg = get_option('fading_slider_bg'); if(!empty($bg)) {echo $bg;} else {echo "FFF";}?>">
				    </td>
			    </tr>
			    <tr>
				    <th><label for="fading_slider_border"><?php _e("Border color (hexadecimal)", 'wp-fading-content-slider-locale'); ?></label></th>
				    <td>
				    	<input type="text" name="fading_slider_border" value="<?php $border = get_option('fading_slider_border'); if(!empty($border)) {echo $border;} else {echo "CCC";}?>">
				    </td>
			    </tr>
			    <tr>
				    <th><label for="text_width"><?php _e("Text width", 'wp-fading-content-slider-locale'); ?></label></th>
				    <td>
				    	<input type="text" name="text_width" value="<?php $text_width = get_option('text_width'); if(!empty($text_width)) {echo $text_width;} else {echo "450";}?>">
				    </td>
			    </tr>
			    <tr>
				    <th><label for="text_color"><?php _e("Text color", 'wp-fading-content-slider-locale'); ?></label></th>
				    <td>
				    	<input type="text" name="text_color" value="<?php $text_color = get_option('text_color'); if(!empty($text_color)) {echo $text_color;} else {echo "333";}?>">
				   	</td>
			    </tr>
			    <tr>
				    <th><label for="img_width"><?php _e("Image width", 'wp-fading-content-slider-locale'); ?></label></th>
				    <td>
				    	<input type="text" name="img_width" value="<?php $img_width = get_option('img_width'); if(!empty($img_width)) {echo $img_width;} else {echo "580";}?>">
				    </td>
			    </tr>
			    <tr>
				    <th><label for="img_height"><?php _e("Image height", 'wp-fading-content-slider-locale'); ?></label></th>
				    <td>
				    	<input type="text" name="img_height" value="<?php $img_height = get_option('img_height'); if(!empty($img_height)) {echo $img_height;} else {echo "300";}?>">
				    </td>
			    </tr>
		    </table>
	    </div>

	    <input type="hidden" name="action" value="update" />
	    <input type="hidden" name="page_options" value="limit_posts, points, limit, fading_slider_width, fading_slider_height, order, sort, effect, timeout, fading_slider_width, fading_slider_height, fading_slider_bg, fading_slider_border, text_width, text_color, img_width, img_height, auto_switch" />
		    <p class="submit"><input class="button-primary" type="submit" name="Update" value="<?php _e('Update Options', 'wp-fading-content-slider-locale') ?>" /></p>
	    </form>

	</div>

</div>