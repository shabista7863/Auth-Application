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
                            
                                <h4 class="card-title">Add Blog</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="title" placeholder="TitleHere">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Description Here"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Articles</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="result" name="articles" placeholder="Articles Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tag</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="result" name="tag"  placeholder="Tag Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Image" class="col-sm-3 text-right control-label col-form-label" name="image" >Image</label>
                                    <div class="col-sm-9">
                                       <input type="file" name="image" >
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