<?php
/*
 * Plugin Name: WP Fading Content Slider
 * Plugin URI: http://www.mba-multimedia.com/en/innovation/wordpress/plugins/wp-fading-content-slider/
 * Description: A customizable JQuery content slider with CSS3 animations and fading effects
 * Version: 0.2.2
 * Author: MBA Multimedia
 * Author URI: http://www.mba-multimedia.com/
 * Licence: GPLv2
*/
class WpFadingContentSlider
{
	/*--------------------------------------------*
	 * Constructor
	*--------------------------------------------*/

	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	function __construct()
	{
		/* Generic functionalities of Wordpress plugins */

		// Load plugin text domain
		add_action( 'init', array( $this, 'plugin_textdomain' ) );

		// Register admin styles and scripts
		add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_scripts' ) );

		// Register site styles and scripts
		add_action( 'wp_enqueue_scripts', array( $this, 'register_plugin_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_plugin_scripts' ) );

		// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
		register_activation_hook( __FILE__, array( $this, 'activate' ) );
		register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );
		register_uninstall_hook( __FILE__, array( $this, 'uninstall' ) );

		/* Custom functionalities of the Fading Slider plugin */

		// Check for Post Thumbnail Support in the theme
		add_theme_support( 'post-thumbnails' );

		// Plugin custom functionalities
		add_action('admin_menu', array( $this, 'fadingslider_admin_menu' ) );
		add_action('admin_init', array( $this, 'fadingslider_admin_post_page' ) );
		add_action('save_post', array( $this, 'fadingslider_save_post' ) );

		// Shortcode : [fadingslider]
		add_shortcode("fadingslider", array( $this, 'fadingslider_shortcode' ) );

