<!-- Services Section -->
<section id="product" class="services section {{ $frompage=='home' ? 'light-background' : "" }}">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Product</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      


      <div class="col-lg-3 col-md-4 col">
        <div class="card">
          <img src="{{ asset('assets/user/img/doctors/doctors-3.jpg') }}" class="card-img-top" alt="..." style="height:200px;width:260px;object-fit: cover;background:gainsboro">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text" style="font-size:13px">This is a longer card with supporting text dsdsd ds ddssds...</p>
            <a href="#" class="btn btn-primary stretched-link" style="font-size:14px">Detail See</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col">
        <div class="card">
          <img src="{{ asset('assets/user/img/doctors/doctors-3.jpg') }}" class="card-img-top" alt="..." style="height:200px;width:260px;object-fit: cover;background:gainsboro">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text" style="font-size:13px">This is a longer card with supporting text dsdsd ds ddssds...</p>
            <a href="#" class="btn btn-primary stretched-link" style="font-size:14px">Detail See</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col">
        <div class="card">
          <img src="{{ asset('assets/user/img/doctors/doctors-3.jpg') }}" class="card-img-top" alt="..." style="height:200px;width:260px;object-fit: cover;background:gainsboro">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text" style="font-size:13px">This is a longer card with supporting text dsdsd ds ddssds...</p>
            <a href="#" class="btn btn-primary stretched-link" style="font-size:14px">Detail See</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col">
        <div class="card">
          <img src="{{ asset('assets/user/img/doctors/doctors-3.jpg') }}" class="card-img-top" alt="..." style="height:200px;width:260px;object-fit: cover;background:gainsboro">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text" style="font-size:13px">This is a longer card with supporting text dsdsd ds ddssds...</p>
            <a href="#" class="btn btn-primary stretched-link" style="font-size:14px">Detail See</a>
          </div>
        </div>
      </div>

      

      

      

      

      @if($frompage != 'home')
      
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fas fa-hospital-user"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Ledo Markt</h3>
          </a>
          <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos
            earum corrupti.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fas fa-hospital-user"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Ledo Markt</h3>
          </a>
          <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos
            earum corrupti.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fas fa-hospital-user"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Ledo Markt</h3>
          </a>
          <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos
            earum corrupti.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fas fa-hospital-user"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Ledo Markt</h3>
          </a>
          <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos
            earum corrupti.</p>
        </div>
      </div><!-- End Service Item -->

     @endif




    </div>

    @if($frompage == 'home')
      <div class="row mt-3">
        <div class="col-12 d-flex justify-content-center">
            <a href="{{ route('product') }}" class="cta-btn" style="background: #3fbbc0;color: #fff ; padding: 10px 26px;border-radius: 10px;">Read More</a>
        </div>
      </div>
      @endif

  </div>

</section><!-- /Services Section -->