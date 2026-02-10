<?php

/**
 * Plugin Name: Indiveo oEmbed
 * Text Domain: indiveo-oembed-wp
 * Description: Enables the ability to paste an Indiveo URL in it's own line and for oEmbed to make it play.
 * Version: 1.0.0
 * Author: indiveo
 * Author URI: https://indiveo.nl
 * Requires at least: 6.1
 * Requires PHP: 8.2
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

function add_oembed_indiveo()
{
    wp_oembed_add_provider('https://indiveo.services/embed/*', 'https://indiveo.services/oembed');
    wp_oembed_add_provider('https://indiveo.services/divis/weblink/*', 'https://indiveo.services/oembed');
}

add_action('init','add_oembed_indiveo');