<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryInterface;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    private $userRepository;
    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function __construct(UserRepositoryInterface $repo)
    {
        $this->userRepository = $repo;
    }
    /**
     * Get all users in system.
     *
     * @return void
     * @author 
     **/
    public function list()
    {
        $users = $this->userRepository->all();

        return view('admin.pages.user.list', ['users' => $users]);
    }

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function create()
    {
        return view('admin.pages.user.create');
    }
}
