<!-- index.blade.php -->

@extends('master')
@section('content')
  <div class="container">
  <h1>Ini adalah table Product</h1>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($prod as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['product_code']}}</td>
        <td>{{$post['product_name']}}</td>
        <td>{{$post['description']}}</td>
        <td>
          <a href="deleteProd/{{ $post['id'] }}" class="btn btn-danger">Delete</a>
          <a href="editProd/{{ $post['id'] }}" class="btn btn-primary">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $prod->links() }}
  <a class="btn btn-primary" href="http://localhost/larablog/public/"> Home </a>
  </div>
@endsection
