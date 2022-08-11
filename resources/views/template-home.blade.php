{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  
  <section class="hero">
    <div class="container">
      <h1 class="hero__title">Welcome to Nislo</h1>
      <p class="hero__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus minus suscipit quisquam, sequi, blanditiis deserunt aperiam necessitatibus ducimus perferendis beatae est commodi quos non, rem amet! Soluta corporis consectetur porro nobis! Omnis impedit, facere alias distinctio cupiditate hic consequuntur doloremque id molestias aspernatur asperiores maiores sed laudantium ratione fugit. Blanditiis, rem impedit, laudantium cupiditate amet voluptate omnis autem magni distinctio quae iure laborum modi a! Molestias atque ut reprehenderit sit!</p>
    </div>
  </section>

  <section id="services" class="">
    <div class="container">
      <h2 class="">Services</h2>
      <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus accusantium dolorum non, voluptates officia veniam dolor laudantium maiores praesentium, distinctio voluptatem modi recusandae, tempora rem aliquam eum blanditiis illo voluptate.</p>
    </div>
  </section>

  <section id="pricing" class="">
    <div class="container">
      <h2 class="">Pricing</h2>
      <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus accusantium dolorum non, voluptates officia veniam dolor laudantium maiores praesentium, distinctio voluptatem modi recusandae, tempora rem aliquam eum blanditiis illo voluptate.</p>
    </div>
  </section>

  <section id="Blog" class="">
    <div class="container">
      <h2 class="">Blog</h2>
      <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus accusantium dolorum non, voluptates officia veniam dolor laudantium maiores praesentium, distinctio voluptatem modi recusandae, tempora rem aliquam eum blanditiis illo voluptate.</p>
    </div>
  </section>

  <section id="contact" class="">
    <div class="container">
      <h2 class="">Contact</h2>
      <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus accusantium dolorum non, voluptates officia veniam dolor laudantium maiores praesentium, distinctio voluptatem modi recusandae, tempora rem aliquam eum blanditiis illo voluptate.</p>
    </div>
  </section>
    
  @endwhile
@endsection
