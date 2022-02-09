



@extends('admin.master')

@section('content')


<div class = "row">
  <div class="col-md-12">
  <form action="{{route('admin.machine.update',$machines->id)}}" method="post">
    @method('PUT')
    @csrf
    <h1>Add Machine</h1>
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="string" value="{{$machine->name}}"  name="name"class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="specification">Specification:</label>
    <input type="string" value="{{$machine->specification}}" name="specification" class="form-control" id="specification">
  </div>
  <div class="form-group">
    <label for="details">Details:</label>
    <input type="string"  value="{{$machine->details}}" name="details" class="form-control" id="details">
  </div>

    <div class="field">
       <label for="Status">Status:</label>
       <select name="status" id="school" size="1" lenght="100">
          <option value="active">active</option>
          <option value="damage">Damage</option>
          <option value="damage">Dumping</option>
          
       </select>
    </div>    

    <button type="submit" class="btn btn-default">Submit</button>
 </form>


 @endsection