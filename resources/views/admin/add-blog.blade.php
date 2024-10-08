@extends('admin.admin-master')
@section('title')
Add Blog
@endsection 
@section('main_section')
<h1 style="text-align: center; margin-top:20px; color:rgb(47, 151, 6)"><b>This is Add Blog Page</b></h1>
<section class="py-5">
    <form action="{{ route('store-blog') }}" method="post" enctype="multipart/form-data" >
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @csrf
        
        <div class="row mb-3 shadow">
            <label class="col-md-3 text-center"><b>Image</b></label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="image">
            </div>
        </div>
        
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
        
        <div class="row mb-3">
            <label class="col-md-3"></label>
            <div class="col-md-7">
                <input type="Submit" class="btn btn-success" value="Submit">
            </div>
        </div>
    </form>
</section>

@endsection

