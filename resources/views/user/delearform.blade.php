@extends('user.layout.app')

@section('title')
     home page
@endsection

@section('style')

<style>
    
    .contact-from{
          background-color: var(--surface-color);
          box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
          height: 100%;
          padding: 30px;
     }

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
                <h1 class="text-white  mb-4 wow fadeInDown" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">Dealer Request Form</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                    <li class="breadcrumb-item text-white"><a href="{{ route('home') }}">Home</a></li>
                    
                    <li class="breadcrumb-item active text-primary">Request Form</li>
                </ol>    
            </div>
    </div>
    

     <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">
        
        <div class="col-12 ">
            <form action="" method="post" class="contact-from" >
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Your Name">
                  @error('name')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-md-6">
                  <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" placeholder="Your Org. Name">
                  @error('company_name')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-md-6">
                  <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Your Phone Number">
                  @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-md-6">
                  <input type="text" name="phone2" class="form-control @error('phone2') is-invalid @enderror" value="{{ old('phone2') }}" placeholder="Your Phone Number Two">
                  @error('phone2')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Your Email">
                  @error('email')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-md-6 ">
                  <select name="area_id" class="form-control @error('area_id') is-invalid @enderror" id="">
                        <option value="">Select Area</option>
                        @foreach ($allareas as $area)
                                <option value="{{ $area->id }}" @selected(old('area_id') == $area->id)>{{ $area->name }}</option>
                        @endforeach
                  </select>
                  @error('area_id')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                  
                </div>

                <div class="col-md-12 ">
                  <input type="text" class="form-control  @error('website') is-invalid @enderror" value="{{ old('website') }}" name="website" placeholder="Your Website Link">
                  @error('website')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-md-12">
                  <textarea class="form-control  @error('address') is-invalid @enderror" name="address" rows="3" placeholder="Enter Address" >{{ old('address') }}</textarea>
                  @error('address')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-md-12 text-center">

                  <button type="submit" class="btn" style="background: #3fbbc0;color: #fff">Submit</button>
                </div>
              </div>
            </form>
          </div><!-- End Contact Form -->

      </div>

    </section><!-- /Service Details Section -->
      

   

    



  </main>


@endsection


@if(session()->exists('success'))
    @push('script')
        <!-- Success Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-success">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="successModalLabel"><i class="fa-solid fa-circle-check me-2"></i> Success
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p class="mb-0">{{ session('success') }}</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                    successModal.show();
                });
            </script>
    @endpush
@endif