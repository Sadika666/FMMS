@extends('admin.master')


@section('content')
<div class = "row">
  <div class="col-md-12">
  <form action="" method="">
  @csrf
<h1>Operator list</h1>
<a href="{{route('registration')}}" class="btn btn-success">Add New Operator</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Contact</th>
        <th scope="col">Address</th>
        <th scope="col">Gender</th>
        <th scope="col">Operate Machine Id</th>
        <th scope="col">action</th>
    </tr>
    </thead>
    <tbody>
    
     @foreach($employees as $key=>$employee)
        
    <tr>
          <th>{{$key+1}}</th>
          <td>{{$employee->name}}</td>
          <td>{{$employee->contact}}</td>
          <td>{{$employee->address}}</td>
          <td>{{$employee->gender}}</td>
          <td>{{$employee->machineid}}</td>
          <td>
                       <a class="btn btn-primary" href="{{route('layouts.edit',$employee->id)}}">Update</a>
                        <a class="btn btn-danger" href="">Delete</a>

          </td>
    </tr>   
          @endforeach

    </tbody>
</table>

</div>
</div>
@endsection
