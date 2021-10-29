<?php declare(strict_types=1);

namespace App\Repository\Eloquent;

use App\Models\Conference;
use App\Contracts\Eloquent\ConferenceRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * ConferenceRepository
 */
class ConferenceRepository extends BaseRepository implements ConferenceRepositoryInterface
{
    /**
     * Constructor
     * @param Conference $model
     */
    public function __construct(Conference $model)
    {
        parent::__construct($model);
    }

    /**
     * Fetch all conferences
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * Fetch all teams in coferences
     *
     * @return Collection
     */
    public function teams(): Collection
    {
        $conferences = $this->model->all();

        foreach ($conferences as $conference) {
            $conference->team_list = $conference->sortedAscTeams();
        }

        return $conferences;
    }

    /**
     * Fetch all divisions in coferences
     *
     * @return Collection
     */
    public function divisions(): Collection
    {
        $conferences = $this->model->all();

        foreach ($conferences as $conference) {
            $conference->division_list = $conference->sortedAscDivisions();
        }

        return $conferences;
    }
}