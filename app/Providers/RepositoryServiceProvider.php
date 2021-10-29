<?php

namespace App\Providers;

use App\Contracts\Eloquent\EloquentRepositoryInterface;
use App\Contracts\Eloquent\ConferenceRepositoryInterface;
use App\Contracts\Eloquent\TeamRepositoryInterface;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\ConferenceRepository;
use App\Repository\Eloquent\TeamRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        EloquentRepositoryInterface::class => BaseRepository::class,
    ];

    /**
     * All of the container singletons that should be registered.
     *
     * @var array
     */
    public $singletons = [
        ConferenceRepositoryInterface::class => ConferenceRepository::class,
        TeamRepositoryInterface::class => TeamRepository::class,
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
