<!-- Featured Services Section -->
    <!-- width:260px;height:150px;object-fit:cover -->

    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

          @foreach ($categories as $category)

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative" style="padding:0px;margin:0px">
              <div class="bg-dark">
                <!-- <i class="fas fa-heartbeat icon"></i> -->
                 <img src="{{ ($category->img ) ? asset('storage/'.$category->img) : asset('assets/user/img/cat2.jpg') }}" alt="" style="" class="img-fluid" width="100%">
              </div>
              <div class="p-3 ">
                <h4 class=""><a href="" class="stretched-link">{{ $category->name }}</a></h4>
                <p class="">{{ substr($category->description,0,100) }}</p>
              </div>
            </div>
          </div><!-- End Service Item -->
          
          @endforeach
          

          

          

          

         

          

        </div>

      </div>

    </section><!-- /Featured Services Section -->