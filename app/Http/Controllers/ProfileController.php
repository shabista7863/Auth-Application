<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class ProfileController extends Controller
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
    
    public function update(Request $request)
    {    
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
            $userid = $request->session()->get('uid'); 
            if($file = $request->hasFile('image')) {
                $file = $request->file('image') ;
                $fileName = time().'.'.$file->getClientOriginalName() ;
                $destinationPath = public_path('/images');
                $file->move($destinationPath, $fileName);
                $file->image= $fileName ; 
            }
            if($file = $request->hasFile('image')) {
                DB::table('users')
                ->where('id', $userid)
                ->update(['name' => $request->name,'email'=>$request->email,'image'=> $fileName ]);
                Session::put('image', $fileName );
            } else {              
                DB::table('users')
                ->where('id', $userid)
                ->update(['name' => $request->name,'email'=>$request->email]);
            }           
            return  redirect('profile')->with('success', 'profile has been successfully uploaded');     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $userid=$request->session()->get('uid');
        $usrs = DB::table('users')->where('id',$userid)->get();      
        return view('authBackend/profile')->with('usrs', $usrs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
    
    }

    public function save(Request $request)
     {      
       //
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
      }
}
