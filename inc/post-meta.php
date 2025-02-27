<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;
use WpGraphQLCrb\Container as WpGraphQLCrbContainer;

function Postmeta()
{

    WpGraphQLCrbContainer::register(
    Container::make('post_meta', 'Custom Data')
    ->where('post_type', '=', 'members')
    ->add_fields(array(
        Field::make('text', 'position', 'Position'),
    ))
    ->set_context('side'));

    WpGraphQLCrbContainer::register(
    Container::make('post_meta', 'Custom Data')
    ->where('post_type', '=', 'outltes')
    ->add_fields(array(
    Field::make('complex', 'outlets', __('Outlets', 'nh'))
    ->add_fields('outlet', array(
        Field::make('text', 'outlet_name', __('Outlet Name', 'nh')),
        Field::make('text', 'outlet_address', __('Outlet Address', 'nh')),
        Field::make('text', 'outlet_number', __('Outlet Number', 'nh')),
        Field::make('text', 'map_link', __('Outlet Map Link', 'nh')),
    )))));

    WpGraphQLCrbContainer::register(
    Container::make('post_meta', 'Custom Data')
    ->where('post_type', '=', 'jobs')
    ->add_fields(array(
        Field::make('select', 'location', __('Location', 'nh'))
            ->add_options('get_districts_of_bangladesh'),
        Field::make('select', 'department', __('Department', 'nh'))
            ->add_options('get_company_departments'),
        Field::make('date_time', 'deadline', 'Deadline'),
        Field::make('text', 'vacancies', __('Vacancies', 'nh')),
    )));

    WpGraphQLCrbContainer::register(
    Container::make('post_meta', 'Custom Data')
    ->where('post_type', '=', 'resources')
    ->add_fields(array(
        Field::make('file', 'pdf_file', __('Upload Document', 'nh'))
        ->set_value_type('url')
    )));
}

add_action('carbon_fields_register_fields', 'Postmeta');
