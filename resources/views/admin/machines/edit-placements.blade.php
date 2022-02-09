



@extends('admin.master')

@section('content')


<div class = "row">
  <div class="col-md-12">
  <form action="{{route('machine.update',$placements->id)}}" method="post">
  @method('PUT')
    @csrf
    <h1>Edit Placement List</h1>
    <div class="form-group">
    <label for="machine_id">Machine ID:</label>
    <input type="int" value="{{$placements->machine_id}}"  name="machine_id"class="form-control" id="machine_id">
  </div>
  <div class="form-group">
    <label for="section">Section:</label>
    <input type="string" value="{{$placements->section}}" name="section" class="form-control" id="section">
  </div>
  <div class="form-group">
    <label for="operator_id">Operator ID:</label>
    <input type="int" value="{{$placements->operator_id}}" name="operator_id" class="form-control" id="operator_id">
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