@extends('layouts.masteradmin')
@section('content')

                        <form class="form-horizontal m-t-40" method="POST" action="#" enctype="multipart/form-data">
                            @csrf
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
	                            <button type="button" class="close" data-dismiss="alert">×</button>	
                             <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <div class="card-body">
                                <h4 class="card-title">Personal Info</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">User Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="name" id="fname" value="{{$usrs[0]->name}}"  placeholder="First Name Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname" name="email" value="{{$usrs[0]->email}}" placeholder="Last Name Here">
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label for="Image" class="col-sm-3 text-right control-label col-form-label" name="image">Image</label>
                                    <div class="col-sm-9">
                                       <input type="file" name="image" >
                                      
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                               <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                             
                            </div>

                        </form>
@endsection