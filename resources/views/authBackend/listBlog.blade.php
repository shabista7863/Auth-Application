@extends('layouts.masteradmin')
@section('content')
<style>


</style>
<table class="table table-bordered table-striped">
  <thead class="tab-haed">
    <tr>
      <th>S.no</th>
      <th>Title</th>
      <th>Description</th>
      <th>Article</th>
      <th>Action</th>
      <th>Status</th>
     
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?> 
  @foreach($blog as $row)
    
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$row->title}}</td>
      <td>{{$row->description}}</td>
      <td>{{$row->articles}}</td>
      <td>
      <a href="{{url('editBlog',$row->id)}}"  class="btn btn-success" value="Updated">Updated</a>
  <td>
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>
</td>

      </td>
    </tr>
   
   @endforeach
  </tbody>
</table>



@endsection