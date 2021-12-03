<?php declare(strict_types=1);

namespace App\Cache;

use App\Contracts\Cache\ConferenceCacheInterface;
use App\Contracts\Eloquent\ConferenceRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class ConferenceCache extends BaseCache implements ConferenceCacheInterface
{
    private ConferenceRepositoryInterface $conferenceRepository;

    private int $cacheTime;

    public function __construct(ConferenceRepositoryInterface $conferenceRepository, int $cacheTime = self::SECONDS_HOUR)
    {
        $this->conferenceRepository = $conferenceRepository;

        $this->cacheTime = $cacheTime;
    }

    public function all(): Collection
    {
        return Cache::remember('conferences', $this->cacheTime, function() {
            return $this->conferenceRepository->all();
        });
    }

    public function divisions(): Collection
    {
        return Cache::remember('divisions', $this->cacheTime, function() {
            return $this->conferenceRepository->divisions();
        });
    }

    public function teams(): Collection
    {
        return Cache::remember('teams', $this->cacheTime, function() {
            return $this->conferenceRepository->teams();
        });
    }
}