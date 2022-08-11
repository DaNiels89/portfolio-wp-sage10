{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  
    <div class="container">
      <h1 class="">Welcome to Nislo</h1>
    </div>
    
  @endwhile
@endsection
