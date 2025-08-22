<?php
/*
Plugin Name:  DI Container
Description:  Dependency Injection Container for WordPress.
Version:      0.2.0
Author:       Total Design
Author URI:   https://www.totaldesign.com/
License:      MIT License
*/

global $container, $tdContainer;
$tdContainer = $container = new League\Container\Container();

add_action('plugins_loaded', function () use ($container) {
    do_action('init_container', $container);
}, -PHP_INT_MAX);
