<?php

namespace App\Http\Controllers;

use App\blogpage;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Image;
class blogpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $validatedData = $request->validate([
    //         'title' => 'required|unique:posts|max:255',
    //         'description' => 'required',
    //         'articles' => 'required',
    //     ]);

   
    if ($file=$request->hasFile('image')) {
        $file = $request->file('image');
        $filePath = date('YmdHis').'.'.$file->getClientOriginalExtension();

        $originalPath  = public_path('/images'); 
        $destinationPath = public_path('/images/thumbnail');     // thumbnail 

        $img = Image::make($file->getRealPath());
        $img->resize(100, 100, function ($constraint) {
		    $constraint->aspectRatio();
        })->save($destinationPath.'/'.$filePath);

       $file->move($originalPath , $filePath);

        $blog = new blogpage();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->articles = $request->articles;
        $blog->tag = $request->tag;  
        $blog->image = $filePath;   //image uploaded in database
   }
        $blog->save();
          
        //return view('authBackend/addBlog');
        return redirect()->back()->with('success', 'blog inserted has been successfully ');
        //}
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\blogpage  $blogpage
     * @return \Illuminate\Http\Response
     */
    public function show(blogpage $blogpage)
    {
        return view('authBackend/addBlog');
    }

    public function view()
    {
    $blog =DB::table('blogpage')->select('*')->orderBy('id', 'desc')->get();
    return view('authBackend/listBlog')->with('blog',$blog);
    }

    public function update(Request $request, blogpage $blogpage)
    {
        $blog =DB::table('blogpage')->select('*')->get();
        return view('authBackend/editBlog')->with('blog',$blog);
      
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogpage  $blogpage
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
      //  dd( $request->all() );
      if ($file=$request->hasFile('image')) {
          $file = $request->file('image');
          $filePath = date('YmdHis').'.'.$file->getClientOriginalExtension();

          $originalPath  = public_path('/images');  //original image
      //  $destinationPath = public_path('/images/thumbnail');     // thumbnail image

    //     $img = Image::make($file->getRealPath());
    //     $img->resize(100, 100, function ($constraint) {
	// 	    $constraint->aspectRatio();
    //     })->save($destinationPath.'/'.$filePath);
         $file->move($originalPath , $filePath);
        echo $file->image = $filePath; 

          DB::table('blogpage')
           ->where('id', $request->id)
            ->update(['title' =>$request->title,'description' =>$request->description,'articles' =>$request->articles,'tag' =>$request->tag,'image'=>$filePath]);
           return redirect()->back()->with('success','updated successfull');
    }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogpage  $blogpage
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blogpage  $blogpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogpage $blogpage)
    {
        //
    }
}
