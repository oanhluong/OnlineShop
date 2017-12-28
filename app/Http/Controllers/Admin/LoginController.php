<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    public function login(Request $request)
    {
        $validationData = $request->validate([
            'email' => 'bail|require|unique:post|max:255',
            'password' => 'require'
        ]);
        if ($validationData->fails()) {
            return 'asdasd';
        }
        $user = array('email' => $request->email, 'password' => $request->password);
        if (Auth::attempt($user)) {
            return redirect()->route('admin-home');
        }
        return redirect()->back();
    }
}
