<!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ ($about && $about->picture) ? asset('storage/'.$about->picture) : asset('assets/user/img/about.jpg') }}" class="img-fluid" alt="">
            <a href="{{ $about->video }}" class="glightbox pulsating-play-btn"></a>
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>{{ $about->title }}</h3>
            <p class="fst-italic">
              {!! htmlspecialchars_decode($about->about) !!}
            </p>
            
          </div>
        </div>

      </div>

    </section><!-- /About Section -->