<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Conference extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'conference';

   /**
     * Get all of the divisions for the conference.
     *
     * @return HasMany
     */
    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class);
    }

    /**
     * Get all of the divisions for the conference in ascending location order.
     *
     * @return Collection
     */
    public function sortedAscDivisions(): Collection
    {
        return $this->divisions()->orderBy('division.name', 'ASC')->get();
    }

   /**
     * Get all of the teams for the conference.
     *
     * @return HasManyThrough
     */
    public function teams(): HasManyThrough
    {
        return $this->hasManyThrough(Team::class, Division::class);
    }

    /**
     * Get all of the teams for the conference in ascending location order.
     *
     * @return Collection
     */
    public function sortedAscTeams(): Collection
    {
        return $this->teams()->orderBy('team.location', 'ASC')->get();
    }
}
