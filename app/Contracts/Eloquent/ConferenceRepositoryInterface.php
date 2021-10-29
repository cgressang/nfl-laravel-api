<?php declare(strict_types=1);

namespace App\Contracts\Eloquent;

use App\Models\Conference;
use Illuminate\Support\Collection;

/**
 * Interface ConferenceRepositoryInterface
 */
interface ConferenceRepositoryInterface
{
	public function all(): Collection;

    public function teams(): Collection;

    public function divisions(): Collection;
}