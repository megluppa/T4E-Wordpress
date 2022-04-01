<?php
/*
Plugin Name: WWW Custom Post Types
Description: WWW Custom Post Types
Text Domain: cpts
Author: WWW Stuudio
*/

function init_custom_post_types()
{
    $custom_post_types = [
        [
            'plural_type_name'   => 'News',
            'singular_type_name' => 'News',
            'post_type_slug' => 'news',
            'args' => [
                'menu_icon' => 'dashicons-visibility',
                'show_in_graphql' => true,
                'graphql_single_name' => 'news',
                'graphql_plural_name' => 'newss',
                'slug' => 'news',
                'with_front' => false,
            ],
        ],
    ];

    $controller = new custom_post_types($custom_post_types);
    $controller->register_all_types();
}

class custom_post_types
{
    public function __construct($post_types)
    {
        $this->post_types = $post_types;
        $this->namespace = 'project-cpts';
    }

    public function register_type($options)
    {
        $labels = array(
            'name'                  => _x($options['plural_type_name'], 'Post Type General Name', $this->namespace),
            'singular_name'         => _x($options['singular_type_name'], 'Post Type Singular Name', $this->namespace),
            'menu_name'             => __($options['plural_type_name'], $this->namespace),
            'name_admin_bar'        => __($options['plural_type_name'], $this->namespace),
            'archives'              => __($options['singular_type_name'] . ' Archives', $this->namespace),
            'attributes'            => __($options['singular_type_name'] . ' Attributes', $this->namespace),
            'parent_item_colon'     => __('Parent ' . $options['singular_type_name'] . ':', $this->namespace),
            'all_items'             => __('All ' . $options['plural_type_name'], $this->namespace),
            'add_new_item'          => __('Add New ' . $options['singular_type_name'], $this->namespace),
            'add_new'               => __('Add New', $this->namespace),
            'new_item'              => __('New ' . $options['singular_type_name'], $this->namespace),
            'edit_item'             => __('Edit ' . $options['singular_type_name'], $this->namespace),
            'update_item'           => __('Update ' . $options['singular_type_name'], $this->namespace),
            'view_item'             => __('View ' . $options['singular_type_name'], $this->namespace),
            'view_items'            => __('View ' . $options['plural_type_name'], $this->namespace),
            'search_items'          => __('Search ' . $options['singular_type_name'], $this->namespace),
            'not_found'             => __('Not found', $this->namespace),
            'not_found_in_trash'    => __('Not found in Trash', $this->namespace),
            'featured_image'        => __('Featured Image', $this->namespace),
            'set_featured_image'    => __('Set featured image', $this->namespace),
            'remove_featured_image' => __('Remove featured image', $this->namespace),
            'use_featured_image'    => __('Use as featured image', $this->namespace),
            'insert_into_item'      => __('Insert into ' . $options['singular_type_name'], $this->namespace),
            'uploaded_to_this_item' => __('Uploaded to this ' . $options['singular_type_name'], $this->namespace),
            'items_list'            => __($options['plural_type_name'] . ' list', $this->namespace),
            'items_list_navigation' => __($options['plural_type_name'] . ' list navigation', $this->namespace),
            'filter_items_list'     => __('Filter ' . $options['plural_type_name'] . ' list',
            $this->namespace),
            'with_front' => false,
        );

        $args = array(
            'label'                 => __($options['singular_type_name'], $this->namespace),
            'description'           => __($options['plural_type_name'], $this->namespace),
            'labels'                => $labels,
            'supports'              => ['title', 'editor','page-attributes', 'thumbnail', 'revisions'],
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'show_in_rest'          => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-admin-site',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'with_front' => false,
        );


        if (isset($options['args'])) {
            foreach ($options['args'] as $key => $value) {
                $args[$key] = $value;
            }
        }

        register_post_type($options['post_type_slug'], $args);
    }

    public function register_all_types()
    {
        foreach ($this->post_types as $options) {
            $this->register_type($options);
        }
    }
}

add_action('init', 'init_custom_post_types', 0);
