@extends('admin.master')


@section('content')
<div class = "row">
  <div class="col-md-12">
  <form action="" method="">
  @csrf
<h1>New Purchage Machine list</h1>
<a href="" class="btn btn-success">Add New Machine</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Type</th>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Location</th>
        <th scope="col">Operator Name</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>@mdo</td>
    </tr>
    </tbody>
</table>

</div>
</div>
@endsection
