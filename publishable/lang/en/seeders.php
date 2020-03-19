<?php

return [
    'data_rows'  => [
        'id'               => 'ID',
        'status'           => 'Status',
        'order'            => 'Order',
        'title'            => 'Title',
        'subtitle'            => 'Subtitle',
        'slug'             => 'Slug',
        'key'              => 'Key',
        'color'            => 'Color',
        'link'             => 'Link',
        'options'          => 'Options',
        'url_paths'        => 'URL paths Rules',
        'show_on_all'      => 'Show on ALL pages, except listed',
        'show_only'        => 'Show only on listed pages',
        'page_urls'        => 'Page URLs',
        'region_key'       => 'Region key',
        'block_key'        => 'Block key',
        'form_key'         => 'Form key',
        'region_position'  => 'Region position',
        'block_content'    => 'Block content',
        'form_content'     => 'Form content',
        'images_files'     => 'Images / Files',
        'content'          => 'Content',
        'language_key'     => 'Language key',
        'english'          => 'English',
        'russian'          => 'Russian',
        'setting_name'     => 'Setting name',
        'setting_group'    => 'Setting group',
        'created_at'       => 'Created At',
        'updated_at'       => 'Updated At',
    ],
    'data_types' => [
        'blocks'     => [
            'singular' => 'Block',
            'plural'   => 'Blocks',
        ],
        'block_regions'     => [
            'singular' => 'Region',
            'plural'   => 'Regions',
        ],
        'forms'     => [
            'singular' => 'Form',
            'plural'   => 'Forms',
        ],
        'localizations'     => [
            'singular' => 'Localization',
            'plural'   => 'Localizations',
        ],
        'site_settings'     => [
            'singular' => 'Site settings',
            'plural'   => 'Site setting',
        ],
    ],
    'menu_items' => [
        'content' => 'Content',
        'block_and_widgets' => 'Blocks and Widgets',
        'regions' => 'Regions',
        'forms' => 'Forms',
        'localizations' => 'Localizations',
        'site_settings' => 'Site settings',
    ],
    'settings'   => [
        'general' => [
            'title' => 'General settings',
            'section_main_title' => 'Base settings',
            'site_title' => 'Site title',
            'site_description' => 'Site description',

            'section_pages' => 'Special pages bindings',
            'site_home_page' => 'Home regular page ID',
            'site_403_page' => '404 error system page ID',
            'site_404_page' => '404 error system page ID',

            'section_system' => 'System settings',
            'site_app_name' => 'Site APP Name',
            'site_root_url' => 'Site URL',
            'site_debug_mode' => 'Debug mode',
            'site_debug_mode_on' => 'Enabled',
            'site_debug_mode_off' => 'Disabled',
        ],
        'mail' => [
            'title' => 'Mail',
            'to_address' => 'Default address for site emails',
            'from_name' => 'From name',
            'from_address' => 'From address',
            'section_transport' => 'E-Mail transport',
            'driver' => 'Mail driver',
            'host' => 'Host address',
            'port' => 'Port number',
            'username' => 'User account name',
            'password' => 'Password',
            'encryption' => 'Encryption',
            'test_mail' => 'Send test mail',
        ],

        'seo' => [
            'title' => 'SEO',
            'seo_title' => 'Default page title',
            'meta_description' => 'Default page description',
            'meta_keywords' => 'Default page keywords',
        ],

        'theme' => [
            'title' => 'Theme',
            'logo' => 'Site logo',
        ],
    ],
];
