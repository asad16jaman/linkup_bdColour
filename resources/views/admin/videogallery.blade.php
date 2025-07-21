@extends('admin.layout.app')

@section('title', 'Admin Page')

@section('style')
<style>
    .table > tbody > tr > td{
        padding: 0px !important;
        margin-bottom: 2px;
    }
    .iconsize{
        font-size: 15px;
    }
    .profileImg{
        width: auto;
        height: 100px; 
        object-fit: cover;
        border: 2px dashed #ccc;
        border-radius: 6px;
    }
    .tablepicture{
        width: 30px;
        height: 30px;
        object-fit: fill;
    }
    .headbg > tr > th{
        background-color: #3c5236;
        color: #fff;
        padding: 2px !important;
        margin-bottom: 2px;
    }
</style>
@endsection

@section('pageside')
  @include('admin.layout.sidebar',['page' => 'gallery'])
@endsection

@section('bodyContent')

    <div class="container">

        <div class="page-inner">

            <div class="card">
                <div class="card-header pt-1 pb-0">
                    <h4 class="text-center">Create Gallery</h4>
                </div>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body p-3 ">
                        <div class="row">

                            <div class="col-md-7 col-12">
                               

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="email2"> Title :</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" class="form-control p-1 @error('title') is-invalid
                                        @enderror"  name="title" value="{{ $editgallery ? $editgallery->title :"" }}"
                                            placeholder="Enter Full Name">
                                        @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="description">Description :</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <textarea class="form-control" name="description" placeholder="" id="comment" rows="3">{{ $editgallery ? $editgallery->description : '' }}</textarea>
                                    </div>
                                </div>

                                
                                
                            </div>

                            <div class="col-md-5 col-12">
                                
                                <div class="mb-3">
                                    <label for="">Video Link :</label>
                                    <textarea name="video" rows="4" placeholder="Enter Embeded Link" class="form-control @error('video') is-invalid
                                    @enderror"  id="">{{ $editgallery ? $editgallery->video : '' }}</textarea>

                                    @error('video')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                           <input type="submit" value="Submit" class="btn btn-primary me-3 p-2">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <h5 class="card-title ">ALL Galleries</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                        
                                        <div class="col-sm-12 offset-md-6 col-md-6">
                                            <div id="basic-datatables_filter" class="dataTables_filter">
                                                <label class="d-flex justify-content-end">Search:
                                                    <form id="searchform">
                                                      
                                                        <input type="search" value="{{ request()->query('search') }}" name="search" class="form-control form-control-sm"
                                                            placeholder="" aria-controls="basic-datatables">
                                                    </form>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="basic-datatables"
                                                class="display table table-striped table-hover dataTable" role="grid"
                                                aria-describedby="basic-datatables_info">
                                                <thead class="headbg">
                                                    <tr role="row bg-dark" >
                                                        <th style="width: 136.031px;">SL NO:</th>
                                                        <th style="width: 214.469px;">Video</th>
                                                        <th style="width: 214.469px;">Title</th>
                                                        <th style="width: 214.469px;">Description</th>
                                                        <th style="width: 81.375px;">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                @forelse($allgallery as $gallery)
                                                    <tr role="row" class="odd" >
                                                        <td class="sorting_1">{{ $loop->iteration }}</td>
                                                        <td style="width:auto;height:70px">{!! html_entity_decode($gallery->video) !!}</td>
                                                        <td>{{ $gallery->title }}</td>
                                                        <td>{{ substr($gallery->description,0,50) }}...</td>
                                                        
                                                        <td class="d-flex justify-content-center">
                                                            
                                                            <a href="{{ route('admin.videogallery',['id'=>$gallery->id,'page'=>request()->query('page')]) }}" class="btn btn-info p-1 me-1">
                                                                <i class="fas fa-edit iconsize"></i>
                                                            </a>

                                                            <form action="{{ route('admin.videogallery.delete',['id'=>$gallery->id]) }}" method="post">
                                                                @csrf
                                                                <!-- <input type="submit" value="Delete"> -->
                                                                 <button type="submit" class="btn btn-danger p-1"><i class="fas fa-trash-alt iconsize"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <p>there is no users</p>

                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-end">
                                              
                                                {{-- Previous Button --}}
                                                @if($allgallery->previousPageUrl())
                                                    <a href="{{  $allgallery->previousPageUrl() }}" class="btn btn-primary p-1"><i class="fas fa-hand-point-left"></i></a>
                                                @endif

                                                {{-- Next Button --}}
                                                @if($allgallery->nextPageUrl())
                                                    <a href="{{ $allgallery->nextPageUrl() }}" class="btn btn-primary mx-3 p-1"><i
                                                        class="fas fa-hand-point-right "></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

@endsection

@push('script')
<script>
    function perpageItem(d){
        let itemNumber = d.value;
        let baseUrl = "{{ url()->current() }}"; // current route path without query

        const url = new URL(baseUrl, window.location.origin);
        @foreach(request()->query() as $key => $value)
            @if($key !== 'numberOfItem')
                url.searchParams.set('{{ $key }}', '{{ $value }}');
            @endif
        @endforeach

        url.searchParams.set('numberOfItem', itemNumber);
        window.location.href = url.toString();
    }


   

    document.getElementById('searchform').addEventListener('submit',function(e){
        e.preventDefault();
        let searchValue = e.target['search'].value ; 
        let baseUrl = "{{ url()->current() }}"; // current route path without query

        const url = new URL(baseUrl, window.location.origin);
        @foreach(request()->query() as $key => $value)
            @if($key !== 'search')
                url.searchParams.set('{{ $key }}', '{{ $value }}');
            @endif
        @endforeach
        console.log('kaj hosce..')
        url.searchParams.set('search', searchValue);
        window.location.href = url.toString();
    })


    const imageInput = document.getElementById('imageInput');
    const previewImage = document.getElementById('previewImage');

    imageInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                previewImage.src = e.target.result;
            };

            reader.readAsDataURL(file);
        }
    })
</script>

@endpush