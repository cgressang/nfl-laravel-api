<?php declare(strict_types=1);

namespace App\Contracts\Cache;

use Illuminate\Support\Collection;

/**
 * Interface ConferenceCacheInterface
 */
interface ConferenceCacheInterface
{
	public function all(): Collection;

    public function teams(): Collection;

    public function divisions(): Collection;
}