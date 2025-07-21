@extends('user.layout.app')

@section('title')
     home page
@endsection

@section('style')

<style>
     .contact-from{
          background-color: var(--surface-color);
          box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
          height: 100%;
          padding: 30px;
     }
</style>

@endsection

@section('pagenave')
     @include('user.layout.navbar')
@endsection

@section('content')


<main class="main">

    

     <!-- service2 section start hare  -->
          @include('user.home.service2')
     <!-- service2 section start hare  -->
      

     <!-- testimonial section start hare  -->
          @include('user.home.faqs',compact(['faqs']))
     <!-- testimonial section start hare  -->

    



  </main>


@endsection