<?php

namespace App\Http\Controllers;

use App\signin;
use Illuminate\Http\Request;
use App\User;
use DB;


class singinController extends Controller
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
        return view('/authBackend/singin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'fname' => 'required|unique:posts|max:255',
        //     'email' => 'required|email',
        //     'phoneno' => 'required|max:5',
        // ]);
        $fname = $request->input('fname');
        $email = $request->input('email');
        $phoneno = $request->input('phoneno');
        $data=array('fname'=>$fname,"email"=>$email,"phoneno"=>$phoneno);
        DB::table('singin')->insert($data);
        return view ('authBackend/singin');
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\signin  $signin
     * @return \Illuminate\Http\Response
     */
    public function show(signin $signin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\signin  $signin
     * @return \Illuminate\Http\Response
     */
    public function edit(signin $signin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\signin  $signin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, signin $signin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\signin  $signin
     * @return \Illuminate\Http\Response
     */
    public function destroy(signin $signin)
    {
        //
    }
}
