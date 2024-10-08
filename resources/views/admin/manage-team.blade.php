@extends('admin.admin-master')
@section('title', 'Manage Team')

@section('main_section')
<section class="py-5">
<div class="container">
    
    <h4 class="text-center text-success">{{ Session::get('success') }}</h4>
    <h4 class="text-center text-success"></h4>
    <table class="table table-bordered mt-3" id="myTable">
        <thead class="bg-primary">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Designation</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $team->name }}</td>
            <td>{{ $team->designation }}</td>
            <td>
              <img style="width:70px" src="{{ asset('images/'.$team->image) }}" alt="">
            </td>
            <td>
              <a href="{{ route('edit-team',['id'=>$team->id]) }}" class="btn btn-success">Edit</a>
              <a href="{{ route('delete-team', $team->id) }}" onclick="return confirm('Are you Sure to Delete')" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>  
</div>
</section>
@endsection