<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function index()
    {
    	return view('admin.pages.home');
    }
}
