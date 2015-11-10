=== WP Fading Content Slider ===
Plugin Author: wp-maverick
Contributors: wp-maverick, mbamultimedia
Tags: slider, animation, jquery
Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: 0.2.2

A customizable JQuery content slider with CSS3 animations and fading effects.

== Description ==

WP Fading Content Slider is a plugin which adds automatically a content slider of your last posts where you want on your Wordpress blog or website.

You can see it in action on [MBA Multimedia's blog](http://blog.mba-multimedia.com)

This plugin is written upon the code of [Manoella Ilic](http://tympanus.net/codrops/author/crnacura/), you can see the simple JQuery and CSS version [here](http://tympanus.net/codrops/2012/01/17/sliding-image-panels-with-css3/).

Transitions between slides are made using a powerfull combination of CSS3 and JQuery to display a beautiful fading effect.

= Roadmap: =

1. Make it responsive
1. etc.

= Plugin's Official Site =

You'll find more informations on the WP Parallax Content Slider plugin page [here](http://www.mba-multimedia.com/en/innovation/wordpress/plugins/wp-fading-content-slider/).

== Frequently Asked Questions ==

= How can I add an article or page in the slider? =

Once you have activated the plugin, a new zone will appear in the page/post edit section of wordpress.

You will be able to decide if posts or pages have to be displayed in the slider

= What image does the plugin use to display the slides background? =

Both for posts and for pages, the slider will use the featured image.

Posts or pages added to the slider without featured image will display blank slides.

= What size do I have to use for the featured image? =

The best choice is to add a featured image which has the exact size of your slider minus the margins you want to see (See "image width" and "image height" parameters in the admin panel).

The plugin add a new thumbnail size in wordpress to create automatically featured images with the right sizes.

If your image file is larger, the plugin will crop it (Using hard crop mode: [see the codex](http://codex.wordpress.org/Function_Reference/add_image_size))

= Can I change the number of slides displayed in the slider? =

Unfortunately, no. The slider was packaged "as is" and was designed to display exactly 4 slides.

You will then have to add 4 posts or pages after the installation to make it work properly.

== Installation ==

To install the plugin you must follow these 4 simple steps:

1. Upload the `wp-fading-content-slider` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place the following shortcode in your templates: `[fadingslider]`
1. Customize your slider with the option panel in Wordpress admin section

== Screenshots ==

1. The slider displayed on [MBA Multimedia's blog](http://blog.mba-multimedia.com/)
2. The new box in the post/page edit screen
3. The plugin admin panel

== Changelog ==

= 0.2.1 =
* Bug fix with post datas

= 0.2 =
* Complete code refactoring
* Add english and french translations

= 0.1 =
* First plugin version, packaged "as is" from the [MBA Multimedia's blog](http://blog.mba-multimedia.com)
