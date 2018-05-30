@extends('layouts.app')

@section('content')

  @php
    $args = array(
      'cat' => 6,
      'post_per_page' => 1
    );
  @endphp
@if (!is_paged())
  @query($args)
    @include('partials.content-featured')
  @endquery
  @php
   wp_reset_query();
  @endphp
@endif

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="todo">
    {!! $tags !!}
    <div class="main-lista">
      <div class="grid">
        <div class="grid-sizer"></div>

          @while (have_posts()) @php(the_post())
            @include('partials.content-'.get_post_type())
          @endwhile

          {!! get_the_posts_navigation() !!}

      </div>
    </div>

  </div>
@endsection
