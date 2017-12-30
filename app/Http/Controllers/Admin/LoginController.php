<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\LoginRequest;
class LoginController extends Controller
{
    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function showLogin()
    {
        return view('admin.pages.login');
    }

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function login(LoginRequest $request)
    {
        $user = array('email' => $request->email, 'password' => $request->password);
        if (Auth::attempt($user)) {
            return redirect()->route('admin-home');
        }
        return redirect()->route('admin-login-show');
    }
}
