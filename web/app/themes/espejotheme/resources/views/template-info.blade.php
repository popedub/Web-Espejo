{{--
  Template Name: Info Template
--}}

@extends('layouts.app')

@section('content')
<div class="content-info">
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
</div>
@endsection
