<?php

namespace App\Filament\Resources\FTPResource\Pages;

use App\Filament\Resources\FTPResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFTP extends CreateRecord
{
    protected static string $resource = FTPResource::class;

    protected function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');
    }
}
