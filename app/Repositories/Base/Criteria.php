<?php
namespace App\Repositories\Base;

use RepositoryInterface;

abstract class Criteria
{
	public abstract function apply($model, RepositoryInterface $repository);
}
