@extends('admin.admin-master')

@section('title', 'Manage About')

@section('main_section')
<h1 style="text-align: center; margin-top:20px; color:rgb(47, 151, 6)"><b>This is Manage About Page</b></h1>
<section class="py-5">
<div class="container">
    
    <h4 class="text-center text-success">{{ Session::get('success') }}</h4>
    <h4 class="text-center text-success"></h4>
    <table class="table table-bordered mt-3" id="myTable">
        <thead class="bg-primary">
          <tr>
            <th scope="col">No</th>
            <th scope="col">About Description</th>
            <th scope="col">Mission Description</th>
            <th scope="col">Mission Image</th>
            <th scope="col">vission Description</th>
            <th scope="col">vission Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $about)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $about->about_description }}</td>
                    <td>{{ $about->mission_description }}</td>
                    <td>
                        <img style="width:70px" src="{{ asset('images/'.$about->mission_image) }}" alt="">
                    </td>
                    <td>{{ $about->vission_description }}</td>
                    <td>
                        <img style="width:70px" src="{{ asset('images/'.$about->vission_image) }}" alt="">
                    </td>
                    <td>
                        <a href="{{ route('edit-about', ['id' => $about->id]) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('delete-about', ['id' => $about->id]) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>  
</div>
</section>
@endsection