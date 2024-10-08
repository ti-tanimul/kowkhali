@extends('admin.admin-master')
@section('title')
Add Banner
@endsection 

@section('main_section')
<h1 style="text-align: center; margin-top:20px; color:rgb(47, 151, 6)"><b>This is Add Banner Page</b></h1>
<section class="py-5">
    <form action="{{ route('store-banner') }}" method="post" enctype="multipart/form-data" >
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @csrf
        
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Title</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="title" placeholder="Type Titile">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Description</b></label>
            <div class="col-md-7">
                <textarea name="description" class="form-control" placeholder="Type Description"></textarea>
            </div>
        </div>
        <div class="row mb-3 shadow">
            <label class="col-md-3 text-center"><b>Image</b></label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="image">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3"></label>
            <div class="col-md-7">
                <input type="Submit" class="btn btn-success" value="Submit">
            </div>
        </div>
    </form>
</section>

@endsection

{{-- @extends('admin.admin-master')
@section('main_section')
<section class="py-5">
    <form id="addBannerForm" enctype="multipart/form-data">
        @csrf
        
        <div class="row mb-3">
            <label class="col-md-3 text-center"><b>Title</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="title" placeholder="Type Title">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 text-center"><b>Description</b></label>
            <div class="col-md-7">
                <textarea name="description" class="form-control" placeholder="Type Description"></textarea>
            </div>
        </div>
        <div class="row mb-3 shadow">
            <label class="col-md-3 text-center"><b>Image</b></label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="image">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3"></label>
            <div class="col-md-7">
                <button type="button" class="btn btn-success" id="submitBtn">Submit</button>
            </div>
        </div>
    </form>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#submitBtn').click(function(e) {
            e.preventDefault();
            var formData = new FormData($('#addBannerForm')[0]);
            
            $.ajax({
                url: "{{ route('store-banner') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    if(response.success) {
                        // Reset form fields if needed
                        $('#addBannerForm')[0].reset();
                        // Show success message
                        $('.alert-success').html(response.message).show();
                    } else {
                        // Show error message
                        $('.alert-danger').html(response.message).show();
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
@endsection --}}
