@extends('admin.admin-master')

@section('title', 'Manage Banner')

@section('main_section')
<section class="py-5">
<div class="container">
    
    <h4 class="text-center text-success">{{ Session::get('success') }}</h4>
    <h4 class="text-center text-success"></h4>
    <table class="table table-bordered mt-3" id="myTable">
        <thead class="bg-primary">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Taitle</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $banner->title }}</td>
            <td>{{ $banner->description }}</td>
            <td>
              <img style="width:70px" src="{{ asset('images/'.$banner->image) }}" alt="">
            </td>
            <td>
              <a href="{{ route('edit-banner',['id'=>$banner->id]) }}" class="btn btn-success">Edit</a>
              <a href="{{ route('delete-banner', $banner->id) }}" onclick="return confirm('Are you Sure to Delete')" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>  
</div>
</section>
@endsection