<?php 

namespace App\Repositories\Base;

use App\Repositories\Base\Criteria;

interface CriteriaInterface
{
	public function skipCriteria($status = true);

	public function getCriteria();

	public function getByCriteria(Criteria $criteria);

	public function pushCriteria(Criteria $criteria);

	public function applyCriteria();
}