		// Plugin filters
		//add_filter( 'TODO', array( $this, 'filter_method_name' ) );

	} // end constructor

	/**
	 * Fired when the plugin is activated.
	 *
	 * @param	boolean	$network_wide	True if WPMU superadmin uses "Network Activate" action, false if WPMU is disabled or plugin is activated on an individual blog
	 */
	public function activate( $network_wide )
	{
		// TODO:	Define activation functionality here
	} // end activate

	/**
	 * Fired when the plugin is deactivated.
	 *
	 * @param	boolean	$network_wide	True if WPMU superadmin uses "Network Activate" action, false if WPMU is disabled or plugin is activated on an individual blog
	 */
	public function deactivate( $network_wide )
	{
		// TODO:	Define deactivation functionality here
	} // end deactivate

	/**
	 * Fired when the plugin is uninstalled.
	 *
	 * @param	boolean	$network_wide	True if WPMU superadmin uses "Network Activate" action, false if WPMU is disabled or plugin is activated on an individual blog
	 */
	public function uninstall( $network_wide )
	{
		// TODO:	Define uninstall functionality here
	} // end uninstall

	/**
	 * Loads the plugin text domain for translation
	 */
	public function plugin_textdomain()
	{
		$domain = 'wp-fading-content-slider-locale';
		$locale = apply_filters( 'plugin_locale', get_locale(), $domain );
		load_textdomain( $domain, WP_LANG_DIR.'/'.$domain.'/'.$domain.'-'.$locale.'.mo' );
		load_plugin_textdomain( $domain, FALSE, dirname( plugin_basename( __FILE__ ) ) . '/locale/' );
	} // end plugin_textdomain

	/**
	 * Registers and enqueues admin-specific styles.
	 */
	public function register_admin_styles()
	{
		wp_enqueue_style( 'wp-fading-content-slider-admin-styles', plugins_url( 'wp-fading-content-slider/css/admin.css' ) );
	} // end register_admin_styles

	/**
	 * Registers and enqueues admin-specific JavaScript.
	 */
	public function register_admin_scripts()
	{
		// wp_enqueue_script('jquery');
		// wp_enqueue_script( 'wp-fading-content-slider-admin-script', plugins_url( 'wp-fading-content-slider/js/admin.js' ) );
	} // end register_admin_scripts

	/**
	 * Registers and enqueues plugin-specific styles.
	 */
	public function register_plugin_styles()
	{
		wp_enqueue_style( 'wp-fading-content-slider-plugin-styles', plugins_url( 'wp-fading-content-slider/css/display.css' ) );
	} // end register_plugin_styles

	/**
	 * Registers and enqueues plugin-specific scripts.
	 */
	public function register_plugin_scripts()
	{
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'wp-fading-content-slider-plugin-script', plugins_url( 'wp-fading-content-slider/js/display.js' ) );
	} // end register_plugin_scripts

	/*--------------------------------------------*
	 * Core Functions
	*---------------------------------------------*/

	/**
	 * NOTE:  Actions are points in the execution of a page or process
	 *        lifecycle that WordPress fires.
	 *
	 *		  WordPress Actions: http://codex.wordpress.org/Plugin_API#Actions
	 *		  Action Reference:  http://codex.wordpress.org/Plugin_API/Action_Reference
	 *
	 */
	function fadingslider_admin_menu()
	{
		add_options_page(__('Fading Content Slider options', 'wp-fading-content-slider-locale'), __('WP Fading Content Slider', 'wp-fading-content-slider-locale'), 10, 'wp-fading-content-slider/views/admin.php');
	}

	function fadingslider_admin_post_page()
	{
		add_meta_box("fading_slider", __("Fading slider options", 'wp-fading-content-slider-locale'), array( $this, 'fading_slider_meta_box'), "post", "normal", "high");
		add_meta_box("fading_slider", __("Fading slider options", 'wp-fading-content-slider-locale'), array( $this, 'fading_slider_meta_box'), "page", "normal", "high");
	}

	function fading_slider_meta_box()
	{
		global $post;
		$custom = get_post_custom($post->ID);
		$fading_slider = $custom["fading_slider"][0];

		// HTML Output
		?>
		<div class="inside">
			<table class="form-table">
				<tr>
					<th><label for="fading_slider"><?php _e('Add to the content slider?', 'wp-fading-content-slider-locale'); ?></label></th>
					<td><input type="checkbox" name="fading_slider" value="1" <?php if($fading_slider == 1) { echo "checked='checked'";} ?>/></td>
				</tr>
	            <tr>
	            	<td colspan="2">
	            		<em><?php _e("Warning : Remember to add an 'Image thumbnail' for objects you want to add to the content slider", 'wp-fading-content-slider-locale'); ?></em>
	            	</td>
	            </tr>
			</table>
		</div>
		<?php
	}

	function fadingslider_save_post()
	{
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
			return $post_id;
		global $post;
		if( $post->post_type == "post" || $post->post_type == "page" )
		{
			update_post_meta( $post->ID, "fading_slider", $_POST["fading_slider"] );
		}
	}

	function fadingslider_shortcode($atts, $content = null)
	{
    	$this->get_slider_view();
	}

	function get_wp_generated_thumb( $thumb ) {
		$thumb = explode("\"", $thumb);
		return $thumb[5];
	}

	/**
	 * Show the slider to the front-end
	 */
	function get_slider_view()
	{
		$sort = get_option('sort'); if(empty($sort)){
			$sort = "post_date";
		}
		$order = get_option('order'); if(empty($order)){
			$order = "DESC";
		} // Non utilise
		$limit = get_option('limit'); if(empty($limit)){
			$limit = 350;
		} // Non utilise
		$points = get_option('points'); if(empty($points)){
			$points = "...";
		}
		$post_limit = get_option('limit_posts'); if(empty($limit_posts)){
			$limit_posts = "-1";
		}
		$auto_switch = get_option('auto_switch'); if(empty($auto_switch)){
			$auto_switch = "1";
		} // 1 = true, 0 = false
		$timeout = get_option('timeout'); if(empty($timeout)){
			$timeout = 5000;
		} // temps de transition par defaut

		$img_width = get_option('img_width');
		if(empty($img_width)) {
			$img_width = 580;
		}

		$img_height = get_option('img_height');
		if(empty($img_height)) {
			$img_height = 300;
		}

		// Get the slider content
		global $wpdb;
		global $post;

		$args = array( 'meta_key' => 'fading_slider',
				'meta_value'=> '1', // Seulement les objets dont la case est cochée dans le back
				'suppress_filters' => 0,
				'post_type' => array('post', 'page'),
				'orderby' => $sort,
				'order' => 'DESC', 	// DESC = Show last post first
				'numberposts'=> 4); // HTML Markup only allows 4 slides

		$myposts = get_posts( $args );

		if (function_exists('add_image_size')) {
			add_image_size( 'fading_slider', $img_width, $img_height, true ); // Miniatures des archives
		}

		/* PHP Generated Styles here */
		?>
		<style type="text/css">

			#fading_slider {
				background-color: #<?php $bg = get_option('fading_slider_bg'); if(!empty($bg)) {echo $bg;} else {echo "FFF";}?>;
				border: 8px solid #<?php $border = get_option('fading_slider_border'); if(!empty($border)) {echo $border;} else {echo "CCC";}?>;
				width: <?php $width = get_option('fading_slider_width'); if(!empty($width)) {echo $width;} else {echo "580";}?>px;
			}
		<?php

			$i = 1;
			foreach( $myposts as $post ) : setup_postdata($post);

				$custom = get_post_custom($post->ID);
				echo "/* ID POST : " . $post->ID . "*/";
				$thumb = $this->get_wp_generated_thumb( get_the_post_thumbnail( $post->ID ) );
				// $thumb = $this->get_wp_generated_thumb( get_the_post_thumbnail($post->ID, "fading_slider") );

				echo ".cr-container input.cr-selector-img-".$i.":checked ~ .cr-bgimg,
		.cr-bgimg div span:nth-child(".$i."){
		  background-image: url(".$thumb.");
		}\n";

				$i++;
			endforeach; wp_reset_postdata();

		?>
		</style>

		<div id="fading_slider">

    <section class="cr-container">

        <!-- boutons cliquables -->
        <input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1 current" checked/>
        <label for="select-img-1" class="cr-label-img-1">1</label>

      	<input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
        <label for="select-img-2" class="cr-label-img-2">2</label>

    	<input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
        <label for="select-img-3" class="cr-label-img-3">3</label>

    	<input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
        <label for="select-img-4" class="cr-label-img-4">4</label>

	    <div class="clr"></div>

		<!-- images (tranches) -->
		<div class="cr-bgimg">
			<div>
				<span>Tranche 1 - Image 1</span>
				<span>Tranche 1 - Image 2</span>
				<span>Tranche 1 - Image 3</span>
				<span>Tranche 1 - Image 4</span>
			</div>
			<div>
				<span>Tranche 2 - Image 1</span>
				<span>Tranche 2 - Image 2</span>
				<span>Tranche 2 - Image 3</span>
				<span>Tranche 2 - Image 4</span>
			</div>
			<div>
				<span>Tranche 3 - Image 1</span>
				<span>Tranche 3 - Image 2</span>
				<span>Tranche 3 - Image 3</span>
				<span>Tranche 3 - Image 4</span>
			</div>
			<div>
				<span>Tranche 4 - Image 1</span>
				<span>Tranche 4 - Image 2</span>
				<span>Tranche 4 - Image 3</span>
				<span>Tranche 4 - Image 4</span>
			</div>
		</div>

		<!-- titles -->
		<div class="cr-titles">

