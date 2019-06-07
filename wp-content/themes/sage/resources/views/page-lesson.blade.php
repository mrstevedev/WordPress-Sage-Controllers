@php  /* Template Name: Lesson Template */ @endphp

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

    <div class="lesson">
        <h4 class="lesson-title">WP Custom Query - Ordering</h4>
        {{-- New Custom Query --}}
        @while($show_lesson->have_posts()) @php $show_lesson->the_post() @endphp
            <p>{{ the_title() }}</p>
        @endwhile
        {{  wp_reset_query() }}
        {{-- End New Custom Query --}}
    </div>

@endsection
