<?php

namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use App\Repositories\UserRepositoryInterface;
use App\User;
/**
* 
*/
class UserRepository extends BaseRepository implements UserRepositoryInterface
{
	protected function model()
	{
		return User::class;
	}
}