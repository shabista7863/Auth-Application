@extends('layouts.masteradmin')
@section('content')

<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Article</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?> 
  @foreach($blogs as $row)
    
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$row->title}}</td>
      <td>{{$row->description}}</td>
      <td>{{$row->articles}}</td>
      <td>
    
      <input type="Success" class="btn btn-success" value="Updated">
      <input type="Success" class="btn btn-danger" value="Deleted">

      </td>
    </tr>
   
   @endforeach
  </tbody>
</table>



@endsection