@extends('admin.admin-master')
@section('title')
Edit About
@endsection 
@section('main_section')
<section class="py-5">
    <form action="{{ route('update-about', $abouts->id) }}" method="post" enctype="multipart/form-data" >
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @csrf
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>About Description</b></label>
            <div class="col-md-7">
                <textarea name="about_description" id="editor" class="form-control" placeholder="Type Description">{{ $abouts->about_description }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 text-center"><b>Mission Description</b></label>
            <div class="col-md-7">
                <textarea name="mission_description" id="editor" class="form-control" placeholder="Type Description">{{ $abouts->mission_description }}</textarea>
            </div>
        </div>
        <div class="row mb-3 shadow">
            <label class="col-md-3 text-center"><b>Mission Image</b></label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="mission_image">
                <img style="width: 70px" src="{{ asset('images/'.$abouts->mission_image) }}" alt="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 text-center"><b>Vission Description</b></label>
            <div class="col-md-7">
                <textarea name="vission_description" id="editor" class="form-control" placeholder="Type Description">{{ $abouts->vission_description }}</textarea>
            </div>
        </div>
        
        <div class="row mb-3 shadow">
            <label class="col-md-3 text-center"><b>Vission Image</b></label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="vission_image">
                <img style="width: 70px" src="{{ asset('images/'.$abouts->vission_image) }}" alt="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3"></label>
            <div class="col-md-7">
                <input type="Submit" class="btn btn-success" value="Update">
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
