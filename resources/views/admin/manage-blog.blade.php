@extends('admin.admin-master')

@section('title', 'Manage Blog')

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
            @foreach ($blogs as $blog )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->description }}</td>
            <td>
              <img style="width:70px" src="{{ asset('images/'.$blog->image) }}" alt="">
            </td>
            <td>
              <a href="{{ route('edit-blog',['id'=>$blog->id]) }}" class="btn btn-success">Edit</a>
              <a href="{{ route('delete-blog', $blog->id) }}" onclick="return confirm('Are you Sure to Delete')" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>  
</div>
</section>
@endsection