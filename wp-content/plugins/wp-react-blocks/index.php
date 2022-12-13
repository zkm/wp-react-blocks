<?php
/**
 * Plugin Name:       WP React Blocks
 * Description:       WP React Blocks Library
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Zach Schneider
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       hero
 *
 * @package           wp-react-block
 */

// require_once __DIR__ . '/hero/index.php';
require_once __DIR__ . '/page/page.php';
require_once __DIR__ . '/section/section.php';

// Add wp-react-block category
function wp_react_blocks_categories( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'wp-react-blocks',
                'title' => __( 'WP React Blocks', 'wp-react-blocks' ),
                'icon'  => 'wordpress',
            ),
        )
    );
}
add_filter( 'block_categories', 'wp_react_blocks_categories', 10, 2 );

// Remove all other blocks and only use the ones listed below
function wp_react_blocks_allowed_block_types( $allowed_block_types, $post ) {
    return array( 'core/paragraph', 'core/paragraph', 'wp-react-blocks/hero', 'wp-react-blocks/page', 'wp-react-blocks/section' );
}
 
add_filter( 'allowed_block_types', 'wp_react_blocks_allowed_block_types', 10, 2 );

