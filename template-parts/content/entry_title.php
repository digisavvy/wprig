<?php
/**
 * Template part for displaying a post's title
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$hide_title = get_field( 'dgs_remove_title' );

if ( is_singular( get_post_type() ) ) {
	if ( empty( $hide_title ) ) {
		the_title( '<h1 class="entry-title">', '</h1>' );
	}
} else {
	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
}
