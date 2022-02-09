@extends('admin.master')


@section('content')
<div class = "row">
  <div class="col-md-12">
  <form action="" method="">
  @csrf
<h1>Machine placement</h1>
<a href="{{route('placementregistration')}}" class="btn btn-success">Add Machine</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Machine ID</th>
        <th scope="col">Section</th>
        <th scope="col">Operator ID</th>
        <th scope="col">Status</th>
        <th scope="col">action</th>
    </tr>
    </thead>
    
    

    <tbody>
            @foreach ($placements as $key=>$placements)
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$placements->machine_id}}</td>
                    <td>{{$placements->section}}</td>
                    <td>{{$placements->operator_id}}</td>
                    <td>{{$placements->status}}</td>
                    <td>
                       <a class="btn btn-primary" href="{{route('machine.edit',$placements->id)}}">Update</a>
                        <a class="btn btn-danger" href="">Delete</a>
                        <a class="btn btn-danger" href="">View</a>

          </td>
                  
    
            @endforeach
    </tbody>
</table>

</div>
</div>
@endsection
