<?php declare(strict_types=1);

namespace App\Repository\Eloquent;

use App\Contracts\Eloquent\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 */
class BaseRepository implements EloquentRepositoryInterface
{
    /**
     * @var Model
     */
     protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
    * @param array $attributes
    *
    * @return Model
    */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
    * @param int $id
    * @return Model
    */
    public function find(int $id): ?Model
    {
        return $this->model->find($id);
    }
}