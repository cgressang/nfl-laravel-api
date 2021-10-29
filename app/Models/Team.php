<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Team extends Model
{
    use HasFactory;

    const HEAD_COACH = 'Head Coach';
    const GENERAL_MANAGER = 'General Manager';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'team';

    /**
     * Get the stadium that owns the team.
     *
     * @return
     */
    public function stadium(): BelongsTo
    {
        return $this->belongsTo(Stadium::class);
    }

    /**
     * Get the division that owns the team.
     *
     * @return
     */
    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

    /**
     * Get the division that owns the team.
     *
     * @return
     */
    public function conference(): BelongsTo
    {
        return $this->belongsTo(Conference::class);
    }

    /**
     * Get the owners for the team.
     *
     * @return
     */
    public function owners(): HasMany
    {
        return $this->hasMany(Owner::class);
    }

    /**
     * Get the staff for the team.
     *
     * @return
     */
    public function staff(): HasMany
    {
        return $this->hasMany(Staff::class)
            ->where('staff.position', '=', Team::GENERAL_MANAGER);
    }

    /**
     * Get the coaches for the team.
     *
     * @return
     */
    public function coaches(): HasMany
    {
        return $this->hasMany(Coach::class)
            ->where('coach.position', '=', Team::HEAD_COACH);
    }
}
