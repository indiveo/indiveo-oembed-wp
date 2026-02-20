=== Indiveo oEmbed ===
Contributors: indiveo
Tags: oembed, video, embed, media
Requires at least: 6.1
Tested up to: 6.9
Stable tag: 1.0.0
Requires PHP: 8.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily embed Indiveo videos using the oEmbed standard. No additional features.

== Description ==

Indiveo oEmbed makes embedding **Indiveo-hosted videos** via the oEmbed standard simple.  
Just place an oEmbed-compatible Indiveo video URL in your content and WordPress will automatically convert it into an embedded video.

This plugin adds no extra functionality and has no settings; it is purely intended to support or force oEmbed for Indiveo videos on themes or installations where this is not enabled by default.

== Installation ==

1. Upload `indiveo-oembed` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place an oEmbed-compatible Indiveo video URL in your post or page

== Frequently Asked Questions ==

= How do I embed a video? =

Simply paste an Indiveo URL (such as `https://indiveo.services/embed/video123`) on its own line in the WordPress editor.
The URL will automatically be converted into an embedded video player.

= Does this work in all WordPress editors? =

Yes, the plugin works in both the Block Editor (Gutenberg) and the Classic Editor.
Just make sure the URL is placed on its own line.

= Can I customize the video settings? =

The plugin does not provide its own settings.
The video display and behavior are determined by the Indiveo service and your WordPress theme’s styling.

= Does this work with page builders? =

Yes, as long as the page builder supports oEmbed.
Most modern page builders such as Elementor, Beaver Builder, and Divi support this functionality.

= What if the video does not appear? =

- Check that the URL correctly starts with `https://indiveo.services/embed/`
- Make sure the URL is on its own line (not inserted as a hyperlink)
- Verify that the plugin is activated
- Try refreshing the page

= What does this plugin do exactly? =

The plugin ensures that you can easily embed Indiveo videos using the oEmbed standard, without any additional settings.

= Does this also work for media other than video? =

oEmbed can technically be used for other media types (depending on the provider), but the main purpose of this plugin is video embedding.

= Are there any settings I need to configure? =

No. The plugin works immediately after activation and does not include any settings pages or configuration options.

== Changelog ==

= 1.0.0 =
* Initial release – simple oEmbed support for Indiveo videos.

== Upgrade Notice ==

= 1.0.0 =
First stable version. Provides simple Indiveo video embeds via oEmbed.