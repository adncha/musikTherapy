=== Argent ===

Contributors: automattic
Tags: black, gray, white, one-column, custom-background, custom-header, custom-menu, rtl-language-support, translation-ready, dark, featured-images, responsive-layout, threaded-comments

Requires at least: 4.0
Tested up to: 4.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Argent Theme, Copyright 2015 Automattic
Argent is distributed under the terms of the GNU GPL

== Description ==

Argent is a clean and modern portfolio theme, geared towards creative professionals like designers, artists, and photographers. With its simple homepage template featuring portfolio projects, Argent aims to draw viewers right at what matters most: your wonderful work.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= How to setup the front page like the demo site? =

The demo site URL: http://argentdemo.wordpress.com/?demo

When you first activate Argent, your homepage will display posts in a traditional blog format. If you'd like to use the Front Page Template instead, follow these steps:

1. Create or edit a page, and then assign it the Front Page Template from the Page Attributes module.
2. Go to Settings > Reading and set "Front page displays" to "A static page".
3. Select the page you just assigned the Front Page template to as "Front page" and then choose another page as "Posts page" to serve your blog posts.

Now that you have set your home page, you can start customizing by navigating to Customize → Theme Options.

The Front Page Template consists of two sections: Static Page and Portfolio.

Full Front Page setup instructions can be found at https://theme.wordpress.com/themes/argent/

= How to set up Portfolio? =

Argent takes advantage of the Jetpack's Portfolio feature (http://jetpack.me/support/custom-content-types/), offering unique layouts and organization for your portfolio projects. To add a project, go to Portfolio → Add New in your WP Admin dashboard.

# Projects #

You can include a full-width image carousel in your projects. Argent will take the first gallery in your project and turn it into a carousel automatically. To set it up, follow these steps:

1. Create a new Portfolio project.
2. Insert an image gallery into project content. The placement of gallery inside project content does not matter, the gallery will always be displayed directly below project title.
3. Continue adding content to your project – you can add more images, pull quotes, videos etc.
4. Be sure to add featured image to your projects. Although it won’t be displayed in single project view, it’s used on the portfolio archives page (see below).
5. Save or publish your project.

# Portfolio archives page #

All projects are displayed on the portfolio archive page in grid layout. This page can be added to a Custom Menu using the Links Panel.

The portfolio archive page can be found at http://mygroovysite.wordpress.com/portfolio/ — just replace http://mygroovysite.wordpress.com/ with the URL of your website.


== Quick Specs (all measurements in pixels) ==

	1. The main column width is 660, except in single posts, where it’s 490.
	2. A widget in the Footer Widget Area is 300.
	3. Featured Images for posts should be at least 660 wide.

== Credits ==

* slick.js script (https://github.com/kenwheeler/slick) by Ken Wheeler distributed under the MIT license.
* Screenshot image by Unsplash (http://pixabay.com/en/macbook-notebook-apple-inc-336651/), licensed under CC0 Public Domain (http://creativecommons.org/publicdomain/zero/1.0/deed.en)

== Changelog ==

= 1.0.5 - August 3, 2015 =
* Remove unneeded call to WordPress.com specific file that caused a fatal error.

= 1.0.4 - July 23 2015 =
* Add missing styling for <b> and <strong> elements.

= 1.0.3 - July 20 2015 =
* Fix array indices error in for older versions of PHP.

= 1.0.2 - July 13 2015 =
* Added missing license and copyright info for Slick script.

= 1.0.1 - June 30 2015 =
* Removed include for updater.php script from functions.php.
* Fixed minor textdomain issues.

= 1.0 - May 28 2015 =
* Initial release.
