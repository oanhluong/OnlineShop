<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\UserRepositoryInterface;

use App\User;

use Illuminate\Container\Container as App;


class HomeController extends Controller
{
    private $repository;
    public function __construct(UserRepositoryInterface $repo)
    {        
        $this->middleware('checkLogin');
        $this->repository = $repo;
    }
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

    public function createUser()
    {
        $this->repository->create([
            'name'=> 'oanh',
            'email'=> 'oanh@x.com',
            'password' => bcrypt('12345'),
        ]);        

        return redirect()->route('admin-home');
    }
}
