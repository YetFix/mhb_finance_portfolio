<?php

namespace App\Filament\Resources\SubscribeResource\Pages;

use App\Filament\Resources\SubscribeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSubscribe extends CreateRecord
{
    protected static string $resource = SubscribeResource::class;
    protected function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');
    }
}
