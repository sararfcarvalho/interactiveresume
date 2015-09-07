<?php

global $post;

$template = get_post_meta($post->ID, 'page_template', true);

$context  = Timber::get_context();
$post = new TimberPost();

$context['post'] = $post;

if ($template) {
    $context['template'] = $template;

    return Timber::render('template-page.twig', $context);
}

Timber::render(array('pages/' . $post->post_name . '.twig', 'page.twig'), $context);

