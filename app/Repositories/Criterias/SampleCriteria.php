<?php 

namespace App\Repositories\Criterias;

use App\Repositories\Base\Creteria;
use App\Repositories\Base\RepositoryInterface as Repository;
use App\Repositories\Base\RepositoryInterface;

/**
* 
*/
class LengthOverTwoHours extends Criteria
{
	public function apply($model, Repository $repository)
	{
		$query = $model->where('length', '>', 120);
		return $query;
	}
}
