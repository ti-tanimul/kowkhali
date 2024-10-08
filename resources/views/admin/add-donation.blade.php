@extends('admin.admin-master')
@section('title')
Add Donation
@endsection 
@section('main_section')
<h1 style="text-align: center; margin-top:20px; color:rgb(47, 151, 6)"><b>This is Donation Number Page</b></h1>
<section class="py-5">
    <form action="{{ route('update-donation') }}" method="post" enctype="multipart/form-data" >
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @csrf
        
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Bkash</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="bkash" value="{{ $donation->bkash }}">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Nogod</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="nogod" value="{{ $donation->nogod }}">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Rocket</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="rocket" value="{{ $donation->rocket }}">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-3 text-center"><b>Bank Account</b></label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="bank" value="{{ $donation->bank }}">
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

