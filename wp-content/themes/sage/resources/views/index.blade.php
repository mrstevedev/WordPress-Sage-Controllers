@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  {{-- @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())

    {{-- @include('icon::youtube', ['color' => '#ff0000']) --}}
  {{-- @endwhile --}}

  {{-- Custom Query --}}
   @while($show_featured_post->have_posts()) @php $show_featured_post->the_post() @endphp
    <div class="featured">
      <h5>{{ the_title() }}</h5>
    </div>
   @endwhile 
   {{-- When you have another query down below, you need to reset the query --}}
   {{  wp_reset_query() }}
  {{-- End Custom Query --}}

  {{-- New Custom Query --}}
   @while($show_posts->have_posts()) @php $show_posts->the_post() @endphp
      <p>{{ the_title() }}</p>
   @endwhile 
  {{  wp_reset_query() }}
  {{-- End New Custom Query --}}

  {!! get_the_posts_navigation() !!}
@endsection
