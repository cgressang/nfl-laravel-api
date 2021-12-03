<?php declare(strict_types=1);

namespace App\Cache;

use App\Contracts\Cache\TeamCacheInterface;
use App\Contracts\Eloquent\TeamRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class TeamCache extends BaseCache implements TeamCacheInterface
{
    private TeamRepositoryInterface $teamRepository;

    private int $cacheTime;

    public function __construct(TeamRepositoryInterface $teamRepository, int $cacheTime = self::SECONDS_HOUR)
    {
        $this->teamRepository = $teamRepository;

        $this->cacheTime = $cacheTime;
    }

    public function find(int $id): ?Model
    {
		return Cache::remember('team-'.$id, $this->cacheTime, function() use ($id) {
            return $this->teamRepository->find($id);
        });
    }
}