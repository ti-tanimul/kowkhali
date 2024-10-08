@extends('admin.admin-master')
@section('title')
Add About
@endsection 
@section('main_section')
<h1 style="text-align: center; margin-top:20px; color:rgb(47, 151, 6)"><b>This is Add About Page</b></h1>
<section class="py-5">
    
    <form action="{{ route('store-about') }}" method="post" enctype="multipart/form-data" >
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @csrf
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>About Description</b></label>
            <div class="col-md-7">
                <textarea name="about_description" id="editor" class="form-control" placeholder="Type Description"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 text-center"><b>Mission Description</b></label>
            <div class="col-md-7">
                <textarea name="mission_description" id="editor" class="form-control" placeholder="Type Description"></textarea>
            </div>
        </div>
        <div class="row mb-3 shadow">
            <label class="col-md-3 text-center"><b>Mission Image</b></label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="mission_image">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 text-center"><b>Vission Description</b></label>
            <div class="col-md-7">
                <textarea name="vission_description" id="editor" class="form-control" placeholder="Type Description"></textarea>
            </div>
        </div>
        
        <div class="row mb-3 shadow">
            <label class="col-md-3 text-center"><b>Vission Image</b></label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="vission_image">
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
<script>
//CKEditor----------
ClassicEditor
    .create(document.querySelector('#editor'), {
        height: '500px'
    })
    .catch(error => {
        console.error(error);
    });
</script>
