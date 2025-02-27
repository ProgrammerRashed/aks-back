<?php
add_action('init', 'create_post_type');

function create_post_type()
{
    // Members
            register_post_type(
            'members',
            array(
            'labels' => array(
                'name' => __('Members'),
                'singular_name' => __('Member')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions', 'excerpt', 'author', 'page-attributes'),
            'rewrite' => array('slug' => 'members'),
            'menu_icon' => 'dashicons-admin-users',
            'taxonomies' => array('category', 'post_tag'),
            'show_in_graphql' => true,
            'graphql_single_name' => 'member',
            'graphql_plural_name' => 'members',
            ));

             // Outlets
            register_post_type(
            'outltes',
            array(
                'labels' => array(
                    'name' => __('Outlets'),
                    'singular_name' => __('Outlet')
                ),
                'public' => true,
                'has_archive' => true,
                'show_in_rest' => true,
                'supports' => array( 'title','revisions' ),
                'rewrite' => array('slug' => 'outlets'),
                'menu_icon' => 'dashicons-admin-home',
                'taxonomies' => array('category', 'post_tag'),
                'show_in_graphql' => true,
                'graphql_single_name' => 'outlet',
                'graphql_plural_name' => 'outlets',
            ));


            // JOBS
            register_post_type(
            'jobs',
            array(
            'labels' => array(
                'name' => __('Jobs'),
                'singular_name' => __('Job')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array( 'title','editor', 'revisions' ),
            'rewrite' => array('slug' => 'jobs'),
            'menu_icon' => 'dashicons-id-alt',
            'taxonomies' => array('category', 'post_tag'),
            'show_in_graphql' => true,
            'graphql_single_name' => 'job',
            'graphql_plural_name' => 'jobs',
            ));

             // Resources
             register_post_type(
            'resources',
            array(
            'labels' => array(
                'name' => __('Resources'),
                'singular_name' => __('Resource')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'thumbnail', 'revisions'),
            'rewrite' => array('slug' => 'resources'),
            'menu_icon' => 'dashicons-media-document',
            'taxonomies' => array('category', 'post_tag'),
            'show_in_graphql' => true,
            'graphql_single_name' => 'resource',
            'graphql_plural_name' => 'resources',
            ));

}

