 <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">


        @foreach ($carousels as $carousel)
          <div class="carousel-item active">
          <img src="{{ asset('storage/'.$carousel->img) }}" alt="">
          <div class="container">
            <h2>{{ $carousel->title }}</h2>
            <p>{{ $carousel->description }}</p>
            <a href="#about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->
        
        @endforeach
        

        

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->