<?php declare(strict_types=1);

namespace App\Contracts\Cache;

use Illuminate\Database\Eloquent\Model;

/**
 * Interface TeamCacheInterface
 */
interface TeamCacheInterface
{
	public function find(int $id): ?Model;
}