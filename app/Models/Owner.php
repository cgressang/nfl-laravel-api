<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'owner';

    /**
     * Primary key of table.
     *
     * @var string
     */
    protected $primaryKey = 'owner_id';
}
