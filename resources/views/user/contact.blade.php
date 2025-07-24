@extends('user.layout.app')

@section('title')
    home page
@endsection

@section('style')


    <style>
        /* .contact-from{
              background-color: var(--surface-color);
              box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
              height: 100%;
              padding: 30px;
         } */

        .contact-from {
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

        iframe {
            width: 100% !important;
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
                <h1 class="text-white  mb-4 wow fadeInDown" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">Contact</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                    <li class="breadcrumb-item text-white"><a href="{{ route('home') }}">Home</a></li>

                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>
            </div>
        </div>



        <!-- testimonial section start hare  -->
        @include('user.home.contact')
        <!-- testimonial section start hare  -->


        <!-- testimonial section start hare  -->
        @include('user.home.faqs', compact(['faqs']))
        <!-- testimonial section start hare  -->





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