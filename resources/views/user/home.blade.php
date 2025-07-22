@extends('user.layout.app')

@section('title')
     home page
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
          @include('user.home.service')
     <!-- service category section start hare  -->

     <!-- Call To Action Section  -->
          @include('user.home.call_action')
     <!-- Call To Action Section -->

     <!-- About Section -->
          @include('user.home.about',compact(['about']))
     <!-- About Section -->

     <!-- service2 section start hare  -->
          @include('user.home.service2',['frompage'=>'home'])
     <!-- service2 section start hare  -->

     <!-- testimonial section start hare  -->
          @include('user.home.testimonial')
     <!-- testimonial section start hare  -->

     <!-- management section start hare  -->
          @include('user.home.managemen',compact(['managements']))
     <!-- managemen section start hare  -->

      <!-- testimonial section start hare  -->
          @include('user.home.gallery',compact(['gallery']))
     <!-- testimonial section start hare  -->


  </main>


@endsection

 