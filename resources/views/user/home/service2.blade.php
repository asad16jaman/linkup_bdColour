<!-- Services Section -->
<section id="product" class="services section {{ $frompage=='home' ? 'light-background' : "" }}">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Product</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item  position-relative">
          <div class="icon">
            <i class="fas fa-heartbeat"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Nesciunt Mete</h3>
          </a>
          <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis
            tempore et consequatur.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fas fa-pills"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Eosle Commodi</h3>
          </a>
          <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut
            nesciunt dolorem.</p>
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