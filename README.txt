=== Image Byline ===
Contributors: devbackroom
Tags: image byline, image credit, byline, credit, image, featured, thumbnail, source, media
Donate link: https://www.devbackroom.com/donate
Requires at least: 4.6.0
Tested up to: 5.4.1
Requires PHP: 7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

This plugin adds a byline credit to images.

== Description ==
This plugin adds a byline credit to images and other media items. You can do the following:

* Add a byline credit field when uploading media.
* Automatically display the byline credit under featured images and other images in your blog.
* Include an optional link to the web page of the content owner or creator.
* Add freeform byline credit via a shortcode e.g. `[byline]Picture by Green Ant Media[/byline]` for more complex attribution or for a variety of media types.
* Use a list of users with a specified role or a simple list to autocomplete the names on the Byline field.
* Easily apply your own styles to the byline credit.

== Installation ==
1. Upload `image-byline.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the \"Plugins\" menu in WordPress

== Frequently Asked Questions ==
= Can I add a byline credit to an audio embed? =

Yes. There is a shortcode that can be used in the content of a blog or a page. The shortcode takes the format `[byline]Picture by Green Ant Media[/byline]`.

= Does the byline credit work with the classic editor? =

Yes. There is a shortcode that can be used in the content of a blog or a page. The shortcode takes the format `[byline]Picture by Green Ant Media[/byline]`.

= Does the byline credit work with Gutenberg image block? =

Yes. The byline credit is automatically added to the caption for the core image block.

= Are other Gutenberg block supported? =

The credit is not automatically added to other blocks however you can use the shortcode to place a byline credit under the media. The shortcode takes the format `[byline]Picture by Green Ant Media[/byline]`.

= Why is the byline credit not showing under the featured images? =

The byline credit gets added to the caption so if your theme is not outputting the caption for the featured image you will not see the credit. You can output the caption in your template or theme functions by using e.g. `the_post_thumbnail_caption(get_the_ID());`

= Can I change how the byline credit looks? =

You can change how the byline credit looks by adding some custom css to your theme.

= How can I keep the byline credit but not the caption? =

You can show the byline credit without the caption by adding some custom css to your theme.

== Screenshots ==
1. Byline/credit on a post featured image.
2. Byline and Byline Link fields in the Media Library attachment editor page.
3. Image Byline Options page in dashboard.

== Changelog ==
= 1.0.0 =
* Initial version
