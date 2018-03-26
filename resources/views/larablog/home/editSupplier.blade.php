<!-- edit.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{ url('updateSupp', $supp->id ) }}">
    <div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">company</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="" name="company" value="{{$supp->company}}">
      </div>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="" name="first_name" value="{{$supp->first_name}}">
      </div>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Lasts Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="" name="last_name" value="{{$supp->last_name}}">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection
