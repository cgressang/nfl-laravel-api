<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'division';

    /**
     * Get the conference that owns the division.
     *
     * @return
     */
    public function conference(): Collection
    {
        return $this->belongsTo(Conference::class);
    }

    /**
     * Get the teams for the division.
     *
     * @return
     */
    public function teams(): Collection
    {
        return $this->hasMany(Team::class);
    }
}
