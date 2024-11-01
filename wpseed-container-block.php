<?php
/**
 * Plugin Name: WPSeed Container Block
 * Description: Adds a container block to Gutenberg.
 * Author:			Flurin Dürst
 * Version:			1.0
 * License:     GPLv2
 * Text Domain: wpseed-container
 *
 */

 /**
 * WPSeed Container Block
 * Copyright (C) 2019 Flurin Dürst, flurinduerst.ch
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 3 as published
 * by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'dist/init.php';
