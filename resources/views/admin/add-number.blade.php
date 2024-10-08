@extends('admin.admin-master')
@section('title')
Add Number
@endsection 
@section('main_section')
<h1 style="text-align: center; margin-top:20px; color:rgb(47, 151, 6)"><b>This is Add Number Page</b></h1>
<section class="py-5">
    <form action="{{ route('update-number') }}" method="post" enctype="multipart/form-data" >
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @csrf
        
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>YEARS OF EXPEREANCE</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="expereance" value="{{ $numbers->expereance }}">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Volunteer</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="volunteer" value="{{ $numbers->volunteer }}">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Event</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="event" value="{{ $numbers->event }}">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Help Family</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="family" value="{{ $numbers->family }}">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Help Person</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="person" value="{{ $numbers->person }}">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Help Childreen</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="childreen" value="{{ $numbers->childreen }}">
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

