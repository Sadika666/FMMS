@extends('admin.master')

@section('content')


<div class = "row">
  <div class="col-md-12">
  <form action="{{route('registration.store')}}" method="post">
    @csrf
    <h1>Add Operator</h1>
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text"  name="name"class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="mbl">Contact:</label>
    <input type="integer" name="contact" class="form-control" id="contact">
  </div>
  <div class="form-group">
    <label for="add">Address:</label>
    <input type="text" name="address" class="form-control" id="add">
  </div>
  <div class="form-group">
    <label for="gnd">Gender:</label>
    <input type="text"  name="gender" class="form-control" id="gender">
  </div>
  <div class="form-group">
    <label for="id">Operate machine ID:</label>
    <input type="integer" name="machineid" class="form-control" id="machine">
  </div>

  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
  </div>
</div>  




























@endsection