<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleProducts extends Controller
{
    protected $acf = true;

    public function calculateDiscount() {
        $price = get_field('price');
        $discount = get_field('discount');
        $calculated = $price - round($discount/100 * $price, 2);

        return $calculated;
    }

    public function relatedProducts() {

        $args = [
            'post_type' => 'products',
            'posts_per_page' => 5,
            'orderby' => 'rand'         
        ];
        
        // Adding the \ in front of the WP_Query call tells PHP that it's in the global namespace
        // and not the namespace of this class.
        $query = new \WP_Query( $args );
        return $query;
    }
}
