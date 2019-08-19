<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;


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

   


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
  
    
    public function  login(Request $request) {
         
        if (Auth::attempt(['id' => ($request->id_persona), 'password' => ($request->contrasena)])) {

           // Authentication passed...
           return redirect('/');
        } else {
            return redirect('/');
        }
     }
       public function  logout() {
         
        auth::logout();
        return redirect('/');

     }
 

}
