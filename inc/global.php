<?php

/* 
 * Add custom post types
 */
// Helper function to get recent blog posts (replace with your actual logic)
function getRecentBlogPosts() {
    $args = array(
        'post_type' => 'post', 
        'posts_per_page' => -1, 
    );
    $posts = get_posts($args);

    $options = array();
    foreach ($posts as $post) {
        $options[$post->ID] = $post->post_title;
    }

    return $options;
}





function get_districts_of_bangladesh() {
    return array(
        'dhaka' => 'Dhaka',
        'chittagong' => 'Chittagong', 
        'khulna' => 'Khulna',
        'barisal' => 'Barisal',
        'sylhet' => 'Sylhet',
        'rajshahi' => 'Rajshahi',
        'rangpur' => 'Rangpur',
        'mymensingh' => 'Mymensingh',
        'comilla' => 'Comilla',
        'narayanganj' => 'Narayanganj',
        'gazipur' => 'Gazipur',
        'bogra' => 'Bogra',
        'kushtia' => 'Kushtia',
        'jessore' => 'Jessore',
        'dinajpur' => 'Dinajpur',
        'tangail' => 'Tangail',
        'faridpur' => 'Faridpur',
        'noakhali' => 'Noakhali',
        'feni' => 'Feni',
        'chandpur' => 'Chandpur',
        'cox_bazar' => 'Cox\'s Bazar',
        'pabna' => 'Pabna',
        'sirajganj' => 'Sirajganj',
        'munshiganj' => 'Munshiganj',
        'narsingdi' => 'Narsingdi',
        'jamalpur' => 'Jamalpur',
        'brahmanbaria' => 'Brahmanbaria',
        'rajbari' => 'Rajbari',
        'sherpur' => 'Sherpur',
        'netrakona' => 'Netrakona',
        'madaripur' => 'Madaripur',
        'kishoreganj' => 'Kishoreganj',
        'manikganj' => 'Manikganj',
        'gopalganj' => 'Gopalganj',
        'bhola' => 'Bhola',
        'pirojpur' => 'Pirojpur',
        'patuakhali' => 'Patuakhali',
        'jhalokati' => 'Jhalokati',
        'barguna' => 'Barguna',
        'jhenaidah' => 'Jhenaidah',
        'narail' => 'Narail',
        'magura' => 'Magura',
        'bagerhat' => 'Bagerhat',
        'satkhira' => 'Satkhira',
        'chuadanga' => 'Chuadanga',
        'meherpur' => 'Meherpur',
        'nilphamari' => 'Nilphamari',
        'gaibandha' => 'Gaibandha',
        'thakurgaon' => 'Thakurgaon',
        'panchagarh' => 'Panchagarh',
        'kurigram' => 'Kurigram',
        'lalmonirhat' => 'Lalmonirhat',
        'chapainawabganj' => 'Chapai Nawabganj',
        'natore' => 'Natore',
        'naogaon' => 'Naogaon',
        'joypurhat' => 'Joypurhat',
        'habiganj' => 'Habiganj',
        'moulvibazar' => 'Moulvibazar',
        'sunamganj' => 'Sunamganj',
        'lakshmipur' => 'Lakshmipur',
        'rangamati' => 'Rangamati',
        'khagrachari' => 'Khagrachari',
        'bandarban' => 'Bandarban',
        'shariatpur' => 'Shariatpur'
    );
}

function get_company_departments() {
    return array(
        'hr' => 'Human Resources',
        'it' => 'Information Technology',
        'marketing' => 'Marketing',
        'finance' => 'Finance',
        'sales' => 'Sales',
        'operations' => 'Operations',
        'legal' => 'Legal',
        'customer_support' => 'Customer Support',
    );
}



function getRecentCaseStudies()
{
    $posts = get_posts(array(
        'posts_per_page' => -1,
        'post_type' => 'case-studies',
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        'suppress_filters' => true,
    ));

    $postsArray = array();

    foreach ($posts as $post) {
        $postsArray[$post->ID] = $post->post_title;
    }

    return $postsArray;
}


// get all blogs posts
function getBlogPosts()
{
    $posts = get_posts(array(
        'posts_per_page' => -1,
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        'suppress_filters' => true,
    ));

    $postsArray = array();

    foreach ($posts as $post) {
        $postsArray[$post->ID] = $post->post_title;
    }

    return $postsArray;
}
function add_graphql_support_to_posts($args, $post_type)
{
    if ('post' === $post_type) {
        $args['show_in_graphql'] = true;
        $args['graphql_single_name'] = 'post';
        $args['graphql_plural_name'] = 'posts';
    }
    return $args;
}
add_filter('register_post_type_args', 'add_graphql_support_to_posts', 10, 2);

