<!-- Doctors Section -->
    <section id="management" class="doctors section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Managemen</h2>
        
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          @foreach ($managements as $management)

            <div class="col-lg-3 col-md-6 col-12 d-flex justify-content-around align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member">
                <div class="member-img">
                  
   
   
                  <img src="{{ asset('storage/'.$management->photo )}}" style="width: 262px; height: 210px; object-fit: contain" class="img-fluid" alt="">
                  <!-- <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div> -->
                </div>
                <div class="member-info">
                  <h4>{{ $management->name }}</h4>
                  <span>{{ $management->designation }}</span>
                </div>
              </div>
            </div><!-- End Team Member -->
          @endforeach
        </div>

      </div>

    </section><!-- /Doctors Section -->