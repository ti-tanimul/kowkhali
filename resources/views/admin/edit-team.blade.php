@extends('admin.admin-master')
@section('title')
Edit Title
@endsection 
@section('main_section')
<section class="py-5">
    <form action="{{ route('update-team', $teams->id) }}" method="post" enctype="multipart/form-data" >
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @csrf
        
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Name</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="name" value="{{ $teams->name }}" placeholder="Type Name">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Designation</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="designation" value="{{ $teams->designation }}" placeholder="Type Designation">
            </div>
        </div>
        <div class="row mb-3 shadow">
            <label class="col-md-3 text-center"><b>Image</b></label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="image">
                <img style="width: 70px" src="{{ asset('images/'.$teams->image) }}" alt="">
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