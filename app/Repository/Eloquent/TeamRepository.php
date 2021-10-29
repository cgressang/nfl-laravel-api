<?php declare(strict_types=1);

namespace App\Repository\Eloquent;

use App\Models\Team;
use App\Contracts\Eloquent\TeamRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * ConferenceRepository
 */
class TeamRepository extends BaseRepository implements TeamRepositoryInterface
{
    /**
     * Constructor
     * @param Team $model
     */
    public function __construct(Team $model)
    {
        parent::__construct($model);
    }

    public function find(int $id): ?Model
    {
        return $this->model->with(
            'stadium',
            'division',
            'owners',
            'staff',
            'coaches',
            'conference')
        ->find($id);
    }
}