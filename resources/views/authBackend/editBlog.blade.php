@extends('layouts.masteradmin')
@section('content')

<style>
    .ggg{ font-size:30px}
    </style>

<div class="col-md-12">
<div class="position-relative">
<span class="float-right"><a href="{{url('listBlog')}}" class="ggg"> <i class="mdi mdi-arrow-left-bold-circle"></i> </a> </span>
</div>
</div>

                <form class="form-horizontal m-t-40" method="POST" action="{{url('editBlog')}}" enctype="multipart/form-data">
                
                @csrf                    
                     <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
	                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                     </div>
                    @endif
                                <h4 class="card-title">edit Blog

                               
                                </h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                                    <div class="col-sm-9">
                                    <input type="hidden" class="form-control" id="fname" name="id" value="{{$blog[0]->id}}" >
                                        <input type="text" class="form-control" id="fname" name="title" value="{{$blog[0]->title}}" placeholder="TitleHere">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="form-control" id="description" name="description"  placeholder="Description Here">
                                            {{$blog[0]->description}} 
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Articles</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="result" name="articles" value="{{$blog[0]->articles}}" placeholder="Articles Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tag</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="result" name="tag" value="{{$blog[0]->tag}}"  placeholder="Tag Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Image" class="col-sm-3 text-right control-label col-form-label" name="image">Image</label>
                                    <div class="col-sm-9">
                                       <input type="file" name="image">
                                      <a class="nav-link  text-muted waves-effect waves-dark pro-pic" href=""  aria-haspopup="true" aria-expanded="false">
                                          <img src="/images/{{Session::get('image')}}" alt=""  style="width:100px; height:100px; background:red; padding:5px">  
                                        </a>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <input type="submit" class="btn btn-primary" value="submit">
                                </div>
                            </div>
                        </form>

@endsection