



@extends('admin.master')

@section('content')


<div class = "row">
  <div class="col-md-12">
  <form action="{{route('sectionregistration.store')}}" method="post">
    @csrf
    <h1>Add Section</h1>
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text"  name="name"class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="location">Location:</label>
    <input type="text" name="location" class="form-control" id="location">
  </div>
  <div class="form-group">
    <label for="num">Contact:</label>
    <input type="int" name="contact" class="form-control" id="contact">
  </div>
  <div class="form-group">
    <label for="name">Manager Name:</label>
    <input type="text"  name="managername" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="id">Manager ID:</label>
    <input type="int"  name="id" class="form-control" id="id">
  </div>

    <div class="field">
       <label for="Status">Status:</label>
       <select name="status" id="school" size="1" lenght="100">
          <option value="on">On</option>
          <option value="off">Off</option>
          
       </select>
    </div>    

    <button type="submit" class="btn btn-default">Submit</button>
 </form>


 @endsection