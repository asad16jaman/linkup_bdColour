@extends('user.layout.app')

@section('title')
     home page
@endsection

@section('style')

<style>
     /* .contact-from{
          background-color: var(--surface-color);
          box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
          height: 100%;
          padding: 30px;
     } */

      .bg-breadcrumb {
        position: relative;
        overflow: hidden;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/user/img/carousel-1.jpg') }});
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 20px 0 27px 0;
    }
</style>

@endsection

@section('pagenave')
     @include('user.layout.navbar')
@endsection

@section('content')


<main class="main">


    <div class="container-fluid bg-breadcrumb">
            <div class="bg-breadcrumb-single"></div>
            <div class="container text-center py-3" style="max-width: 900px;">
                <h1 class="text-white  mb-4 wow fadeInDown" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">Product</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                    <li class="breadcrumb-item text-white"><a href="{{ route('home') }}">Home</a></li>
                    
                    <li class="breadcrumb-item active text-primary">Product</li>
                </ol>    
            </div>
    </div>
    

     <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <div><img style="width:736px;height:500;object-fit:cover" src="{{ $product->picture ?  asset('storage/'.$product->picture) : asset('assets/user/img/services.jpg') }}" alt="" class="img-fluid services-img"></div>
            <div>
                <h3>Product Detail</h3>
                {!!   $product->logn_description !!}
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
              <a href="#" class="active">Product : {{ $product->name }}</a>
              <a href="#">Category :{{ $product->category->name }}</a>
              <a href="#">Price :{{ $product->price }}</a>
            </div>

            
            <p>
                <h4>Detail Summary : </h4>
                <p>{{ $product->description }}</p>
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->
      

   

    



  </main>


@endsection