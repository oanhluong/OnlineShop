<?php 

namespace App\Repositories\Base;

use App\Repositories\Base\CriteriaInterface;
use App\Repositories\Base\Criteria;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Container\Container as App;

abstract class BaseRepository implements RepositoryInterface, CriteriaInterface
{
	protected $app;

	protected $model;

	protected $criteria;

	protected $skipCriteria;

	public function __constructor()
	{
		$this->makeModel();
	}

	abstract protected function model();

	public function makeModel()
	{
		if ($this->model) {
			return;
		}
		$model = App::getInstance()->make($this->model());
		if (! $model instanceof Model) {
			// Throw exception at here.
			throw new Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
		}
		return $this->model = $model->newQuery();
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function all($column = array('*'))
	{
		$this->makeModel();
		return $this->model->get($column);
	}

	public function paginate($perPage = 15, $columns = array('*'))
	{
		$this->makeModel();
		return $this->model->paginate($perPage, $columns);
	}

	public function create(array $data)
	{
		$this->makeModel();
		return $this->model->create($data);
	}

	public function update(array $data, $id, $attribute='id')
	{
		$this->makeModel();
		return $this->model->where($attribute, '=', $id)->update($data);
	}

	public function delete($id)
	{
		$this->makeModel();
		return $this->model->destroy($id);
	}	

	public function find($id, $columns = array('*'))
	{
		$this->makeModel();
		return $this->model->find($id, $columns);
	}

	public function findBy($attribute, $value, $columns = array('*'))
	{
		$this->makeModel();
		return $this->model->where($attribute, '='. $value)->first($columns);
	}

	public function resetScope()
	{
		$this->skipCriteria(false);
		return $this;
	}

	public function skipCriteria($status = true)
	{
		$this->skipCriteria = $status;
		return $this;
	}

	public function getCriteria()
	{
		return $this->criteria;
	}

	public function pushCriteria(Criteria $criteria)
	{
        $this->criteria->push($criteria);
        return $this;
    }

	public function getByCriteria(Criteria $criteria)
	{
		$this->makeModel();
		$this->model = $criteria->apply($this->model, $this);
		return $this;
	}


	public function applyCriteria()
	{
		$this->makeModel();
		if ($this->skipCriteria === true) {
			return $this;
		}

		foreach ($this->getCriteria() as $criteria) {
			if ($criteria instanceof Criteria) {
				$this->model = $criteria->apply($this->model, $this);
			}
		}
		return $this;
	}
}