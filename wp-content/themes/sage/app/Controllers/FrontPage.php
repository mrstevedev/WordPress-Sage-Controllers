<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function showFeaturedPost() {
        
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 1
        ];
        $query = new \WP_Query( $args );
        return $query;
    }

    public function showPosts() {

        global $post;
        $dontshow = $post->ID;

        $args = [
            'post_type' => 'post',
            'posts_per_page' => 5,
            'post__not_in' => array($dontshow)
        ];
        $query = new \WP_Query( $args );
        return $query;
    }
}
