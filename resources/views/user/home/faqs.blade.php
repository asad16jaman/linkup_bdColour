<!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

            @foreach ($faqs as $faq)

              <div class="faq-item">
                <h3>{{ $faq->question }}</h3>
                <div class="faq-content">
                  <p>{{ $faq->answer }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->
            
            @endforeach
              

             

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->