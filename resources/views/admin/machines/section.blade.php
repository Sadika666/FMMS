@extends('admin.master')


@section('content')
<div class = "row">
  <div class="col-md-12">
<h1>Section list</h1>
<a href="{{route('sectionregistration')}}" class="btn btn-success">Add New Section</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Location</th>
        <th scope="col">Contact</th>
        <th scope="col">Manager Name</th>
        <th scope="col">ManagerId</th>
        <th scope="col">status</th>
        <th scope="col">action</th>
    </tr>
    </thead>
    <tbody>
    
     @foreach($sections as $key=>$section)
        
    <tr>
          <th>{{$key+1}}</th>
          <td>{{$section->name}}</td>
          <td>{{$section->location}}</td>
          <td>{{$section->contact}}</td>
          <td>{{$section->managername}}</td>
          <td>{{$section->managerid}}</td>
          <td>{{$section->status}}</td>
          <td>
                       <a class="btn btn-primary" href="{{route('admin.edit',$section->id)}}">Update</a>
                        <a class="btn btn-danger" href="">Delete</a>

          </td>
    </tr>   
          @endforeach

    </tbody>
</table>

</div>
</div>
@endsection
