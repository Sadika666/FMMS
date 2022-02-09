@extends('admin.master')


@section('content')
<div class = "row">
  <div class="col-md-12">
  <form action="" method="">
  @csrf
<h1>Machine list</h1>
<a href="" class="btn btn-success">Add New Machine</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Specification</th>
        <th scope="col">Details</th>
        <th scope="col">Status</th>
        <th scope="col">action</th>
    </tr>
    </thead>
    
    

    <tbody>
            @foreach ($machines as $key=>$machine)
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$machine->name}}</td>
                    <td>{{$machine->specification}}</td>
                    <td>{{$machine->details}}</td>
                    <td>{{$machine->status}}</td>
                    <td>
                       <a class="btn btn-primary" href="{{route('admin.machine.edit',$machine->id)}}">Update</a>
                        <a class="btn btn-danger" href="">Delete</a>
                        <a class="btn btn-danger" href="">View</a>

          </td>
                  
    
            @endforeach
    </tbody>
</table>

</div>
</div>
@endsection