<?php
	$i = 1;
	foreach( $myposts as $post ) :	setup_postdata($post);

			// $custom = get_post_custom($post->ID);
			$thumb = $this->get_wp_generated_thumb( get_the_post_thumbnail($post->ID, "fading_slider") );
?>

			<h3>
				<?php
					$category = get_the_category();
					echo "<span>".$category[0]->cat_name."</span>\n";
				?>
				<span><a class="lienArticle" href="<?php the_permalink();?>" title="<?php _e("Read post", "wp-fading-content-slider-locale");?>"><?php the_title();?></a></span>
            	<a class="lienImage" href="<?php the_permalink();?>" title="<?php _e("Read post", "wp-fading-content-slider-locale");?>"></a>
			</h3>

<?php
	$i++;
	endforeach; wp_reset_postdata();
?>

        </div>

    </section>

</div>

<script type="text/javascript">
	var $j = jQuery.noConflict();
	var i = 2; // premier switch vers image 2

	function switchImage()
	{
		$j(".current").removeAttr('checked');
		$j(".current").removeClass('current');

		$j("#select-img-"+i).addClass('current');
		$j("#select-img-"+i).attr('checked', true);

		if (i==4)
		{
			i=1; // retour au debut sur image 1
		}
		else
		{
			i++; // image suivante
		}
	}

	$j(document).ready(function(){ //on lance l'annimation en boucle toute les 5 secondes (5000 miliseconde)
		<?php if ($auto_switch == "1") echo "setInterval('switchImage();', ".$timeout.");\n"; ?>
	});

</script>

		<?php

		// TODO This should be prettier in the next version
		// include ( plugins_url() . '/wp-fading-content-slider/views/display.php' );
	}

	/**
	 * NOTE:  Filters are points of execution in which WordPress modifies data
	 *        before saving it or sending it to the browser.
	 *
	 *		  WordPress Filters: http://codex.wordpress.org/Plugin_API#Filters
	 *		  Filter Reference:  http://codex.wordpress.org/Plugin_API/Filter_Reference
	 *
	 */
	function filter_method_name()
	{
		// TODO:	Define your filter method here
	} // end filter_method_name

} // end class

$wp_fading_content_slider = new WpFadingContentSlider();

function get_wp_fading_content_slider()
{
	global $wp_fading_content_slider;
	echo $wp_fading_content_slider->get_slider_view();
}