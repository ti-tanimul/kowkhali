@extends('admin.admin-master')
@section('title')
Add Team
@endsection 
@section('main_section')
<h1 style="text-align: center; margin-top:20px; color:rgb(47, 151, 6)"><b>This is Add Team Page</b></h1>
<section class="py-5">
    <form action="{{ route('store-team') }}" method="post" enctype="multipart/form-data" >
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
            <label class="col-md-3 text-center"><b>Name</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="name" placeholder="Type Name">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Designation</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="designation" placeholder="Type Designation">
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

