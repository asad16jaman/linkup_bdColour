<!-- Services Section -->
<section id="product" class="services section ">

  <!-- Section Title -->

  @if($frompage == 'home')
      <div class="container section-title" data-aos="fade-up">
    <h2>Product</h2>

  </div><!-- End Section Title -->
      @endif

  

  <div class="container">

    <div class="row gy-4">

      

      @foreach ($products as $product)
        <div class="col-lg-3 col-md-4 col">
          <div class="card">
            <img src="{{  $product->picture ? asset('storage/'.$product->picture) : asset('assets/user/img/doctors/doctors-3.jpg') }}" class="card-img-top" alt="..." style="height:200px;width:100%!important;object-fit: cover;background:gainsboro">
            <div class="card-body">
              <h5 class="card-title">{{  substr($product->name ,0,15 )}}...</h5>
              <p class="card-text" style="font-size:14px">{{ substr($product->description,0,50) }}...</p>
              <a href="{{ route('product.item',['id'=>$product->id]) }}" style="background-color: #3fbbc0;font-size:14px;padding:5px 7px;color:#fff;" class="btn stretched-link" style="font-size:14px">See Detail</a>
            </div>
          </div>
        </div>
      @endforeach
      

    </div>

    @if($frompage == 'home')
      <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center">
            <a href="{{ route('product') }}" class="cta-btn" style="background: #3fbbc0;color: #fff ; padding: 10px 26px;border-radius: 10px;">Read More</a>
        </div>
      </div>
      @endif

  </div>

</section><!-- /Services Section -->