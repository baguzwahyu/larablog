<!-- index.blade.php -->

@extends('master')
@section('content')
  <div class="container">
  <h1>Ini adalah table suplier</h1>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Company</th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($supplie as $post)
      <tr>
        <td>{{$post['company']}}</td>
        <td>{{$post['first_name']}}</td>
        <td>{{$post['last_name']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="http://localhost/larablog/public/"> Public</a>
  </div>
@endsection
