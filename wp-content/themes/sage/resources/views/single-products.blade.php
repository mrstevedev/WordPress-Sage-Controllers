@extends('layouts.app')

@section('content')
    <div class="container">
        @while (have_posts()) @php the_post() @endphp
            <div class="product-item">
                <h3>{{ the_title() }}</h3>
                <strong>Price:</strong> ${{ $price }}

                <strong>Discount</strong> {{ $discount }}%

               <h3>${{ $calculate_discount }}</h3>
            </div> 
        @endwhile

        <h4>Related Products</h4>

         @while ($related_products->have_posts()) @php $related_products->the_post() @endphp
            <div class="related-product-item">
                <p>{{ the_title() }}</p>
            </div>
        @endwhile
    </div>
@endsection