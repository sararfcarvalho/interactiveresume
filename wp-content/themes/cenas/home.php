<?php
/**
 * Template Name: Homepage
 */

if (!class_exists('Timber')) {
    echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
    return;
}

$context = Timber::get_context();
$pi = new TimberPost();
$produtos = new TimberPost($pi->produtos);
$context['post'] = $pi->title();

Timber::render(array('home.twig'), $context);


