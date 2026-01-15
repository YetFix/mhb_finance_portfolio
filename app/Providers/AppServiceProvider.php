<?php

namespace App\Providers;
use App\Models\Slider;
use App\Models\Office;
use App\Models\Team;
use App\Models\News;
use App\Observers\SliderObserver;
use App\Observers\OfficeServer;
use App\Observers\TeamObserver;
use App\Observers\NewsObserver;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Slider::observe(SliderObserver::class);
        Office::observe(OfficeServer::class);
        Team::observe(TeamObserver::class);
        News::observe(NewsObserver::class);
    }


}
