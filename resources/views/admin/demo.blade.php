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
    }
</style>
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
                                        <input type="text" class="form-control p-1"  name="title" value="{{ $editgallery ? $editgallery->title :"" }}"
                                            placeholder="Enter Full Name">
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
                                    <textarea name="video" class="form-control"  id="">{{ $editgallery ? $editgallery->video : '' }}</textarea>
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
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="basic-datatables_length">
                                                <label>Show <select
                                                        name="basic-datatables_length" aria-controls="basic-datatables"
                                                        class="form-control form-control-sm" onchange="perpageItem(this)">
                                                        <option value="3" >3</option>
                                                        <option value="4" @selected( request()->query('numberOfItem') == 4 )>4</option>
                                                        <option value="50" @selected(request()->query('numberOfItem') == 50)>50</option>
                                                        <option value="100" @selected(request()->query('numberOfItem') == 100) >100</option>
                                                    </select> entries</label>
                                                </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="basic-datatables_filter" class="dataTables_filter">
                                                <label class="d-flex justify-content-end">Search:
                                                    <form id="searchform">
                                                        @csrf
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
                                                        <th style="width: 214.469px;">Image</th>
                                                        <th style="width: 214.469px;">Title</th>
                                                        <th style="width: 214.469px;">Description</th>
                                                        <th style="width: 81.375px;">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                @forelse($allgallery as $gallery)
                                                    <tr role="row" class="odd" >
                                                        <td class="sorting_1">{{ $loop->iteration }}</td>
                                                        <td>
                                                            video is hare 
                                                      
                                                        </td>
                                                        <td>{{ $gallery->title }}</td>
                                                        <td>{{ substr($gallery->description,0,50) }}...</td>
                                                        
                                                        <td class="d-flex justify-content-center">
                                                            
                                                            <a href="{{ route('admin.videogallery',['id'=>$gallery->id]) }}" class="btn btn-info p-1 me-1">
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
                                                @php
                                                     $nextCursor = $allgallery->nextCursor()?->encode();
                                                    $prevCursor = $allgallery->previousCursor()?->encode();
                                                @endphp
                                                {{-- Previous Button --}}
                                                @if($prevCursor)
                                                    <a href="{{ request()->fullUrlWithQuery(['cursor' => $prevCursor]) }}" class="btn btn-primary p-1">« Previous</a>
                                                @endif

                                                {{-- Next Button --}}
                                                @if($nextCursor)
                                                    <a href="{{ request()->fullUrlWithQuery(['cursor' => $nextCursor]) }}" class="btn btn-primary mx-3 p-1">Next »</a>
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