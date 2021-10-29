<?php

namespace App\Providers;

use App\Contracts\Cache\ConferenceCacheInterface;
use App\Contracts\Cache\TeamCacheInterface;
use App\Cache\ConferenceCache;
use App\Cache\TeamCache;
use Illuminate\Support\ServiceProvider;

class CacheServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
    ];

    /**
     * All of the container singletons that should be registered.
     *
     * @var array
     */
    public $singletons = [
        ConferenceCacheInterface::class => ConferenceCache::class,
        TeamCacheInterface::class => TeamCache::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
