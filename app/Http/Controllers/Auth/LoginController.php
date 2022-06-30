<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{ 
    /**
     * __construct
     *
     * @return void
     */
    public function __construct(){
        
    }
    
    /**
     * login view
     *
     * @return void
     */
    public function index(){
        return view('auth.login');
    }

        
    /**
     * validate user
     *
     * @param  mixed $request
     * @return void
     */
    public function authenticate(Request $request)
    {
        return redirect('superadmin/dashboard');
    }
}
