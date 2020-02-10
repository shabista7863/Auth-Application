<?php

namespace App\Http\Controllers;

use App\blogpage;
use Illuminate\Http\Request;
use DB;
use Redirect;
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
        $blog = new blogpage();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->articles = $request->articles;
        $blog->save();
        return view('authBackend/addBlog');
        //return redirect('/addBlog')->with('success', 'blog inserted has been successfully ');
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
    $blog =DB::table('blogpage')->select('*')->get();
   
    return view('authBackend/listBlog')->with('blogs',$blog);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogpage  $blogpage
     * @return \Illuminate\Http\Response
     */
    public function edit(blogpage $blogpage)
    {
        return view('authBackend/listBlog');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogpage  $blogpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogpage $blogpage)
    {
        //
    }

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
