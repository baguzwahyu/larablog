<!-- index.blade.php -->

@extends('master')
@section('content')
  <div class="container">
  <h1>Ini adalah table Supplier</h1>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Company</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($supp as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['company']}}</td>
        <td>{{$post['first_name']}}</td>
        <td>{{$post['last_name']}}</td>
        <td>
          <a href="deleteSupp/{{ $post['id'] }}" class="btn btn-danger">Delete</a>
          <a href="editSupp/{{ $post['id'] }}" class="btn btn-primary">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $supp->links() }}
  <a class="btn btn-primary" href="http://localhost/larablog/public/"> Home </a>
  </div>
@endsection
