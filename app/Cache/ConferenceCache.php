<?php declare(strict_types=1);

namespace App\Cache;

use App\Contracts\Cache\ConferenceCacheInterface;
use App\Contracts\Eloquent\ConferenceRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class ConferenceCache implements ConferenceCacheInterface
{
    const SECOND = 1;
    const SECONDS_DAY = 86400;
    const SECONDS_HOUR = 3600;

    private ConferenceRepositoryInterface $conferenceRepository;

    private int $cacheTime;

    public function __construct(ConferenceRepositoryInterface $conferenceRepository)
    {
        $this->conferenceRepository = $conferenceRepository;

        if (App::environment('local')) {
            $this->cacheTime = TeamCache::SECOND;
        } else {
            $this->cacheTime = TeamCache::SECONDS_HOUR;
        }
    }

    public function all(?int $seconds = null): Collection
    {
        if (is_null($seconds)) {
            $seconds = $this->cacheTime;
        }

        return Cache::remember('conferences', ConferenceCache::SECONDS_HOUR, function() {
            return $this->conferenceRepository->all();
        });
    }

    public function divisions(?int $seconds = null): Collection
    {
        if (is_null($seconds)) {
            $seconds = $this->cacheTime;
        }

        return Cache::remember('divisions', ConferenceCache::SECONDS_HOUR, function() {
            return $this->conferenceRepository->divisions();
        });
    }

    public function teams(?int $seconds = null): Collection
    {
        if (is_null($seconds)) {
            $seconds = $this->cacheTime;
        }

        return Cache::remember('teams', ConferenceCache::SECONDS_HOUR, function() {
            return $this->conferenceRepository->teams();
        });
    }
}