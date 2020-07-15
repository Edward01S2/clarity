{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  <div class="prose mx-auto px-6 py-8 md:px-0 md:py-12 lg:py-16">
    @while(have_posts()) @php(the_post())
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile
  </div>
@endsection
