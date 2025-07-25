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

      .bg-breadcrumb {
        position: relative;
        overflow: hidden;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/user/img/carousel-1.jpg') }});
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 20px 0 27px 0;
    }

    .table-striped > thead > tr > th{
        background-color: #3fbbc0;
        color: #fff;
        font-size: 16px;
    }

    .table-striped > tbody > tr > td{
        
        font-size: 14px;
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
                <h1 class="text-white  mb-4 wow fadeInDown" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">Dealer List</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                    <li class="breadcrumb-item text-white"><a href="{{ route('home') }}">Home</a></li>
                    
                    <li class="breadcrumb-item active text-primary">Dealers</li>
                </ol>    
            </div>
    </div>
    

     <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
<!-- col-lg-2 -->
      <div class="container">
        <div class="row mb-1">
            <div class="col-md-4 col-sm-6  offset-md-8 offset-sm-6 d-flex justify-content-end">
                <form  class="w-100">
                    <div class="input-group mb-0">
                        <input type="text" style="font-size:14px" name="search" value="{{ request()->query('search') }}" placeholder="Search By Name" class="form-control p-1 ps-2 w-75">
                        <span class="input-group-text "><a href="{{ route('delearlist') }}" class="">
                            <!-- <i class="fas fa-trash"></i> -->
                             X
                        </a></span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped shadow">
                    <thead>
                        <tr>
                            <th>SL No:</th>
                            <th>Name</th>
                            <th>Org. Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Area</th>
                            <th>Address</th>
                            <th>Page</th>

                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach ($allDelears as $delear)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $delear->name }}</td>
                                <td>{{ $delear->company_name }}</td>
                                <td>{{ $delear->phone }}</td>
                                <td>{{ $delear->email }}</td>
                                <td>{{ $delear->area->name }}</td>
                                <td>{{ $delear->address }}</td>
                                <td>
                                    @if($delear->website)
                                        <a href="{{ $delear->website }}" target="_blank" style="font-size:20px"><i class="bi bi-link-45deg"></i></a>
                                    @else
                                        Not Found
                                    @endif
                                </td>
                            </tr>
                        
                        @endforeach
                        

                        <!-- <tr>
                            <td>2</td>
                            <td>asad</td>
                            <td>Link Up Technology</td>
                            <td>01755240250</td>
                            <td>add@gmail.com</td>
                            <td>Dhaka</td>
                            <td>Murpur-10</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>asad</td>
                            <td>Link Up Technology</td>
                            <td>01755240250</td>
                            <td>add@gmail.com</td>
                            <td>Dhaka</td>
                            <td>Murpur-10</td>
                        </tr> -->
                    </tbody>
                    
                </table>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                         @if ($allDelears->previousPageUrl())
                            <a href="{{ $allDelears->previousPageUrl() }}" class="btn btn-success mx-3 border-0" style="background:#3fbbc0"><i class="fas fa-hand-point-left"></i></a>
                         @endif

                         @if ($allDelears->nextPageUrl())
                           <a href="{{ $allDelears->nextPageUrl() }}" class="btn btn-success border-0" style="background:#3fbbc0"><i class="fas fa-hand-point-right "></i></a>
                         @endif
                            
                            
                        </div>
            </div>
        </div>
        

      </div>

    </section><!-- /Service Details Section -->
      

   

    



  </main>


@endsection