<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * login view
     *
     * @return void
     */
    public function index(){
        return "register";
    }

        
    /**
     * validate user
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        return ;
    }
}
