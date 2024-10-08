@extends('admin.admin-master')
@section('title')
Edit Banner
@endsection 
@section('main_section')
<section class="py-5">
    <form action="{{ route('update-banner', $banners->id) }}" method="post" enctype="multipart/form-data" >
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @csrf
        
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Title</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="title" value="{{ $banners->title }}" placeholder="Type Titile">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Description</b></label>
            <div class="col-md-7">
                <textarea name="description" class="form-control" placeholder="Type Description">{{ $banners->description }}</textarea>
            </div>
        </div>
        <div class="row mb-3 shadow">
            <label class="col-md-3 text-center"><b>Image</b></label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="image">
                <img style="width: 70px" src="{{ asset('images/'.$banners->image) }}" alt="">
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