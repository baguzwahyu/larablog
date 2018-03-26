<!-- index.blade.php -->

@extends('master') @section('content')
<div class="container">
  <h1>Ini adalah table Employes</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Company</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($emp as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['company']}}</td>
        <td>{{$post['first_name']}}</td>
        <td>{{$post['last_name']}}</td>
        <td>
          <a href="deleteEmp/{{ $post['id'] }}" class="btn btn-danger">Delete</a>
          <a href="editEmp/{{ $post['id'] }}" class="btn btn-primary">Edit</a>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $emp->links() }}
  <a class="btn btn-primary" href="http://localhost/larablog/public/"> Home </a>
</div>
@endsection
