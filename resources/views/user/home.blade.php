@extends('user.layout.app')

@section('title')
     home page
@endsection

@section('style')
     <style>
          .hero .container {
               background-color: #ffffff8f;
          }
     </style>
@endsection


@section('pagenave')
     @include('user.layout.navbar')
@endsection

@section('content')


<main class="main">

     <!-- hero section start hare  -->
          @include('user.home.carousel',compact(['carousels']))
     <!-- hero section end hare  -->


     <!-- service category section start hare  -->
          @include('user.home.service',['categories' => $categories])
     <!-- service category section start hare  -->

     

     <!-- About Section -->
          @include('user.home.about',compact(['about']))
     <!-- About Section -->

     <!-- Call To Action Section  -->
          @include('user.home.call_action')
     <!-- Call To Action Section -->

     <!-- service2 section start hare  -->
          @include('user.home.service2',['products'=>$products,'frompage' => 'home'])
     <!-- service2 section start hare  -->

     <!-- testimonial section start hare  -->
          <!-- include('user.home.testimonial') -->
     <!-- testimonial section start hare  -->

     <!-- management section start hare  -->
          @include('user.home.managemen',compact(['managements']))
     <!-- managemen section start hare  -->

      <!-- testimonial section start hare  -->
          @include('user.home.gallery',compact(['gallery']))
     <!-- testimonial section start hare  -->


  </main>


@endsection

 