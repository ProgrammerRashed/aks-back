<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;
use WpGraphQLCrb\Container as WpGraphQLCrbContainer;

add_action('carbon_fields_register_fields', 'headless_register_components');

function headless_register_components()
{
    WpGraphQLCrbContainer::register(

        // Hero
        Block::make(__('Hero', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Hero Block</h2>'),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('complex', 'hero_items', __('Hero Items', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('text', 'title', __('Title', 'nh')),
                        Field::make('file', 'image', __('Image'))
                            ->set_value_type('url'),
                    ))
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Hero Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

        // Secondary Hero
        Block::make(__('Secondary Hero', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Secondary Hero Block</h2>'),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('text', 'page', __('Page Name', 'nh')),
                Field::make('file', 'image', __('Image'))
                    ->set_value_type('url'),
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Secondary Hero Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

        // ABOUT US STORY BLOCK 
        Block::make(__('About Us Story', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>About Us Story Block</h2>'),

                Field::make('text', 'section_title', __('Section Title', 'nh')),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('text', 'description', __('Description', 'nh')),
                Field::make('text', 'btn_text', __('Button Text', 'nh')),
                Field::make('text', 'btn_link', __('Button Link', 'nh')),
                Field::make('text', 'section_classname', __('Section Classname', 'nh')),


            ))
            ->set_icon('star-filled')
            ->set_keywords([__('About Us Story Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),


        // ABOUT US STORY BLOCK 
        Block::make(__('Mission Vision', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Mission Vision Block</h2>'),

                Field::make('text', 'section_title', __('Section Title', 'nh')),
                Field::make('text', 'mission_title', __('Mission Title', 'nh')),
                Field::make('text', 'mission_description', __('Mission Description', 'nh')),
                Field::make('text', 'vision_title', __('Vision Title', 'nh')),
                Field::make('text', 'vision_description', __('Vision Description', 'nh')),
                Field::make('file', 'image', __('Image'))
                    ->set_value_type('url'),

            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Mission Vision Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),




        // At a Glance
        Block::make(__('At A Glance', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>At A Glance Block</h2>'),
                Field::make('text', 'title', __('Section Title', 'nh')),
                Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
                Field::make('checkbox', 'slider_component', 'Need Slider')
                    ->set_option_value('true'),
                Field::make('complex', 'glance_items', __('Glance Items', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('file', 'image', __('Image'))
                            ->set_value_type('url'),
                        Field::make('text', 'details', __('Details', 'nh')),
                    ))
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('At A Glance Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),


        // 50 50 CTA / SIDE BY SIDE WITH CTA 
        Block::make(__('Side By Side CTA', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Side By Side CTA</h2>'),
                Field::make('text', 'title', __('Section Title', 'nh')),
                Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
                Field::make('text', 'details', __('Details', 'nh')),
                Field::make('file', 'image', __('Image'))
                    ->set_value_type('url'),
                Field::make('text', 'btn_title', __('Button Title', 'nh')),
                Field::make('text', 'btn_url', __('Button URL', 'nh')),
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Side By Side CTA Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),


        // WHY CHOOSE US 
        Block::make(__('Why Choose Us', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Why Choose Us Block</h2>'),
                Field::make('text', 'title', __('Section Title', 'nh')),
                Field::make('text', 'body_text', __('Body Text', 'nh')),
                Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
                Field::make('file', 'image', __('Image'))
                    ->set_value_type('url'),
                Field::make('complex', 'choose_us_items', __('Choose Us Items', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('text', 'question', __('Question', 'nh')),
                        Field::make('text', 'answer', __('Answer', 'nh')),
                    ))
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Why Choose Us Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),


            // AKS STORY
        Block::make(__('Aks Story', 'nh'))
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>AKS Story Block</h2>'),
            Field::make('text', 'title', __('Section Title', 'nh')),
            Field::make('text', 'descripton', __('Description', 'nh')),
            Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
            Field::make('complex', 'story_items', __('Story Items', 'nh'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'title', __('Title', 'nh')),
                    Field::make('text', 'label', __('Label', 'nh')),
                    Field::make('file', 'image', __('Image'))
                    ->set_value_type('url'),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Aks Story Custom Block', 'nh')])
        ->set_description(__('Custom Block', 'nh'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),


        // About us (Home)
        Block::make(__('About Us', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>About Us Block</h2>'),

                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('file', 'icon', __('Icon'))
                    ->set_value_type('url'),

                Field::make('text', 'counter_number', __('Counter Number', 'nh')),
                Field::make('text', 'counter_prefix', __('Counter Prefix', 'nh')),
                Field::make('text', 'counter_description', __('Counter Description', 'nh')),

                Field::make('text', 'button_title', __('Button Title', 'nh')),
                Field::make('text', 'button_url', __('Button URL', 'nh')),

            ))
            ->set_icon('star-filled')
            ->set_keywords([__('About Us Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),


        // Statistics (Home)
        Block::make(__('Statistics', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Statistics Block</h2>'),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
                Field::make('text', 'inner_classnames', __('Inner Classnames', 'nh')),
                Field::make('complex', 'statistics_items', __('Statistics Items', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('text', 'title', __('Title', 'nh')),
                        Field::make('text', 'number', __('Number', 'nh')),
                        Field::make('text', 'prefix', __('Prefix', 'nh')),
                        Field::make('text', 'description', __('Description', 'nh')),
                        Field::make('image', 'image', __('Icon'))
                        ->set_value_type('url'),
                    ))
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Statistics Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

        // Video (Home)
        Block::make(__('Video', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Video Block</h2>'),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
                Field::make('text', 'video', __('Video', 'nh')),
                Field::make('file', 'image', __('Image'))
                    ->set_value_type('url'),
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Video Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

            // Full Width Video
            Block::make(__('Full Width Video', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Full Width Video Block</h2>'),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
                Field::make('text', 'video', __('Video', 'nh')),
                Field::make('file', 'image', __('Image'))
                    ->set_value_type('url'),
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Full Width Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),
        // How we Help (Home)
        Block::make(__('How we Help', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>How we Help Block</h2>'),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('complex', 'help_items', __('Help Items', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('text', 'title', __('Title', 'nh')),
                        Field::make('file', 'image', __('Image'))
                            ->set_value_type('url'),
                        Field::make('text', 'description', __('Description', 'nh')),
                        Field::make('text', 'button_title', __('Button Title', 'nh')),
                        Field::make('text', 'button_url', __('Button URL', 'nh')),
                    ))
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('How we Help Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),


        // Coverge (Home)
        Block::make(__('Coverge', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Coverge Block</h2>'),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('text', 'description', __('Description', 'nh')),
                Field::make('text', 'cta_description', __('CTA Description', 'nh')),
                Field::make('text', 'cta_url', __('CTA URL', 'nh')),
                Field::make('radio', 'page', __('Select Page', 'nh')) 
                ->add_options(array(
                    'homepage' => __('Homepage', 'nh'),
                    'service' => __('Service Page', 'nh'),
                    'diagnostics' => __('Diagnostics Page', 'nh'),
                )),
                Field::make('complex', 'districts', __('Districts', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('text', 'title', __('Title', 'nh')),
                        Field::make('complex', 'offices', __('Offices', 'nh'))
                            ->set_layout('tabbed-horizontal')
                            ->add_fields(array(
                                Field::make('text', 'title', __('Title', 'nh')),
                                Field::make('text', 'address', __('Address', 'nh')),
                                Field::make('text', 'email', __('Email', 'nh')),
                                Field::make('text', 'phone', __('Phone', 'nh')),
                            )),
                    )),

            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Coverge Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),


        // Partners (Home)
        Block::make(__('Partners', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Partners Block</h2>'),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('complex', 'partners_items', __('Partners Items', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('text', 'title', __('Title', 'nh')),
                        Field::make('file', 'image', __('Image'))
                            ->set_value_type('url'),
                    ))
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Partners Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

        // Our Investors (Home)
        Block::make(__('Our Investors', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Our Investors Block</h2>'),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('complex', 'investors_items', __('Investors Items', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('text', 'title', __('Title', 'nh')),
                        Field::make('file', 'image', __('Image'))
                            ->set_value_type('url'),
                    ))
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Our Investors Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

        // Posts (Home)
        Block::make(__('Posts', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Posts Block</h2>'),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('complex', 'posts_items', __('Posts Items', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('text', 'title', __('Title', 'nh')),
                    ))
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Posts Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

        // CTA
        Block::make(__('CTA', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>CTA Block</h2>'),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('text', 'description', __('Description', 'nh')),
                Field::make('text', 'button_title', __('Button Title', 'nh')),
                Field::make('text', 'button_url', __('Button URL', 'nh')),
                Field::make('file', 'image', __('Image'))
                    ->set_value_type('url'),

            ))
            ->set_icon('star-filled')
            ->set_keywords([__('CTA Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

              // Members
              Block::make(__('Members', 'nh'))
              ->add_fields(array(
                  Field::make('html', 'crb_information_text')
                      ->set_html('<h2>Members Block</h2>'),
                  Field::make('text', 'title', __('Title', 'nh')),
                  Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
                  Field::make('text', 'inner_section_classnames', __('Inner Section Classnames', 'nh')),
                  Field::make('radio', 'memebers_type', __('Select Members', 'nh')) 
                      ->add_options(array(
                          'board-of-director' => __('Board of Director', 'nh'),
                          'management-team' => __('Management Team', 'nh'),
                          'doctors' => __('Doctors', 'nh'),
                      )),
              ))
              ->set_icon('star-filled')
              ->set_keywords([__('Members Custom Block', 'nh')])
              ->set_description(__('Custom Block', 'nh'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

        // Blog Items 
        Block::make(__('Blog Items', 'nh'))
            ->add_fields(array(
                // add html field to display information in the admin
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Blog Items Block</h2>'),
                Field::make('text', 'title', __('Title', 'nh')),
                Field::make('text', 'btn_title', __('Button Title', 'nh')),
                Field::make('text', 'btn_url', __('Button URL', 'nh')),
                Field::make('text', 'section_classname', __('Section Classname', 'nh')),
                Field::make('association', 'items', __('Select blogs', 'nh'))
                ->set_types([
                    [
                        'type' => 'post',
                        'post_type' => 'post', 
                    ],
                ])
                ->set_max(10) // Limit the number of projects that can be selected
                ->set_help_text(__('Select blogs to display in this section.', 'nh')),
            ))

            ->set_icon('star-filled')
            ->set_keywords([__('Blog Items', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            }),




                    // News Hero
                            Block::make(__('News Hero', 'nh'))
                            ->add_fields([
                                Field::make('html', 'crb_information_text')
                                ->set_html('<h2>News Hero Block</h2>'),
                                Field::make('text', 'title', __('Title', 'nh')),
                                Field::make('association', 'news', __('Select News', 'nh'))
                                    ->set_types([
                                        [
                                            'type' => 'post',
                                            'post_type' => 'post', 
                                        ],
                                    ])
                                    ->set_max(10) // Limit the number of projects that can be selected
                                    ->set_help_text(__('Select news to display in this section.', 'nh')),
                            ])
                            ->set_icon('grid-view') // You can choose an appropriate icon here
                            ->set_keywords([__('News Hero Section Block', 'nh')])
                            ->set_description(__('Custom Block for News Hero Section', 'nh'))
                            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

                            // News Hero
                            Block::make(__('News Container', 'nh'))
                            ->add_fields(array(
                                // add html field to display information in the admin
                                Field::make('html', 'crb_information_text')
                                    ->set_html('<h2>News Container Block</h2>'),
                                Field::make('text', 'title', __('Title', 'nh')),
                                Field::make('text', 'view_items', __('Items on View', 'nh')),
                                Field::make('text', 'button_title', __('Button Title', 'nh')),
                                Field::make( 'select', 'news_type', 'Select News Type' )
                                ->add_options( array(
                                    'all_news' => 'All News',
                                    'latest_news' => 'Latest News',
                                    'impact_news' => 'Impact News',
                                ) )
                               
                            ))
                    
                            ->set_icon('star-filled')
                            ->set_keywords([__('News Container Custom Block', 'nh')])
                            ->set_description(__('Custom Block', 'nh'))
                            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
                            }),
                    

            // Customer Reviews
            Block::make(__('Customer Reviews', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Customer Reviews Block</h2>'),
                Field::make('text', 'title', __('Section Title', 'nh')),
                Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
                Field::make('complex', 'review_items', __('Curstomer Review Items', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('text', 'customer_name', __('Customer Name', 'nh')),
                        Field::make('text', 'customer_review', __('Customer Reviwe', 'nh')),
                        Field::make('file', 'customer_image', __('Customer Image'))
                            ->set_value_type('url'),
                    ))
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Customer Reviews Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),



            // Product Categories
            Block::make(__('Product Categories', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Product Categories Block</h2>'),
                Field::make('text', 'title', __('Section Title', 'nh')),
                Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
                Field::make('complex', 'category_items', __('Category Items', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('text', 'category_name', __('Category Name', 'nh')),
                        Field::make('file', 'category_image', __('Category Image'))
                            ->set_value_type('url'),
                    ))
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Product Categories Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

             // CARD GRID SECTION
            Block::make(__('Card Grid Section', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>Card Grid Section Block</h2>'),
                Field::make('text', 'title', __('Section Title', 'nh')),
                Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
                Field::make('text', 'inner_classnames', __('Inner Classnames', 'nh')),
                Field::make('complex', 'card_items', __('Card Items', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('text', 'card_details', __('Card Details', 'nh')),
                        Field::make('file', 'card_image', __('Card Image'))
                            ->set_value_type('url'),
                    ))
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('Card Grid Section Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

            // APP DOWNLOAD SECTION
            Block::make(__('App Download Section', 'nh'))
            ->add_fields(array(
                Field::make('html', 'crb_information_text')
                    ->set_html('<h2>App Download Section Block</h2>'),
                Field::make('text', 'title', __('Section Title', 'nh')),
                Field::make('text', 'description', __('Section Description', 'nh')),
                Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
                Field::make('text', 'download_link', __('Download Link', 'nh')),
              
            ))
            ->set_icon('star-filled')
            ->set_keywords([__('App Download Section Custom Block', 'nh')])
            ->set_description(__('Custom Block', 'nh'))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),


            // CUSTOMER CARE ABOUT 
               Block::make(__('Customer Care About Section', 'nh'))
               ->add_fields(array(
                   Field::make('html', 'crb_information_text')
                       ->set_html('<h2>Customer Care About Section Block</h2>'),
                   Field::make('text', 'title', __('Section Title', 'nh')),
                   Field::make('text', 'description', __('Section Description', 'nh')),
                   Field::make('text', 'section_classnames', __('Section Classnames', 'nh')),
                   Field::make('complex', 'card_items', __('Card Items', 'nh'))
                       ->set_layout('tabbed-horizontal')
                       ->add_fields(array(
                           Field::make('text', 'card_title', __('Card Title', 'nh')),
                           Field::make('text', 'card_details', __('Card Details', 'nh')),
                           Field::make( 'checkbox', 'reverse', 'Image On Right' )
                            ->set_option_value( 'true' ),
                           Field::make('file', 'card_image', __('Card Image'))
                               ->set_value_type('url'),
                       ))
               ))
               ->set_icon('star-filled')
               ->set_keywords([__('Customer Care About Section Custom Block', 'nh')])
               ->set_description(__('Custom Block', 'nh'))
               ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),



                  // Depertment Section
        Block::make(__('Depertment Cards', 'nh'))
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Depertment Cards Block</h2>'),
            Field::make('text', 'title', __('Title', 'nh')),
            Field::make('text', 'section_classname', __('Section Classnames', 'nh')),
            Field::make('text', 'section_button_title', __('Section Button Title', 'nh')),
            Field::make('text', 'section_button_url', __('Section Button URL', 'nh')),
            Field::make('complex', 'card_items', __('Card Items', 'nh'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'title', __('Title', 'nh')),
                    Field::make('file', 'icon', __('Icon'))
                        ->set_value_type('url'),
                    Field::make('text', 'description', __('Description', 'nh')),
                    Field::make('text', 'button_title', __('Button Title', 'nh')),
                    Field::make('text', 'button_url', __('Button URL', 'nh')),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Depertment Cards Custom Block', 'nh')])
        ->set_description(__('Custom Block', 'nh'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

        // JOBS SECTON
        Block::make(__('Jobs Section', 'nh'))
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Jobs Section Block</h2>'),
            Field::make('text', 'title', __('Title', 'nh')),
            Field::make('text', 'sub_title', __('Sub Title', 'nh')),
            Field::make('text', 'section_classname', __('Section Classnames', 'nh')),
        
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Depertment Cards Custom Block', 'nh')])
        ->set_description(__('Custom Block', 'nh'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

        
        // DOWNLOAD RESOURCE
        Block::make(__('Download Resource Section', 'nh'))
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Download Resource Block</h2>'),
            Field::make('text', 'title', __('Title', 'nh')),
            Field::make('text', 'section_classname', __('Section Classnames', 'nh')),
        
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Download Resource Custom Block', 'nh')])
        ->set_description(__('Custom Block', 'nh'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),

        // CONTACT US PAGE
        Block::make(__('Contact Us Section', 'nh'))
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Contact Us Block</h2>'),
            Field::make('text', 'title', __('Title', 'nh')),
            Field::make('text', 'sub_title', __('Sub Title', 'nh')),
        
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Contact Us Custom Block', 'nh')])
        ->set_description(__('Custom Block', 'nh'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {}),
    );


    // Theme Options


    WpGraphQLCrbContainer::register(
        Container::make('term_meta', __('Custom Data', 'app'))
            ->where('term_taxonomy', '=', 'category')
            ->add_fields([
                Field::make('image', 'crb_img')
                    ->set_value_type('url')
            ])
    );
    WpGraphQLCrbContainer::register(
        Container::make('theme_options', __('Theme Options'))
            ->add_fields(array(
                Field::make('complex', 'menus', __('Menus', 'nh'))
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(array(
                        Field::make('text', 'title', __('Title', 'nh')),
                        Field::make('text', 'url', __('URL', 'nh')),
                        // tabs carbon fields
                        Field::make('complex', 'left_items', __('Mega Menus', 'nh'))
                            ->set_layout('tabbed-horizontal')
                            ->add_fields(array(
                                Field::make('text', 'title', __('Title', 'nh')),
                                Field::make('text', 'url', __('URL', 'nh')),
                                Field::make('file', 'icon', __('Icon'))
                                    ->set_value_type('url'),
                            )),

                    )),

            ))
    );
}