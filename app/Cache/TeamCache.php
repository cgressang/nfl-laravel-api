<?php declare(strict_types=1);

namespace App\Cache;

use App\Contracts\Cache\TeamCacheInterface;
use App\Contracts\Eloquent\TeamRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class TeamCache implements TeamCacheInterface
{
    const SECOND = 1;
    const SECONDS_DAY = 86400;
    const SECONDS_HOUR = 3600;

    private TeamRepositoryInterface $teamRepository;

    private int $cacheTime;

    public function __construct(TeamRepositoryInterface $teamRepository)
    {
        $this->teamRepository = $teamRepository;

        if (App::environment('local')) {
            $this->cacheTime = TeamCache::SECOND;
        } else {
            $this->cacheTime = TeamCache::SECONDS_HOUR;
        }
    }

    public function find(int $id, ?int $seconds = null): ?Model
    {
        if (is_null($seconds)) {
            $seconds = $this->cacheTime;
        }

		return Cache::remember('team-'.$id, $seconds, function() use ($id) {
            return $this->teamRepository->find($id);
        });
    }
}