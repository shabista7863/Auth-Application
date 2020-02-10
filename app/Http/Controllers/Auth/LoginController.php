<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;
Use App\user;
use Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    
    public function login(Request $request,user $user)
   { 
        $credentials =[
            'email' => $request->email ,
             'password' => $request->password
        ];
        if(Auth::attempt($credentials))
        // {
        //     return redirect('authBackend/admin');
        //}
           {
            $user = Auth::user();
              // echo $user;
               if($user->usertype==1){
                    Session::put('uid', $user->id); 
                    Session::put('name', $user->name);
                    Session::put('image', $user->image);
                    return redirect('authBackend/admin');
           }elseif($user->usertype==2){
            return redirect('authFrontend/index');
           }else{
            return back()->with('error', 'Wrong Login Details');
           } 
        } 
         
    }

    
    
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
