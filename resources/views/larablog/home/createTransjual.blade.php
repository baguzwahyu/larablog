@extends('master')
@section('content')
<div class="container">
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    @if (\Session::get('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
      @endif
  <h1>Ini Tampilan Create Transjual</h1>
  <form class="" action="{{url('/saveTransjual')}}" method="post">
    <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nota</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="" name="nota">
      </div>
    </div>
    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Company</label>
    <div class="col-sm-10">
    <select name="customer_id" class="form-control">
      @foreach($cocus as $post)
        <option value="{{$post['id']}}"> {{$post['company']}} </option>
      @endforeach

    </select>
    </div>
    </div>
    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Product</label>
    <div class="col-sm-10">
    <select name="code_product" class="form-control">
      @foreach($pro as $post)
        <option value="{{$post['id']}}"> {{$post['product_name']}} </option>
      @endforeach
    </select>
    </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Jumlah</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="" name="jumlah">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
<a class="btn btn-primary" href="http://localhost/larablog/public/"> Home </a>
