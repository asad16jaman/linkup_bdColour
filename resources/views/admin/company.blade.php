@extends('admin.layout.app')

@section('title', 'Admin Page')

@section('style')
<style>
    
 .profileImg{
        width: auto;
        height: 100px; 
        object-fit: cover;
        border: 2px dashed #ccc;
        border-radius: 6px;
    }
</style>
@endsection



@section('bodyContent')


    <div class="container">

        <div class="page-inner">

            <div class="card">
                <div class="card-header pt-1 pb-0">
                    <h4 class="text-center">Company Detail</h4>
                </div>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body p-3 ">
                        <div class="row">

                            <div class="col-md-6 col-12">

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="email2">Company Name :</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" class="form-control p-1"  name="name" value="{{ $company->name ?? '' }}"
                                            placeholder="Enter Company Name">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="email">Email :</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="email" class="form-control p-1"  name="email" value="{{ $company->email ?? '' }}"
                                            placeholder="Enter Email">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="email2">Email 2</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="email" value="{{ $company->email2 ?? '' }}" name="email2" class="form-control p-1" id="" placeholder="Enter Second Email">

                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="phone">Phone</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" value="{{ $company->phone ?? '' }}" name="phone" class="form-control p-1" id="" placeholder="Enter Phone">

                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="phone">Phone 2</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" value="{{ $company->phone2 ?? '' }}" name="phone2" class="form-control p-1" id="" placeholder="Enter Phone 2">

                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="phone">Footer Text</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <textarea class="form-control" name="footer_text" id="comment" rows="6">{{ $company->footer_text ?? '' }}</textarea>

                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-md-6 col-12">

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <label for="password">Whatsapp :</label>
                                    </div>
                                    <div class="col-md-9 col-12">
                                          <input type="text" class="form-control p-1" value="{{ $company->whatsapp ?? '' }}" name="whatsapp" placeholder="Enter Whatsapp Link">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <label for="password">Facebook :</label>
                                    </div>
                                    <div class="col-md-9 col-12">
                                          <input type="text" value="{{ $company->facebook ?? '' }}" class="form-control p-1" name="facebook" placeholder="Enter facebook Link">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <label for="password">Instagram :</label>
                                    </div>
                                    <div class="col-md-9 col-12">
                                          <input type="text" class="form-control p-1" value="{{ $company->instagram ?? '' }}" name="instagram" placeholder="Enter Instagram Link">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <label for="password">Linkdin :</label>
                                    </div>
                                    <div class="col-md-9 col-12">
                                          <input type="text" class="form-control p-1" name="linkdin" value="{{ $company->linkdin ?? '' }}" placeholder="Enter Linkdin Link">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <label for="password">Map :</label>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <textarea class="form-control"  name="map" id="" rows="2">{{ $company->map ?? '' }}</textarea>                                   
                                     </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <label for="password">Address :</label>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <textarea class="form-control" name="address" id="" rows="2">{{ $company->address ?? '' }}</textarea>                                   
                                     </div>
                                </div>

                                <div class="row mb-2">
                                   <div class="col-md-12 col-12 d-flex justify-content-center mt-1">
                                         <label for="imageInput" style="cursor: pointer;">
                                            <!-- (placeholder) -->
                                             
                                            <img id="previewImage" 
                                                src="{{ ($company && $company->logo) ? asset('storage/'.$company->logo) : asset('assets/admin/img/demoUpload.jpg')}}" 
                                                alt="Demo Image" 
                                                class="profileImg"
                                                style="">
                                        </label>

                                        <!-- hidden input -->
                                        <input type="file" name="logo" id="imageInput" name="image" accept="image/*" style="display: none;">
                                    </div>
                                </div>

                                
                                


                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                           <input type="submit" value="Submit" class="btn btn-primary me-3 p-2">
                        </div>
                    </div>
                </form>
            </div>


           


            
        </div>

@endsection

@section('pageside')
  @include('admin.layout.sidebar',['page' => 'company'])
@endsection

@push('script')
<script>
    
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