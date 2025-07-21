 <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <!-- <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div> -->
      <!-- End Section Title -->

      

      <div class="container mb-5" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>{{ $company->address }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>{{ $company->phone }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>{{ $company->email }}</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6 ">
            <form action="{{ route('storeMessage') }}" method="post" class="contact-from" >
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name">
                  @error('name')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Your Email">
                  @error('email')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control  @error('subject') is-invalid @enderror" name="subject" placeholder="Subject" >
                  @error('subject')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-md-12">
                  <textarea class="form-control  @error('message') is-invalid @enderror" name="message" rows="4" placeholder="Message" ></textarea>
                </div>

                <div class="col-md-12 text-center">

                  <!-- <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div> -->

                  <button type="submit" class="btn" style="background: #3fbbc0;color: #fff">Send Message</button>
                </div>

                

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>


      <div class="my-4" data-aos="fade-up" data-aos-delay="200">
        <!-- <iframe style="border:0; width: 100%; height: 370px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
          {!! html_entity_decode($company->map) !!}
      </div><!-- End Google Maps -->

    </section><!-- /Contact Section -->