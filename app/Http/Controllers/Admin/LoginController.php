<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display login view.
     *
     * @return void
     * @author 
     **/
    public function index()
    {
    	return view('admin.pages.login');
    }

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function login()
    {
    	if (true) {
    		return redirect()->route('admin-home');
    	}
    }
}
