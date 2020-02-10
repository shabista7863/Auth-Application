@extends('layouts.masteradmin')
@section('content')

<form class="form-horizontal m-t-40" method="POST" action="#">
@csrf
                            <div class="card-body">
                            
                                <h4 class="card-title">Register</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Phone No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phoneno" name="phoneno" placeholder="phoneno Here">
                                    </div>
                                </div>
                              

                                <div class="form-group row">
                                    <label for="Image" class="col-sm-3 text-right control-label col-form-label" name="image">Image</label>
                                    <div class="col-sm-9">
                                       <input type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <input type="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
@endsection