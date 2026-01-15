<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Package;
use App\Models\Message;
use App\Models\Slider;
use App\Models\User;

class statsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Packages',Package::count()),
            Stat::make('Total Messages',Message::count()),
            Stat::make('Total Slider',Slider::count()),
            Stat::make('Total Admins',User::count())
        ];
    }
}
