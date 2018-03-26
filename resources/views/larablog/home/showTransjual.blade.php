<!-- index.blade.php -->

@extends('master')
@section('content')
  <div class="container">
  <h1>Ini adalah table Transjual</h1>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nota</th>
        <th>company</th>
        <th>Product</th>
        <th>Jumlah</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($trj as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->nota}}</td>
        <td>{{ $post->company}}</td>
        <td>{{ $post->product_name}}</td>
        <td>{{ $post->jumlah}}</td>
        <td>
          <a href="deletetrj/{{ $post->id }}" class="btn btn-danger">Delete</a>
          <a href="editTrj/{{ $post->id }}" class="btn btn-primary">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $trj->links() }}
  <a class="btn btn-primary" href="http://localhost/larablog/public/"> Home </a>
  </div>
@endsection
