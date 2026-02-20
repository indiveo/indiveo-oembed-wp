<?php

/**
 * Plugin Name: Indiveo oEmbed
 * Text Domain: indiveo-oembed
 * Description: Easily embed Indiveo videos using the oEmbed standard. No additional features.
 * Version: 1.0.0
 * Author: indiveo
 * Author URI: https://indiveo.nl
 * Requires at least: 6.1
 * Requires PHP: 8.2
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined( 'ABSPATH')) exit;

function add_oembed_indiveo()
{
    wp_oembed_add_provider('https://indiveo.services/embed/*', 'https://indiveo.services/oembed');
    wp_oembed_add_provider('https://indiveo.services/divis/weblink/*', 'https://indiveo.services/oembed');
}

add_action('init', 'add_oembed_indiveo');